@extends('admin.layout.master')

@section('admin-css')

    <style>
        input[type=checkbox], input[type=radio] {
            transform: scale(1.5);
        }

        #amenities{
            display: none;
        }

        #amenity-btn{
            cursor: pointer;
            position: relative;
            width: 15%;
            padding: 5px;
            border: 1px solid #43ad8f;
            color: #43ad8f;
        }

        #amenity-btn i{
            position: absolute;
            top: 60%;
            font-size: 22px;
            transform: translateY(-60%);
            transition: transform 0.2s ease-in-out;
        }

        #amenity-btn i.another-rotate{
            transform: translateY(-60%) rotate(180deg);
        }
    </style>

@stop

@section('admin-content')

    <div class="row">
        <div class="col-md-12 d-flex justify-content-between mt-4">
            <nav arial-label="breadcrumb">
                <ol style="background: unset;" class="breadcrumb">
                    <li class="breadcrumb-item">Rooms</li>
                    <li class="breadcrumb-item active">Rooms Create</li>

                </ol>
            </nav>

            <div id="back-container" class="col-md-12 mb-3 d-flex justify-content-end">
                <a class="back-btn " href="{{url('hotel-administration/rooms')}}"><i class="fas fa-arrow-circle-left pr-2"></i>Back</a>
            </div>

        </div>

        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Enter details to create new room</h4>
                    <form  action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Room Type</label>
                                <select name="fname[]" class="form-control">
                                    <option selected disabled>--select room type--</option>
                                    <option value="Presidential Suite">Presidential Suite</option>
                                    <option value="Royal Suite">Royal Suite</option>
                                    <option value="1 King Bed">One King Bed </option>
                                    <option value="2 Kings Bed">Two Kings Bed</option>
                                    <option value="1 King Bed Sea View">One King Bed Sea View </option>
                                    <option value="2 Kings Bed Sea View">Two Kings Bed Sea View</option>

                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Room Number</label>
                                <input  type="text" name="lname" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Number Of Beds</label>
                                <select class="form-control">
                                    <option selected disabled>--select number of beds--</option>
                                    <option>1 Bed</option>
                                @for($x=2; $x<=4; $x++)

                                        <option value="{{$x}}">{{$x}} Beds</option>

                                    @endfor
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Image</label>
                                <input  type="file" name="lname" class="form-control" required>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Room Description</label>
                                <textarea class="form-control">

                                </textarea>
                            </div>

                            <div class="col-md-12 mb-3">

                                <p id="amenity-btn">Select Amenities <i class="fas fa-angle-down px-2"></i></p>

                                <div id="amenities">
                                    <div class="row border-top">
                                        <div class="col-md-3 mt-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label pl-2" for="exampleCheck1">Spa</label>
                                            </div>
                                        </div>

                                        <div class="col-md-3 mt-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label pl-2" for="exampleCheck1">Dressing room</label>
                                            </div>
                                        </div>

                                        <div class="col-md-3 mt-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label pl-2" for="exampleCheck1">24-hour room service</label>
                                            </div>
                                        </div>

                                        <div class="col-md-3 mt-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label pl-2" for="exampleCheck1">Air conditioning</label>
                                            </div>
                                        </div>

                                        <div class="col-md-3 mt-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label pl-2" for="exampleCheck1">Complimentary wireless Internet</label>
                                            </div>
                                        </div>

                                        <div class="col-md-3 mt-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label pl-2" for="exampleCheck1">Tea/coffee making station</label>
                                            </div>
                                        </div>

                                        <div class="col-md-3 mt-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label pl-2" for="exampleCheck1">Flat-screen TV with satellite channels</label>
                                            </div>
                                        </div>

                                        <div class="col-md-3 mt-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label pl-2" for="exampleCheck1">Full kitchen</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3 mb-3">
                                <button id="submit" type="submit" class="btn btn-info btn-block">Save Room</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@stop

@section('admin-js')

    <script>
        $(document).ready(function (){
           $("#amenity-btn").click(function (){
              $("#amenities").slideToggle();

               $("#amenity-btn i").toggleClass('another-rotate')
           });
        });
    </script>

@stop
