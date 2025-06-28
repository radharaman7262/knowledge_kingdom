<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Featured;

class FeaturedController extends Controller
{
    //
    public function create(){

        return view('admin.featured.featured-form');
       }
           // insert
    public function store(Request $request){
        $FeaturedModel = new Featured;

        $request->validate([
            'title'=>'required',
            'icon'=>'required|mimes:png,jpg,jpeg|max:2048',

        ]);
        $FeaturedModel->title = $request->title;
        $FeaturedModel->icon = $request->file('icon')->store('public/image/admin/featured');

        $FeaturedModel->save();
        return redirect()->route('admin.data/featured')->with('success','New Featured Add..');

    }
      // table data
      public function show(){
        $featured_data = Featured::get()->sortDesc();
        return view('admin.featured.featured-table',compact('featured_data'));
    }
    // edit data
    public function edit($id){
        $featured_data = Featured::where('id',$id)->first();

        return view('admin.featured.featured-edit',compact('featured_data'));
    }
     // update
     public function update(Request $request, $id)
     {
         $update = Featured::find($id);
         $image_get = $update->icon;

         $request->validate([
             'title'=>'required',
             'icon'=>'mimes:png,jpg,jpeg|max:2048',

         ]);
         $update->title = $request->title;


         if($request->hasFile('icon')){
             unlink('storage/app/'.$image_get);
             $update->icon = $request->file('icon')->store('public/image/admin/featured');
         }else{
             $update->icon = $image_get;
         }
         $update->save();

         return redirect()->route('admin.data/featured')->with('success','Updated Successfully...');


     }

     // delete
     public function delete($id){
         $delete = Featured::find($id);
         $image_unlink = $delete->icon;

         if($delete->icon){
             // dd("if");
             @unlink('storage/app/'.$image_unlink);

         }
         $delete->delete();

         return redirect()->route('admin.data/featured')->with('success','Deleted Successfully..');

     }
}
