<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    //
    public function create(){

        return view('admin.slider.slider-form');
       }
           // insert
    public function store(Request $request){
        $sliderModel = new Slider;

        $request->validate([
            'title'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg|max:2048',

        ]);
        $sliderModel->title = $request->title;
		$sliderModel->slider_type = $request->slider_type;
        $sliderModel->image = $request->file('image')->store('public/image/admin/slider');

        $sliderModel->save();
        return redirect()->route('admin.data/slider')->with('success','New Home Slider Add..');

    }

     // table data
     public function show(){
        $sliderdata = Slider::get()->sortDesc();
        return view('admin.slider.slider-table',compact('sliderdata'));
    }
    // edit data
    public function edit($id){
        $sliderdata = Slider::where('id',$id)->first();

        return view('admin.slider.slider-edit',compact('sliderdata'));
    }
     // update
     public function update(Request $request, $id)
     {
         $update = Slider::find($id);
         $image_get = $update->image;

         $request->validate([
             'title'=>'required',
             'image'=>'mimes:png,jpg,jpeg|max:2048',

         ]);
         $update->title = $request->title;
			$sliderModel->slider_type = $request->slider_type;

         if($request->hasFile('image')){
             unlink('storage/app/'.$image_get);
             $update->image = $request->file('image')->store('public/image/admin/slider');
         }else{
             $update->image = $image_get;
         }
         $update->save();

         return redirect()->route('admin.data/slider')->with('success','Updated Successfully...');


     }

     // delete
     public function delete($id){
         $delete = Slider::find($id);
         $image_unlink = $delete->image;

         if($delete->image){
             // dd("if");
             @unlink('storage/app/'.$image_unlink);

         }
         $delete->delete();

         return redirect()->route('admin.data/slider')->with('success','Deleted Successfully..');

     }


}
