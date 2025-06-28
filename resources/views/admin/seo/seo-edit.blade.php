@extends('admin.layout.adminheaderfooter')
@section('page_title', 'Edit SEO')
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

                        <h5 class="mb-0">Update SEO</h5>

                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.update.seo',$seo_data->id)}}" method="POST" >
                            @csrf

                            <input type="hidden" name="id" value="{{$seo_data->id}}">
                            <div class="mb-3">
                                <label class="form-label" for="page_name">Page Name</label>
                                <input type="text" id="page_name" name="page_name" class="form-control"  value="{{$seo_data->page_name}}"  id="basic-default-page_name" placeholder="Enter Title" />

                             @error('title')
                             {{$message}}
                             @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="meta_title">Meta Title</label>
                                <input type="text" id="meta_title" name="meta_title" class="form-control"  value="{{$seo_data->meta_title}}" placeholder="Enter Meta Title" />

                             @error('meta_title')
                             {{$message}}
                             @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="meta_descripation">Meta Descripation</label>
                                <textarea class="form-control" name="meta_descripation" id="meta_descripation"  rows="5" placeholder="Enter Meta Descripation">{{$seo_data->meta_descripation}}</textarea>


                             @error('meta_descripation')
                             {{$message}}
                             @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="meta_keyword">Meta Keywords</label>
                                <textarea class="form-control" name="meta_keyword" id="meta_keyword"  placeholder="Enter Meta Keywords">{{$seo_data->meta_keyword}}</textarea>


                             @error('meta_keyword')
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
