@extends('admin.layout.adminheaderfooter')
@section('page_title', 'Add News Update')

@section('add_news_update_page_active','active open')
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

                        <h5 class="mb-0">Add News Update</h5>

                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.insert/news-update')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control"  value=""  id="basic-default-title" placeholder="Enter Title" />

                             @error('title')
                             {{$message}}
                             @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Date</label>
                                <input type="date" id="" name="date" class="form-control"  value=""  id="basic-default-title" placeholder="Enter date" />

                             @error('date')
                             {{$message}}
                             @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="link">Link</label>
                                <input type="text" id="link" name="link" class="form-control"  value=""  id="basic-default-link" placeholder="Enter link" />

                             @error('link')
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
