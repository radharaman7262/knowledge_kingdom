@extends('admin.layout.adminheaderfooter')
@section('page_title', 'Setting')
@section('content')
    <style>
        .edit-pen {
            position: relative;
            top: 33px;
            right: 39px;
            background: #fff;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;
            padding: 7px;
            border-radius: 50%;

        }
    </style>

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <div class="row">
                <div class="col-md-4 mb-sm-3">
                    <div class="card">
                        <div class="p-3">

                            <ul class="list-group ">
                                <li class="list-group-item border-0" aria-current="true"><a href="#basic_info">Basic
                                        Information</a>
                                </li>
                                <li class="list-group-item border-0"><a href="#password_id">Password</a></li>

                            </ul>


                            {{-- <button>Add+</button> --}}
                        </div>



                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card bg-white mb-3" style="height:30vh">
                        <form id="profile-form" action="{{ route('admin.update-admin-setting') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class=" text-center rounded-top" style="height:25vh;padding-top:7%;background:#daecf3">
                                <img id="imgPreview"
                                    src="@if ($setting->admin_image == !null) {{ url('storage/app/' . $setting->admin_image) }} @else {{ asset('public/front-ui/assets/img/profile-blank.png') }} @endif"
                                    alt="" class="rounded-circle" height="110px" />



                                {{-- <img class="rounded-circle"  src="{{ asset('public/front-ui/assets/img/profile-blank.png') }}"
                            alt="" height="110px"> --}}
                                {{-- <input type="file" name="file"> --}}

                                <label for="photo" type="submit">

                                    <i class='bx bx-edit-alt edit-pen'></i>
                                </label>

                                <input type="file" id="photo" name="admin_image" style="display: none;">

                                {{-- <button type="submit" value="submit">submit</button> --}}

                            </div>
                        </form>




                    </div>

                    <div class="card mb-3" id="basic_info">
                        <div class="card-header d-flex justify-content-between align-items-center">

                            <h5 class="mb-0">Basic Information</h5>

                        </div>

                        <div class="card-body">
                            <form action="{{ route('admin.update-admin-setting') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                    class="bx bx-user"></i></span>
                                            <input type="text" name="name" class="form-control"
                                                id="basic-icon-default-fullname" value="{{ $setting->name }}"
                                                placeholder="John Doe" aria-label="John Doe"
                                                aria-describedby="basic-icon-default-fullname2" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                            <input type="email" name="email" id="basic-icon-default-email"
                                                class="form-control" value="{{ $setting->email }}" placeholder="john.doe"
                                                aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                                            <span id="basic-icon-default-email2"
                                                class="input-group-text">@example.com</span>
                                        </div>
                                        <div class="form-text">You can use letters, numbers & periods</div>
                                    </div>
                                </div>


                                <div class="row justify-content-end">
                                    <div class="col-sm-10">
                                        <input type="submit" name="submit2" class="btn btn-primary" value="Save">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="card mb-3" id="password_id">
                        <div class="card-header d-flex justify-content-between align-items-center">

                            <h5 class="mb-0">Password</h5>

                        </div>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block d-flex justify-content-between">
                            <strong>{{ $message }}</strong>
                            {{-- <button type="button" class="close" data-dismiss="alert">×</button> --}}
                            <a href="" type="button" class="close text-success" data-dismiss="alert"> X</a>
                        </div>
                        @endif
                        <div class="card-body">
                            <form action="{{ route('admin.update-admin-setting') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="basic-icon-default-fullname">Current
                                        Password</label>
                                    <div class="col-sm-8">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                    class='bx bx-lock-open'></i></span>
                                            <input type="text" name="old_password"
                                                class="form-control  @error('old_password') is-invalid @enderror"
                                                id="basic-icon-default-fullname" aria-label="John Doe"
                                                aria-describedby="basic-icon-default-fullname2" />
                                        </div>
                                        @error('old_password')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="basic-icon-default-fullname">New
                                        Password</label>
                                    <div class="col-sm-8">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                    class='bx bx-lock-open'></i></span>
                                            <input type="password" name="new_password"
                                                class="form-control @error('new_password') is-invalid @enderror"
                                                id="basic-icon-default-fullname" aria-label="John Doe"
                                                aria-describedby="basic-icon-default-fullname2" />
                                        </div>
                                        @error('new_password')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-sm-4 form-label" for="basic-icon-default-phone">Confirm
                                        Password</label>
                                    <div class="col-sm-8">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                    class='bx bx-lock-open'></i></span>
                                            <input type="password" id="basic-icon-default-phone"
                                                name="password_confirmation" class="form-control phone-mask"
                                                placeholder="" aria-label=""
                                                aria-describedby="basic-icon-default-phone2" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-sm-10">
                                        <input type="submit" name="submit3" class="btn btn-primary" value="Save">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>


        </div>
        <!-- / Content -->





        {{-- <script>
        imgInp.onchange = evt => {
      const [file] = imgInp.files
      if (file) {
        blah.src = URL.createObjectURL(file)
      }
      else{
        blah.src = URL.createObjectURL({{asset('public/front-ui/assets/img/profile-blank.png')}})

        // $('#blah').attr('src',{{ asset('public/front-ui/assets/img/profile-blank.png') }})
      }

    }

        </script> --}}
        {{-- <script>
            $("#avatar").click(function(){
                $.ajax({
                    type: "POST",
                    data: $('#avatar-form').serialize(),
                    url: "{{route('admin.update-admin-setting')}}",
                    success:function(data){
                        console.log(data);
                    },

                });
            });
        </script> --}}
    @endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $(document).ready(() => {
            $("#photo").change(function() {
                const file = this.files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(event) {
                        $("#imgPreview")
                            .attr("src", event.target.result);
                        document.getElementById("profile-form").submit();

                    };
                    reader.readAsDataURL(file);


                }



            });

        });
    </script>
