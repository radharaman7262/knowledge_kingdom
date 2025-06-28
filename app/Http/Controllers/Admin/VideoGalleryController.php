<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\video_gallery;

class VideoGalleryController extends Controller
{
    //
    public function create(){

        return view('admin.video_gallery.video_gallery-form');
       }
           // insert
    public function store(Request $request){
        $VideoModel = new video_gallery;

        $request->validate([
            'title'=>'required',

            'link'=>'required',


        ]);
        $VideoModel->title = $request->title;

        $VideoModel->link = $request->link;


        $VideoModel->save();
        return redirect()->route('admin.data/video')->with('success','New Video Add..');

    }
      // table data
      public function show(){
        $video_data = video_gallery::get()->sortDesc();
        return view('admin.video_gallery.video_gallery-table',compact('video_data'));
    }
    // edit data
    public function edit($id){
        $video_data = video_gallery::where('id',$id)->first();

        return view('admin.video_gallery.video_gallery-edit',compact('video_data'));
    }
     // update
     public function update(Request $request, $id)
     {
         $update = video_gallery::find($id);


         $request->validate([
             'title'=>'required',

             'link'=>'required',


         ]);
         $update->title = $request->title;

         $update->link = $request->link;

         $update->save();

         return redirect()->route('admin.data/video')->with('success','Updated Successfully...');


     }

     // delete
     public function delete($id){
         $delete = video_gallery::find($id);

         $delete->delete();

         return redirect()->route('admin.data/video')->with('success','Deleted Successfully..');

     }
}
