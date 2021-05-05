@extends('layout.hotelMaster')

<!--automation on scroll-->
<link rel="stylesheet" href="{{asset('resources/aos-master/dist/aos.css')}}"/>

@section('css')

    #hovered-container.check2{
    background: white !important;
    height: 100% !important;
    width: 540px !important;
    opacity: 1 !important;
    position: absolute !important;
    }

    #hovered-container-2.show{
    background: white !important;
    height: 100% !important;
    width: 540px !important;
    opacity: 1 !important;
    position: absolute !important;
    }

    .first-arrow, .second-arrow{
    color: #e58926;
    font-size: 26px !important;
    animation-delay: initial;
    animation: arrow-first 2s linear infinite;
    }

    @keyframes arrow-first {

    0%{
    margin-left: 0px;
    }

    25%{
    margin-left: 10px;
    }

    50%{
    margin-left: 20px;
    }

    75%{
    margin-left: 30px;
    }

    100%{
    margin-left: 40px;
    }

    }

    #hovered-container:hover .first-arrow, #hovered-container-2:hover .second-arrow{
    -webkit-animation-play-state: paused;
    -moz-animation-play-state: paused;
    -o-animation-play-state: paused;
    animation-play-state: paused;
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

        <section class="mt-5 pt-5">
            <div class="row">

                <div class="col-md-6">
                    <h4 class="pb-3">Welcome to Sea Cliff Hotel</h4>

                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s,
                    </p>

                    <p>
                        It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout.
                    </p>
                </div>

                <div class="col-md-6">

                    <img class="d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="Second slide">

                </div>

            </div>
        </section>

        <section class="mt-5 pt-5">
            <div class="row">
                <div style="position: relative;" class="col-md-6">
                    <img id="img-55" class="d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="Second slide">
                    <div id="hovered-container" style="margin-top: -367.547px; height: 100%; position: absolute;  width: 100px; background: white; opacity: 1; transition: 0.3s ease-in-out; ">
                        <p id="check" style=" position: relative; margin:180.547px 0 0 10px; cursor: pointer;" ><span><i class="fas fa-arrow-right pl-2 first-arrow"></i></span></p>
                        <div id="rating" style="display: none; width: 400px; position: absolute; margin-top:-203.547px; margin-left: 140px;">
                            <h5 class="pt-2 text-center">SEA CLIFF HOTEL</h5>
                            <p>A 5-star hotel</p>
                            <p>5.0
                                <i style="color: #e58926;" class="fas fa-star"></i>
                                <i style="color: #e58926;" class="fas fa-star"></i>
                                <i style="color: #e58926;" class="fas fa-star"></i>
                                <i style="color: #e58926;" class="fas fa-star"></i>
                                <i style="color: #e58926;" class="fas fa-star"></i>
                            </p>
                            <p>Sea Cliff hotel, has a long tradition of emphasizing cleanliness,
                                safety and comfort in our guest rooms, public spaces and back
                                of house operations as we understand that the health, safety and
                                comfort of our guests, staff and partners remains of utmost importance.
                            </p>
                            <h6>Price for 1 Night<strong style="float: right; font-weight: bold;" class="px-2">TZS 400000</strong></h6>
                        </div>
                    </div>


                </div>

                <div style="position: relative;" class="col-md-6">
                    <img class="d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="Second slide">
                    <div id="hovered-container-2" style="margin-top: -367.547px; height: 100%; position: absolute;  width: 100px; background: white; opacity: 1; transition: 0.3s ease-in-out; ">
                        <p id="check-2" style=" position: relative; margin:180.547px 0 0 10px; cursor: pointer;" ><span><i class="fas fa-arrow-right pl-2 second-arrow"></i></span></p>
                        <div id="rating-2" style="display: none; width: 400px; position: absolute; margin-top:-203.547px; margin-left: 140px;">
                            <h5 class="pt-2 text-center">SEA CLIFF HOTEL</h5>
                            <p><strong style="color: black !important;">Address:</strong> Mnazi mmoja street, Zanzibar</p>
                            <p><strong style="color: black !important;">Phone:</strong> 022 221 2500</p>
                            <p>This upmarket hotel is 14 minutes' walk from the city center,
                                and 6 km from Mianzi Beach on the Indian Ocean
                            </p>
                            <h6>Price for 1 Night<strong style="float: right; font-weight: bold;" class="px-2">TZS 400000</strong></h6>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="mt-5 pt-5">

            <h4>Amenities</h4>

            <div  class="row">

                <div data-aos="zoom-in" data-aos-delay="100" class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5>HOTEL FEATURES</h5>
                            <p>Views of City or Sea-Facing</p>
                            <p>Ballroom For up to 400 Guests</p>
                            <p>Wedding Venues</p>
                            <p>5 Star Hotel Facilities</p>
                            <p>182 Rooms & Suites</p>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-delay="200" class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5>SERVICES</h5>
                            <p>24-hour Room service</p>
                            <p>24-hour Front Desk</p>
                            <p>Concierge services</p>
                            <p>Laundry and dry-cleaning services</p>
                            <p>Major credit cards accepted</p>
                            <p>Babysitters by prior arrangement</p>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-delay="300" class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5>ACCESSIBILITY</h5>
                            <p>Wheelchair access to the hotel and all floors</p>
                            <p>Audio smoke detectors</p>
                            <p>Roll-in showers</p>
                            <p>Connecting rooms</p>
                            <p>Bathtub benches and grab rails</p>
                            <p>Wheelchair accessible doors, peephole, climate control, sink/vanity and towel rack</p>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-delay="100" class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5>BUSINESS SERVICES</h5>
                            <p>Secretarial services</p>
                            <p>Translation service</p>
                            <p>DHL deliveries</p>
                            <p>Fax, scan, copy, printing and binding</p>
                            <p>Wireless Internet access</p>
                            <p>Cellular phone rental</p>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-delay="200" class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5>TRANSPORTATION</h5>
                            <p>Airport Transfer Service</p>
                            <p>Limousine & Car Renta</p>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-delay="300" class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5>ROOM AMENITIES</h5>
                            <p>In-room safe</p>
                            <p>Dressing room</p>
                            <p>Living room with dining area</p>
                            <p>Full kitchen</p>
                            <p>Separate guest bathroom</p>
                            <p>Complimentary wireless Internet</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="mt-5 pt-5 pb-5 mb-5">
            <div class="d-flex justify-content-between mt-3">
                <div id="append">


                </div>

                <div>
                    <div>
                        <img width="240" height="190" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}">
                    </div>

                    <div style="padding-top: 20px;">
                        <img width="240" height="190" src="{{asset('resources/images/hotel/hotel-img-4.jpg')}}">
                    </div>
                </div>
            </div>

            <div style="cursor: pointer;" id="img-hover" class="d-flex justify-content-between mt-2">
                <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="latest product">
                <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-5.jpg')}}" alt="latest product">
                <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-4.jpg')}}" alt="latest product">
                <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="latest product">
                <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-5.jpg')}}" alt="latest product">
                <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-4.jpg')}}" alt="latest product">

            </div>

        </section>


    </div>

@stop

@section('js')
<script src="{{asset('resources/aos-master/dist/aos.js')}}"></script>

    <script>
        AOS.init({
            offset: 300,
            once: true,
            easing: 'ease',
            duration: 1000
        });
    </script>

<script>
    $(document).ready(function (){

        $("#append").prepend("<img width='585' height='400' src='{{asset('resources/images/hotel/hotel-cover.jpg')}}' alt='product'>")


        $("#img-hover img").mouseenter(function (){

            $("#append").html('')

            let image = $(this).attr("src")

            $("#append").append("<img  width='585' height='400' src='"+image+"'>")
        });
    });

</script>

<script>
    $(document).ready(function ()
    {

        $("#hovered-container").hover(function (){

            $(this).stop(true, false).toggleClass('check2');

            $("#rating").stop(true, false).toggle('fast')
        });

        $("#hovered-container-2").hover(function (){

            $(this).stop(true, false).toggleClass('show');

            $("#rating-2").stop(true, false).toggle('fast')
        });
    });
</script>

@stop
