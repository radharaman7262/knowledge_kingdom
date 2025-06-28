@extends('admin.layout.adminheaderfooter')
@yield('page_title','Edit Coachings')
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

                            <h5 class="mb-0">Update Coachings</h5>

                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.update.coachings',$coachings->id)}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        value="{{ $coachings->title }}" id="basic-default-title" placeholder="Enter title" />

                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-logo">Logo</label>

<img src="{{url('storage/app/'.$coachings->logo)}}" class="mb-2" alt="" width="80px" height="80px"> </br>
                                    <input type="file" name="logo" class="form-control" id="basic-default-logo" />

                                    @error('logo')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror


                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-image">Image</label>

<img src="{{url('storage/app/'.$coachings->image)}}" class="mb-2" alt="" width="80px" height="80px"> </br>
                                    <input type="file" name="image" class="form-control" id="basic-default-image" />

                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror


                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="short_desc"> Short Description</label>
								    <textarea name="short_desc" class="form-control" id="short_desc" >{!!$coachings->short_desc !!}</textarea>
                                   
                                    @error('short_desc')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Exam Detail</label>
                                    <textarea name="exam_detail" class="form-control" id="description">{!! $coachings->exam_detail !!}</textarea>

                                    @error('exam_detail')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
						    <div class="mb-3">
                                <label class="form-label" for="meta_title">Meta Title</label>
                                <input type="text" id="meta_title" name="meta_title" class="form-control"  value="{{$coachings->meta_title}}" placeholder="Enter Meta Title" />

                             @error('meta_title')
                             {{$message}}
                             @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="meta_descripation">Meta Descripation</label>
                                <textarea class="form-control" name="meta_descripation" id="meta_descripation"  rows="5" placeholder="Enter Meta Descripation">{{$coachings->meta_descripation}}</textarea>


                             @error('meta_descripation')
                             {{$message}}
                             @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="meta_keyword">Meta Keywords</label>
                                <textarea class="form-control" name="meta_keyword" id="meta_keyword"  placeholder="Enter Meta Keywords">{{$coachings->meta_keyword}}</textarea>


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
