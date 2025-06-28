
@extends('admin.layout.adminheaderfooter')
@section('page_title', 'Seo Data')
@section('seo_active','active open')
@section('content')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">


              <!-- Basic Bootstrap Table -->


              <!-- Responsive Table -->
              <div class="card">
                <h5 class="card-header">SEO</h5>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block d-flex justify-content-between mx-2">
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
                        <th>Page Name</th>
                        <th>Meta Title</th>
                        <th>Meta Descripation</th>
                        <th>Meta Keyword</th>

                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                    @foreach($seo_data as $rows)
                      <tr>

                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$rows->page_name}}</td>
                        <td>{{$rows->meta_title}}</td>
                        <td>{{$rows->meta_descripation}}</td>
                        <td>{{$rows->meta_keyword}}</td>



                        <td><a href="{{route('admin.edit.seo',$rows->id)}}" class="btn btn-info"><i class='bx bx-edit'></i></a></td>
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
