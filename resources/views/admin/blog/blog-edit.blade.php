@extends('admin.layout.adminheaderfooter')
@section('page_title','Edit Blog')
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

                            <h5 class="mb-0">Update Blog</h5>

                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.update.blog',$blog_data->id)}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        value="{{ $blog_data->title }}" id="basic-default-title" placeholder="Enter title" />

                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-image">Banner</label>

                                    <img src="{{url('storage/app/'.$blog_data->banner)}}" class="mb-2" alt="" width="80px" height="80px"> </br>

                                    <input type="file" name="banner" class="form-control" id="basic-default-image" />

                                    @error('banner')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror


                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="">date</label>
                                    <input type="date" id="" name="date" class="form-control"
                                        value="{{ $blog_data->date }}" id="basic-default-name"
                                        placeholder="Enter date" />
                                    @error('date')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control">{{ $blog_data->description }}</textarea>

                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
							   <div class="mb-3">
                                <label class="form-label" for="meta_title">Meta Title</label>
                                <input type="text" id="meta_title" name="meta_title" class="form-control"  value="{{$blog_data->meta_title}}" placeholder="Enter Meta Title" />

                             @error('meta_title')
                             {{$message}}
                             @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="meta_descripation">Meta Descripation</label>
                                <textarea class="form-control" name="meta_descripation" id="meta_descripation"  rows="5" placeholder="Enter Meta Descripation">{{$blog_data->meta_descripation}}</textarea>


                             @error('meta_descripation')
                             {{$message}}
                             @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="meta_keyword">Meta Keywords</label>
                                <textarea class="form-control" name="meta_keyword" id="meta_keyword"  placeholder="Enter Meta Keywords">{{$blog_data->meta_keyword}}</textarea>


                             @error('meta_keyword')
                             {{$message}}
                             @enderror
                            </div>

                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- / Content -->
    @endsection
