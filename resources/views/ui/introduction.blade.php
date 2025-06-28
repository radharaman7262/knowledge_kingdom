@extends('ui.layout.headerfooter')
@php
    $page_name = seo_data("page_name","2");
    $meta_title = seo_data("meta_title","2");
    $meta_descripation = seo_data("meta_descripation","2");
    $meta_keyword = seo_data("meta_keyword","2");
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
                    <h2 class="bannerTitle">Introduction</h2>
                    <div class="breadcrumbs"><a href="{{ url('/') }}">Home</a><span>/</span>About us<span>/</span>Introduction</div>
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
                            <h5 class="subTitle">Introduction</h5>
                            <h3 class="fw-bold mb-0">YOUR BRIGHT FUTURE IS OUR SUCCESS.</h3>
                            <p style="text-align: justify;">
                                {!! cms_setting_data('about_intro') !!}
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
                                    {{-- <h5 class="my-3 subTitle " >Where we offer</h5> --}}

                                    <p  style="text-align: justify;"> {!! cms_setting_data('where_we_offer') !!}</p>

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
            <div class="row w-100 justify-content-between">
                <div class="col-lg-6">


                    <img src="{{ asset('public/ui/assets/images/my-img/know.jpg') }}" alt="{{bussiness_setting_data('site_name')}}">


                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="px-5 py-2">


                            <div class="col-lg-12 col-sm-12">
                                <div class="sDcon">
                                    <h5 class="my-3 text-light">What we offer</h5>

                                    <p class="text-light" style="text-align: justify;"> {!! cms_setting_data('what_we_offer') !!}</p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <!--  End -->
    <!-- BEGIN: About Section Start -->
    <section class="my-5">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <!-- About Content -->
                    <div class="aboutContent02 text-center">
                        <h4 class="subTitle mb-3">History of Knowledge Kingdom</h4>
                        <h1 class="secTitle">OUR STORY. WE DON'T JUST TEACH, WE BUILD!</h1>
                        <p>
                            {!! cms_setting_data('history') !!}
                        </p>


                    </div>
                    <!-- About Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- END: About Section End -->
    <!-- BEGIN: Service Details Start -->
    <section class="mt-3 mb-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="px-5 py-3" style="background: #f7f7f7;">

                            <div class="col-lg-12 col-sm-12"><img
                                    src="{{ asset('public/ui/assets/images/my-img/book.png') }}" alt="{{bussiness_setting_data('site_name')}}"></div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="sDcon">
                                    <h5 class=" subTitle">Who we are</h5>

                                    <p style="text-align: justify;"> {!! cms_setting_data('who_we_are') !!}</p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="serviceDConArea">

                        <div class="serviceDcon">
                            <h5 class="subTitle">We are the best and No 1. overseas consultant in Bhopal</h5>
                            <img
                                    src="{{ asset('public/ui/assets/images/my-img/study.jpg') }}" alt="{{bussiness_setting_data('site_name')}}"  height="150px">
                            <p class="mt-2" style="text-align: justify;">
                                {!! cms_setting_data('overseas_consultant') !!}
                            </p>

                        </div>

                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- END: Service Details End -->
@endsection
