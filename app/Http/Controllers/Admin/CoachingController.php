<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coaching;
use Illuminate\Validation\Rule;
class CoachingController extends Controller
{
    //coachings
    public function create(){
        // dd("hello");
     return view('admin.coachings.coachings-form');
    }
    // insert
    public function store(Request $request){
        $coachings = new Coaching;

        $request->validate([
            'title'=>'required|unique:coachings',
            'image'=>'required|mimes:png,jpg,jpeg|max:2048',
            'logo'=>'required|mimes:png,jpg,jpeg|max:2048',
            'short_desc'=> 'required',
            'exam_detail'=>'required',


        ]);
        $coachings->title = $request->title;
		     $coachings->slug = str()->slug($request->title);
        $coachings->image = $request->file('image')->store('public/image/admin/coachings');
        $coachings->logo = $request->file('logo')->store('public/image/admin/coachings');
        $coachings->short_desc = $request->short_desc;
        $coachings->exam_detail = $request->exam_detail;


        $coachings->save();
        return redirect()->route('admin.data.coachings')->with('success','Added Successfully...');



    }
    // table data
    public function show(){
        $coachings = Coaching::get();
        return view('admin.coachings.coachings-table',compact('coachings'));
    }
    // edit data
    public function edit($id){
        $coachings = Coaching::where('id',$id)->first();

        return view('admin.coachings.coachings-edit',compact('coachings'));
    }
    public function update(Request $request, $id)
    {

        $coachings = Coaching::find($id);
        $image_get = $coachings->image;
        $logo_get = $coachings->logo;

        $request->validate([
            'title'=>'required', Rule::unique('coachings')->ignore($coachings->id),
             'image'=>'mimes:png,jpg,jpeg|max:2048',
            'logo'=>'mimes:png,jpg,jpeg|max:2048',
            'short_desc'=> 'required',
            'exam_detail'=>'required',


        ]);

        $coachings->short_desc = $request->short_desc;
        $coachings->title = $request->title;
		  $coachings->slug = str()->slug($request->title);
        $coachings->exam_detail = $request->exam_detail;


        if($request->hasFile('image')){
            unlink('storage/app/'.$image_get);
            $coachings->image = $request->file('image')->store('public/image/admin/coachings');
        }else{
            $coachings->image = $image_get;
        }
        if($request->hasFile('logo')){
            unlink('storage/app/'.$logo_get);
            $coachings->logo = $request->file('logo')->store('public/image/admin/coachings');
        }else{
            $coachings->logo = $logo_get;
        }
        $coachings->save();

        return redirect()->route('admin.data.coachings')->with('success','Updated Successfully...');


    }

    // delete
    public function delete($id){
        $coachings = Coaching::find($id);
        $image_unlink = $coachings->image;

        if($coachings->image){
            // dd("if");
            @unlink('storage/app/'.$image_unlink);

        }
        $coachings->delete();

        return redirect()->route('admin.data.coachings')->with('success','Deleted Successfully...');

    }
}
