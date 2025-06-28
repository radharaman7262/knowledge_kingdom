@extends('admin.layout.adminheaderfooter')
@section('page_title',' Add achievers')
@section('add_achievers_active','active open')
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

                            <h5 class="mb-0">Add Achievers</h5>

                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.insert.achievers') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="{{ old('name') }}" id="basic-default-name" placeholder="Enter name" />

                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-image">Image</label>


                                    <input type="file" name="image" class="form-control" id="basic-default-image" />

                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror


                                </div>


                            

                                <div class="mb-3">
                                    <label class="form-label" for="">Address</label>
                                    <input type="text" id="" name="address" class="form-control"
                                        value="{{ old('address') }}" id="basic-default-name"
                                        placeholder="Enter address" />
                                    @error('address')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- / Content -->
    @endsection
