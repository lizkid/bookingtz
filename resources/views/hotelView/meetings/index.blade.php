@extends('layout.hotelMaster')

<!--automation on scroll-->
<link rel="stylesheet" href="{{asset('resources/aos-master/dist/aos.css')}}"/>
@section('css')

        .table-borderless th{border:0;}
        .table-borderless td{border:0;}

        .table thead th {
        border-bottom: 0;
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

            <h2>MEETING ROOMS</h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type
                specimen book.
            </p>

        </section>


        <section class="mt-5 pt-5">
            <div class="row">
                <div data-aos="fade-right"  data-aos-delay="100" class="col-md-6 mb-3 pb-5">
                    <h5>FIRST MEETING ROOM</h5>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>

                    <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged.
                    </p>

                    <p>
                        It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                        like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
                <div data-aos="fade-left" data-aos-delay="100" class="col-md-6 mb-3 pb-5">
                    <img class="card-img-top d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="offers">
                </div>

                <div data-aos="fade-right" data-aos-delay="100" class="col-md-6 mb-3 pb-5">
                    <img class="card-img-top d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="offers">
                </div>
                <div data-aos="fade-left" data-aos-delay="100" class="col-md-6 mb-3 pb-5">
                    <h5>SECOND MEETING ROOM</h5>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>

                    <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged.
                    </p>

                    <p>
                        It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                        like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>

                <div data-aos="fade-right" data-aos-delay="100" class="col-md-6 mb-3 pb-5">
                    <h5>THIRD MEETING ROOM</h5>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>

                    <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged.
                    </p>

                    <p>
                        It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                        like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>

                <div data-aos="fade-left" data-aos-delay="100" class="col-md-6 mb-3 pb-5">
                    <img class="card-img-top d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="offers">
                </div>

                <div data-aos="fade-right" data-aos-delay="100" class="col-md-6 mb-3 pb-5">
                    <img class="card-img-top d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="offers">
                </div>

                <div data-aos="fade-left" data-aos-delay="100" class="col-md-6 mb-3 pb-5">
                    <h5>FOURTH MEETING ROOM</h5>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>

                    <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged.
                    </p>

                    <p>
                        It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                        like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>

                <div data-aos="zoom-in" data-aos-delay="100" class="col-md-12 mb-3 pb-5">

                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col">Name Of Meeting Room</th>
                            <th scope="col">Set-Up Style</th>
                            <th scope="col">Number Of Delegates</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>First Meeting Room</td>
                            <td>U-Shape</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Schoolroom</td>
                            <td>45</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Cinema style</td>
                            <td>38</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Herringbone</td>
                            <td>75</td>
                        </tr>

                        <tr>
                            <td>Second Meeting Room</td>
                            <td>U-Shape</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Schoolroom</td>
                            <td>45</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Cinema style</td>
                            <td>38</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Herringbone</td>
                            <td>75</td>
                        </tr>
                        </tbody>
                    </table>

                </div>

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
    </script

@stop
