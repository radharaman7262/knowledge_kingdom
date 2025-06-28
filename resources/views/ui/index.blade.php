@extends('ui.layout.headerfooter')
@php
    $page_name = seo_data("page_name","1");
    $meta_title = seo_data("meta_title","1");
    $meta_descripation = seo_data("meta_descripation","1");
    $meta_keyword = seo_data("meta_keyword","1");
@endphp
@section('page_title',$page_name)
@section('meta_title',$meta_title)
@section('meta_descripation',$meta_descripation)
@section('meta_keyword',$meta_keyword)

@section('content')

    @php
        // dd($our_causes_data);
        $slider_data = App\Models\Slider::where(['status'=> 1,'slider_type'=>'slider_type1'])->get();

$home_slider2_data = App\Models\Slider::where(['status'=> 1,'slider_type'=>'slider_type2'])->get();

    @endphp




    <!-- BEGIN: Hero Banner Start -->
    <section class="" >
        <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel" style="width: 100%;" >


            <div class="carousel-inner " >
                @foreach ( $slider_data as $key=>$slider_show )
              <div class="carousel-item {{($key == 0) ? 'active' : ''; }}">
                <img src="{{url('/storage/app/'.$slider_show->image)}}" class="img-fluid d-block " alt="{{$slider_show->title}}" width="100%" height="100%"  >
              </div>


              @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>




    </section>
    <!-- END: Hero Banner End -->

    <!-- BEGIN: Coaching Section Start -->
    <section class="coachingSction03" style="background-image: url({{ asset('public/ui/assets/images/bg/7.jpg')}});">
        <div class="container">
            <div class="row justify-content-md-center">
                <!-- Coaching Item -->

                    @foreach ( getDataFun('featureds','') as $key=> $row_data)

                    <div class=" col-xl-2 col-sm-4 col-6">
                        <a href="javascript:void(0);" class="coachingItem03 text-center @if($key%2==0) bg-info @else bg-warning @endif">
                            <img src="{{url('/storage/app/'.$row_data->icon)}}" alt="{{$row_data->title}}">
                            {{-- <i class="flaticon-certificate"></i> --}}
                            <span class="ctTitle">{{$row_data->title}}</span>
                        </a>
                    </div>
                    @endforeach

            </div>
        </div>
    </section>
    <!-- END: Coaching Section End -->

    <!-- BEGIN: About Section Start -->
    <section class="aboutSection02">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <!-- About Content -->
                    <div class="aboutContent02 text-center">
                        <h4 class="subTitle mb-3">{{cms_setting_data('home_title')}}</h4>
                        <h1 class="secTitle">{{cms_setting_data('home_subtitle')}}</h1>
                        <p>
                            {!!cms_setting_data('about_home') !!}
                        </p>


                    </div>
                    <!-- About Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- END: About Section End -->



    <!-- BEGIN: Call To Action Start -->
    <section class="whyChose01">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    {{-- <h5 class="subTitle">News & Updates</h5> --}}
                    <h4 class="secTitle">News & Updates</h4>
                    <!-- Icon Box -->
                    @foreach (getDataFun('news_updates','3') as $row_data )
<a href="{{$row_data->link}}" class="card p-3 mb-1" style="color: black;" target="_blank">
    <div class="iconBox04 m-0">
        <div class="ibBox"><p class="text-center">{{date('d',strtotime($row_data->date))}} <br>{{date('M y',strtotime($row_data->date))}}</p></div>

         <p class="mt-3">{{$row_data->title}}</p>
    </div>
