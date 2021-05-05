@extends('admin.layout.master')


@section('admin-content')

    <div class="row">
        <div class="col-md-12 d-flex justify-content-between mt-4">
            <h4>Booking</h4>
            <nav arial-label="breadcrumb">
                <ol style="background: unset;" class="breadcrumb">
                    <li class="breadcrumb-item">Booking</li>
                    <li class="breadcrumb-item active">Cancelled Bookings</li>
                </ol>
            </nav>
        </div>

        <div id="front_table" class="col-md-12">
            <div class="card">
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
                            <td>Cancelled</td>
                            <td>
                                <a href="#" class="btn btn-info">View</a>
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
