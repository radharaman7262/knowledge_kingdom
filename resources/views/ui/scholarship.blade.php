@extends('ui.layout.headerfooter')

@section('content')

        <!-- BEGIN: Hero Banner Start -->
        <section class="pageBanner" style="background-image: url({{ asset('public/ui/assets/images/bg/banner.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="bannerTitle">Scholarship</h2>
                        <div class="breadcrumbs"><a href="{{route('/')}}">Home</a><span>/</span>Scholarship</div>
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
                        <h4 class="subTitle mb-3">Student scholarship</h4>
                        {{-- <h2 class="">HELPING YOU REALIZE YOUR DREAMS.</h2> --}}
                        <p style="text-align: justify;">
                            {!!cms_setting_data('scholarship_text') !!}
                        </p>


                    </div>
                    <!-- About Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- END: About Section End -->

       @endsection

