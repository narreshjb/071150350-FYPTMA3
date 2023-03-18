@extends('Users.useradmin')

@section('content')
    <div class="container tbl-container">
        <div class="row tbl-fixed">
            <!-- left column -->
            <div class="">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Barber Schedule</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->


                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>9AM to 10 AM</th>
                                    <th>10AM to 11 AM</th>
                                    <th>11AM to 12 PM</th>
                                    <th>12PM to 1 PM</th>
                                    <th>1PM to 2 PM</th>
                                    <th>2PM to 3 PM</th>
                                    <th>3PM to 4PM</th>
                                    <th>4PM to 5PM</th>
                                    <th>5PM to 6PM</th>
                                    <th>6PM to 7PM</th>
                                    <th>7PM to 8PM</th>
                                    <th>8PM to 9PM</th>
                                    <th>Action</th>


                                </tr>
                            </thead>

                            @foreach ($schedul as $row)
                                <tbody>
                                    @if ($loop->iteration == 1)
                                        @foreach ($row as $key => $row1)
                                            @if ($loop->iteration == 1)
                                                <th>{{ ++$key }}</th>
                                                <th>{{ $row1->name }}</th>

                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 2)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 3)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 4)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 5)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 6)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 7)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 8)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 9)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 10)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 11)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 12)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @endif
                                        @endforeach


                                        <td>
                                            <a href="{{ route('customer.apointmentpage', $row1->b_id) }}"
                                                class="btn btn-info">Apointment</a>
                                        </td>
                                    @elseif ($loop->iteration == 2)
                                        @foreach ($row as $key => $row1)
                                            @if ($loop->iteration == 1)
                                                <th>{{ ++$key+1 }}</th>
                                                <th>{{ $row1->name }}</th>

                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 2)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 3)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 4)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 5)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 6)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 7)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 8)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 9)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 10)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 11)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 12)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @endif
                                        @endforeach
                                        <td>
                                            <a href="{{ route('customer.apointmentpage', $row1->b_id) }}"
                                                class="btn btn-info">Apointment</a>
                                        </td>
                                    @elseif ($loop->iteration == 3)
                                        @foreach ($row as $key => $row1)
                                            @if ($loop->iteration == 1)
                                                <th>{{ ++$key+2 }}</th>
                                                <th>{{ $row1->name }}</th>

                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 2)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 3)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 4)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 5)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 6)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 7)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 8)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 9)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 10)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 11)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 12)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @endif
                                        @endforeach
                                        <td>
                                            <a href="{{ route('customer.apointmentpage', $row1->b_id) }}"
                                                class="btn btn-info">Apointment</a>
                                        </td>
                                    @elseif ($loop->iteration == 4)
                                        @foreach ($row as $key => $row1)
                                            @if ($loop->iteration == 1)
                                                <th>{{ ++$key+3 }}</th>
                                                <th>{{ $row1->name }}</th>

                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 2)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 3)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 4)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 5)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 6)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 7)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 8)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 9)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 10)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 11)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 12)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @endif
                                        @endforeach
                                        <td>
                                            <a href="{{ route('customer.apointmentpage', $row1->b_id) }}"
                                                class="btn btn-info">Apointment</a>
                                        </td>
                                    @elseif ($loop->iteration == 5)
                                        @foreach ($row as $key => $row1)
                                            @if ($loop->iteration == 1)
                                                <th>{{ ++$key+4 }}</th>
                                                <th>{{ $row1->name }}</th>

                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 2)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 3)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 4)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 5)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 6)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 7)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 8)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 9)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 10)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 11)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 12)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @endif
                                        @endforeach
                                        <td>
                                            <a href="{{ route('customer.apointmentpage', $row1->b_id) }}"
                                                class="btn btn-info">Apointment</a>
                                        </td>
                                    @elseif ($loop->iteration == 6)
                                        @foreach ($row as $key => $row1)
                                            @if ($loop->iteration == 1)
                                                <th>{{ ++$key+5 }}</th>
                                                <th>{{ $row1->name }}</th>

                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 2)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 3)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 4)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 5)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 6)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 7)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 8)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 9)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 10)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 11)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @elseif($loop->iteration == 12)
                                                @if ($row1->duration == 60)
                                                    @if ($row1->slot == 0)
                                                        <th>Unavailable</th>
                                                    @else
                                                        <th>Available</th>
                                                    @endif
                                                @else
                                                    <th>Booked</th>
                                                @endif
                                            @endif
                                        @endforeach
                                        <td>
                                            <a href="{{ route('customer.apointmentpage', $row1->b_id) }}"
                                                class="btn btn-info">Apointment</a>
                                        </td>
                                    @endif
                                </tbody>
                            @endforeach

                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>9AM to 10 AM</th>
                                    <th>10AM to 11 AM</th>
                                    <th>11AM to 12 PM</th>
                                    <th>12PM to 1 PM</th>
                                    <th>1PM to 2 PM</th>
                                    <th>2PM to 3 PM</th>
                                    <th>3PM to 4PM</th>
                                    <th>4PM to 5PM</th>
                                    <th>5PM to 6PM</th>
                                    <th>6PM to 7PM</th>
                                    <th>7PM to 8PM</th>
                                    <th>8PM to 9PM</th>
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
