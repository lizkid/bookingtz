@extends('admin.layout.master')

@section('admin-css')

    <style>
        input[type=checkbox], input[type=radio] {
            transform: scale(1.5);
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

                            <div class="col-md-6 mb-3">
                                <label>Photo</label>
                                <input id="" type="file" name="" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Type</label>
                                <select class="form-control">
                                    <option>Rooms</option>
                                    <option>Recreation</option>
                                    <option>Bars & Restaurant</option>
                                    <option>Dining</option>
                                </select>
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
