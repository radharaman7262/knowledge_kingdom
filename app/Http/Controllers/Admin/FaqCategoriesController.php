<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FaqCategories;

class FaqCategoriesController extends Controller
{
    //

    public function create(){

        return view('admin.faq_categories.faq_categories-form');
       }
           // insert
    public function store(Request $request){
        $FaqModel = new FaqCategories;

        $request->validate([
            'title'=>'required',


        ]);
        $FaqModel->title = $request->title;


        $FaqModel->save();
        return redirect()->route('admin.data/faq-category')->with('success','New Faq Category Add..');

    }
      // table data
      public function show(){
        $faqCat_data = FaqCategories::get()->sortDesc();
        return view('admin.faq_categories.faq_categories-table',compact('faqCat_data'));
    }
    // edit data
    public function edit($id){
        $faqCat_data = FaqCategories::where('id',$id)->first();

        return view('admin.faq_categories.faq_categories-edit',compact('faqCat_data'));
    }
     // update
     public function update(Request $request, $id)
     {
         $update = FaqCategories::find($id);


         $request->validate([
             'title'=>'required',


         ]);
         $update->title = $request->title;

         $update->save();

         return redirect()->route('admin.data/faq-category')->with('success','Updated Successfully...');


     }

     // delete
     public function delete($id){
         $delete = FaqCategories::find($id);

         $delete->delete();

         return redirect()->route('admin.data/faq-category')->with('success','Deleted Successfully..');

     }

}
