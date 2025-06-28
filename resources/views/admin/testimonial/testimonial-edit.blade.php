@extends('admin.layout.adminheaderfooter')
@yield('page_title','Edit Testimonial')
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

                            <h5 class="mb-0">Update Testimonial</h5>

                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.update.testimonial',$testimonial->id)}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="{{ $testimonial->name }}" id="basic-default-name" placeholder="Enter name" />

                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-image">Image</label>

<img src="{{url('storage/app/'.$testimonial->image)}}" class="mb-2" alt="" width="80px" height="80px"> </br>
                                    <input type="file" name="image" class="form-control" id="basic-default-image" />

                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror


                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control">{!! $testimonial->description !!}</textarea>

                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="address">Address</label>
                                    <input type="text" id="address" name="address" class="form-control"
                                        value="{{ $testimonial->address }}" id="basic-default-name"
                                        placeholder="Enter address" />
                                    @error('address')
                                        <p class="text-danger">{{ $message }}</p>
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
