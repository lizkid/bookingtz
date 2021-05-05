
@extends('layout.listProperty')

@section('css')

    img{
    height: 80vh;
    width: 100%;
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

        </div>

@stop
