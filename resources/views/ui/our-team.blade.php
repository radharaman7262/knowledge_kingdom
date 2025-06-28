@extends('ui.layout.headerfooter')
@php
    $page_name = seo_data("page_name","3");
    $meta_title = seo_data("meta_title","2");
    $meta_descripation = seo_data("meta_descripation","3");
    $meta_keyword = seo_data("meta_keyword","3");
@endphp
@section('page_title',$page_name)
@section('meta_title',$meta_title)
@section('meta_descripation',$meta_descripation)
@section('meta_keyword',$meta_keyword)

@section('content')
    <!-- BEGIN: Hero Banner Start -->
    <section class="pageBanner" style="background-image: url({{ asset('public/ui/assets/images/bg/banner.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="bannerTitle">Our Team</h2>
                    <div class="breadcrumbs"><a href="{{ url('/') }}">Home</a><span>/</span>About us<span>/</span>Our Team</div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Hero Banner End -->



    <!-- BEGIN: Service Details Start -->
    <section class="singleServiceSection">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="serviceDConArea">

                        <div class="serviceDcon">
                            <h5 class="subTitle">Management team</h5>
                            <h3 class="fw-bold">THE BEST PEOPLE FORMULA TO HELP YOU SUCCEED.</h3>
                            <p style="text-align: justify;">
                                {!! cms_setting_data('team_content') !!}
                            </p>

                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="p-5" style="background: #f7f7f7;">

                            <div class="col-lg-12 col-sm-12"><img
                                    src="{{ asset('public/ui/assets/images/my-img/glob.png') }}" alt="{{bussiness_setting_data('site_name')}}"></div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="sDcon">
                                    <h5 class="my-3 subTitle">Our advisors</h5>

                                    <p style="text-align: justify;"> {!! cms_setting_data('our_advisors') !!}</p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <!-- END: Service Details End -->
    <!--  Start -->
    <section class="" style=" background: #ffb606;">
        <div class="containe-fluid">
            <div class="row w-100">
                <div class="col-lg-6">


                    <img src="{{ asset('public/ui/assets/images/my-img/lap.jpg') }}" alt="{{bussiness_setting_data('site_name')}}" width="100%">


                </div>
                <div class="col-lg-6">
                    <div class="row">
                       


                            <div class="col-lg-12 col-sm-12 ">
                                <div class="sDcon pe-2">
                                    <h5 class="my-3 text-light">Overseas educational advisors</h5>

                                    <p class="text-light" style="text-align: justify;"> {!! cms_setting_data('education_advisors') !!}</p>

                                </div>
                            </div>
                      
                    </div>

                </div>


            </div>
        </div>
    </section>
    <!--  End -->

@endsection
