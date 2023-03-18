@extends('admin.useradmin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-12  align-items-center flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                        Customer Profile
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7">
                                <h2 class="lead"><b>{{ $customer->name }}</b></h2>

                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i
                                                class="fas fa-lg fa-building"></i></span> Email Address: {{ $customer->address }}</li>
                                    <li class="small"><span class="fa-li"><i
                                                class="fas fa-lg fa-phone"></i></span> Phone #: {{ $customer->phone }}</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                                <img src="{{ URL::to($customer->image) }}" alt="user-avatar" style="height: 80px"
                                    class="img-circle img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">

                    </div>
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
