
@extends('layout.listProperty')

@section('css')

    img{
    height: 80vh;
    width: 100%;
    }

    .fas, .far{
    color: red;
    font-size: 56px;
    text-align: center;
    margin: auto;
    display: block;
    }

@stop

@section('content')

        <div class="row">

            <div class="col-md-12 mb-3">

                <div>
                    <img class="d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="First slide">
                </div>

            </div>

            <div class="col-md-12 mt-3 p-3">
                <div class="container">

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Benefits of using our site</h4>
                            <p>Set your own house rules for guests</p>
                            <p>Sync your calendar with other sites you list on</p>
                            <p>24/7 support by phone or email</p>
                            <p>It's free to create a listing</p>

                        </div>
                        <div class="col-md-6">
                            <h4>Try now and list your property</h4>

                            <div class="mt-3 pt-3">
                                <a class="getStarted" href="{{url('list-your-property/user-registration')}}">Get Started</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-12 mt-5 pt-5 mb-3">
                <div class="container">
                    <h3 class="text-center pb-5">All you have to do</h3>

                    <div class="row">

                        <div class="col-md-4 mb-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5><i class="fas fa-user"></i></h5>
                                    <h5 class="text-center">Sign in or sign up for booking Tz account</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5><i class="far fa-edit"></i></h5>
                                    <h5 class="text-center">Enter details to register your property</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5><i class="fas fa-images"></i></h5>
                                    <h5 class="text-center">Upload your property details and pictures</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5><i class="fas fa-comments-dollar"></i></h5>
                                    <h5 class="text-center">Set your prices and available dates</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5><i class="fas fa-house-user"></i></h5>
                                    <h5 class="text-center">See your listing go live in front of millions of travelers</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

@stop
