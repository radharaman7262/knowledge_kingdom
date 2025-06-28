<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use App\Models\BussinessSetting;
 use App\Models\Admin;
 use App\Models\FreeTest;
 use App\Models\Contact;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Hash;

class BussinessController extends Controller
{
    //
    public function index()
    {
        //
        $busssinss_setting = BussinessSetting::find(1);
        return view('admin.bussiness-setting', ['busssinss_setting' => $busssinss_setting]);
    }

    public function bussinessUpdate(Request $request)
    {
        $busssinss_setting = BussinessSetting::find(1);
        $favicon = $busssinss_setting->favicon;
        $logo = $busssinss_setting->logo;

        $busssinss_setting->site_name = $request->site_name;
        $busssinss_setting->email_1 = $request->email_1;
        $busssinss_setting->email_2 = $request->email_2;
        $busssinss_setting->phone_1 = $request->phone_1;
        $busssinss_setting->phone_2 = $request->phone_2;
        $busssinss_setting->address = $request->address;
        $busssinss_setting->map = $request->map;
		  $busssinss_setting->facebook = $request->facebook;
		  $busssinss_setting->linkedin = $request->linkedin;
		  $busssinss_setting->twitter = $request->twitter;
		  $busssinss_setting->instagram = $request->instagram;

        if ($request->hasFile('favicon')) {
            @unlink('/storage/app/'.$favicon);
            $busssinss_setting->favicon = $request->file('favicon')->store('public/image/admin/bussiness-setting');
        }
        if ($request->hasFile('logo')) {
            @unlink('/storage/app/'.$logo);
            $busssinss_setting->logo = $request->file('logo')->store('public/image/admin/bussiness-setting');
        }

        $busssinss_setting->save();
         return redirect()->back();
    }


      // Status Ajax

      public function ajax_status(Request $request){

        $id = $request->id;

        $status = $request->status;
        $table = $request->table;
        $column = $request->column;
        if($status==1){
            $newstatus = 0;
        }else{
            $newstatus = 1;
        }

       echo  DB::table($table)->where('id', $id)->update([$column=>$newstatus]);
    }
	
	public function adminSettingAll(){
        $setting = Admin::find(1);
        return view('admin.profile-setting', compact('setting'));
    }
    public function settingUpdate(Request $request){
        $setting = Admin::find(1);
        $admin_profile = $setting->admin_image;
        if ($request->hasFile('admin_image')) {
            @unlink('storage/app/'.$admin_profile);
            $setting->admin_image = $request->file('admin_image')->store('public/image/admin/admin-profile');
        }

        if(isset($request->submit2)){

            $setting->name = $request->name;
            $setting->email = $request->email;
        }

        if(isset($request->submit3)){
            $get_password = $setting->password;

           $request->validate([
            'old_password' => 'required',

           ]);

          #Match The Old Password
          if(!Hash::check($request->old_password, $setting->password)){

            return back()->with("error", "Old Password Doesn't match!");
        }else{
            // dd('else');
            $request->validate([

                'new_password' => 'required',
            'password_confirmation' => 'required_with:new_password|same:new_password',
               ]);
            // Admin::where('id',1)->update([
            //     'password' => Hash::make($request->new_password)
            // ]);
            $setting->password = Hash::make($request->new_password);
            return redirect()->back()->with('success','Password Updated Successfully...');

        }





        }
        $setting->save();
        return redirect()->back();

    }
	       // table data
       public function show(){
        $data = FreeTest::get()->sortDesc();
        return view('admin.contact.free-test',compact('data'));
    }
      // delete
 public function delete($id){
    $delete = FreeTest::find($id);

    $delete->delete();

    return redirect()->route('admin.data/test')->with('success','Deleted Successfully..');

}

 // contact table data
 public function contactshow(){
    $data = Contact::get()->sortDesc();
    return view('admin.contact.contact-table',compact('data'));
}

public function contactAjax(Request $request)
{


    $model = new Contact;
    $id = $request->cont_id;
    $status = $request->cont_status;


    // print_r($approve);
    if ($status == 0) {
        $newstatus = 1;
    }

  $model->where('id', $id)->update(['status'=> $newstatus]);
}
	
}
