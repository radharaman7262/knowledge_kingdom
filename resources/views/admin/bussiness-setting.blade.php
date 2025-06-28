@extends('admin.layout.adminheaderfooter')
@section('page_title', 'Bussiness Setting')

@section('bussiness_active', 'active open')
@section('content')


    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl-8 col-md-8 mx-auto">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-center align-items-center">
                            <h5 class=" mb-0">Bussiness Setting</h5>
                            <!-- <small class="text-muted float-end">Default label</small> -->
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.update-bussiness-setting') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-site-name">Site Name</label>
                                    <input type="text" name="site_name" value="{{ $busssinss_setting->site_name }}"
                                        class="form-control" id="basic-default-site-name" placeholder="John Doe" />
                                </div>
                                <div class="row">

                                    <div class="col-6 mb-3">
                                        <label class="form-label" for="basic-default-favicon">Favicon</label>
                                        <img src="{{ url('storage/app/' . $busssinss_setting->favicon) }}" class="rounded ps-3 mb-2"
                                            alt="favicon" height="80px" width="100px">
                                        <input type="file" name="favicon" class="form-control" id="basic-default-favicon" />

                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label" for="basic-default-logo">Logo</label>
                                        <img src="{{ url('storage/app/' . $busssinss_setting->logo) }}" class="rounded ps-3 mb-2"
                                            alt="logo" height="80px" width="100px">
                                        <input type="file" name="logo" class="form-control" id="basic-default-logo" />
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-6 mb-3">
                                        <label class="form-label" for="basic-default-email-1">Email 1</label>
                                        <div class="input-group input-group-merge">
                                            <input type="email" name="email_1" value="{{ $busssinss_setting->email_1 }}"
                                                id="basic-default-email-1" class="form-control" placeholder="john.doe"
                                                aria-label="john.doe" aria-describedby="basic-default-email2" />
                                            <span class="input-group-text" id="basic-default-email2">@example.com</span>
                                        </div>
                                        <div class="form-text">You can use letters, numbers & periods</div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label" for="basic-default-email-2">Email 2</label>
                                        <div class="input-group input-group-merge">
                                            <input type="email" name="email_2" value="{{ $busssinss_setting->email_2 }}"
                                                id="basic-default-email-2" class="form-control" placeholder="john.doe"
                                                aria-label="john.doe" aria-describedby="basic-default-email2" />
                                            <span class="input-group-text" id="basic-default-email2">@example.com</span>
                                        </div>
                                        <div class="form-text">You can use letters, numbers & periods</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label class="form-label" for="basic-default-phone-1">Phone No 1</label>
                                        <input type="text" name="phone_1" value="{{ $busssinss_setting->phone_1 }}"
                                            id="basic-default-phone-1" class="form-control phone-mask"
                                            placeholder="658 799 8941" />
                                    </div>

                                    <div class="mb-3 col-6">
                                        <label class="form-label" for="basic-default-phone-2">Phone No 2</label>
                                        <input type="text" name="phone_2" value="{{ $busssinss_setting->phone_2 }}"
                                            id="basic-default-phone-2" class="form-control phone-mask"
                                            placeholder="658 799 8941" />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-address">Address</label>
                                    <textarea id="basic-default-address" name="address" class="form-control"
                                        placeholder="Hi, Do you have a moment to talk Joe?">{{ $busssinss_setting->address }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-map">Map</label>
                                    <textarea id="basic-default-map" name="map" class="form-control"
                                        placeholder="Hi, Do you have a moment to talk Joe?">{{ $busssinss_setting->map }}</textarea>
                                </div>
								                          <div class="row">
                                    <div class="mb-3 col-6">
                                        <label class="form-label" for="basic-default-phone-1">Phone No 1</label>
                                        <input type="text" name="phone_1" value="{{ $busssinss_setting->phone_1 }}"
                                            id="basic-default-phone-1" class="form-control phone-mask"
                                            placeholder="658 799 8941" />
                                    </div>

                                    <div class="mb-3 col-6">
                                        <label class="form-label" for="basic-default-phone-2">Phone No 2</label>
                                        <input type="text" name="phone_2" value="{{ $busssinss_setting->phone_2 }}"
                                            id="basic-default-phone-2" class="form-control phone-mask"
                                            placeholder="658 799 8941" />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-address">Address</label>
                                    <textarea id="basic-default-address" name="address" class="form-control"
                                        placeholder="Hi, Do you have a moment to talk Joe?">{{ $busssinss_setting->address }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-map">Map</label>
                                    <textarea id="basic-default-map" name="map" class="form-control"
                                        placeholder="Hi, Do you have a moment to talk Joe?">{{ $busssinss_setting->map }}</textarea>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label class="form-label" for="facebook">Facebook</label>
                                        <input type="text" name="facebook" value="{{ $busssinss_setting->facebook }}"
                                            class="form-control" id="facebook" placeholder="www.facebook.com" />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label" for="twitter">Twitter</label>
                                        <input type="text" name="twitter" value="{{ $busssinss_setting->twitter }}"
                                            class="form-control" id="twitter" placeholder="www.twitter.com" />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label" for="instagram">Instagram</label>
                                        <input type="text" name="instagram" value="{{ $busssinss_setting->instagram }}"
                                            class="form-control" id="instagram" placeholder="www.instagram.com" />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label" for="linkedin">LinkedIn</label>
                                        <input type="text" name="linkedin" value="{{ $busssinss_setting->linkedin }}"
                                            class="form-control" id="linkedin" placeholder="www.linkedin.com" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">

                                    <input type="submit" name="submit" class="btn btn-primary " value="Save">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- #################### -->


            </div>
        </div>
        <!-- / Content -->
    @endsection
