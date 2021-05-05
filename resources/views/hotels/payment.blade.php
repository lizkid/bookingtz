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

            <div style="padding-left: 0!important; padding-right: 0!important;" class="col-md-12 mt-3">

                <div class="row">

                    <div class="col-md-3">
                      @include('partial.booking.bookingSummary')
                    </div>

                    <div class="col-md-9">

                        <form>

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="d-flex justify-content-start">
                                        <img width="150" height="150" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="latest product">

                                        <div class="ml-5">
                                            <h4>Hotel Name</h4>

                                            <ul id="services">
                                                <li>Pool</li>
                                                <li>Free parking</li>
                                                <li>Spa</li>
                                                <li>Gym</li>
                                                <li>Bar</li>
                                            </ul>

                                            <p>
                                                Location
                                            </p>
                                            <p>
                                                Ratings: Very good
                                            </p>
                                            <p style=" color: #e58926;">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>

                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <h5 class="py-2">Enter your details to pay</h5>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Country</label>
                                                    <select class="form-control">
                                                        <option>Tanzania</option>
                                                        <option>Kenya</option>
                                                        <option>Uganda</option>
                                                        <option>USA</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" id="inputPassword4">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <h5 class="py-2">Payment method</h5>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row border-bottom">

                                                <div class="form-group col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="debit-radio" value="option1">
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Debit/Credit card
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="paypal-radio" value="option1">
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Paypal
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div id="paypal">
                                                <h4>Pay with paypal</h4>
                                                <p>You will be redirected to paypal website to continue</p>
                                            </div>

                                            <div id="debit-credit">

                                                <h4>Allowed cards</h4>

                                                <div id="img-hover" class="d-flex justify-content-start mt-2">
                                                    <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/mastercard.png')}}" alt="latest product">
                                                    <img class="img-thumbnail ml-5" width="100" height="100" src="{{asset('resources/images/hotel/visa.png')}}" alt="latest product">
                                                </div>

                                                <div class="form-row">

                                                    <div class="form-group col-md-6">
                                                        <label>Card Name</label>
                                                        <input type="text" class="form-control" id="inputPassword4">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Card Number</label>
                                                        <input type="text" class="form-control" id="inputPassword4">
                                                    </div>

                                                </div>

                                                <div class="form-row">

                                                    <div class="form-group col-md-6">
                                                        <label>Expiration Date</label>
                                                        <input type="text" class="form-control" id="inputPassword4">
                                                    </div>

                                                    <div class="form-group col-md-3">
                                                        <label>Card Type</label>
                                                        <select class="form-control">
                                                            <option selected disabled>--select card--</option>
                                                            <option>Master card</option>
                                                            <option>Visa card</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3">
                                                        <label>Cvc</label>
                                                        <input type="text" class="form-control" id="inputPassword4">
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <p>
                                            Your booking is directly with Tembo House Hotel and by completing this booking
                                            you agree to the booking conditions, general terms, and privacy policy.
                                        </p>
                                    </div>

                                    <div class="mt-3">
                                        <button id="book-btn" type="submit" class="btn btn-info">Complete booking</button>
                                    </div>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

@section('js')

    <script>
        $(document).ready(function (){
           $("#debit-radio").click(function (){
               $("#paypal").fadeOut('slow')
               $("#paypal").hide()
              $("#debit-credit").fadeIn('slow')
              $("#debit-credit").show()
           });

            $("#paypal-radio").click(function (){
                $("#debit-credit").fadeOut('slow')
                $("#debit-credit").hide()
                $("#paypal").fadeIn('slow')
                $("#paypal").show()
            });
        });
    </script>

@endsection
