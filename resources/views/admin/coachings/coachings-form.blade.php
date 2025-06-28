@extends('admin.layout.adminheaderfooter')
@section('page_title',' Add Coachings')
@section('add_coachings_active','active open')
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

                            <h5 class="mb-0">Add Coachings</h5>

                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.insert.coachings') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label" for="">Title</label>
                                    <input type="text" id="" name="title" class="form-control"
                                        value="{{ old('title') }}" id="basic-default-title" placeholder="Enter title" />

                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-image">Logo</label>


                                    <input type="file" name="logo" class="form-control" id="basic-default-image" />

                                    @error('logo')
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
                                    <label class="form-label" for="short_desc">Short Description</label>
                                    <textarea name="short_desc" class="form-control" id="short_desc" >{{ old('short_desc') }}</textarea>

                                    @error('short_desc')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exam_detail">Exam Detail</label>
                                 {{-- <textarea name="exam_detail" class="form-control" id="exam_detail">{{ old('exam_detail') }}</textarea> --}}
                                 <textarea name="exam_detail" class="form-control" id="description" >{{ old('exam_detail') }}</textarea>

                                    @error('exam_detail')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
								      <div class="mb-3">
                                <label class="form-label" for="meta_title">Meta Title</label>
                                <input type="text" id="meta_title" name="meta_title" class="form-control"  value="" placeholder="Enter Meta Title" />

                             @error('meta_title')
                             {{$message}}
                             @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="meta_descripation">Meta Descripation</label>
                                <textarea class="form-control" name="meta_descripation" id="meta_descripation"  rows="5" placeholder="Enter Meta Descripation"></textarea>


                             @error('meta_descripation')
                             {{$message}}
                             @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="meta_keyword">Meta Keywords</label>
                                <textarea class="form-control" name="meta_keyword" id="meta_keyword"  placeholder="Enter Meta Keywords"></textarea>


                             @error('meta_keyword')
                             {{$message}}
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
