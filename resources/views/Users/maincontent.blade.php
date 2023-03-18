<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card-header">
                <h3 class="card-title">All Feedback</h3>
            </div>


            @foreach ($feedback as $row)
            <div class="card card-primary">

                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                    <h5 class="card-title">{{ $row->name }}</h5>
                    <p class="card-text">{{ $row->feedback }}</p>

                </div>


            </div>
            @endforeach

            <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->

        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->



{{-- @extends('Users.useradmin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card-header">
                <h3 class="card-title">All Feedback</h3>
            </div>

            @foreach ($feedback as $row)
            <div class="card card-primary">

                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                    <h5 class="card-title">{{ $row->name }}</h5>
                    <p class="card-text">{{ $row->feedback }}</p>

                </div>


            </div>
            @endforeach
            <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->

        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->
@endsection



 --}}
