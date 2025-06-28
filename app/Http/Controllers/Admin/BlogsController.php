<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
use Illuminate\Validation\Rule;

class BlogsController extends Controller
{
    //
    public function create(){
        // dd("hello");
     return view('admin.blog.blog-form');
    }
    // insert
    public function store(Request $request){
        $blog = new Blogs;

        $request->validate([
            'title'=>'required|unique:blogs',
            'banner'=>'required|mimes:png,jpg,jpeg|max:2048',
            'description'=> 'required',
            'date'=>'required',

        ]);
        $blog->title = $request->title;
		 $blog->slug = str()->slug($request->title);
        $blog->banner = $request->file('banner')->store('public/image/admin/blog');
        $blog->description = $request->description;
        $blog->date = $request->date;

        $blog->save();
        return redirect()->route('admin.data.blog')->with('success','Added Successfully...');



    }
    // table data
    public function show(){
        $blog_data = Blogs::get();
        return view('admin.blog.blog-table',compact('blog_data'));
    }
    // edit data
    public function edit($id){
        $blog_data = Blogs::where('id',$id)->first();

        return view('admin.blog.blog-edit',compact('blog_data'));
    }
    public function update(Request $request, $id)
    {
        $blog = Blogs::find($id);
        $image_get = $blog->banner;

        $request->validate([
            'title'=>'required', Rule::unique('blogs')->ignore($blog->id),
            'banner'=>'mimes:png,jpg,jpeg|max:2048',
            'description'=> 'required',
            'date'=>'required',

        ]);
        $blog->description = $request->description;
        $blog->title = $request->title;
        $blog->date = $request->date;
		   $blog->slug = str()->slug($request->title);

        if($request->hasFile('banner')){
            unlink('storage/app/'.$image_get);
            $blog->banner = $request->file('banner')->store('public/image/admin/blog');
        }else{
            $blog->banner = $image_get;
        }
        $blog->save();

        return redirect()->route('admin.data.blog')->with('success','Updated Successfully...');


    }

    // delete
    public function delete($id){
        $blog = Blogs::find($id);
        $image_unlink = $blog->banner;

        if($blog->banner){
            // dd("if");
            @unlink('storage/app/'.$image_unlink);

        }
        $blog->delete();

        return redirect()->route('admin.data.blog')->with('success','Deleted Successfully...');

    }
}
