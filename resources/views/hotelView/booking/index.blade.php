@extends('layout.hotelMaster')

<link rel="stylesheet" href="{{asset('resources/css/hotelView/contacts.css')}}">

@section('css')

    #book-header img{
    height: 80vh;

    }

@stop

@section('content')

    <div>

        <div id="book-header">
            <img class="d-block w-100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="Picture">
        </div>

    </div>

    <div class="container">

        <section id="book-section" class="mt-5 mb-5 pb-5">

            <div class="row">

                <div class="col-md-8">
                    <form>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input readonly type="text" value="Sea Cliff Hotel" class="form-control" id="exampleFormControlInput1" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Adults</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                @for($x=1; $x<=10; $x++)

                                                    <option value="{{$x}}">{{$x}}</option>

                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Rooms</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                @for($x=1; $x<=5; $x++)

                                                    <option value="{{$x}}">{{$x}}</option>

                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Children</label>
                                            <span>(0-17 years)</span>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                @for($x=1; $x<=10; $x++)

                                                    <option value="{{$x}}">{{$x}}</option>

                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Check in</label>
                                            <input  type="date" class="form-control" id="exampleFormControlInput1" placeholder="Sea CLiff Hotel">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Check out</label>
                                            <input  type="date" class="form-control" id="exampleFormControlInput1" placeholder="Sea CLiff Hotel">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>

                            <a class="btn btn-info" href="{{url('hotel-view/booking/room-results')}}">Search Room</a>

                        </div>
                    </form>
                </div>

                <div class="col-md-4">
                    <h4>Your Summary</h4>
                </div>
            </div>

        </section>


    </div>

@stop

@section('js')


@stop
