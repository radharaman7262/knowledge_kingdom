<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Countries;
use Illuminate\Validation\Rule;

class CountriesController extends Controller
{
    //
    public function create(){
        // dd("hello");
     return view('admin.countries.countries-form');
    }
    // insert
    public function store(Request $request){
        $countries = new Countries;

        $request->validate([
            'title'=>'required|unique:countries',
            'image'=>'required|mimes:png,jpg,jpeg|max:2048',
            'logo'=>'required|mimes:png,jpg,jpeg|max:2048',
            'description'=> 'required',
            'universities'=>'required',
            'hightlights'=>'required',
			  'meta_title'=>'required',
                'meta_descripation'=>'required',
                'meta_keyword'=>'required',

        ]);
        $countries->title = $request->title;
		 $countries->slug = str()->slug($request->title);
        $countries->image = $request->file('image')->store('public/image/admin/countries');
        $countries->logo = $request->file('logo')->store('public/image/admin/countries');
        $countries->description = $request->description;
        $countries->universities = $request->universities;
        $countries->hightlights = $request->hightlights;
		   $countries->meta_title = $request->meta_title;
		   $countries->meta_descripation = $request->meta_descripation;
		   $countries->meta_keyword = $request->meta_keyword;

        $countries->save();
        return redirect()->route('admin.data.countries')->with('success','Added Successfully...');



    }
    // table data
    public function show(){
        $countries = Countries::get();
        return view('admin.countries.countries-table',compact('countries'));
    }
    // edit data
    public function edit($id){
        $countries = Countries::where('id',$id)->first();

        return view('admin.countries.countries-edit',compact('countries'));
    }
    public function update(Request $request, $id)
    {
        $countries = Countries::find($id);
        $image_get = $countries->image;
        $logo_get = $countries->logo;

        $request->validate([
            'title'=>'required', Rule::unique('countries')->ignore($countries->id),
            'image'=>'mimes:png,jpg,jpeg|max:2048',
             'logo'=>'mimes:png,jpg,jpeg|max:2048',
            'description'=> 'required',
            'universities'=>'required',
            'hightlights'=>'required',
			  'meta_title'=>'required',
                'meta_descripation'=>'required',
                'meta_keyword'=>'required',

        ]);
        $countries->description = $request->description;
        $countries->title = $request->title;
		$countries->slug = str()->slug($request->title);
        $countries->universities = $request->universities;
        $countries->hightlights = $request->hightlights;
		  $countries->meta_title = $request->meta_title;
		  $countries->meta_descripation = $request->meta_descripation;
		  $countries->meta_keyword = $request->meta_keyword;

        if($request->hasFile('image')){
            unlink('storage/app/'.$image_get);
            $countries->image = $request->file('image')->store('public/image/admin/countries');
        }else{
            $countries->image = $image_get;
        }
        if($request->hasFile('logo')){
            unlink('storage/app/'.$logo_get);
            $countries->logo = $request->file('logo')->store('public/image/admin/countries');
        }else{
            $countries->logo = $logo_get;
        }
        $countries->save();

        return redirect()->route('admin.data.countries')->with('success','Updated Successfully...');


    }

    // delete
    public function delete($id){
        $countries = Countries::find($id);
        $image_unlink = $countries->image;

        if($countries->image){
            // dd("if");
            @unlink('storage/app/'.$image_unlink);

        }
        $countries->delete();

        return redirect()->route('admin.data.countries')->with('success','Deleted Successfully...');

    }
}
