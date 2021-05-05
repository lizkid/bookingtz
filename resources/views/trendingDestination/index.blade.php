@extends('layout.frontMaster')

@section('css')

    #main-content{
    margin-top: 150px;
    }

    #services li{
    font-size: 14px;
    margin-right: 20px;
    color: #28a745;
    /*border-bottom: 1px dashed #28a745;*/

    }




@endsection
@section('content')

    <div id="main-content" class="container">

        <div  class="row">

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

                                        <h4>Star rating</h4>

                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label style=" color: #e58926;">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </label>
                                            </div>

                                            <div>
                                                <label>10</label>
                                            </div>

                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label style=" color: #e58926;">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i style=" color: #a09f9e;" class="fas fa-star"></i>
                                                </label>
                                            </div>

                                            <div>
                                                <label>10</label>
                                            </div>

                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label style=" color: #e58926;">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i style=" color: #a09f9e;" class="fas fa-star"></i>
                                                    <i style=" color: #a09f9e;" class="fas fa-star"></i>
                                                </label>
                                            </div>

                                            <div>
                                                <label>10</label>
                                            </div>

                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label style=" color: #e58926;">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i style=" color: #a09f9e;" class="fas fa-star"></i>
                                                    <i style=" color: #a09f9e;" class="fas fa-star"></i>
                                                    <i style=" color: #a09f9e;" class="fas fa-star"></i>
                                                </label>
                                            </div>

                                            <div>
                                                <label>10</label>
                                            </div>

                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label style=" color: #e58926;">
                                                    <i class="fas fa-star"></i>
                                                    <i style=" color: #a09f9e;" class="fas fa-star"></i>
                                                    <i style=" color: #a09f9e;" class="fas fa-star"></i>
                                                    <i style=" color: #a09f9e;" class="fas fa-star"></i>
                                                    <i style=" color: #a09f9e;" class="fas fa-star"></i>
                                                </label>
                                            </div>

                                            <div>

                                                <label>10</label>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-md-9">

                        <h4>Hotels in Zanzibar</h4>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <img class="rounded" width="200" height="200" src="{{asset('resources/images/seacliff.jpg')}}" alt="hotel">
                                            </div>

                                            <div>

                                                <h4>Hotel Zanzibar</h4>

                                                <p style="opacity: 0.8;">Zanzibar
                                                    <span style=" color: #e58926;">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                </p>

                                                <ol>
                                                    <li>1 km from City center</li>
                                                    <li>1.5 km from Nungwi Beach</li>
                                                </ol>

                                                <p>
                                                    Breakfast included
                                                </p>

                                                <ul id="services">
                                                    <li>Pool</li>
                                                    <li>Free parking</li>
                                                    <li>Spa</li>
                                                    <li>Gym</li>
                                                    <li>Bar</li>
                                                </ul>

                                            </div>

                                            <div>
                                                <h6 style="font-weight: bold; font-size: 16px;">120000 TZS</h6>
                                                <p style="border-radius: 3px; color: white; background: red; padding: 3px; width: 80px; text-align: center;">20% off</p>
                                                <p style="padding-bottom: 5px;">Free Cancellation</p>
                                                <a href="#" class="btn btn-success mt-5">Book now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <img class="rounded" width="200" height="200" src="{{asset('resources/images/seacliff.jpg')}}" alt="hotel">
                                            </div>

                                            <div>

                                                <h4>Hotel Zanzibar</h4>

                                                <p style="opacity: 0.8;">Zanzibar
                                                    <span style=" color: #e58926;">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                </p>

                                                <ol>
                                                    <li>1 km from City center</li>
                                                    <li>1.5 km from Nungwi Beach</li>
                                                </ol>

                                                <p>
                                                    Breakfast included
                                                </p>

                                                <ul id="services">
                                                    <li>Pool</li>
                                                    <li>Free parking</li>
                                                    <li>Spa</li>
                                                    <li>Gym</li>
                                                    <li>Bar</li>
                                                </ul>

                                            </div>

                                            <div>
                                                <h6 style="font-weight: bold; font-size: 16px;">120000 TZS</h6>
                                                <p style="border-radius: 3px; color: white; background: red; padding: 3px; width: 80px; text-align: center;">20% off</p>
                                                <p style="padding-bottom: 5px;">Free Cancellation</p>
                                                <a href="#" class="btn btn-success mt-5">Book now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <img class="rounded" width="200" height="200" src="{{asset('resources/images/seacliff.jpg')}}" alt="hotel">
                                            </div>

                                            <div>

                                                <h4>Hotel Zanzibar</h4>

                                                <p style="opacity: 0.8;">Zanzibar
                                                    <span style=" color: #e58926;">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                </p>

                                                <ol>
                                                    <li>1 km from City center</li>
                                                    <li>1.5 km from Nungwi Beach</li>
                                                </ol>

                                                <p>
                                                    Breakfast included
                                                </p>

                                                <ul id="services">
                                                    <li>Pool</li>
                                                    <li>Free parking</li>
                                                    <li>Spa</li>
                                                    <li>Gym</li>
                                                    <li>Bar</li>
                                                </ul>

                                            </div>

                                            <div>
                                                <h6 style="font-weight: bold; font-size: 16px;">120000 TZS</h6>
                                                <p style="border-radius: 3px; color: white; background: red; padding: 3px; width: 80px; text-align: center;">20% off</p>
                                                <p style="padding-bottom: 5px;">Free Cancellation</p>
                                                <a href="#" class="btn btn-success mt-5">Book now</a>
                                            </div>
                                        </div>
                                    </div>
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
