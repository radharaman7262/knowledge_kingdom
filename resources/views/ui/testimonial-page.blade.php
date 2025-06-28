@extends('ui.layout.headerfooter')
@php
    $page_name = seo_data("page_name","5");
    $meta_title = seo_data("meta_title","5");
    $meta_descripation = seo_data("meta_descripation","5");
    $meta_keyword = seo_data("meta_keyword","5");
@endphp
@section('page_title',$page_name)
@section('meta_title',$meta_title)
@section('meta_descripation',$meta_descripation)
@section('meta_keyword',$meta_keyword)

@section('content')
<style>
    .gal{
        column-count:3;
    }
</style>

        <!-- BEGIN: Hero Banner Start -->
        <section class="pageBanner" style="background-image: url({{ asset('public/ui/assets/images/bg/banner.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="bannerTitle">Testimonial</h2>
                        <div class="breadcrumbs"><a href="{{url('/')}}">Home</a><span>/</span>Testimonial</div>
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
                        <h5 class="subTitle">What our students say</h5>
                        <h2 class="secTitle">MEET OUR STUDENTS</h2>
                    </div>
                </div>
         <div class="row">
                    @foreach (pagination_data('testimonials','6') as $row_data_testimonial )

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <img class="rounded-circle mb-3" src="{{url('/storage/app/'.$row_data_testimonial->image)}}" alt="{{$row_data_testimonial->name}}">
                                <p>
                                    {!!$row_data_testimonial->description!!}
                                </p>
                                <h6  style="color: #e94d4e">{{$row_data_testimonial->name}}</h6>
                                <h6 style="color: #e94d4e">{{$row_data_testimonial->address}}</h6>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    <div class="">

                        {!! pagination_data('testimonials','6')->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>

                </div>
            </div>
        </section>
        <!-- END: Team Section End -->


   @endsection

