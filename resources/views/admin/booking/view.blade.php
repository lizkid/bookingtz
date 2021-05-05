@extends('admin.layout.master')

@section('admin-css')


@stop

@section('admin-content')

    <div class="row">
        <div class="col-md-12 d-flex justify-content-between mt-4">

            <nav arial-label="breadcrumb">
                <ol style="background: unset;" class="breadcrumb">
                    <li class="breadcrumb-item">Booking</li>
                    <li class="breadcrumb-item active">View Booking Details</li>
                </ol>
            </nav>

            <div id="back-container" class="col-md-12 mb-3 d-flex justify-content-end">
                <a class="back-btn " href="{{url('hotel-administration/bookings')}}"><i class="fas fa-arrow-circle-left pr-2"></i>Back</a>
            </div>

        </div>


        <div id="front_table" class="col-md-12">
            <div class="card">
                <div style="" class="card-body">

                    <div class="row">

                        <div class="col-md-6">
                            <table class="table table-bordered">

                                <tbody>
                                <tr>
                                    <td>First Name</td>
                                    <td>Hamis</td>
                                </tr>

                                <tr>
                                    <td>Last Name</td>
                                    <td>Hamis</td>
                                </tr>

                                <tr>
                                    <td>Email</td>
                                    <td>Hamis@gmail.com</td>
                                </tr>

                                <tr>
                                    <td>Booked Hotel</td>
                                    <td>Sea Cliff Hotel</td>
                                </tr>

                                <tr>
                                    <td>Number Of Rooms</td>
                                    <td>3</td>
                                </tr>

                                <tr>
                                    <td>Status</td>
                                    <td>Paid</td>
                                </tr>

                                <tr>
                                    <td>Number Of beds</td>
                                    <td>3</td>
                                </tr>

                                </tbody>

                            </table>
                        </div>

                        <div class="col-md-6">
                            <table class="table table-bordered">

                                <tbody>

                                <tr>
                                    <td>Number Of Adults</td>
                                    <td>3</td>
                                </tr>

                                <tr>
                                    <td>Number Of Children</td>
                                    <td>3</td>
                                </tr>

                                <tr>
                                    <td>Check In</td>
                                    <td>04/06/2021</td>
                                </tr>

                                <tr>
                                    <td>Check Out</td>
                                    <td>06/06/2021</td>
                                </tr>

                                <tr>
                                    <td>Time In</td>
                                    <td>2:00 PM</td>
                                </tr>

                                <tr>
                                    <td>Time Out</td>
                                    <td>2:00 PM</td>
                                </tr>
                                </tbody>

                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

@stop

@section('admin-js')
    <script>

    </script>
@stop
