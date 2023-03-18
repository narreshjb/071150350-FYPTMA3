@extends('admin.useradmin')

@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Barber List</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->


          <!-- /.card-header -->
          <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Set Working Hours</th>
                <th>Action</th>
                

              </tr>
              </thead>
              <tbody>



              @foreach ($barber as $key=>$row)
                  <tr>
                    <th>{{ ++$key }}</th>
                    <td>{{ $row->name }}</td>


                    <td>
                        <a href="{{ route('admin.barbarschedul',$row->id) }}" class="btn btn-info">Set Schedule</a>
                    </td>

                    <td>
                        <a href="{{ route('admin.barberunactive',$row->id) }}"class="btn btn-info">Unactive</a>

                    </td>
                  </tr>
              @endforeach


              </tbody>
              <tfoot>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Set Working Hours</th>
                <th>Action</th>
            
              </tr>
              </tfoot>
            </table>
          </div>

          <div  class="card-footer">
            <a href="{{ route('admin.barbermanualpage') }}"class="cardfooter">Add Barber</a>
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
