

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from  /index3.html by  , Mon,   12:46:07 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> @yield('page_title') || {{ bussiness_setting_data('site_name') }}</title>

    <meta name="description" content="@yield('meta_descripation')">
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta name="author" content="Satyakabir E-solutions Private Limited">

        <!-- BEGIN: CSS -->
        <link rel="stylesheet" href="{{ asset('public/ui/assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('public/ui/assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{ asset('public/ui/assets/css/fontawesome-all.css')}}">
        <link rel="stylesheet" href="{{ asset('public/ui/assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{ asset('public/ui/assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{ asset('public/ui/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('public/ui/assets/css/lightcase.css')}}">
        <link rel="stylesheet" href="{{ asset('public/ui/assets/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{ asset('public/ui/assets/css/main.css')}}">
        <!-- END: CSS -->

        <!-- BEGIN: Favicon -->
        <link rel="icon"  type="image/png" href="{{url('/storage/app/'.bussiness_setting_data('favicon'))}}">
        <!-- END: Favicon -->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    </head>
    <style>
        .pagination{
            /* color: red */
            --bs-pagination-color: var(--primay-color) !important;
            --bs-pagination-hover-color: var(--primay-color) !important;
            --bs-pagination-active-border-color: #dc3545;
        }
        .active > .page-link {
            background-color: var(--primay-color) !important;
        }

        /* WhatsApp Floating Button */
        .whatsapp-float {
            position: fixed;
            bottom: 70px;
            right: 20px;
            z-index: 999;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: pulse 2s infinite;
        }

        .whatsapp-float img {
            width: 35px;
            height: 35px;
        }
        .galleryShots {
    display: flex;
    flex-wrap: wrap;
    gap: 4px;
}

.galleryShots .popup_img {
    width: calc(12.5% - 4px);  /* 8 images per row */
    height: 40px;              /* Fix height for link too */
    display: block;
    overflow: hidden;
    border: none;
    padding: 0;
    margin: 0;
    text-decoration: none;
}

/* Remove any visual effects when link is clicked/focused */
.galleryShots .popup_img:focus,
.galleryShots .popup_img:active {
    outline: none;
    box-shadow: none;
}

/* Fixed image size */
.galleryShots img.gallery-img-small {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    border-radius: 3px;
}
        /* Pulse Animation */
        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
            }
            70% {
                transform: scale(1.1);
                box-shadow: 0 0 0 10px rgba(37, 211, 102, 0);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }

        .whatsapp-float i {
            font-size: 30px;
            color: white;
        }
.galleryShots {
    display: flex;
    flex-wrap: wrap;
    gap: 6px; /* moderate spacing */
}

.galleryShots .popup_img {
    width: calc(23.66% - 5px); /* 6 images per row */
    height: 3.2rem;              /* taller clickable area */
    display: block;
    overflow: hidden;
    border: none;
    padding: 0;
    margin: 0;
    text-decoration: none;
}

.galleryShots .popup_img:focus,
.galleryShots .popup_img:active {
    outline: none;
    box-shadow: none;
}

