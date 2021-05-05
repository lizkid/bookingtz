@extends('layout.hotelMaster')

@section('css')



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

            <h2>DINING</h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type
                specimen book.
            </p>

        </section>

        <section class="mt-5 mb-5 pb-5">
            <h5 class="text-center pb-3">FIRST DINING</h5>
            <div class="row">

                <div class="col-md-6 mb-3">

                    <img class="card-img-top d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="Bed">

                </div>

                <div class="col-md-6 mb-3">

                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.

                    </p>

                    <div>
                        <h6><strong>Hours</strong></h6>
                        <h6>Breakfast</h6>
                        <p>
                            06:30 - 10:30 Monday - Friday<br>
                            Saturday, Sunday & Public Holiday 06:30 - 11:00<br>
                        </p>
                    </div>

                    <div>
                        <h6>Lunch</h6>
                        <p>
                            Buffet/ Ala carte: 12:30 - 15:30<br>
                            ( lunch Buffet Monday - Friday)<br>
                            Ala carte: Everyday.<br>
                        </p>
                    </div>

                    <div>
                        <h6>Dinner</h6>
                        <p>
                            Ala carte: 18:30 - 22:30 (Everyday)<br>
                            Sunday Brunch - Buffet: 12:30 - 15:30<br>
                        </p>
                    </div>


                </div>

            </div>
        </section>

        <section class="mt-5 mb-5 pb-5">
            <h5 class="text-center pb-3">SECOND DINING</h5>

            <div class="row">
                <div class="col-md-6">
                    <p>
                       This bar is open between 17h00 and 19h00.
                        It offers the ideal location to enjoy exotic cocktails while watching the spectacular
                        sunset over the Indian Ocean
                    </p>
                </div>
                <div class="col-md-6">
                    <img class="card-img-top d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="Bed">
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


        });
    </script>

@stop
