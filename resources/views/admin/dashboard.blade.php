@extends('admin.layout.adminheaderfooter')
@section('page_title','Dashboard')
@section('dashboard_active','active open')
@section('content')
<style>
    .progress-bar{
        animation: progressAnimationStrike 6s;
    }
    @keyframes progressAnimationStrike {
     0%{ width: 0; }

}
</style>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
              <div class="col-md-4 mb-3">
                    <a href="{{route('admin.data.testimonial')}}">
                        <div class="card border-right">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6>Testimonial</h6>
                                    <span>{{status_count_function('testimonials')}}/{{count_function('testimonials')}}</span>
                                </div>
                                @php
                                $find =(status_count_function('testimonials') * 100)/count_function('testimonials');

                                @endphp
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" width="0%" style="width:{{$find}}%;" data-percent ="{{$find}}">
                                        <span class="sr-only" style=""></span>
                                      </div>
                                    </div>

                            </div>
                        </div>
                    </a>
                </div>
				  
				    <div class="col-md-4 mb-3">
                    <a href="{{route('admin.data/slider')}}">
                        <div class="card border-right">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6>Slider</h6>
                                    <span>{{status_count_function('sliders')}}/{{count_function('sliders')}}</span>
                                </div>
                                @php
                                $find =(status_count_function('sliders') * 100)/count_function('sliders');

                                @endphp
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" width="0%" style="width:{{$find}}%;" data-percent ="{{$find}}">
                                        <span class="sr-only" style=""></span>
                                      </div>
                                    </div>

                            </div>
                        </div>
                    </a>
                </div>
				  
				    <div class="col-md-4 mb-3">
                    <a href="{{route('admin.data/featured')}}">
                        <div class="card border-right">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6>Featured</h6>
                                    <span>{{status_count_function('featureds')}}/{{count_function('featureds')}}</span>
                                </div>
                                @php
                                $find =(status_count_function('featureds') * 100)/count_function('featureds');

                                @endphp
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" width="0%" style="width:{{$find}}%;" data-percent ="{{$find}}">
                                        <span class="sr-only" style=""></span>
                                      </div>
                                    </div>

                            </div>
                        </div>
                    </a>
                </div>
				  
              </div>

            </div>
            <!-- / Content -->
@endsection

