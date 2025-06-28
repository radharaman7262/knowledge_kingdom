<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achievers;

class AchieversController extends Controller
{
    //
    public function create(){
        // dd("hello");
     return view('admin.achievers.achievers-form');
    }
    // insert
    public function store(Request $request){
        $achievers = new Achievers;

        $request->validate([
            'name'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg|max:2048',

            'address'=>'required',

        ]);
        $achievers->name = $request->name;
        $achievers->image = $request->file('image')->store('public/image/admin/achievers');

        $achievers->address = $request->address;

        $achievers->save();
        return redirect()->route('admin.data.achievers')->with('success','Added Successfully...');



    }
    // table data
    public function show(){
        $achievers = Achievers::get();
        return view('admin.achievers.achievers-table',compact('achievers'));
    }
    // edit data
    public function edit($id){
        $achievers = Achievers::where('id',$id)->first();

        return view('admin.achievers.achievers-edit',compact('achievers'));
    }
    public function update(Request $request, $id)
    {
        $achievers = Achievers::find($id);
        $image_get = $achievers->image;

        $request->validate([
            'name'=>'required',
            'image'=>'mimes:png,jpg,jpeg|max:2048',

            'address'=>'required',

        ]);
      
        $achievers->name = $request->name;
        $achievers->address = $request->address;

        if($request->hasFile('image')){
            unlink('storage/app/'.$image_get);
            $achievers->image = $request->file('image')->store('public/image/admin/achievers');
        }else{
            $achievers->image = $image_get;
        }
        $achievers->save();

        return redirect()->route('admin.data.achievers')->with('success','Updated Successfully...');


    }

    // delete
    public function delete($id){
        $achievers = Achievers::find($id);
        $image_unlink = $achievers->image;

        if($achievers->image){
            // dd("if");
            @unlink('storage/app/'.$image_unlink);

        }
        $achievers->delete();

        return redirect()->route('admin.data.achievers')->with('success','Deleted Successfully...');

    }
}