</a>

                    @endforeach
                    <!-- Icon Box -->

                </div>
                <div class="col-lg-6">
                    <h4 class="secTitle">  Our Achievers</h4>
                    <div class="row">
                        @foreach (getDataFun('achievers','18') as $row_data )
                        <div class="col-2 mb-2">
                            <img src="{{url('/storage/app/'.$row_data->image)}}" alt="{{$row_data->name}}">
                        </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="col-lg-12 ">
                            <a class="immiPressBtn" href="{{route('achievers-page')}}"><span>Know More</span></a>
                        </div>
                    </div>

                </div>
            </div>
			
			
			<div class="row mt-2">
			<div id="carouselExampleIndicators1" class="carousel slide " data-bs-ride="carousel" style="width: 100%;" >


            <div class="carousel-inner " >
                @foreach ( $home_slider2_data as $key=>$slider_show )
              <div class="carousel-item {{($key == 0) ? 'active' : ''; }}">
                <img src="{{url('/storage/app/'.$slider_show->image)}}" class="img-fluid d-block rounded" alt="{{$slider_show->title}}" width="100%" height="100%"  >
              </div>


              @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
			</div>
			
        </div>
    </section>
    <!-- END: Call To Action End -->

    <!-- BEGIN: Funfact Section Start -->
    <section class="funfactSection01">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="factWrapper" style="background-image: url({{asset('public/ui/assets/images/bg/bg-register-now.jpg')}});background-size:100% 100%;">
                        <div class="row bg-dark rounded">
                            <!-- Funfact Item -->
                            <div class="col-lg-3 col-sm-6 brRight text-center">
                                <div class="funfact01">
                                    <h2 class="count-box text-white"><span class="count-text" data-speed="3000"
                                            data-stop="25000">0</span><sup><i class="fa fa-plus"></i></sup></h2>
                                    <h5 class="text-white">UNIVERSITIES</h5>
                                </div>
                            </div>
                            <!-- Funfact Item -->
                            <!-- Funfact Item -->
                            <div class="col-lg-3 col-sm-6 brRight text-center">
                                <div class="funfact01">
                                    <h2 class="count-box text-white"><span class="count-text" data-speed="3000"
                                            data-stop="30000">0</span><sup><i class="fa fa-plus"></i></sup></h2>
                                    <h5 class="text-white">PROFESSIONAL COURSES</h5>
                                </div>
                            </div>
                            <!-- Funfact Item -->
                            <!-- Funfact Item -->
                            <div class="col-lg-3 col-sm-6 brRight text-center">
                                <div class="funfact01">
                                    <h2 class="count-box text-white"><span class="count-text" data-speed="3000"
                                            data-stop="8000">0</span><sup><i class="fa fa-plus"></i></sup></h2>
                                    <h5 class="text-white">STUDENTS REGISTERED</h5>
                                </div>
                            </div>
                            <!-- Funfact Item -->
                            <!-- Funfact Item -->
                            <div class="col-lg-3 col-sm-6 text-center">
                                <div class="funfact01">
                                    <h2 class="count-box text-white"><span class="count-text" data-speed="3000"
                                            data-stop="30">0</span><sup><i class="fa fa-plus"></i></sup></h2>
                                    <h5 class="text-white">
                                        COUNTRIES</h5>
                                </div>
                            </div>
                            <!-- Funfact Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Funfact Section End -->

    <!-- BEGIN: Country Section Start -->
    <section class="countrySection01" style="background-image: url({{asset('public/ui/assets/images/bg/2.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
					@php
                     $getdata = getDataFun('countries', '');
                     //$country = [];
                     $html = '[ ';
                     foreach ($getdata as $key => $value) {
                        # code...
                        if($key!=0){
                            $html .= ', ';
                        }
                        $html .= '"'.$value->title.'"';

                       // array_push($country,c);
                     }
                     $html .= ' ]';

                    @endphp
                    <h5 class="subTitle white">Choose Country</h5>
                    <h1 class="secTitle white">Immigration and citizenship<br> Choose your <span class="typewrite" data-period="2000"
                            data-type='{{$html}}'>frtytyty</span></h1>
                </div>
            </div>
            <div class="row">
                @foreach (getDataFunHome('countries','4') as $row_data )

                <div class="col-lg-3 col-sm-6">
                    <!-- Country Item -->
                    <div class="countryItem01 text-center">
                        <div class="countryThumb">
                            <img src="{{url('/storage/app/'.$row_data->image)}}" alt="{{$row_data->title}}" style="height: 250px;">
                            <div class="cnFlag"><img src="{{url('/storage/app/'.$row_data->logo)}}"
                                    alt="{{$row_data->title}}"></div>
                        </div>
                        <div class="countryContent">
                            <h3><a href="{{route('country-details-page',$row_data->slug)}}">{{$row_data->title}}</a></h3>

                        </div>
                    </div>
                    <!-- Country Item -->
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a class="immiPressBtn" href="{{route('country-page')}}"><span>All Countries</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Country Section End -->



    <!-- BEGIN: Testimonial Section Start -->
    <section class="testimonialSection02" style="background-image: url({{asset('public/ui/assets/images/bg/5.jpg')}});">
        <!-- Animation Image -->
        <div class="animThumb">
            <img src="{{ asset('public/ui/assets/images/home3/s1.png') }}" alt="{{bussiness_setting_data('site_name')}}">
        </div>
        <!-- Animation Image -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h5 class="subTitle">Our Testimonials</h5>
                    <h1 class="secTitle">What Customers Saying<br> About {{bussiness_setting_data('site_name')}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonialSlider02 owl-carousel">
                        <!-- Testimonial Item -->
                        @foreach (getDataFun('testimonials','') as $data)
                        <div class="testimonilaItem02">
                            <div class="tsAuthor">
                                <img src="{{url('/storage/app/'.$data->image)}}" alt="{{$data->name}}">
                                <h5 class="tsNM">{{$data->name}}</h5>
                                <span class="tsDesign">{{$data->address}}</span>
                            </div>
                            <div class="quoteIcon"><img src="{{ asset('public/ui/assets/images/home3/quote.png') }}"
                                    alt="{{$data->name}}"></div>
                            <div class="qutation">
                                {!!substr($data->description,0,300)!!}
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- Animation Image -->
        <div class="animThumb atRight">
            <img src="{{ asset('public/ui/assets/images/home3/s2.png') }}" alt="{{bussiness_setting_data('site_name')}}">
        </div>
        <!-- Animation Image -->
    </section>
    <!-- END: Testimonial Section End -->

    <!-- BEGIN: Blog Section Start -->
    <section class="blogSction02">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h5 class="subTitle">Recent Blog</h5>
                    <h1 class="secTitle">Recent Updates of Visa<br> And Immagration</h1>
                </div>
            </div>
            <div class="row">
                @foreach (orderDataFun('blogs','3') as $recent_blog )

                <div class="col-lg-4 col-sm-6">
                    <!-- Blog Item -->
                    <div class="blogItem02 text-end">
                        <div class="blogThumb">
                            <img src="{{url('/storage/app/'.$recent_blog->banner)}}" alt="{{$recent_blog->title}}" style="height: 250px;">
                            <div class="pDate"><span>{{date('d',strtotime($recent_blog->date))}}</span> {{date('M',strtotime($recent_blog->date))}}</div>
                        </div>
                        <div class="blogContent text-start">
                            <div class="biMeta"><svg fill="#E94D4E" width="18" height="18" viewBox="0 0 18 18"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.87501 13.2498C4.58334 12.7082 5.37501 12.2811 6.25001 11.9686C7.12501 11.6561 8.04167 11.4998 9 11.4998C9.95834 11.4998 10.875 11.6561 11.75 11.9686C12.625 12.2811 13.4167 12.7082 14.125 13.2498C14.6111 12.6804 14.9896 12.0346 15.2604 11.3123C15.5313 10.5901 15.6667 9.81928 15.6667 8.99984C15.6667 7.15262 15.0174 5.5797 13.7188 4.28109C12.4201 2.98248 10.8472 2.33317 9 2.33317C7.15278 2.33317 5.57987 2.98248 4.28126 4.28109C2.98264 5.5797 2.33334 7.15262 2.33334 8.99984C2.33334 9.81928 2.46876 10.5901 2.73959 11.3123C3.01042 12.0346 3.38889 12.6804 3.87501 13.2498ZM9 9.83317C8.18056 9.83317 7.48959 9.55192 6.92709 8.98942C6.36459 8.42692 6.08334 7.73595 6.08334 6.9165C6.08334 6.09706 6.36459 5.40609 6.92709 4.84359C7.48959 4.28109 8.18056 3.99984 9 3.99984C9.81945 3.99984 10.5104 4.28109 11.0729 4.84359C11.6354 5.40609 11.9167 6.09706 11.9167 6.9165C11.9167 7.73595 11.6354 8.42692 11.0729 8.98942C10.5104 9.55192 9.81945 9.83317 9 9.83317ZM9 17.3332C7.84723 17.3332 6.76389 17.1144 5.75 16.6769C4.73612 16.2394 3.85417 15.6457 3.10417 14.8957C2.35417 14.1457 1.76042 13.2637 1.32292 12.2498C0.885422 11.2359 0.666672 10.1526 0.666672 8.99984C0.666672 7.84706 0.885422 6.76373 1.32292 5.74984C1.76042 4.73595 2.35417 3.854 3.10417 3.104C3.85417 2.354 4.73612 1.76025 5.75 1.32275C6.76389 0.885254 7.84723 0.666504 9 0.666504C10.1528 0.666504 11.2361 0.885254 12.25 1.32275C13.2639 1.76025 14.1458 2.354 14.8958 3.104C15.6458 3.854 16.2396 4.73595 16.6771 5.74984C17.1146 6.76373 17.3333 7.84706 17.3333 8.99984C17.3333 10.1526 17.1146 11.2359 16.6771 12.2498C16.2396 13.2637 15.6458 14.1457 14.8958 14.8957C14.1458 15.6457 13.2639 16.2394 12.25 16.6769C11.2361 17.1144 10.1528 17.3332 9 17.3332ZM9 15.6665C9.73612 15.6665 10.4306 15.5589 11.0833 15.3436C11.7361 15.1283 12.3333 14.8193 12.875 14.4165C12.3333 14.0137 11.7361 13.7047 11.0833 13.4894C10.4306 13.2741 9.73612 13.1665 9 13.1665C8.26389 13.1665 7.56945 13.2741 6.91667 13.4894C6.26389 13.7047 5.66667 14.0137 5.125 14.4165C5.66667 14.8193 6.26389 15.1283 6.91667 15.3436C7.56945 15.5589 8.26389 15.6665 9 15.6665ZM9 8.1665C9.36112 8.1665 9.65973 8.04845 9.89584 7.81234C10.1319 7.57623 10.25 7.27762 10.25 6.9165C10.25 6.55539 10.1319 6.25678 9.89584 6.02067C9.65973 5.78456 9.36112 5.6665 9 5.6665C8.63889 5.6665 8.34028 5.78456 8.10417 6.02067C7.86806 6.25678 7.75 6.55539 7.75 6.9165C7.75 7.27762 7.86806 7.57623 8.10417 7.81234C8.34028 8.04845 8.63889 8.1665 9 8.1665Z" />
                                </svg>By<a href="{{route('blog-page')}}">Admin</a></div>
                            <h3><a href="{{route('blog-details-page',$recent_blog->slug)}}">{{$recent_blog->title}}</a>
                            </h3>
                            <p>{!!substr($recent_blog->description,0,150)!!}</p>
                        </div>
                        <a class="immiPressBtn" href="{{route('blog-details-page',$recent_blog->slug)}}"><span>Read More<svg fill="#E94D4E"
                                    width="12" height="10" viewBox="0 0 12 10"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 5.71429V4.28571H9L6 1.42857L6.75 0L12 5L6.75 10L6 8.57143L9 5.71429H0Z" />
                                </svg></span></a>
                    </div>
                    <!-- Blog Item -->
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- END: Blog Section End -->

    <!-- BEGIN: Blog Section Start -->
    <section class="blogSction02">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    {{-- <h5 class="subTitle">Our Office</h5> --}}
                    <h1 class="secTitle">Our Office</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="conInfoWrapper" style="background-image: url({{ asset('public/ui/assets/images/bg/9.jpg')}});">
                        <!-- Icon Box -->
                        <div class="iconBox05">
                            <div class="ibBox"><i class="flaticon-location"></i></div>
                            <h3 class="ibTitle">Address - 1</h3>
                            <p>{{bussiness_setting_data('address')}}</p>
                        </div>
                        <!-- Icon Box -->
                        <!-- Icon Box -->
                        <div class="iconBox05">
                            <div class="ibBox"><i class="flaticon-location"></i></div>
                            <h3 class="ibTitle">Address - 2</h3>
                            <p>{{bussiness_setting_data('address')}}</p>
                        </div>
                        <!-- Icon Box -->
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <!-- Begin:: Google Maps -->
                    <section class="mapsSection">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="gmaps">
                                    <iframe src="{{ bussiness_setting_data('map') }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Google Maps -->
                </div>
            </div>
        </div>
    </section>
    <!-- END: Blog Section End -->

      <!-- BEGIN: Country Section Start -->
      <section class="countrySection02" style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="subTitle">Choose Bank</h5>
					  <h1 class="secTitle" style="font-size:36px;">Loan/Forex Assistance</h1>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="countrySlider owl-carousel">
                        <!-- Country Item -->
                        @foreach (getDataFun('finance_banks','') as $row_data )

                        <div class="countryItem02 text-center">
                            <div class="countryThumb">
                                <img src="{{url('/storage/app/'.$row_data->logo)}}" alt="{{$row_data->title}}" style="height:100px;">
                                {{-- <div class="cnFlag"><img src="assets/images/country/f1.png" alt="{{$row_data->title}}"></div> --}}
                            </div>

                        </div>
                        @endforeach
                        <!-- Country Item -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Country Section End -->


@endsection
