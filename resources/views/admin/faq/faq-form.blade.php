@extends('admin.layout.adminheaderfooter')
@section('page_title',' Add Faqs')
@section('faqs_active','active open')
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

                            <h5 class="mb-0">Faqs</h5>

                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.insert/faqs')}}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="defaultSelect" class="form-label">Faq Category</label>
                                    <select id="defaultSelect" class="form-select" name="faq_cat">
                                        <option>Default select</option>
                                        @foreach (getDataFun('faq_categories','') as $faq_cat)
                                            <option value="{{ $faq_cat->id }}">{{ $faq_cat->title }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="question	">Question</label>
                                    <input type="text" id="question" name="question" class="form-control"
                                        value="{{ old('question') }}" id="basic-default-question" placeholder="Enter question" />

                                    @error('question')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>



                                <div class="mb-3">
                                    <label class="form-label" for="answer">Answer</label>
                                    <textarea id="answer" name="answer" class="form-control">{{ old('answer') }}</textarea>

                                    @error('answer')
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
