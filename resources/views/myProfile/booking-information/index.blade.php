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

               <h4>Personal Information</h4>

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
                               <td>Phone</td>
                               <td>+255 755 565 422</td>
                           </tr>

                           <tr>
                               <td>Country</td>
                               <td>Tanzania</td>
                           </tr>

                           <tr>
                               <td>Booked Hotel</td>
                               <td>Sea Cliff Hotel</td>
                           </tr>

                           <tr>
                               <td>Number Of Rooms</td>
                               <td>3</td>
                           </tr>


                           </tbody>

                       </table>
                   </div>

                   <div class="col-md-6">
                       <table class="table table-bordered">

                           <tbody>

                           <tr>
                               <td>Status</td>
                               <td>Paid</td>
                           </tr>

                           <tr>
                               <td>Number Of beds</td>
                               <td>3</td>
                           </tr>

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

            <div class="col-md-12">

                <h4>Payment Information</h4>

                <div class="row">

                    <div class="col-md-6">
                        <table class="table table-bordered">

                            <tbody>
                            <tr>
                                <td>Payment Type</td>
                                <td>Debit/Credit Card</td>
                            </tr>

                            <tr>
                                <td>Card Name</td>
                                <td>4444 6554 7444</td>
                            </tr>

                            <tr>
                                <td>Expiration Date</td>
                                <td>23/4/2025</td>
                            </tr>

                            </tbody>

                        </table>
                    </div>

                    <div class="col-md-6">
                        <table class="table table-bordered">

                            <tbody>

                            <tr>
                                <td>CVC</td>
                                <td>333</td>
                            </tr>

                            <tr>
                                <td>Card Type</td>
                                <td>Master Card</td>
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
