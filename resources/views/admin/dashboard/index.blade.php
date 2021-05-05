@extends('admin.layout.master')

@section('admin-css')

    <style>

    </style>

@stop

@section('admin-content')

    <div class="row">
        <div class="col-md-12 d-flex justify-content-start mt-4">
            <nav arial-label="breadcrumb">
                <ol style="background: unset;" class="breadcrumb">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Home</li>
                </ol>
            </nav>
        </div>


        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-12 col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div id="Card-first" class="d-flex justify-content-sm-between">

                                <div>
                                    <i style="font-size: 50px; color: #0c5495; line-height: 50px;" class="fas fa-book"></i>
                                </div>

                                <div>
                                    <h3>555</h3>

                                    <p>BOOKINGS</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div id="Card-first" class="d-flex justify-content-sm-between">

                                <div>
                                    <i style="font-size: 50px; line-height: 50px; color: #0c5495;" class="fas fa-hotel"></i>
                                </div>

                                <div>
                                    <h3>89</h3>

                                    <p>ROOMS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div id="Card-first" class="d-flex justify-content-sm-between">

                                <div>
                                    <i style="color: #0c5495; font-size: 50px; line-height: 50px;" class="fas fa-gem"></i>
                                </div>

                                <div>
                                    <h3>5</h3>

                                    <p>ATTRACTIVE AREAS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div id="Card-first" class="d-flex justify-content-sm-between">

                                <div>
                                    <i style="color: #0c5495; font-size: 50px; line-height: 50px;" class="fas fa-users"></i>
                                </div>

                                <div>
                                    <h3>5000</h3>

                                    <p>USERS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>




        <div id="front_table" class="col-md-12 mt-5">
            <div class="card">
                <div style="background: #0c5495; " class="card-header">
                    <h4 style="color: white;  font-weight: 500;" class="text-center">List of latest bookings</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number Of Adults</th>
                            <th scope="col">Number Of Rooms</th>
                            <th scope="col">Number Of Children</th>

                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Hamis</td>
                            <td>Hamis</td>
                            <td>jhddk@gmail.com</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>

                        </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4>Annual Booking Report</h4>
                    <canvas id="myChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>


    </div>

@stop

@section('admin-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>

<script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Booking Requests Per Month',
                data: [200, 497, 189, 900, 250, 688, 204, 897, 129, 300, 150, 495],

                backgroundColor: 'rgba(0, 0, 0, 0)',

                borderColor: [

                    '#705c5c9e'
                ],
                borderWidth: 3
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

@stop
