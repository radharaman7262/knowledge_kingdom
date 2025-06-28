<?php
use Illuminate\Support\Facades\DB;
use App\Models\BussinessSetting;
use App\Models\Admin;
use App\Models\CMSSetting;
use App\Models\FaqCategories;
use App\Models\Faqs;
use App\Models\SeoModal;
use App\Mail\ContactMail;


function faq_helper(){
    return FaqCategories::join('faqs',function($join) {
        $join->on('faq_categories.id', '=', 'faqs.faq_cat');
      })->where('faqs.status',1)->get();
    }

function getDataFun($table,$take=''){
   
   return  DB::table($table)->where('status',1)->take($take)->get();

}

function getDataFunHome($table,$take=''){
   return  DB::table($table)->where(['status'=>1,'home_status'=>1])->take($take)->get();

}
function orderDataFun($table,$take=''){
   return  DB::table($table)->where('status',1)->take($take)->orderBy('id','desc')->get();

}

function pagination_data($table,$value){
    return DB::table($table)->where('status',1)->paginate($value);
    }

function bussiness_setting_data($key){

    return BussinessSetting::where('id',1)->select($key)->first()[$key];
    }
function cms_setting_data($key){

    return CMSSetting::where('id',1)->select($key)->first()[$key];
    }
function admin_data($key){

    return Admin::where('id',1)->select($key)->first()[$key];
    }
 function status_count_function($tableName){
        return DB::table($tableName)->where('status',1)->count();
    }
    function count_function($tableName){
        return DB::table($tableName)->count();
    }
    function seo_data($key,$id){

        return SeoModal::where('id',$id)->select($key)->first()[$key];
        }

        // send email dynamically
if(!function_exists('sendMail')){
    function sendMail($email, $page, $data=""){
        $mailData = [
            'page' => $page,
            'data' => $data
        ];
        Mail::to($email)->send(new ContactMail($mailData));
    }
}




?>
