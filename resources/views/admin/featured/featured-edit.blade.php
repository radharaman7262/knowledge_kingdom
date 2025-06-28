@extends('admin.layout.adminheaderfooter')
@section('page_title', 'Edit Feature')
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

                        <h5 class="mb-0">Update Home Slider</h5>

                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.update.featured',$featured_data->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$featured_data->id}}">
                            <div class="mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control"  value="{{$featured_data->title}}"  id="basic-default-title" placeholder="Enter Title" />

                             @error('title')
                             {{$message}}
                             @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-image">Icon</label>

                                <img src="{{url('/storage/app/'.$featured_data->icon)}}" class="mb-2" alt="{{$featured_data->title}} icon" width="80px" height="80px"> </br>
                                <input type="file" name="icon" class="form-control" id="basic-default-image"  />

                                @error('icon')
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
