@extends('ui.layout.headerfooter')
@php
    $page_name = seo_data("page_name","7");
    $meta_title = seo_data("meta_title","7");
    $meta_descripation = seo_data("meta_descripation","7");
    $meta_keyword = seo_data("meta_keyword","7");
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
                        <h2 class="bannerTitle">Blogs</h2>
                        <div class="breadcrumbs"><a href="{{url('/')}}">Home</a><span>/</span>Achievers</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: Hero Banner End -->

         <!-- BEGIN: Blog Section Start -->
         <section class="blogSction01">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h5 class="subTitle">Recent Blog</h5>
                        <h2 class="secTitle">Recent Updates of Visa<br> And Immagration</h2>
                        <img class="animImage" src="{{ asset('public/ui/assets/images/bg/s1.png')}}" alt="ImmiPress">
                    </div>
                </div>
                <div class="row">
                    @foreach (pagination_data('blogs','6') as $blog_data)

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!-- Blog Item -->
                        <div class="blogItem01">
                            <div class="blogThumb">
                                <img src="{{url('/storage/app/'.$blog_data->banner)}}" alt="{{$blog_data->title}}" height="250px">
                                <div class="pDate"><span>{{date('d',strtotime($blog_data->date))}}</span> {{date('M',strtotime($blog_data->date))}}</div>
                            </div>
                            <div class="blogContent">
                                <div class="biMeta"><svg  fill="#E94D4E" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.87501 13.2498C4.58334 12.7082 5.37501 12.2811 6.25001 11.9686C7.12501 11.6561 8.04167 11.4998 9 11.4998C9.95834 11.4998 10.875 11.6561 11.75 11.9686C12.625 12.2811 13.4167 12.7082 14.125 13.2498C14.6111 12.6804 14.9896 12.0346 15.2604 11.3123C15.5313 10.5901 15.6667 9.81928 15.6667 8.99984C15.6667 7.15262 15.0174 5.5797 13.7188 4.28109C12.4201 2.98248 10.8472 2.33317 9 2.33317C7.15278 2.33317 5.57987 2.98248 4.28126 4.28109C2.98264 5.5797 2.33334 7.15262 2.33334 8.99984C2.33334 9.81928 2.46876 10.5901 2.73959 11.3123C3.01042 12.0346 3.38889 12.6804 3.87501 13.2498ZM9 9.83317C8.18056 9.83317 7.48959 9.55192 6.92709 8.98942C6.36459 8.42692 6.08334 7.73595 6.08334 6.9165C6.08334 6.09706 6.36459 5.40609 6.92709 4.84359C7.48959 4.28109 8.18056 3.99984 9 3.99984C9.81945 3.99984 10.5104 4.28109 11.0729 4.84359C11.6354 5.40609 11.9167 6.09706 11.9167 6.9165C11.9167 7.73595 11.6354 8.42692 11.0729 8.98942C10.5104 9.55192 9.81945 9.83317 9 9.83317ZM9 17.3332C7.84723 17.3332 6.76389 17.1144 5.75 16.6769C4.73612 16.2394 3.85417 15.6457 3.10417 14.8957C2.35417 14.1457 1.76042 13.2637 1.32292 12.2498C0.885422 11.2359 0.666672 10.1526 0.666672 8.99984C0.666672 7.84706 0.885422 6.76373 1.32292 5.74984C1.76042 4.73595 2.35417 3.854 3.10417 3.104C3.85417 2.354 4.73612 1.76025 5.75 1.32275C6.76389 0.885254 7.84723 0.666504 9 0.666504C10.1528 0.666504 11.2361 0.885254 12.25 1.32275C13.2639 1.76025 14.1458 2.354 14.8958 3.104C15.6458 3.854 16.2396 4.73595 16.6771 5.74984C17.1146 6.76373 17.3333 7.84706 17.3333 8.99984C17.3333 10.1526 17.1146 11.2359 16.6771 12.2498C16.2396 13.2637 15.6458 14.1457 14.8958 14.8957C14.1458 15.6457 13.2639 16.2394 12.25 16.6769C11.2361 17.1144 10.1528 17.3332 9 17.3332ZM9 15.6665C9.73612 15.6665 10.4306 15.5589 11.0833 15.3436C11.7361 15.1283 12.3333 14.8193 12.875 14.4165C12.3333 14.0137 11.7361 13.7047 11.0833 13.4894C10.4306 13.2741 9.73612 13.1665 9 13.1665C8.26389 13.1665 7.56945 13.2741 6.91667 13.4894C6.26389 13.7047 5.66667 14.0137 5.125 14.4165C5.66667 14.8193 6.26389 15.1283 6.91667 15.3436C7.56945 15.5589 8.26389 15.6665 9 15.6665ZM9 8.1665C9.36112 8.1665 9.65973 8.04845 9.89584 7.81234C10.1319 7.57623 10.25 7.27762 10.25 6.9165C10.25 6.55539 10.1319 6.25678 9.89584 6.02067C9.65973 5.78456 9.36112 5.6665 9 5.6665C8.63889 5.6665 8.34028 5.78456 8.10417 6.02067C7.86806 6.25678 7.75 6.55539 7.75 6.9165C7.75 7.27762 7.86806 7.57623 8.10417 7.81234C8.34028 8.04845 8.63889 8.1665 9 8.1665Z"/>
                                    </svg>By<a href="{{route('/')}}">Admin</a></div>
                                <h3><a href="{{route('blog-details-page',$blog_data->slug)}}">{{$blog_data->title}}</a></h3>
                                <a class="rmBtn" href="{{route('blog-details-page',$blog_data->slug)}}">Read More<svg fill="#E94D4E" width="12" height="10" viewBox="0 0 12 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 5.71429V4.28571H9L6 1.42857L6.75 0L12 5L6.75 10L6 8.57143L9 5.71429H0Z"/>
                                    </svg></a>
                            </div>
                        </div>
                        <!-- Blog Item -->
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- END: Blog Section End -->




   @endsection

