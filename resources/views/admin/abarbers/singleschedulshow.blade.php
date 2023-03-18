@extends('admin.useradmin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Current Booking Request</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->


                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer Name</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tbody>



                                @foreach ($schedul as $key => $row) 
                                    <tr>
                                        <th>{{ ++$key }}</th>
                                        <td>{{ $row->name }}</td>
                                        <th>{{ date('H:i', $row->s_time) }}</th>
                                        <th>{{ date('H:i', $row->e_time) }}</th>

                                        <td>
                                            <!-- <a href="{{ route('admin.barbarschedulupdate', $row->id) }}"
                                                class="btn btn-info">Update</a>
                                            <a href="{{ route('admin.barbarscheduldelete', $row->id) }}"
                                                class="btn btn-danger">Delete</a> -->
                                            @if ($row->slot == 1)
                                                <a href="{{ route('admin.slotactive', $row->id) }}"><i
                                                        class="fa fa-thumbs-up" style="font-size:40px;color:rgb(161, 215, 33)"></i></a>
                                            @else
                                                <a href="{{ route('admin.slotunactive', $row->id) }}"><i
                                                        class="fa fa-thumbs-down" style="font-size:40px;color:red"></i></a>
                                            @endif

                                    </tr>
                                @endforeach


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>

                                    <th>Customer Name</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>


            </div>
            <!--/.col (left) -->

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection


@section('default-section')
<h3 style="visibility: hidden">.</h3>
@endsection
