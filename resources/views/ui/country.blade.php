@extends('ui.layout.headerfooter')

@section('content')
        <!-- BEGIN: Hero Banner Start -->
        <section class="pageBanner" style="background-image: url({{ asset('public/ui/assets/images/bg/banner.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="bannerTitle">Our Country</h2>
                        <div class="breadcrumbs"><a href="index.html">Home</a><span>/</span>Country</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: Hero Banner End -->

        <!-- BEGIN: Country Section Start -->
        <section class="countryPageSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h5 class="subTitle">Choose Country</h5>
                        <h2 class="secTitle">Immigration and citizenship Choose<br> your country <span class="typewrite" data-period="2000" data-type='[ "Australia", "Germany", "England", "Canada", "France", "Dubai", "Turkey", "India" ]'>Immigration</span><br></h2>
                    </div>
                </div>
                <div class="row">
                    <!-- Country Item -->
                    @foreach (pagination_data('countries','8') as $row_data_country )
                    <div class="col-lg-3 col-sm-6">
                        <div class="countryItem02 ciItem02 text-center">
                            <div class="countryThumb">
                                <img src="{{url('/storage/app/'.$row_data_country->image)}}" alt="{{$row_data_country->title}}" style="height: 250px;">
                                <div class="cnFlag"><img src="{{url('/storage/app/'.$row_data_country->logo)}}" alt="{{$row_data_country->title}}"></div>
                            </div>
                            <div class="countryContent">
                                <h3><a href="{{route('country-details-page',$row_data_country->slug)}}">{{$row_data_country->title}}</a></h3>
                               
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="">

                        {!! pagination_data('countries','8')->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>

                </div>

            </div>
        </section>
        <!-- END: Country Section End -->

 @endsection
