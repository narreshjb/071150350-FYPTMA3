@extends('Users.useradmin')

@section('content')
@include('sweetalert::alert')
    <div class="container-fluid">

        <div class="row">
            <!-- left column -->
            <div class="col-12">
                <!-- general form elements -->
                <div class="card card-primary">


                    <div class="card-header">
                        <h3>Feedback</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session()->has('success'))
                    <strong class="text-success">{{ session()->get('success') }}</strong>
                    @endif


                    <form method="POST" action="{{ route('customer.feedbackpost') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}"
                                    id="exampleInputEmail1" placeholder="Enter name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Feedback</label>
                                <textarea  class="form-control" name="feedback"
                                id="exampleFormControlTextarea1" placeholder="Enter feedback" rows="3"></textarea>
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
