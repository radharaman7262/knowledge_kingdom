<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CMSSetting;
class CmsController extends Controller
{
    //
    public function index()
    {
        //
        $cms_setting = CMSSetting::find(1);
        return view('admin.cms-setting', ['cms_setting' => $cms_setting]);
    }
    public function cmsUpdate(Request $request)
    {
        $cms_setting = CMSSetting::find(1);


        $cms_setting->about_intro = $request->about_intro;
        $cms_setting->where_we_offer = $request->where_we_offer;
        $cms_setting->what_we_offer = $request->what_we_offer;
        $cms_setting->history = $request->history;
        $cms_setting->who_we_are = $request->who_we_are;
        $cms_setting->overseas_consultant = $request->overseas_consultant;
        $cms_setting->team_content = $request->team_content;
        $cms_setting->our_advisors = $request->our_advisors;
        $cms_setting->education_advisors = $request->education_advisors;
        $cms_setting->why_us_arr = $request->why_us_arr;
        $cms_setting->contact_text = $request->contact_text;
        $cms_setting->feedback_text = $request->feedback_text;
        $cms_setting->press_release_text = $request->press_release_text;
        $cms_setting->new_hightlights_text = $request->new_hightlights_text;
        $cms_setting->video_gallery_text = $request->video_gallery_text;
        $cms_setting->upcoming_event_text = $request->upcoming_event_text;
        $cms_setting->scholarship_text = $request->scholarship_text;
        $cms_setting->results_text = $request->results_text;
        $cms_setting->iets_exam_text = $request->iets_exam_text;
        $cms_setting->home_title = $request->home_title;
        $cms_setting->home_subtitle = $request->home_subtitle;
        $cms_setting->about_home = $request->about_home;



        $cms_setting->save();
         return redirect()->back();
    }
}