.galleryShots img.gallery-img-medium {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 4px;
    display: block;
}

    </style>
    <body>

        <a href="https://wa.me/{{bussiness_setting_data('phone_1')}}?text=Hi%2C%20I%20am%20interested" class="whatsapp-float" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>

        <!-- BEGIN: PreLoder Section -->
        <section class="preloader" id="preloader">
            <button class="closeLoader immiPressBtn"><span>Cancel Preloader</span></button>
            <div class="spinner-eff spinner-eff-1">
                <div class="bar bar-top"></div>
                <div class="bar bar-right"></div>
                <div class="bar bar-bottom"></div>
                <div class="bar bar-left"></div>
            </div>
        </section>
        <!-- END: PreLoder Section -->

        <!-- BEGIN: Header Section -->
        <header class="header03 isSticky">
            <svg fill="#233152" width="380" height="99" viewBox="0 0 380 99"  xmlns="http://www.w3.org/2000/svg"><path d="M380 -1H0V99H313.587L380 -1Z"/></svg>
            <svg class="last" fill="#233152" width="380" height="99" viewBox="0 0 380 99"  xmlns="http://www.w3.org/2000/svg"><path d="M380 -1H0V99H313.587L380 -1Z"/></svg>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header01Inner">
                            <!-- Logo -->
                            <div class="logo01">
                                <a href="{{route('/')}}"><img src="{{url('/storage/app/'.bussiness_setting_data('logo'))}}" alt="ImmiPress"/></a>
                            </div>
                            <!-- Logo -->
                            <!-- Nav Menu -->
                            <a href="javascript:void(0)" class="menuBtn mbText"><i class="fa-solid fa-bars"></i><span>Menu</span></a>
                            <nav class="mainMenu">
                                <ul class="sub-menu">
                                    <li class="">
                                        <a href="{{route('/')}}">Home</a>

                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">About Us</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('introduction-page')}}" class="text-dark">Introduction</a></li>
                                            <li><a href="{{route('our-team-page')}}" class="text-dark">Our Team</a></li>
                                            <li><a href="{{route('why-us-page')}}" class="text-dark">Why Us</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Countries</a>
                                        <ul class="sub-menu">
                                            @foreach (getDataFun('countries','') as $country_data )

                                            <li><a href="{{route('country-details-page',$country_data->slug)}}" class="text-dark"> {{$country_data->title}}</a></li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Coaching</a>
                                        <ul class="sub-menu">
                                            @foreach (getDataFun('coachings','') as $coachings_data )
                                            <li><a href="{{route('coaching-details-page',$coachings_data->slug)}}" class="text-dark">{{$coachings_data->title}} </a></li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="{{route('testimonial-page')}}">Testimonial</a>

                                    </li>
                                    <li class="">
                                        <a href="{{route('achievers-page')}}">Achievers</a>

                                    </li>
                                    <li class="">
                                        <a href="{{route('blog-page')}}">Blog</a>

                                    </li>
                                    <li class="">
                                        <a href="{{route('contact-page')}}">Contact Us</a>
                                    </li>
                                    
                                </ul>
                            </nav>
                            <!-- Nav Menu -->

                            <!-- Popup Btn -->
                            <a class="popupBtn" href="javascript:void(0);">
                                <svg fill="#E94D4E" width="24" height="16" viewBox="0 0 24 16"  xmlns="http://www.w3.org/2000/svg"><path d="M0.75 15.5V13H23.25V15.5H0.75ZM0.75 9.25V6.75H23.25V9.25H0.75ZM0.75 3V0.5H23.25V3H0.75Z"/></svg>
                            </a>
                            <!-- Popup Btn -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="blanks"></div>
        <!-- END: Header Section -->
         <!-- BEGIN: Popup Sidebar Widget -->
    <section class="popupSidebarSsec">
        <div class="popupSidebarOverlay"></div>
        <div class="widgetArea">
            <a href="javascript:void(0);" class="widgetCloser"><i class="fa-solid fa-xmark"></i></a>
            <div class="aboutWidgetArea">
                <div class="wdLogo">
                    <a href="{{url('/')}}"><img src="{{url('/storage/app/'.bussiness_setting_data('logo'))}}" alt="ImmiPress"></a>
                </div>
               
                <p>
                    We take a bottom-line approach to each project. Our clients consistently see increased traffic, enhanced
                    brand loyalty and new leads thanks to our work.
                </p>
                <h3>Contact info</h3>
                <div class="iconBox01">
                    <div class="ibBox"><i class="flaticon-phone-call"></i></div>
                    <h3 class="ibTitle">Call Us</h3>
                    <p><a href="tel:{{bussiness_setting_data('phone_1')}}">{{bussiness_setting_data('phone_1')}}</a></p>
                </div>
                <div class="iconBox01">
                    <div class="ibBox"><i class="flaticon-email"></i></div>
                    <h3 class="ibTitle">Email us</h3>
                    <p><a href="mailto:{{bussiness_setting_data('email_1')}}">{{bussiness_setting_data('email_1')}}</a></p>
                </div>
                <div class="iconBox01">
                    <div class="ibBox"><i class="flaticon-placeholder"></i></div>
                    <h3 class="ibTitle">Address</h3>
                    <p><a href="{{bussiness_setting_data('map')}}">{{bussiness_setting_data('address')}}</a></p>
                </div>
                <div class="socialItem">
                    <a href="{{bussiness_setting_data('facebook')}}"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="{{bussiness_setting_data('instagram')}}"><i class="fa-brands fa-instagram"></i></a>
                    <a href="{{bussiness_setting_data('linkedin')}}"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="{{bussiness_setting_data('twitter')}}"><i class="fa-brands fa-twitter"></i></a>
                </div>
                <iframe
                    src="{{bussiness_setting_data('map')}}"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <!-- END: Popup Sidebar Widget -->

          @yield('content')
							    <!-- Modal -->
   
		
                     <!-- BEGIN: Footer Start -->
        <footer class="footer_02"  style="background-image: url(assets/images/bg/4.png);">
            <div class="container">
                <div class="row">
                    <!-- About Widget -->
                    <div class="col-lg-3 col-md-5">
                        <aside class="aboutWidget">
                            <a href="{{route('/')}}"><img src="{{url('/storage/app/'.bussiness_setting_data('logo'))}}" alt="{{bussiness_setting_data('site_name')}}"></a>
                            <p>{{Str::substr(cms_setting_data('about_home'), 0, 200)}}</p>
                            <div class="abSocial">
                                <a href="{{bussiness_setting_data('facebook')}}"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="{{bussiness_setting_data('twitter')}}"><i class="fa-brands fa-twitter"></i></a>
                                <a href="{{bussiness_setting_data('instagram')}}"><i class="fa-brands fa-instagram"></i></a>
                                <a href="{{bussiness_setting_data('linkedin')}}"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </aside>
                    </div>
                    <!-- About Widget -->
                    <!-- Service Widget -->
                    <div class="col-lg-3 col-md-7">
                        <aside class="widget serviceMenu">
                            <h3 class="widgetTitle">USEFUL LINKS</h3>
                            <ul class="menu">
                                {{-- <li><a href="single-service.html">IELTS Score Card</a></li> --}}
                                <li><a href="{{route('introduction-page')}}">About Us</a></li>
                                <li><a href="{{route('contact-page')}}">Contact Us</a></li>
                                <li><a href="{{route('result-page')}}">Results</a></li>
                                <li><a href="{{route('scholarship-page')}}">Scholarship</a></li>
                                <li><a href="{{route('faq')}}">Faq</a></li>

                            </ul>
                        </aside>
                    </div>
                    <!-- Service Widget -->
                    <!-- Contact Widget -->
                    <div class="col-lg-3 col-md-6">
                        <aside class="contactWidget">
                            <h3 class="widgetTitle">Get in touch</h3>
                            <div class="iconBox01">
                                <div class="ibBox"><i class="flaticon-placeholder"></i></div>
                                <h3 class="ibTitle">Address</h3>
                                <p>{{bussiness_setting_data('address')}}</p>
                            </div>
                            <div class="iconBox01">
                                <div class="ibBox"><i class="flaticon-phone-call"></i></div>
                                <h3 class="ibTitle">Phone</h3>
                                <p>{{bussiness_setting_data('phone_1')}}</p>
                            </div>
                            <div class="iconBox01">
                                <div class="ibBox"><i class="flaticon-email-1"></i></div>
                                <h3 class="ibTitle">Email</h3>
                                <p>{{bussiness_setting_data('email_1')}}</p>
                            </div>
                        </aside>
                    </div>
                    <!-- Contact Widget -->
                    <!-- Newsletter Widget -->
                    {{-- <div class="col-lg-3 col-md-6">
                        <aside class="galleryWidget">
                            <h3 class="widgetTitle">Countries</h3>
                            <div class="galleryShots clearfix">
                                @foreach (getDataFun('countries','28') as $country_data )
                                <a class="popup_img float-start" href="{{ url('/storage/app/'.$country_data->logo)}}"><img src="{{ url('/storage/app/'.$country_data->logo)}}" alt="{{$country_data->title}}"></a>
                                @endforeach
                            </div>
                        </aside>
                    </div> --}}
                    <div class="col-lg-3 col-md-6">
                        <aside class="galleryWidget">
                            <h3 class="widgetTitle">Countries</h3>
                            <div class="galleryShots clearfix d-flex flex-wrap gap-1">
                                @foreach (getDataFun('countries','28') as $country_data)
                                    <a class="popup_img" href="{{ url('/storage/app/'.$country_data->logo) }}">
                                        <img src="{{ url('/storage/app/'.$country_data->logo) }}" alt="{{ $country_data->title }}" class="gallery-img-small">
                                    </a>
                                @endforeach
                            </div>
                        </aside>
                    </div>

                    <!-- Newsletter Widget -->
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12"><div class="brhr"></div></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p class="copyright">Copyright 2023 by <a href="https://satyakabir.com" target="_blank" class="footer-link fw-bolder">Satya Kabir E-solutions Private Limited</a> All Right Reserved.</p>
                    </div>

                </div>
            </div>

        </footer>
        <!-- END: Footer End -->
    <!-- Bact To Top -->
    <a href="javascript:void(0);" id="backtotop"><i class="fa-solid fa-arrow-up"></i></a>
    <!-- Bact To Top -->

    <!-- BEGIN: JS -->
    <script src="{{ asset('public/ui/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('public/ui/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/ui/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/ui/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('public/ui/assets/js/lightcase.js') }}"></script>
    <script src="{{ asset('public/ui/assets/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('public/ui/assets/js/jquery.plugin.min.js') }}"></script>
    <script src="{{ asset('public/ui/assets/js/jquery.countdown.min.js') }}"></script>

    <!-- Custome Js -->
    <script src="{{ asset('public/ui/assets/js/theme.js') }}"></script>
    <!-- END: JS -->

    <!--Modal JS Script -->
    <script type="text/javascript">
        $(window).load(function() {
            $('#onload').modal('show');
        });
    </script>


</body>


</html>
