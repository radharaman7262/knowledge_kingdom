<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Countries;
use App\Models\Coaching;
use App\Models\Contact;
use App\Models\FreeTest;

class IndexUiController extends Controller
{
    //
    public function blog_detail($slug){
        $blog_data = Blogs::where('slug',$slug)->first();


        return view('ui.single-blog',["blog_data"=>$blog_data]);
    }
    public function country_detail($slug){
        $country_data = Countries::where('slug',$slug)->first();


        return view('ui.country-detail',["country_data"=>$country_data]);
    }
    public function coaching_detail($slug){
        $coaching_data = Coaching::where('slug',$slug)->first();


        return view('ui.coaching-detail',["coaching_data"=>$coaching_data]);
    }

     public function ajax_contact(Request $request){




$data =[
   'name' => $request->name,
   'email' => $request->email,
   'phone' => $request->phone,
   'subject' =>$request->subject,
   'message' => $request->message,
];

        // $mailSent = sendMail($request->email,'contact', $data);

     $pass =   Contact::create($data);
         $mailSent = sendMail($request->email,'contact', $data);

         echo $pass;
    }
	   public function onloadForm(Request $request){
        $free_test = new FreeTest;

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',

        ]);
          $data =[
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,

         ];

$free_test->save();
$mailSent = sendMail($request->email,'contact', $data);
        return redirect()->back();
    }
}
