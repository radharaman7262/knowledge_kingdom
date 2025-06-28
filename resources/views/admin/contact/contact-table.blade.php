@extends('admin.layout.adminheaderfooter')
@section('page_title', 'Contact')
@section('contact_page_active', 'active open')
@section('content')

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <!-- Basic Bootstrap Table -->


            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Contact</h5>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block d-flex justify-content-between">
                        <strong>{{ $message }}</strong>
                        {{-- <button type="button" class="close" data-dismiss="alert">×</button> --}}
                        <a href="" type="button" class="close text-success" data-dismiss="alert"> X</a>
                    </div>
                @endif
                <div class="table-responsive text-nowrap mx-3">
                    <table class="table " id="myDataTable">
                        <thead>
                            <tr class="text-nowrap">
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date & Time</th>
                                <th>Status</th>



                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $rows)
                                <tr>

                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $rows->name }}</td>
                                    <td>{{ $rows->phone }}</td>
                                    <td>{{ $rows->email }}</td>
                                    <td>{!! $rows->subject !!}</td>
                                    <td>{!! $rows->message !!}</td>
                                    <td>{{ $rows->created_at }}</td>
                                    <td><?php if ($rows->status == 0) {
                                        echo "<p class='badge bg-info text-light'>Unseen</p>";
                                    } else {
                                        echo "<p class='badge bg-success text-light'>Seen</p>";
                                    } ?></td>


                                    <td>
                                        <?php if ($rows->status == 1) { ?>

                                        <a href="#" class="btn btn-danger badge"
                                            onclick=deleteRecord("{{ route('admin.delete.faq-category', $rows->id) }}")><i
                                                class="fas fa-trash-alt"></i> Delete</a>


                                        <?php
    } else { ?>

                                        <a href="#" id="id-approve"
                                            onclick="approveFunction(<?= $rows->id ?>,<?= $rows->status ?>)"
                                            class="btn btn-success badge"><i class="fas fa-edit"></i>&nbsp;Seen</a>


                                        <a href="#" class="btn btn-danger badge"
                                            onclick=deleteRecord("{{ route('admin.delete.faq-category', $rows->id) }}")><i
                                                class="fas fa-trash-alt"></i> Delete</a>
                                        <?php
    }
    ?>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Responsive Table -->


            <!-- delete model -->
            <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h4 class="modal-title text-start" id="myModalLabel">Delete
                                Confirmation</h4>
                            {{-- <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;</button> --}}

                        </div>
                        <div class="modal-body">
                            <p>Are you sure want to delete this item?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a id="delete_row" class="btn btn-danger btn-ok">Delete</a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- / Content -->

    @endsection

    <script>
        function deleteRecord(id) {


            $("#delete_row").attr("href", id);
            $("#confirm").modal("show");
        }
    </script>

<script>
    function approveFunction(id,status) {

        $.ajax({

            url: "{{route('admin.contact.ajax')}}",
            method: "POST",
            data: {
                cont_id: id,
                cont_status: status,
                _token: "{{ csrf_token() }}",
            },
            success: function(responce) {
                if (responce == 1) {
                    alert("seen");
                    location.reload();
                        } else {
                            location.reload();
                        }

            }
        });

    }
</script>
