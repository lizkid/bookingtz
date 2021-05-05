@extends('layout.hotelMaster')

<link rel="stylesheet" href="{{asset('resources/css/hotelView/contacts.css')}}">

@section('css')

    #reserve-btn{
    background: #fcb90c;
    padding: 10px 40px;
    font-size: 20px;
    color: #6c5252;
    }

    #reserve-btn:hover{
    background: #e5b433;
    text-decoration: none;
    }

    #result-header img{
    height: 70vh;
    }

@stop

@section('content')

    <div id="result-header">
        <img class="d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="Picture">
    </div>

    <div class="container mt-5">

        <div class="mb-5 pb-5">

            <section  class="mb-5">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <img width="400" src="{{asset('resources/images/hotel/room2.jpg')}}">
                            </div>
                            <div class="col-md-4">
                                <h4>Room Name</h4>
                                <p>A warm blend of African and European decor greets visitors to this 62-sq-m/667-sq-ft
                                    suite with its one king bed.
                                </p>

                                <p>
                                    The bathroom includes abundant natural light, stand-alone tub and rain shower,
                                    while a 65 inch TV screen, wireless high-speed Internet and Regency Club access to a
                                    private lounge serving Continental breakfast, evening cocktails and hors d'oeuvres.
                                </p>

                            </div>
                            <div class="col-md-3 ">
                                <div style="float: right;">
                                    <h4>400,000 TZS</h4>
                                    <p>Per Night</p>
                                    <a href="{{url('hotel-view/booking/payment-procedures')}}" id="reserve-btn">Reserve</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section  class="mb-5">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <img width="400" src="{{asset('resources/images/hotel/room1.jpg')}}">
                            </div>
                            <div class="col-md-4">
                                <h4>Room Name</h4>
                                <p>A warm blend of African and European decor greets visitors to this 62-sq-m/667-sq-ft
                                    suite with its one king bed.
                                </p>

                                <p>
                                    The bathroom includes abundant natural light, stand-alone tub and rain shower,
                                    while a 65 inch TV screen, wireless high-speed Internet and Regency Club access to a
                                    private lounge serving Continental breakfast, evening cocktails and hors d'oeuvres.
                                </p>
                            </div>
                            <div class="col-md-3 ">
                                <div style="float: right;">
                                    <h4>400,000 TZS</h4>
                                    <p>Per Night</p>
                                    <a href="{{url('hotel-view/booking/payment-procedures')}}" id="reserve-btn">Reserve</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>

    </div>

@stop

@section('js')


@stop
