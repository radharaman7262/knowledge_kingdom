<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeoModal;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    //
    public function create(){

        return view('admin.seo.seo-form');
       }
               // insert
    public function store(Request $request){
        $seoModel = new SeoModal;

        $request->validate([
            'page_name'=>'required',
            'meta_title'=>'required',
            'meta_descripation'=>'required',
            'meta_keyword'=>'required',



        ]);
        $seoModel->page_name = $request->page_name;
        $seoModel->meta_title = $request->meta_title;
        $seoModel->meta_descripation = $request->meta_descripation;
        $seoModel->meta_keyword = $request->meta_keyword;


        $seoModel->save();
        return redirect()->route('admin.data/seo')->with('success','New Seo Add..');

    }
       // table data
       public function show(){
        $seo_data = SeoModal::get()->sortDesc();
        return view('admin.seo.seo-table',compact('seo_data'));
    }
    // edit data
    public function edit($id){
        $seo_data = SeoModal::where('id',$id)->first();

        return view('admin.seo.seo-edit',compact('seo_data'));
    }
         // update
         public function update(Request $request, $id)
         {
             $update = SeoModal::find($id);


             $request->validate([
                'page_name'=>'required',
                'meta_title'=>'required',
                'meta_descripation'=>'required',
                'meta_keyword'=>'required',


             ]);
             $update->page_name = $request->page_name;
             $update->meta_title = $request->meta_title;
             $update->meta_descripation = $request->meta_descripation;
             $update->meta_keyword = $request->meta_keyword;

             $update->save();

             return redirect()->route('admin.data/seo')->with('success','Updated Successfully...');


         }
}
