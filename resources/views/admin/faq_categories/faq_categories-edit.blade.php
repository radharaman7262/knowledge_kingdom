@extends('admin.layout.adminheaderfooter')
@section('page_title', 'Edit Faq Category')
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

                        <h5 class="mb-0">Update Faq Category</h5>

                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.update.faq-category',$faqCat_data->id)}}" method="POST" >
                            @csrf

                            <input type="hidden" name="id" value="{{$faqCat_data->id}}">
                            <div class="mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control"  value="{{$faqCat_data->title}}"  id="basic-default-title" placeholder="Enter Title" />

                             @error('title')
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
