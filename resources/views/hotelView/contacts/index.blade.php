@extends('layout.hotelMaster')

<link rel="stylesheet" href="{{asset('resources/css/hotelView/contacts.css')}}">

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

            <h2>CONTACTS</h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type
                specimen book.
            </p>

        </section>

        <section class="mt-5">

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="py-3">WE WANT TO HEAR FROM YOU</h5>

                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">First Name<span class="pl-1">*</span></label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Last Name<span class="pl-1">*</span></label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email<span class="pl-1">*</span></label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Message<span class="pl-1">*</span></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <button class="btn" id="contact-submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-5 pb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="py-3">VIEW OUR LOCATION</h5>
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.246518540601!2d39.28229651397596!3d-6.739754267772384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4d74a1aa7f47%3A0x22664f1ab2ebb426!2sSea%20Cliff%20Hotel!5e0!3m2!1sen!2stz!4v1617117920480!5m2!1sen!2stz"
                                        width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>

@stop

@section('js')
{{--    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>--}}

    <script>

    {{--    function initMap() {--}}
    {{--        let map = new google.maps.Map(document.getElementById("map"), {--}}
    {{--            center: { lat: -34.397, lng: 150.644 },--}}
    {{--            zoom: 8,--}}
    {{--        });--}}
    {{--    }--}}
    {{--</script>--}}

    {{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAh4J3Ds1mxEzLORne-YGbXx58P7Qdoe9M&callback=myMap"></script>--}}
@stop
