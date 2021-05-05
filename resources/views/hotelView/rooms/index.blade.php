@extends('layout.hotelMaster')

@section('css')

    #presidential-amenities, #royal-amenities, #king-bed-amenities, #kings-bed-amenities, #king-bed-sea-amenities, #kings-bed-sea-amenities{
    display: none;
    }

    #royal-btn, #presidential-btn, #king-bed-btn, #kings-bed-btn, #king-bed-sea-btn, #kings-bed-sea-btn{
    background: #0d0d0d;
    color: #f68721;
    width: 150px;
    text-align: center;
    padding: 10px;
    cursor: pointer;
    transition: 0.2s ease-in-out;
    }

    #royal-btn:hover, #presidential-btn:hover, #king-bed-btn:hover, #kings-bed-btn:hover, #king-bed-sea-btn:hover, #kings-bed-sea-btn:hover{
    background: #f68721;
    color: white;
    }



@stop

@section('content')

    <div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="First slide">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div>
            @include('partial.hotelNavigation.booking')
        </div>

    </div>

    <div class="container">

        <section class="mt-5 mb-5 pb-5 text-center">

            <h2>ROOMS</h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type
                specimen book.
            </p>

        </section>

        <section class="mt-5">
            <div class="row">

                <div class="col-md-6 mb-3">
                    <div class="card" >
                        <img class="card-img-top d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="Bed">
                        <div class="card-body">
                            <h5>Royal Suite</h5>
                            <p>
                                A warm blend of African and European decor greets visitors to this 97-sq-m/1,044-sq-ft
                                7th-floor suite with its one king bed featuring with your choice of pillows from our pillow store.
                            </p>

                            <h6 id="royal-btn" >View Amenities</h6>

                            <div id="royal-amenities" >

                                <div class="row">
                                    <div class="col-md-6">
                                        <p><i class="fas fa-angle-right pr-2"></i>Dressing room</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Living room with dining area</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Full kitchen</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Separate guest bathroom</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Complimentary wireless Internet</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><i class="fas fa-angle-right pr-2"></i>24-hour room service</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Flat-screen TV with satellite channels </p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Air conditioning</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Work desk and chair</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Tea/coffee making station</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>

                <div class="col-md-6 mb-3">
                    <div class="card" >
                        <img class="card-img-top d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="Bed">
                        <div class="card-body">
                            <h5>Presidential Suite</h5>
                            <p>
                                A warm blend of African and European decor greets visitors to this 97-sq-m/1,044-sq-ft
                                7th-floor suite with its one king bed featuring with your choice of pillows from our pillow store.
                            </p>

                            <h6 id="presidential-btn" >View Amenities</h6>

                            <div id="presidential-amenities">

                                <div class="row">
                                    <div class="col-md-6">
                                        <p><i class="fas fa-angle-right pr-2"></i>Dressing room</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Living room with dining area</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Full kitchen</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Separate guest bathroom</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Complimentary wireless Internet</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><i class="fas fa-angle-right pr-2"></i>24-hour room service</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Flat-screen TV with satellite channels </p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Air conditioning</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Work desk and chair</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Tea/coffee making station</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section>

        <section class="mt-5">
            <div class="row">

                <div class="col-md-6 mb-3">
                    <div class="card">

                        <img class="card-img-top d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="Bed">

                        <div class="card-body">
                            <h5>1 King Bed</h5>
                            <p>A warm blend of African and European decor greets visitors to this 31-sq-m/334-sq-ft
                                guestroom with its one king bed and views of Dar es Salaam city. The bathroom includes
                                abundant natural light, stand-alone tub and rain shower, while a 55 inch TV screen and
                                wireless high-speed Internet are among the modern conveniences.
                            </p>
                            <h6 id="king-bed-btn">View Amenities</h6>

                            <div id="king-bed-amenities">

                                <div class="row">
                                    <div class="col-md-6">
                                        <p><i class="fas fa-angle-right pr-2"></i>Dressing room</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Living room with dining area</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Full kitchen</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Separate guest bathroom</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Complimentary wireless Internet</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><i class="fas fa-angle-right pr-2"></i>24-hour room service</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Flat-screen TV with satellite channels </p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Air conditioning</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Work desk and chair</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Tea/coffee making station</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 mb-3">
                    <div class="card">
                        <img class="card-img-top d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="Bed">
                        <div class="card-body">
                            <h5>2 King Beds</h5>
                            <p>A warm blend of African and European decor greets visitors to this 31-sq-m/334-sq-ft
                                guestroom with its one king bed and views of Dar es Salaam city. The bathroom includes
                                abundant natural light, stand-alone tub and rain shower, while a 55 inch TV screen and
                                wireless high-speed Internet are among the modern conveniences.
                            </p>
                            <h6 id="kings-bed-btn">View Amenities</h6>

                            <div id="kings-bed-amenities">

                                <div class="row">
                                    <div class="col-md-6">
                                        <p><i class="fas fa-angle-right pr-2"></i>Dressing room</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Living room with dining area</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Full kitchen</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Separate guest bathroom</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Complimentary wireless Internet</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><i class="fas fa-angle-right pr-2"></i>24-hour room service</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Flat-screen TV with satellite channels </p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Air conditioning</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Work desk and chair</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Tea/coffee making station</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card">
                        <img class="card-img-top d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="Bed">
                        <div class="card-body">
                            <h5>1 King Bed Sea View</h5>
                            <p>A warm blend of African and European decor greets visitors to this 31-sq-m/334-sq-ft
                                guestroom with its one king bed and views of Dar es Salaam city. The bathroom includes
                                abundant natural light, stand-alone tub and rain shower, while a 55 inch TV screen and
                                wireless high-speed Internet are among the modern conveniences.
                            </p>
                            <h6 id="king-bed-sea-btn">View Amenities</h6>

                            <div id="king-bed-sea-amenities">

                                <div class="row">
                                    <div class="col-md-6">
                                        <p><i class="fas fa-angle-right pr-2"></i>Dressing room</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Living room with dining area</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Full kitchen</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Separate guest bathroom</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Complimentary wireless Internet</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><i class="fas fa-angle-right pr-2"></i>24-hour room service</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Flat-screen TV with satellite channels </p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Air conditioning</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Work desk and chair</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Tea/coffee making station</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card">
                        <img class="card-img-top d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="Bed">
                        <div class="card-body">
                            <h5>2 King Beds Sea View</h5>
                            <p>A warm blend of African and European decor greets visitors to this 31-sq-m/334-sq-ft
                                guestroom with its one king bed and views of Dar es Salaam city. The bathroom includes
                                abundant natural light, stand-alone tub and rain shower, while a 55 inch TV screen and
                                wireless high-speed Internet are among the modern conveniences.
                            </p>
                            <h6 id="kings-bed-sea-btn">View Amenities</h6>

                            <div id="kings-bed-sea-amenities">

                                <div class="row">
                                    <div class="col-md-6">
                                        <p><i class="fas fa-angle-right pr-2"></i>Dressing room</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Living room with dining area</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Full kitchen</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Separate guest bathroom</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Complimentary wireless Internet</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><i class="fas fa-angle-right pr-2"></i>24-hour room service</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Flat-screen TV with satellite channels </p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Air conditioning</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Work desk and chair</p>
                                        <p><i class="fas fa-angle-right pr-2"></i>Tea/coffee making station</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


    </div>

@stop

@section('js')

    <script>
        $(document).ready(function (){
           $("#royal-btn").click(function (){
               $("#royal-amenities").slideToggle();
           })

            $("#presidential-btn").click(function (){
                $("#presidential-amenities").slideToggle();
            })

            $("#king-bed-btn").click(function (){
                $("#king-bed-amenities").slideToggle();
            })

            $("#kings-bed-btn").click(function (){
                $("#kings-bed-amenities").slideToggle();
            })

            $("#king-bed-sea-btn").click(function (){
                $("#king-bed-sea-amenities").slideToggle();
            })

            $("#kings-bed-sea-btn").click(function (){
                $("#kings-bed-sea-amenities").slideToggle();
            })

        });
    </script>

@stop
