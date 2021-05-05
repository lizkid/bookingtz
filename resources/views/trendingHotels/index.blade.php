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

                        </div>
                    </div>

                    <div class="col-md-9">

                        <div class="row">
                            <div class="col-md-12">

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

                                <div id="img-hover" class="d-flex justify-content-between mt-2">
                                    <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-1.jpg')}}" alt="latest product">
                                    <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-2.jpg')}}" alt="latest product">
                                    <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-3.jpg')}}" alt="latest product">
                                    <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-4.jpg')}}" alt="latest product">
                                    <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-5.jpg')}}" alt="latest product">
                                    <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-3.jpg')}}" alt="latest product">


                                    <a href="#">
                                        <div class="card">
                                            <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/hotel-img-6.jpg')}}" alt="latest product">
                                            <div class="card-img-overlay">
                                                <h5 class="card-title">See all</h5>
                                            </div>
                                        </div>
                                    </a>

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
