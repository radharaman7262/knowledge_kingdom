@extends('ui.layout.headerfooter')
@php
    $page_name = seo_data("page_name","6");
    $meta_title = seo_data("meta_title","6");
    $meta_descripation = seo_data("meta_descripation","6");
    $meta_keyword = seo_data("meta_keyword","6");
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
                        <h2 class="bannerTitle">Achievers</h2>
                        <div class="breadcrumbs"><a href="{{url('/')}}">Home</a><span>/</span>Achievers</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: Hero Banner End -->



        <!-- BEGIN: Team Section Start -->
        <section class="teamSection01">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        {{-- <h5 class="subTitle">Professional People</h5> --}}
                        <h2 class="secTitle">Achievers</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach (pagination_data('achievers','8') as $row_data_achievers )

                    <div class="col-lg-3 col-sm-6 mb-4">
                        <!-- Team Item -->
                        <div class="teamItem01">
                            <div class="teamThumb">
                                <img src="{{url('/storage/app/'.$row_data_achievers->image)}}" alt="{{$row_data_achievers->name}}">

                            </div>
                            <div class="teamContent">
                                <h3><a href="single-team.html">{{$row_data_achievers->name}}</a></h3>
                                <h5 class="designation">{{$row_data_achievers->address}}</h5>
                            </div>
                        </div>
                        <!-- Team Item -->
                    </div>
                    @endforeach
                    <div class="">

                        {!! pagination_data('achievers','8')->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>

                </div>
            </div>
        </section>
        <!-- END: Team Section End -->


   @endsection

