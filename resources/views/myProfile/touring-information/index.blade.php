@extends('layout.frontMaster')

@section('css')

    #main-content{
    margin-top: 150px;
    }


    #services li{
    font-size: 14px;
    margin-right: 40px;
    border-bottom: 1px dashed #28a745;
    color: #28a745;

    }

    #debit-credit, #paypal{
    display: none;
    }


@endsection

@section('content')

    <div id="main-content" class="container">

        <div  class="row">

            <div class="col-md-12">

                <h4>Touring Information</h4>

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

@endsection

@section('js')

@endsection
