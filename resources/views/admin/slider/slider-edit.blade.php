@extends('admin.layout.adminheaderfooter')
@section('page_title', 'Edit Home Slider')
@section('content')


<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <!-- Basic Layout -->
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">

                        <h5 class="mb-0">Update Slider</h5>

                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.update.slider',$sliderdata->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$sliderdata->id}}">
                            <div class="mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control"  value="{{$sliderdata->title}}"  id="basic-default-title" placeholder="Enter Title" />

                             @error('title')
                             {{$message}}
                             @enderror
                            </div>
							<div class="mb-3">
                                <label class="form-label" for="slider_type">Slider Type</label>
								<select id="defaultSelect" class="form-select" name="slider_type">
                                        @if($faq_cat->slider_type == "slider_type1")
								<option value="slider_type1" selected>Slider 1</option>
									<option value="slider_type2">Slider 2</option>
                                       @else
									<option value="slider_type1">Slider 1</option>
									<option value="slider_type2" selected>Slider 2</option>
										@endif
                                  </select>
                                
                            </div>
							
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-image">Image</label>

                                <img src="{{url('/storage/app/'.$sliderdata->image)}}" class="mb-2 rounded" alt="" width="80px" height="80px"> </br>
                                <input type="file" name="image" class="form-control" id="basic-default-image"  />

                                @error('image')
                             {{$message}}
                             @enderror


                            </div>


                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- / Content -->
    @endsection
