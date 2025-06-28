<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsUpdate;

class NewsController extends Controller
{
    //
    public function create(){

        return view('admin.news-update.news-update-form');
       }
           // insert
    public function store(Request $request){
        $NewsModel = new NewsUpdate;

        $request->validate([
            'title'=>'required',
            'date'=>'required',
            'link'=>'required',


        ]);
        $NewsModel->title = $request->title;
        $NewsModel->date = $request->date;
        $NewsModel->link = $request->link;


        $NewsModel->save();
        return redirect()->route('admin.data/news-update')->with('success','New News Update Add..');

    }
      // table data
      public function show(){
        $news_data = NewsUpdate::get()->sortDesc();
        return view('admin.news-update.news-update-table',compact('news_data'));
    }
    // edit data
    public function edit($id){
        $news_data = NewsUpdate::where('id',$id)->first();

        return view('admin.news-update.news-update-edit',compact('news_data'));
    }
     // update
     public function update(Request $request, $id)
     {
         $update = NewsUpdate::find($id);


         $request->validate([
             'title'=>'required',
             'date'=>'required',
             'link'=>'required',


         ]);
         $update->title = $request->title;
         $update->date = $request->date;
         $update->link = $request->link;

         $update->save();

         return redirect()->route('admin.data/news-update')->with('success','Updated Successfully...');


     }

     // delete
     public function delete($id){
         $delete = NewsUpdate::find($id);

         $delete->delete();

         return redirect()->route('admin.data/news-update')->with('success','Deleted Successfully..');

     }
}
