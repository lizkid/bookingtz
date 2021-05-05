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
                    <li class="breadcrumb-item">Details</li>
                    <li class="breadcrumb-item active">Details Create</li>

                </ol>
            </nav>

            <div id="back-container" class="col-md-12 mb-3 d-flex justify-content-end">
                <a class="back-btn " href="{{url('hotel-administration/hotel-details')}}"><i class="fas fa-arrow-circle-left pr-2"></i>Back</a>
            </div>

        </div>

        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Add new details</h4>
                    <form  action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label>Name</label>
                                <input id="lname" type="text" name="lname" class="form-control" required>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label>Country</label>
                                <select name="fname[]" class="form-control">
                                    <option selected disabled>--select country--</option>
                                    <option>Tanzania</option>
                                    <option>Kenya</option>
                                    <option>Somalia</option>

                                </select>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label>City</label>
                                <select name="fname[]" class="form-control">
                                    <option selected disabled>--select city--</option>
                                    <option>Nairobi</option>
                                    <option>Arusha</option>
                                    <option>Dar es salaam</option>


                                </select>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label>Ratings</label>
                                <select name="fname[]" class="form-control">
                                    <option selected disabled>--select hotel rating--</option>
                                    @for($x=3; $x<=8; $x++)

                                        <option>{{$x.' star'}}</option>

                                    @endfor

                                </select>
                            </div>


                            <div class="col-md-3 mb-3">
                                <label>Distance</label>
                                <input id="lname" type="text" name="lname" class="form-control" required>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label>Price for One Night</label>
                                <input id="lname" type="text" name="lname" class="form-control" required>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label>Discount</label>
                                <input id="lname" type="text" name="lname" class="form-control" required>
                            </div>


                            <div class="col-md-3 mb-3">
                                <label>Photo</label>
                                <input id="lname" type="text" name="lname" class="form-control" required>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label> Description</label>
                                <textarea class="form-control">

                                </textarea>
                            </div>

                            <div class="col-md-3 mb-3">
                                <button id="submit" type="submit" class="btn btn-info btn-block">Save Details</button>
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
