@extends('admin.useradmin')

@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Booking Reschedule</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->


          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>#</th>
                <th>Barber Name</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Action</th>


              </tr>
              </thead>
              <tbody>



              @foreach ($barber as $key=>$row)
                  <tr>
                    <th>{{ ++$key }}</th>
                    <th>{{ $row->name }}</th>
                    <th>{{ date("H:i",$row->s_time) }}</th>
                    <th>{{ date("H:i",$row->e_time) }}</th>

                    <td>
                        @if ($row->duration==60)
                        <a href="{{ route('admin.customerbookingconfirm',$row->id) }}" class="btn btn-info">Confirm</a>
                        @else
                        <a href="{{ route('admin.customerbookingcancel',$row->id) }}" class="btn btn-info">Cancel</a>
                        @endif

                    </td>
                  </tr>
              @endforeach


              </tbody>
              <tfoot>
              <tr>
                <th>#</th>
                <th>Name</th>
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
