@extends('layout.hotelMaster')

@section('css')

    #attractive-img{
    width: 200px;
    height: 250px;
    border-radius: 25px;
    transition: 0.3s ease-in-out;
    cursor: pointer;
    padding: 5px;

    }

    #attractive-img:hover{
    width: 200px;
    height: 250px;
    border-radius: unset;
    padding: 0;

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

            <h2>PHOTO GALLERIES</h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type
                specimen book.
            </p>

        </section>

        <section class="mt-5">

            <h5 class="py-3">
                OUR FOODS
            </h5>

            <div class="row">
                <div class="col-md-3">
                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-web/food.jpg')}}">
                </div>
                <div class="col-md-3">
                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-web/food.jpg')}}">
                </div>
                <div class="col-md-3">
                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-web/food.jpg')}}">
                </div>
                <div class="col-md-3">
                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-web/food.jpg')}}">
                </div>
            </div>

        </section>

        <section class="mt-5">

            <h5 class="py-3">
                ROOMS
            </h5>

            <div class="row">
                <div class="col-md-3">
                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-web/room.jpg')}}">
                </div>
                <div class="col-md-3">
                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-web/room.jpg')}}">
                </div>
                <div class="col-md-3">
                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-web/room.jpg')}}">
                </div>
                <div class="col-md-3">
                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-web/room.jpg')}}">
                </div>
            </div>

        </section>

        <section class="mt-5">

            <h5 class="py-3">
                RECREATIONS
            </h5>

            <div class="row">
                <div class="col-md-3">
                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-web/recreation.jpg')}}">
                </div>
                <div class="col-md-3">
                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-web/recreation.jpg')}}">
                </div>
                <div class="col-md-3">
                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-web/recreation.jpg')}}">
                </div>
                <div class="col-md-3">
                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-web/recreation.jpg')}}">
                </div>
            </div>

        </section>

        <section class="mt-5 mb-5 pb-5">

            <h5 class="py-3">
                BARS AND RESTAURANTS
            </h5>

            <div class="row">
                <div class="col-md-3">
                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-web/bar.png')}}">
                </div>
                <div class="col-md-3">
                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-web/bar.png')}}">
                </div>
                <div class="col-md-3">
                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-web/bar.png')}}">
                </div>
                <div class="col-md-3">
                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-web/bar.png')}}">
                </div>
            </div>

        </section>


    </div>

@stop

@section('js')


@stop
