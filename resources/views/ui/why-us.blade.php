@extends('ui.layout.headerfooter')
@php
    $page_name = seo_data("page_name","4");
    $meta_title = seo_data("meta_title","4");
    $meta_descripation = seo_data("meta_descripation","4");
    $meta_keyword = seo_data("meta_keyword","4");
@endphp
@section('page_title',$page_name)
@section('meta_title',$meta_title)
@section('meta_descripation',$meta_descripation)
@section('meta_keyword',$meta_keyword)

@section('content')

        <!-- BEGIN: Hero Banner Start -->
        <section class="pageBanner" style="background-image: url({{ asset('public/ui/assets/images/bg/banner.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="bannerTitle">Why Us</h2>
                        <div class="breadcrumbs"><a href="{{route('/')}}">Home</a><span>/</span>About us<span>/</span>Why Us</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: Hero Banner End -->

       <!-- BEGIN: About Section Start -->
    <section class="my-5">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <!-- About Content -->
                    <div class="aboutContent02 ">
                        <h4 class="subTitle mb-3">Salient features</h4>
                        <h2 class="secTitle">HELPING YOU REALIZE YOUR DREAMS.</h2>
                        <p style="text-align: justify;">
                            {!!cms_setting_data('why_us_arr') !!}
                        </p>


                    </div>
                    <!-- About Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- END: About Section End -->

       @endsection

