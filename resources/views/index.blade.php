@extends('layout.frontMaster')

@section('css')
    #child-age{
    display: none;
    }


@stop

@section('content')

    <!--    back-main-->
    <div id="back-main">

        <div>
            <img id="img" class="d-block w-100 h-75" src="resources/images/img-2.jpg" alt="Second slide">

        </div>

    </div>
    <!--    back-main-->

    <div id="search" class="row">
        <form>
            @csrf
            <div style="background: #ffffff6b; border-radius: 5px;" class="col-md-12">

                <div style="padding: 20px;" class="row">

                    <div class="col-md-12">

                        <div class="row">

                            <div style="position: relative;" class="col-md-6 mb-3">

                                <div id="location-parent" class="input-group">
                                    <span class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-search"></i></div>
                                    </span>
                                    <input autocomplete="off"  type="text" class="form-control" id="location" placeholder="Search your destination here">

                                    <div id="searched-output" aria-labelledby="dropdown-account">
                                        <p class="px-3 pt-3">Popular nearby destinations</p>
                                        <table id="popular">
                                            <tbody>
                                            <tr>
                                                <td class="pl-3">
                                                    <p style="background: #928f8f; border-radius: 5px; ">
                                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                                    </p>
                                                </td>

                                               <td class="pl-3">
                                                   <p>Zanzibar,<span style="opacity: 0.6;"> Tanzania</span>
                                                   </p>
                                               </td>

                                                <td>
                                                    <p style="padding-left: 40px;">Properties</p>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="pl-3">
                                                    <p style="background: #928f8f; border-radius: 5px; ">
                                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                                    </p>
                                                </td>

                                                <td class="pl-3">
                                                    <p>Dubai,<span style="opacity: 0.6;"> UAE</span>
                                                    </p>
                                                </td>

                                                <td>
                                                    <p style="padding-left: 40px;">Properties</p>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="pl-3">
                                                    <p style="background: #928f8f; border-radius: 5px; ">
                                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                                    </p>
                                                </td>

                                                <td class="pl-3">
                                                    <p>Dsm,<span style="opacity: 0.6;"> Tanzania</span>
                                                    </p>
                                                </td>

                                                <td>
                                                    <p style="padding-left: 40px;">Properties</p>
                                                </td>

                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                    <div id="appended-result" aria-labelledby="dropdown-account">

                                    </div>


                                    {{csrf_field()}}


                                </div>

                            </div>

                            <div class="col-md-6 mb-3">
                                <div id="guest-parent" class="input-group">
                                    <span class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                                    </span>
                                    <input id="guest"  name="guest" class="form-control" type="text" placeholder="Guests">

                                    <div id="dropdown-account-content" aria-labelledby="dropdown-account">
                                        <div id="solo" class=" px-3">
                                            <p>Solo traveler<span style="float: right;">1 Room, 1 Adult</span></p>
                                        </div>

                                        <div id="couple" class="px-3">
                                            <p>Couple<span style="float: right;">1 Room, 2 Adults</span></p>
                                        </div>

                                        <div class="d-flex justify-content-between px-3">
                                            <div>
                                                <h4>Group</h4>
                                                <div>
                                                    <div class="d-flex justify-content-around">
{{--                                                        <p>Adult</p>--}}
                                                        <p id="family-adult-minus"><i class="fas fa-minus"></i></p>
                                                        <input class="form-control" id="family-input-adult">
                                                        <p id="family-adult-plus"><i class="fas fa-plus"></i></p>
                                                    </div>

                                                    <div class="d-flex justify-content-around">
                                                        <p id="family-room-minus"><i class="fas fa-minus"></i></p>
                                                        <input class="form-control" id="family-input-room">
                                                        <p id="family-room-plus"><i class="fas fa-plus"></i></p>
                                                    </div>

                                                    <div class="d-flex justify-content-around">
                                                        <p id="family-child-minus"><i class="fas fa-minus"></i></p>
                                                        <input class="form-control" id="family-input-child">
                                                        <p id="family-child-plus"><i class="fas fa-plus"></i></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="child-age">

                                                <h4> Child's age</h4>

                                                <div id="select">

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-12">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-arrow-circle-right"></i></div>
                                            </div>
                                            <input type="date" class="form-control" id="checkIn" placeholder="Check in">
                                        </div>

                                    </div>

                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                            </div>
                                            <select id="select-time" class="form-control">
                                                <option value="Midnight">Midnight</option>
                                                @for($x=1; $x<=11; $x++)
                                                    <option value="{{$x}}:00 AM">{{$x}}:00 AM</option>
                                                @endfor
                                                <option selected value="Noon">Noon</option>
                                                @for($y=1; $y<=11; $y++)
                                                    <option value="{{$y}}:00 PM">{{$y}}:00 PM</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-arrow-circle-left"></i></div>
                                            </div>
                                            <input type="date" class="form-control" id="checkOut" placeholder="Check out">
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                            </div>
                                            <select id="select-2" class="form-control">
                                                <option value="Midnight">Midnight</option>
                                                @for($x=1; $x<=11; $x++)
                                                    <option value="{{$x}}:00 AM">{{$x}}:00 AM</option>
                                                @endfor
                                                <option selected value="Noon">Noon</option>
                                                @for($y=1; $y<=11; $y++)
                                                    <option value="{{$y}}:00 PM">{{$y}}:00 PM</option>
                                                @endfor

                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div class="col-md-12 mt-3">
                <div id="search-btn">
                    <a target="_blank" href="{{url('destinations/')}}" class="btn btn-info btn-block">Search</a>
                </div>
            </div>
        </form>
    </div>

    <div id="container" class="container">
        <div class="row">

            <div id="separator" class="col-md-12">
                <span id="one"></span>
                <span id="two"></span>
                <span id="three"></span>
            </div>

            <div class="col-md-12 mt-3">
                <div id="check">
                    <div class="card">
                        <div class="card-body">
                            <h5 style="font-size: 24px; font-family: 'Poppins', sans-serif; font-weight: bold; color: #393737;" class="pt-3">Why book with ou site?</h5>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s
                            </p>

                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                normal distribution of letters, as opposed to using 'Content here, content here', making it
                                look like readable English. Many desktop publishing packages and web page editors now use Lorem
                                Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites
                                still in their infancy
                            </p>

                            <div class="d-lg-flex justify-content-between">
                                <div style="color: #3c4093;">
                                    <i style="font-size: 30px;" class="far fa-calendar-check"></i>
                                    <h4>Free cancellation</h4>
                                    <p>on most hotels</p>
                                </div>
                                <div style="color: #dd493c;">
                                    <i style="font-size: 30px;" class="fas fa-check-double"></i>
                                    <h4>Our price guarantee</h4>
                                    <p>Explore more</p>
                                </div>
                                <div style="color: #24be20;">
                                    <i style="font-size: 30px;" class="fab fa-buffer"></i>
                                    <h4>Many offers</h4>
                                    <p>We have a lot to suprise you with</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-start">

                            <h4>Trending destinations</h4>

                        </div>

                        <div class="row">
                            <div class="col-md-3">

                                <a target="_blank" href="{{url('destinations')}}">
                                    <img id="img-top" class="img-fluid" src="{{asset('resources/images/zanzibar.jpg')}}">
                                </a>

                                <div id="text-bottom">
                                    <h5>Zanzibar <p style="opacity: 0.8;">Tanzania</p></h5>

                                </div>

                            </div>

                            <div class="col-md-3">

                                <a target="_blank" href="{{url('destinations/')}}">
                                    <img id="img-top" class="img-fluid" src="{{asset('resources/images/dubai.jpg')}}">
                                </a>

                                <div id="text-bottom">
                                    <h5>Dubai <p style="opacity: 0.8;">United Arab Emirates</p></h5>

                                </div>

                            </div>

                            <div class="col-md-3">

                                <a target="_blank" href="{{url('destinations/')}}">
                                    <img id="img-top" class="img-fluid" src="{{asset('resources/images/miami.jpg')}}">
                                </a>

                                <div id="text-bottom">
                                    <h5>Miami <p style="opacity: 0.8;">United States of America</p></h5>

                                </div>

                            </div>

                            <div class="col-md-3">

                                <a target="_blank" href="{{url('destinations/')}}">
                                    <img id="img-top" class="img-fluid" src="{{asset('resources/images/dsm.jpg')}}">
                                </a>

                                <div id="text-bottom">
                                    <h5>Dar es salaam <p style="opacity: 0.8;">Tanzania</p></h5>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-start">

                            <h4 style="margin: 5px 0;">Trending hotels</h4>

                        </div>

                        <div class="row">
                            <div class="col-md-3">


                                <a target="_blank" href="{{url('hotel-view/')}}">
                                    <img id="img-top" class="img-fluid" src="{{asset('resources/images/hotel-zanzi.jpg')}}">
                                </a>

                                <div id="text-bottom">
                                    <h5>Zanzibar
                                        <p style="opacity: 0.8;">Zanzibar
                                            <span style="float: right; color: #e58926;">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                        </p>
                                    </h5>

                                </div>

                            </div>

                            <div class="col-md-3">


                                <a target="_blank" href="{{url('hotel-view/')}}">
                                    <img id="img-top" class="img-fluid" src="{{asset('resources/images/seacliff.jpg')}}">

                                </a>

                                <div id="text-bottom">
                                    <h5>Sea Cliff
                                        <p style="opacity: 0.8;">Dar es salaam
                                            <span style="float: right; color: #e58926;">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>

                                                </span>
                                        </p>
                                    </h5>

                                </div>

                            </div>

                            <div class="col-md-3">


                                <a target="_blank" href="{{url('hotel-view/')}}">
                                    <img id="img-top" class="img-fluid" src="{{asset('resources/images/hotel-spain.jpeg')}}">
                                </a>

                                <div id="text-bottom">
                                    <h5>Xavi
                                        <p style="opacity: 0.8;">Spain
                                            <span style="float: right; color: #e58926;">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half"></i>

                                                </span>
                                        </p>
                                    </h5>

                                </div>

                            </div>

                            <div class="col-md-3">


                                <a target="_blank" href="{{url('hotel-view')}}">
                                    <img id="img-top" class="img-fluid" src="{{asset('resources/images/hotel-south.jpg')}}">
                                </a>

                                <div id="text-bottom">
                                    <h5>Mpumalanga
                                        <p style="opacity: 0.8;">South Africa
                                            <span style="float: right; color: #e58926;">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>

                                                </span>
                                        </p>
                                    </h5>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">

                            <h4 style="margin: 5px 0;">Attractive areas</h4>

                        </div>

                        <div id="slideshow2" class="row">

                            <div class="col-md-2">


                                <a target="_blank" href="{{url('hotels/')}}">
                                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-zanzi.jpg')}}">
                                </a>

                                <div id="text-attractive">
                                    <h5 class="text-center"><a href="#">Zanzibar</a>
                                        <p class="text-center" style="opacity: 0.8;">23 properties
                                        </p>
                                    </h5>

                                </div>

                            </div>

                            <div class="col-md-2">


                                <a target="_blank" href="{{url('hotels/')}}">
                                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-zanzi.jpg')}}">
                                </a>

                                <div id="text-attractive">
                                    <h5 class="text-center"><a href="#">Las Vegas</a>
                                        <p class="text-center" style="opacity: 0.8;">23 properties
                                        </p>
                                    </h5>

                                </div>

                            </div>

                            <div class="col-md-2">


                                <a target="_blank" href="{{url('hotels/')}}">
                                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-zanzi.jpg')}}">
                                </a>

                                <div id="text-attractive">
                                    <h5 class="text-center"><a href="#">Dubai</a>
                                        <p class="text-center" style="opacity: 0.8;">23 properties
                                        </p>
                                    </h5>

                                </div>

                            </div>

                            <div class="col-md-2">


                                <a target="_blank" href="{{url('hotels/')}}">
                                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-zanzi.jpg')}}">
                                </a>

                                <div id="text-attractive">
                                    <h5 class="text-center"><a href="#">Rio De Janeiro</a>
                                        <p class="text-center" style="opacity: 0.8;">23 properties
                                        </p>
                                    </h5>

                                </div>

                            </div>

                            <div class="col-md-2">


                                <a target="_blank" href="{{url('hotels/')}}">
                                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-zanzi.jpg')}}">
                                </a>

                                <div id="text-attractive">
                                    <h5 class="text-center"><a href="#">Zanzibar</a>
                                        <p class="text-center" style="opacity: 0.8;">23 properties
                                        </p>
                                    </h5>

                                </div>

                            </div>

                            <div class="col-md-2">


                                <a target="_blank" href="{{url('hotels/')}}">
                                    <img id="attractive-img" class="img-fluid" src="{{asset('resources/images/hotel-zanzi.jpg')}}">
                                </a>

                                <div id="text-attractive">
                                    <h5 class="text-center"><a href="#">Las Vegas</a>
                                        <p class="text-center" style="opacity: 0.8;">23 properties
                                        </p>
                                    </h5>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div id="separator" class="col-md-12 mt-5">
                <span id="one"></span>
                <span id="two"></span>
                <span id="three"></span>
            </div>

            <div class="col-md-12 mt-3">
                <h4>Our Offer for you</h4>
                <div style="background: #e58926;" class="d-lg-flex justify-content-start" >
                    <div style="background: #f5f5f5;" class="d-lg-flex justify-content-around px-3 py-3">
                        <div>
                            <div class="d-flex justify-content-start">
                                <p id="plus"><span>1</span></p>
                                <p id="plus"><span>2</span></p>
                                <p id="plus"><span>3</span></p>
                                <p id="plus"><span>4</span></p>
                                <p id="plus"><span>5</span></p>

                            </div>
                            <div class="d-flex justify-content-start">
                                <p id="plus"><span>6</span></p>
                                <p id="plus"><span>7</span></p>
                                <p id="plus"><span>8</span></p>
                                <p id="plus"><span>9</span></p>
                                <p id="plus"><span>10</span></p>

                            </div>
                        </div>
                        <div>
                            <p id="equal">=</p>
                        </div>
                        <div>
                            <p id="answer"><i class="fas fa-moon"></i></p>
                        </div>
                    </div>

                    <div class="px-3 py-3" id="nights">
                        <p>Stay 10 nights get 1 reward night</p>

                    </div>
                </div>
            </div>


            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-lg-flex justify-content-start">

                            <h4 style="margin: 5px 0;">Explore more travel vacation rentals</h4>

                        </div>

                        <div id="slideshow" class="row mt-3">

                            <div class="col-md-2">

                                <img id="img-type" class="img-fluid" src="{{asset('resources/images/zanzibar.jpg')}}">

                                <div id="text-bottom">
                                    <h5>Hotels <p style="opacity: 0.8;">5282425 Hotels</p></h5>

                                </div>

                            </div>

                            <div class="col-md-2">

                                <img id="img-type" class="img-fluid" src="{{asset('resources/images/dubai.jpg')}}">

                                <div id="text-bottom">
                                    <h5>Villas <p style="opacity: 0.8;">366 Villas</p></h5>

                                </div>

                            </div>

                            <div class="col-md-2">

                                <img id="img-type" class="img-fluid" src="{{asset('resources/images/miami.jpg')}}">

                                <div id="text-bottom">
                                    <h5>Resorts <p style="opacity: 0.8;">165288 Resorts</p></h5>

                                </div>

                            </div>

                            <div class="col-md-2">

                                <img id="img-type" class="img-fluid" src="{{asset('resources/images/dsm.jpg')}}">

                                <div id="text-bottom">
                                    <h5>Vacation Homes <p style="opacity: 0.8;">5000 Vacation Homes</p></h5>

                                </div>

                            </div>

                            <div class="col-md-2">

                                <img id="img-type" class="img-fluid" src="{{asset('resources/images/miami.jpg')}}">

                                <div id="text-bottom">
                                    <h5>Motels <p style="opacity: 0.8;">100000 Motels</p></h5>

                                </div>

                            </div>

                            <div class="col-md-2">

                                <img id="img-type" class="img-fluid" src="{{asset('resources/images/dsm.jpg')}}">

                                <div id="text-bottom">
                                    <h5>Resort Villages <p style="opacity: 0.8;">1000 Resort Villages</p></h5>

                                </div>

                            </div>

                            <div class="col-md-2">

                                <img id="img-type" class="img-fluid" src="{{asset('resources/images/zanzibar.jpg')}}">

                                <div id="text-bottom">
                                    <h5>Hotels <p style="opacity: 0.8;">5282425 Hotels</p></h5>

                                </div>

                            </div>

                            <div class="col-md-2">

                                <img id="img-type" class="img-fluid" src="{{asset('resources/images/dubai.jpg')}}">

                                <div id="text-bottom">
                                    <h5>Villas <p style="opacity: 0.8;">366 Villas</p></h5>

                                </div>

                            </div>

                            <div class="col-md-2">

                                <img id="img-type" class="img-fluid" src="{{asset('resources/images/miami.jpg')}}">

                                <div id="text-bottom">
                                    <h5>Resorts <p style="opacity: 0.8;">165288 Resorts</p></h5>

                                </div>

                            </div>

                            <div class="col-md-2">

                                <img id="img-type" class="img-fluid" src="{{asset('resources/images/dsm.jpg')}}">

                                <div id="text-bottom">
                                    <h5>Vacation Homes <p style="opacity: 0.8;">5000 Vacation Homes</p></h5>

                                </div>

                            </div>

                            <div class="col-md-2">

                                <img id="img-type" class="img-fluid" src="{{asset('resources/images/miami.jpg')}}">

                                <div id="text-bottom">
                                    <h5>Motels <p style="opacity: 0.8;">100000 Motels</p></h5>

                                </div>

                            </div>

                            <div class="col-md-2">

                                <img id="img-type" class="img-fluid" src="{{asset('resources/images/dsm.jpg')}}">

                                <div id="text-bottom">
                                    <h5>Resort Villages <p style="opacity: 0.8;">1000 Resort Villages</p></h5>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

@section('js')


@endsection
