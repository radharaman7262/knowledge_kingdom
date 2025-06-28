
@extends('admin.layout.adminheaderfooter')
@section('page_title', 'Free test Series')
@section('free_active','active open')
@section('content')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">


              <!-- Basic Bootstrap Table -->


              <!-- Responsive Table -->
              <div class="card">
                <h5 class="card-header">Free Test</h5>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block d-flex justify-content-between">
                    <strong>{{ $message }}</strong>
                    {{-- <button type="button" class="close" data-dismiss="alert">×</button> --}}
                    <a href="" type="button" class="close text-success" data-dismiss="alert"> X</a>
                </div>
                @endif
                <div class="table-responsive text-nowrap mx-3">
                  <table class="table " id="myTable">
                    <thead>
                      <tr class="text-nowrap">
                        <th>#</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Email</th>


                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rows)
                      <tr>

                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$rows->name}}</td>
                        <td>{{$rows->phone}}</td>
                        <td>{{$rows->email}}</td>



                        <td><a class="btn btn-danger" href="#" onclick= deleteRecord("{{route('admin.delete.test',$rows->id)}}")><i class='bx bx-message-square-x' ></i></a></td>
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
