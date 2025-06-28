<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Finance_banks;

class FinancebanksController extends Controller
{
    //
    public function create(){

        return view('admin.finance_banks.finance_banks-form');
       }
           // insert
    public function store(Request $request){
        $FinanceModel = new Finance_banks;

        $request->validate([
            'title'=>'required',
            'logo'=>'required|mimes:png,jpg,jpeg|max:2048',

        ]);
        $FinanceModel->title = $request->title;
        $FinanceModel->logo = $request->file('logo')->store('public/image/admin/finance-bank');

        $FinanceModel->save();
        return redirect()->route('admin.data/finance_banks')->with('success','New Finance Bank Add..');

    }
      // table data
      public function show(){
        $finance_data = Finance_banks::get()->sortDesc();
        return view('admin.finance_banks.finance_banks-table',compact('finance_data'));
    }
    // edit data
    public function edit($id){
        $finance_data = Finance_banks::where('id',$id)->first();

        return view('admin.finance_banks.finance_banks-edit',compact('finance_data'));
    }
     // update
     public function update(Request $request, $id)
     {
         $update = Finance_banks::find($id);
         $image_get = $update->logo;

         $request->validate([
             'title'=>'required',
             'logo'=>'mimes:png,jpg,jpeg|max:2048',

         ]);
         $update->title = $request->title;


         if($request->hasFile('logo')){
             unlink('storage/app/'.$image_get);
             $update->logo = $request->file('logo')->store('public/image/admin/finance-bank');
         }else{
             $update->logo = $image_get;
         }
         $update->save();

         return redirect()->route('admin.data/finance_banks')->with('success','Updated Successfully...');


     }

     // delete
     public function delete($id){
         $delete = Finance_banks::find($id);
         $image_unlink = $delete->logo;

         if($delete->logo){
             // dd("if");
             @unlink('storage/app/'.$image_unlink);

         }
         $delete->delete();

         return redirect()->route('admin.data/finance_banks')->with('success','Deleted Successfully..');

     }
}
