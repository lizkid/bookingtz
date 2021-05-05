@extends('layout.frontMaster')

@section('css')

    #main-content{
    margin-top: 150px;
    }

    #services{
    display: grid;

    }

    #services li{
    font-size: 14px;
    color: #28a745;
    padding-top: 20px;
    /*border-bottom: 1px dashed #28a745;*/

    }




@endsection
@section('content')

    <div id="main-content" class="container">

        <div  class="row">

            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Tanzania</a></li>
                        <li class="breadcrumb-item"><a href="#">Zanzibar</a></li>
                        <li class="breadcrumb-item"><a href="#">Zanzibar City</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sea Cliff hotel</li>
                    </ol>
                </nav>
            </div>

            <div class="col-md-12">
                @include('partial.hotel.search')
            </div>

            <div style="padding-left: 0!important; padding-right: 0!important;" class="col-md-12 mt-3">

                <div class="row">

                    <div class="col-md-3">
                        <div class="row">

                            <div class="col-md-12">
                                <a href="#">
                                    <div class="card">
                                        <img style="margin: auto; display: block;" width="260" height="140" src="{{asset('resources/images/hotel/map.jpg')}}" alt="latest product">
                                        <div class="card-img-overlay">
                                            <h5 style="text-align: center; margin-top: 30px;" class="card-title">
                                                <button class="btn btn-info">Show on map</button>
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-12 mt-3">
                                <div class="card">
                                    <div class="card-body">

                                        <h4>Location rating</h4>

                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label>9+</label>
                                            </div>

                                            <div>
                                                <p>Excellent</p>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label>8+</label>
                                            </div>

                                            <div>
                                                <p>Excellent</p>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label>7+</label>
                                            </div>

                                            <div>
                                                <p>Very Good</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-9">

                        <div class="row">

                            <div class="col-md-12">

                                <div>
                                    <h4>Sea Cliff Hotel
                                        <span style=" color: #e58926;">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    </h4>

                                    <p>Malawi Road, Zanzibar, Tanzania</p>
                                    <a href="#">Show on map</a>
                                </div>

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
                                    <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-5.jpg')}}" alt="latest product">
                                    <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-4.jpg')}}" alt="latest product">
                                    <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-5.jpg')}}" alt="latest product">
                                    <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-5.jpg')}}" alt="latest product">


                                    <a target="_blank" href="{{url('hotel-view')}}">
                                        <div class="card">
                                            <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-6.jpg')}}" alt="latest product">
                                            <div class="card-img-overlay">
                                                <span style="color: #ffffff; font-size: 14px;" class="card-title">More Details</span>
                                            </div>

                                        </div>
                                    </a>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-12 mt-5">

                <div>
                    <h4>Filter by:</h4>

                    <div class="d-flex justify-content-start">
                        <div>
                            <input id="room" type="checkbox" aria-label="Checkbox for following text input">
                            <label>Rooms</label>
                        </div>

                        <div class="ml-5">
                            <input id="apartment" type="checkbox" aria-label="Checkbox for following text input">
                            <label>Apartments</label>
                        </div>

                    </div>

                    <div class="reserve">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Room type</th>
                                <th>Options</th>
                                <th>Today's price</th>
                                <th>Selection</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="#">Room name</a>
                                    <p>Only 4 rooms left on our site</p>

                                    <div class="d-flex justify-content-start">
                                        <img width="150" height="150" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="latest product">

                                        <div class="ml-5">
                                            <h4>Room included with</h4>
                                            <p>
                                                <span>Bathtub or shower</span>
                                                <span>Safe Toilet</span>
                                                <span>Fireplace</span>
                                                <span>Towels Linens</span>
                                            </p>
                                            <p>
                                                <span>Socket near the bed</span>
                                                <span>Tile/Marble floor</span>
                                                <span>Desk Sitting</span>
                                                <span>Safe Toilet</span>
                                            </p>
                                            <p>
                                                <span>Free toiletries</span>
                                                <span>Fireplace</span>
                                                <span>Refrigerator</span>
                                            </p>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <ul id="services">
                                        <li>Pool</li>
                                        <li>Free parking</li>
                                        <li>Spa</li>
                                        <li>Gym</li>
                                        <li>Bar</li>
                                    </ul>
                                </td>
                                <td>
                                    <h5 style="background: #e58926; text-align: center; width: 100px; padding: 5px;">TZS 200000</h5>
                                    <p>Including VAT</p>

                                    <p>No changes allowed.</p>
                                </td>
                                <td>
                                    <a target="_blank" href="{{url('hotels/book')}}" class="btn btn-info">Reserve</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

@section('js')

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

@endsection
