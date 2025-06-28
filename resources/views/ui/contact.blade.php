@extends('ui.layout.headerfooter')
@php
    $page_name = seo_data("page_name","8");
    $meta_title = seo_data("meta_title","8");
    $meta_descripation = seo_data("meta_descripation","8");
    $meta_keyword = seo_data("meta_keyword","8");
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
                        <h2 class="bannerTitle">Contact Us</h2>
                        <div class="breadcrumbs"><a href="{{url('/')}}">Home</a><span>/</span>Contact</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: Hero Banner End -->

        <!-- BEGIN: Contact Section Start -->
        <section class="contactSection02">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="contactFWrapper">
                            <h5 class="subTitle">Let Us Take Care of all the questions and doubts you have</h5>
                            <h2 class="secTitle">Fill this form<br>and our experts will reach out to you</h2>
                            <div class="contactForm">
                                <form  method="post" id="contactForm" class="ajax-form-insert">
									 @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <input class="required" type="text" name="name" placeholder="Full Name">
                                        </div>

                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <input class="required" type="text" name="phone" placeholder="Phone" autocomplete="off">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <input class="required" type="text" name="email" placeholder="Email address">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <input class="required" type="text" name="subject" placeholder="Course and Country">
                                        </div>

                                        <div class="col-lg-12">
                                            <textarea class="required" name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="submit" name="submit" value="Send Message" class="immiPressBtn">

                                            <div class="alert con_message"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="conInfoWrapper" style="background-image: url({{ asset('public/ui/assets/images/bg/9.jpg')}});">
                            
                            <!-- Icon Box -->
                            <div class="iconBox05 ib0501">
                                <div class="ibBox"><i class="flaticon-phone-call"></i></div>
                                <h3 class="ibTitle">Any Questions? Call us</h3>
                                <a href="tel:{{bussiness_setting_data('phone_1')}}"><p>{{bussiness_setting_data('phone_1')}}</p></a>
                            </div>
                            <!-- Icon Box -->
                            <!-- Icon Box -->
                            <div class="iconBox05">
                                <div class="ibBox"><i class="flaticon-email"></i></div>
                                <h3 class="ibTitle">Any Questions? Email us</h3>
                               <a href="mailto:{{bussiness_setting_data('email_1')}}"> <p>{{bussiness_setting_data('email_1')}}</p></a>
                            </div>
                            <!-- Icon Box -->
                            <!-- Icon Box -->
                            <div class="iconBox05">
                                <div class="ibBox"><i class="flaticon-location"></i></div>
                                <h3 class="ibTitle">Address</h3>
                                <p>{{bussiness_setting_data('address')}}</p>
                            </div>
                            <!-- Icon Box -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: Contact Section End -->

        <!-- Begin:: Google Maps -->
        <section class="mapsSection">
            <div class="container-fluid">
                <div class="row">
                    <div class="gmaps">
                        <iframe src="{{bussiness_setting_data('map')}}"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- End:: Google Maps -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">

            $('.ajax-form-insert').submit(function (e) {


        e.preventDefault();

            var formdata = new FormData(this);
            // formdata.append('update', '1');
            $.ajax({
                url: "{{route('ajax.contact')}}",
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
                dataType: 'json',
                _token: "{{ csrf_token() }}",
                success: function (response) {
     window.location = "{{route('contact-page')}}";
                }
            });

        });
        </script>

        @endsection
