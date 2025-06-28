
@extends('admin.layout.adminheaderfooter')
@section('page_title','Testimonial')
@section('testimonial_active','active open')
@section('content')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">


              <!-- Basic Bootstrap Table -->


              <!-- Responsive Table -->
              <div class="card">
                <div class="d-flex justify-content-between">

                    <h5 class="card-header">All Testimonials</h5>


                    {{-- <button>Add+</button> --}}
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block d-flex justify-content-between mx-2">
                        <strong>{{ $message }}</strong>
                        {{-- <button type="button" class="close" data-dismiss="alert">×</button> --}}
                        <a href="" type="button" class="close text-success" data-dismiss="alert"> X</a>
                    </div>
                    @endif
                <div class="table-responsive text-nowrap mx-3">
                  <table class="table" id="myDataTable">
                    <thead>
                      <tr class="text-nowrap">
                        <th>#</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Descripation</th>
                        <th>Address</th>

                        <th>Status</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                    @foreach($testimonial as $rows)
                      <tr>

                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$rows->name}}</td>
                        <td><img src="{{url('/storage/app/'.$rows->image)}}" width=100 height=100></td>
                        <td>{!!$rows->description!!}</td>
                        <td>{{$rows->address}}</td>

                        <td>  <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"  @if($rows->status == 1) checked @endif onclick="updateStatus({{$rows->id}},{{$rows->status}},'testimonials','status')" />

                          </div></td>
                        <td><a href="{{url('admin/edit/testimonial/'.$rows->id)}}" class="btn btn-info"><i class='bx bx-edit'></i></a>&nbsp;<a class="btn btn-danger" href="#" onclick= deleteRecord("{{route('admin.delete.testimonial',$rows->id)}}")><i class='bx bx-message-square-x' ></i></a></td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->
            </div>
            <!-- / Content -->

          @endsection
