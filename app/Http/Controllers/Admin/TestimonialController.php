<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    //
    public function create(){
        // dd("hello");
     return view('admin.testimonial.testimonial-form');
    }
    // insert
    public function store(Request $request){
        $testimonial = new Testimonial;

        $request->validate([
            'name'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg|max:2048',
            'description'=> 'required',
            'address'=>'required',

        ]);
        $testimonial->name = $request->name;
        $testimonial->image = $request->file('image')->store('public/image/admin/testimonial');
        $testimonial->description = $request->description;
        $testimonial->address = $request->address;

        $testimonial->save();
        return redirect()->route('admin.data.testimonial')->with('success','Added Successfully...');



    }
    // table data
    public function show(){
        $testimonial = Testimonial::get();
        return view('admin.testimonial.testimonial-table',compact('testimonial'));
    }
    // edit data
    public function edit($id){
        $testimonial = Testimonial::where('id',$id)->first();

        return view('admin.testimonial.testimonial-edit',compact('testimonial'));
    }
    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);
        $image_get = $testimonial->image;

        $request->validate([
            'name'=>'required',
            'image'=>'mimes:png,jpg,jpeg|max:2048',
            'description'=> 'required',
            'address'=>'required',

        ]);
        $testimonial->description = $request->description;
        $testimonial->name = $request->name;
        $testimonial->address = $request->address;

        if($request->hasFile('image')){
            unlink('storage/app/'.$image_get);
            $testimonial->image = $request->file('image')->store('public/image/admin/testimonial');
        }else{
            $testimonial->image = $image_get;
        }
        $testimonial->save();

        return redirect()->route('admin.data.testimonial')->with('success','Updated Successfully...');


    }

    // delete
    public function delete($id){
        $testimonial = Testimonial::find($id);
        $image_unlink = $testimonial->image;

        if($testimonial->image){
            // dd("if");
            @unlink('storage/app/'.$image_unlink);

        }
        $testimonial->delete();

        return redirect()->route('admin.data.testimonial')->with('success','Deleted Successfully...');

    }

}
