@extends('admin.useradmin')

@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add Barber</h3>
          </div>


          <!-- /.card-header -->
          <!-- form start -->
          <form method="POST" action="{{ route('admin.barbermanualpost') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">

              <div class="form-group">
                <label for="exampleInputEmail1">Enter name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter name">
              </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

        <!-- general form elements -->

        <!-- /.card -->


        <!-- /.card -->
        <!-- Horizontal Form -->

        <!-- /.card -->

      </div>
      <!--/.col (left) -->

    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->

@endsection

@section('default-section')
<h3 style="visibility: hidden">.</h3>
@endsection
