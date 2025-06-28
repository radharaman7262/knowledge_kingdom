@extends('ui.layout.headerfooter')
@section('page_title')
{{$coaching_data->meta_title}}
@endsection
@section('meta_descripation')
{{$coaching_data->meta_descripation}}
@endsection
@section('meta_keyword')
{{$coaching_data->meta_keyword}}
@endsection

@section('content')

        <!-- BEGIN: Hero Banner Start -->
        <section class="pageBanner" style="background-image: url({{ asset('public/ui/assets/images/bg/banner.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="bannerTitle">Study In {{$coaching_data->title}}</h2>
                        <div class="breadcrumbs"><a href="{{route('/')}}">Home</a><span>/</span>Coaching<span>/</span>{{$coaching_data->title}}</div>
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
                                <h5 class="subTitle">{{$coaching_data->title}}</h5>
                                {{-- <h3>A WHOLE WORLD OF OPPORTUNITIES AWAITS YOU.</h3> --}}
                                <p>
                                    {!!$coaching_data->short_desc	!!}
                                </p>
                                <h5 class="subTitle">Exam details</h5>
                                <p>{!!$coaching_data->exam_detail!!}</p>




                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12"><img src="{{url('/storage/app/'.$coaching_data->image)}}" alt="{{$coaching_data->title}}" style="height:200px;"></div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="sDcon">
                                    <h5 class="my-3 subTitle">Highlights</h5>

                                       <p>{!!$coaching_data->hightlights!!}</p>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </section>
        <!-- END: Service Details End -->

       @endsection
