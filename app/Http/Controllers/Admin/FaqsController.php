<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faqs;

class FaqsController extends Controller
{
    //
    public function create(){

        return view('admin.faq.faq-form');
       }
           // insert
    public function store(Request $request){
        $FaqModel = new Faqs;


        $request->validate([
            'faq_cat'=>'required',
            'question'=>'required',
            'answer'=>'required',


        ]);

        $FaqModel->faq_cat = $request->faq_cat;
        $FaqModel->question = $request->question;
        $FaqModel->answer = $request->answer;

       
        $FaqModel->save();
        return redirect()->route('admin.data/faqs')->with('success','New Faq Add..');

    }
      // table data
      public function show(){
        $faq_data = Faqs::get()->sortDesc();
        return view('admin.faq.faq-table',compact('faq_data'));
    }
    // edit data
    public function edit($id){
        $faq_data = Faqs::where('id',$id)->first();

        return view('admin.faq.faq-edit',compact('faq_data'));
    }
     // update
     public function update(Request $request, $id)
     {
         $update = Faqs::find($id);


         $request->validate([
            'faq_cat'=>'required',
            'question'=>'required',
            'answer'=>'required',


         ]);
         $update->faq_cat = $request->faq_cat;
         $update->question = $request->question;
         $update->answer = $request->answer;

         $update->save();

         return redirect()->route('admin.data/faqs')->with('success','Updated Successfully...');


     }

     // delete
     public function delete($id){
         $delete = Faqs::find($id);

         $delete->delete();

         return redirect()->route('admin.data/faqs')->with('success','Deleted Successfully..');

     }
}
