@extends('admin.layout.adminheaderfooter')
@section('page_title', 'Edit Finance Bank')
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

                        <h5 class="mb-0">Update Finance Bank</h5>

                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.update.finance_banks',$finance_data->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$finance_data->id}}">
                            <div class="mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control"  value="{{$finance_data->title}}"  id="basic-default-title" placeholder="Enter Title" />

                             @error('title')
                             {{$message}}
                             @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-image">Logo</label>

                                <img src="{{url('/storage/app/'.$finance_data->logo)}}" class="mb-2" alt="{{$finance_data->title}} logo" width="80px" height="80px"> </br>
                                <input type="file" name="logo" class="form-control" id="basic-default-image"  />

                                @error('logo')
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
