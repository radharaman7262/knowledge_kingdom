@extends('ui.layout.headerfooter')
@section('page_title')
{{$country_data->meta_title}}
@endsection
@section('meta_descripation')
{{$country_data->meta_descripation}}
@endsection
@section('meta_keyword')
{{$country_data->meta_keyword}}
@endsection

@section('content')

        <!-- BEGIN: Hero Banner Start -->
        <section class="pageBanner" style="background-image: url({{ asset('public/ui/assets/images/bg/banner.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
						<h2 class="bannerTitle"> {{$country_data->title}}</h2>
                        <div class="breadcrumbs"><a href="{{route('/')}}">Home</a><span>/</span> Countries <span>/</span>   {{$country_data->title}}</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: Hero Banner End -->

        <!-- BEGIN: Service Details Start -->
        <section class="singleServiceSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="serviceDConArea">

                            <div class="serviceDcon">
                                <h5 class="subTitle">{{$country_data->title}}</h5>
                                <h3 class="secTitle">A WHOLE WORLD OF OPPORTUNITIES AWAITS YOU.</h3>
								
                                <p>
                                    {!!$country_data->description!!}
                                </p>
                                <h5 class="subTitle">List of universities</h5>
                                <p>{!!$country_data->universities!!}</p>




                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12"><img src="{{url('/storage/app/'.$country_data->image)}}" alt="{{$country_data->title}}" style="height:400px;width:100%;"></div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="sDcon">
                                    <h5 class="my-3 subTitle">Highlights</h5>

                                       <p>{!!$country_data->hightlights!!}</p>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </section>
        <!-- END: Service Details End -->

       @endsection
