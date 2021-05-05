@extends('admin.layout.master')


@section('admin-content')

    <div class="row">
        <div class="col-md-12 d-flex justify-content-start mt-4">
            <nav arial-label="breadcrumb">
                <ol style="background: unset;" class="breadcrumb">
                    <li class="breadcrumb-item">Booking</li>
                    <li class="breadcrumb-item active">Requested Bookings</li>

                </ol>
            </nav>
        </div>

        <div id="front_table" class="col-md-12 mb-5">
            <div class="card">
{{--                <div style="background: #1f3b55; " class="card-header">--}}
{{--                    <h4 style="color: white;  font-weight: 500;" class="text-center">List of latest bookings</h4>--}}
{{--                </div>--}}
                <div style="" class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number Of Rooms</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>Juma</td>
                            <td>Hamis</td>
                            <td>Jhdd@gmail.com</td>
                            <td>2</td>
                            <td>Paid</td>
                            <td>
                                <a href="{{url('hotel-administration/bookings/view')}}" class="btn btn-info">View</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Yg</td>
                            <td>Loko</td>
                            <td>Jjjhdd@gmail.com</td>
                            <td>3</td>
                            <td>Paid</td>
                            <td>
                                <a href="{{url('hotel-administration/bookings/view')}}" class="btn btn-info">View</a>
                            </td>
                        </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>

@stop

@section('admin-js')
    <script>

    </script>
@stop
