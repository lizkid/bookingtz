@extends('layout.frontMaster')

@section('css')

    #main-content{
    margin-top:  150px;
    }

    #services li{
    font-size: 14px;
    margin-right: 5px;
    }

    ol li{
    font-size: 14px;
    }

    #sort{
    align-items: center;
    height: 40px;
    padding: 0 10px;
    width: 100%;
    border: 1px solid #718096;
    color: #718096;
    }

    #sort a{
    color: black;
    opacity: 0.8;

    }

    #sort a:hover{
    color: #f2851c;
    opacity: 1;
    }

    #viewed-item{
    border: 1px solid gray;
    height: 80px;
    }

    #filtering div h6{
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
    line-height: inherit
    }

    #filtering div label, #filtering div p{
    color: black;
    opacity: 0.8;
    font-size: 14px;
    }

    .detail-btn{
    border: 1px solid #061030f5;
    padding: 10px;
    color: #061030f5;
    transition: 0.2s ease-in-out;
    }

    .detail-btn:hover{
    background: #061030f5;
    padding: 10px;
    color: white;
    text-decoration: none;
    }

    .discount{
    color: white;
    background: #e58926;
    padding: 10px;
    font-size: 18px;
    text-align: center;
    }

    .card-img-overlay{
    justify-content: center;
    align-items: center;
    display: grid;
    }

    @media screen and(max-width: 600px){
    .card-title{
    margin-top: 10px;
    margin-left: 95px!important;
    }
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
                        <li class="breadcrumb-item active" aria-current="page">Search results</li>
                    </ol>
                </nav>
            </div>

            <div class="col-md-12">
                @include('partial.hotel.search')
            </div>


            <div style="padding-left: 0!important; padding-right: 0!important;" class="col-md-12 mt-5 pt-5">
                <div class="row">

                    <div class="col-md-3">


                        <div id="filtering" class="row">

                            <div class="col-md-12 mb-3">
                                <a href="#">
                                    <div class="card">
                                        <img style="margin: auto; display: block; width: 260px;"  src="{{asset('resources/images/hotel/map.jpg')}}" alt="latest product">
                                        <div class="card-img-overlay">
                                                <button class="card-title btn btn-info">Show on map</button>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <h4 class="px-3">Filter by:</h4>

                            <div class="col-md-12 mb-3">

                                <div class="card">
                                    <div class="card-body">
                                        <h6>Your budget per night</h6>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label>TZS 0-TZS 100000</label>
                                            </div>

                                            <div>
                                                <p>98</p>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label>TZS 100000-TZS 200000</label>
                                            </div>

                                            <div>
                                                <p>245</p>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label>TZS 200000-TZS 500000</label>
                                            </div>

                                            <div>
                                                <p>25</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Popular filters</h6>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label>Breakfast included</label>
                                            </div>

                                            <div>
                                                <p>98</p>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label>Spa</label>
                                            </div>

                                            <div>
                                                <p>245</p>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label>private bathroom</label>
                                            </div>

                                            <div>
                                                <p>25</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Star rating</h6>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label>5 stars</label>
                                            </div>

                                            <div>
                                                <p>9</p>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label>4 stars</label>
                                            </div>

                                            <div>
                                                <p>24</p>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label>3 stars</label>
                                            </div>

                                            <div>
                                                <p>5</p>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                <label>Unrated</label>
                                            </div>

                                            <div>
                                                <p>25</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-9">

                        <div class="d-flex justify-content-between mb-3">
                            <h4>Zanzibar: 100 properties found</h4>
                        </div>

                        <div class="d-flex justify-content-start">
                            <p style="line-height: 40px; background: #061030f5; padding: 0 10px; color: white;">Sort</p>
                            <div id="sort" class="d-flex justify-content-between">
                                <a href="#">Star rating</a>
                                <a href="#">Distance</a>
                                <a href="#">Guest rating</a>
                                <a href="#">Price</a>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-12 mb-3">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-lg-flex justify-content-between">
                                            <div>
                                                <img class="rounded" width="200" height="200" src="{{asset('resources/images/seacliff.jpg')}}" alt="hotel">
                                            </div>

                                            <div>

                                                <h4>Sea Cliff Hotel
                                                    <p style="opacity: 0.8;">Zanzibar
                                                        <span style=" color: #e58926;">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                        </span>
                                                        <a href="#">Show on map</a>
                                                    </p>
                                                </h4>


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
                                                <p class="discount">20% Off</p>
                                                <div style="margin-top: 115px;">
                                                    <a target="_blank" rel="noopener noreferrer" href="{{url('hotel-view')}}" class="detail-btn mt-5">More Details</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12 mb-3">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-lg-flex justify-content-between">
                                            <div>
                                                <img class="rounded" width="200" height="200" src="{{asset('resources/images/hotel/mizimbini.jpg')}}" alt="hotel">
                                            </div>

                                            <div>

                                                <h4>Mizimbini Hotel
                                                    <p style="opacity: 0.8;">Zanzibar
                                                        <span style=" color: #e58926;">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                        </span>
                                                        <a href="#">Show on map</a>
                                                    </p>
                                                </h4>





                                                <ol>
                                                    <li>3 km from City center</li>
                                                    <li>4 km from Nungwi Beach</li>
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
                                                <h6 style="font-weight: bold; font-size: 16px;">220000 TZS</h6>
                                                <p class="discount">15% Off</p>

                                                <div style="margin-top: 115px;">
                                                    <a target="_blank" rel="noopener noreferrer" href="{{url('hotel-view')}}" class="detail-btn  mt-5">More Details</a>
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
    </div>

@endsection

