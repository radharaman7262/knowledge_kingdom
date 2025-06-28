@extends('admin.layout.adminheaderfooter')
@section('page_title', 'CMS Setting')

@section('cms_active', 'active open')
@section('content')


    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl-12 col-md-12 mx-auto">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-center align-items-center">
                            <h5 class=" mb-0">CMS Setting</h5>
                            <!-- <small class="text-muted float-end">Default label</small> -->
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.update-cms-setting') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="about_intro">About Intro</label>
                                        <textarea id="about_intro" name="about_intro" class="form-control"
                                        placeholder="">{{ $cms_setting->about_intro}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="where_we_offer">Where We Offer</label>
                                        <textarea id="where_we_offer" name="where_we_offer" class="form-control"
                                        placeholder="">{{ $cms_setting->where_we_offer}}</textarea>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="what_we_offer"> What We Offer</label>
                                        <textarea id="what_we_offer" name="what_we_offer" class="form-control"
                                        placeholder="">{{ $cms_setting->what_we_offer}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="history">history</label>
                                        <textarea id="history" name="history" class="form-control"
                                        placeholder="">{{ $cms_setting->history}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="who_we_are">Who We Are</label>
                                        <textarea id="who_we_are" name="who_we_are" class="form-control"
                                        placeholder="">{{ $cms_setting->who_we_are}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="overseas_consultant">Overseas Consultant</label>
                                        <textarea id="overseas_consultant" name="overseas_consultant" class="form-control"
                                        placeholder="">{{ $cms_setting->overseas_consultant}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="team_content">Team Content</label>
                                        <textarea id="team_content" name="team_content" class="form-control"
                                        placeholder="">{{ $cms_setting->team_content}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="our_advisors">Our Advisors</label>
                                        <textarea id="our_advisors" name="our_advisors" class="form-control"
                                        placeholder="">{{ $cms_setting->our_advisors}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="education_advisors">Education Advisors</label>
                                        <textarea id="education_advisors" name="education_advisors" class="form-control"
                                        placeholder="">{{ $cms_setting->education_advisors}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="why_us_arr">Why us arr</label>
                                        <textarea id="why_us_arr" name="why_us_arr" class="form-control"
                                        placeholder="">{{ $cms_setting->why_us_arr}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="contact_text">Contact text</label>
                                        <textarea id="contact_text" name="contact_text" class="form-control"
                                        placeholder="">{{ $cms_setting->contact_text}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="feedback_text">feedback_text</label>
                                        <textarea id="feedback_text" name="feedback_text" class="form-control"
                                        placeholder="">{{ $cms_setting->feedback_text}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for=press_release_text""> Press release text</label>
                                        <textarea id="press_release_text" name=" press_release_text" class="form-control"
                                        placeholder="">{{ $cms_setting->press_release_text}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="new_hightlights_text">New hightlights text</label>
                                        <textarea id="new_hightlights_text" name="new_hightlights_text" class="form-control"
                                        placeholder="">{{ $cms_setting->new_hightlights_text}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="video_gallery_text">Video gallery text</label>
                                        <textarea id="video_gallery_text" name="video_gallery_text" class="form-control"
                                        placeholder="">{{ $cms_setting->video_gallery_text}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="upcoming_event_text">Upcoming event text</label>
                                        <textarea id="upcoming_event_text" name=" upcoming_event_text" class="form-control"
                                        placeholder="">{{ $cms_setting->upcoming_event_text}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="scholarship_text">Scholarship text</label>
                                        <textarea id="scholarship_text" name="scholarship_text" class="form-control"
                                        placeholder="">{{ $cms_setting->scholarship_text}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="results_text">Results text</label>
                                        <textarea id="results_text" name="results_text" class="form-control"
                                        placeholder="">{{ $cms_setting->results_text}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="iets_exam_text">Iets exam text</label>
                                        <textarea id="iets_exam_text" name="iets_exam_text" class="form-control"
                                        placeholder="">{{ $cms_setting->iets_exam_text}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="home_title">Home Title</label>
                                        <textarea id="home_title" name="home_title" class="form-control"
                                        placeholder="">{{ $cms_setting->home_title}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="home_subtitle">Home subTitle</label>
                                        <textarea id="home_subtitle" name="home_subtitle" class="form-control"
                                        placeholder="">{{ $cms_setting->home_subtitle}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="">About Home </label>
                                        <textarea id="about_home" name="about_home" class="form-control"
                                        placeholder="">{{ $cms_setting->about_home}}</textarea>
                                    </div>
                                </div>


                                <div class="d-flex justify-content-center align-items-center">

                                    <input type="submit" name="submit" class="btn btn-primary " value="Save">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- #################### -->


            </div>
        </div>
        <!-- / Content -->
    @endsection
