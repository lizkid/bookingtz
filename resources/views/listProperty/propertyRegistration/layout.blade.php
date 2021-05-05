<link rel="stylesheet" href="{{asset('resources/listProperty/style.css')}}">
@extends('layout.listPropertyRegistration')

@section('css')

    #room-plus, #room-minus, #bed-plus, #bed-minus, #guest-plus, #guest-minus{
    padding: 10px;
    cursor: pointer;
    }

    #room-plus:hover, #room-minus:hover, #bed-plus:hover, #bed-minus:hover, #guest-plus:hover, #guest-minus:hover{
    background: #efeff1;
    }

    #input-room, #input-bed, #input-guest{
    border: unset;
    }

    .room-bed-container{
    width: 120px;
    border: 1px solid #ced4da;
    }

@stop

@section('content')

    <div class="container pb-3">

        <div class="row">

            <div style="padding-left: 0!important; padding-right: 0!important;" class="col-md-8">

                <div>

                    <form action="{{url('list-your-property/property-details/store')}}" method="post">

                        @csrf

                        <div>

                            <fieldset>

                                <h3 class="py-2"><strong style="color: #636363;">Layout and Pricing</strong></h3>

                                <div class="pt-3">
                                    <h6 style="color: red;" id="error-input2"></h6>
                                </div>

                                <div class="form-row form-card">

                                    <div class="col-md-12 mb-5 input-container">
                                        <div class="row row-container">
                                            <div class="col-md-12 mb-3">
                                                <label>Room Type</label>
                                                <select id="room_type" name="room_type" class="form-control">
                                                    <option selected disabled>--select room type--</option>
                                                    <option value="Royal Suite">Single</option>
                                                    <option value="1 King Bed">Double</option>
                                                    <option value="2 Kings Bed">Twin</option>

                                                </select>
                                            </div>

                                            <div id="room_name_container" class="col-md-12">
                                                <div class="row">
                                                    <div  class="col-md-6 mb-3">
                                                        <label>Room Name</label>
                                                        <select name="room_name" class="form-control">
                                                            <option selected disabled>--select room type--</option>
                                                            <option value="Presidential Suite">Presidential Suite</option>
                                                            <option value="Royal Suite">Royal Suite</option>
                                                            <option value="1 King Bed">One King Bed </option>
                                                            <option value="2 Kings Bed">Two Kings Bed</option>
                                                            <option value="1 King Bed Sea View">One King Bed Sea View </option>
                                                            <option value="2 Kings Bed Sea View">Two Kings Bed Sea View</option>

                                                        </select>
                                                    </div >

                                                    <div class="col-md-6 mb-3">
                                                        <label>Room Code</label>
                                                        <input  type="text" name="lname" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12 mb-3">
                                                <label>Number of rooms (for selected type)</label>
                                                <div class="room-bed-container d-flex justify-content-around">
                                                    <span id="room-minus"><i class="fas fa-minus"></i></span>
                                                    <input class="form-control" id="input-room">
                                                    <span id="room-plus"><i class="fas fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-5 input-container">
                                        <div class="row row-container">

                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-8 mb-3">
                                                        <label>Beds available in this room</label>
                                                        <select name="bed" class="form-control">
                                                            <option selected disabled>--select room type--</option>
                                                            <option value="Presidential Suite">Presidential Suite</option>
                                                            <option value="Royal Suite">Royal Suite</option>
                                                            <option value="1 King Bed">One King Bed </option>
                                                            <option value="2 Kings Bed">Two Kings Bed</option>
                                                            <option value="1 King Bed Sea View">One King Bed Sea View </option>
                                                            <option value="2 Kings Bed Sea View">Two Kings Bed Sea View</option>

                                                        </select>
                                                    </div>

                                                    <div class="col-md-4 mb-3">
                                                        <label>Number Of Beds</label>
                                                        <div class="d-flex justify-content-around room-bed-container">
                                                            <span id="bed-minus"><i class="fas fa-minus"></i></span>
                                                            <input class="form-control" id="input-bed">
                                                            <span  id="bed-plus"><i class="fas fa-plus"></i></span>
                                                        </div>
                                                    </div>

                                                </div>

                                                <h4 style="color: #3c4093; cursor: pointer;" class="text-center">Add another bed type</h4>

                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label>Number of guests the selected room can  hold</label>
                                                <div class="room-bed-container d-flex justify-content-around">
                                                    <span id="guest-minus"><i class="fas fa-minus"></i></span>
                                                    <input class="form-control" id="input-guest">
                                                    <span id="guest-plus"><i class="fas fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 input-container">
                                        <div class="row row-container">
                                            <div class="col-md-12 mb-3">
                                                <label>Room size (square meters)</label>
                                                <input  type="text" name="lname" class="form-control" >
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label>Room Description</label>
                                                <textarea class="form-control">

                                        </textarea>

                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <h4>Add Price for one night for the selected room</h4>
                                                <label>Price for one person </label>
                                                <input  type="text" name="lname" class="form-control" >
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <input id="btn-2" type="submit" name="save" class="mt-3 btn btn-block btn-primary" value="Continue" />

                            </fieldset>

                        </div>

                    </form>

                </div>

            </div>

            <div  class="col-md-4">
                <div class="col-md-4">
                    @include('listProperty.partial.reg_info')
                </div>
            </div>

        </div>

    </div>

@stop


@section('js')

    <script>
        $(document).ready(function (){

            $("#room_name_container").hide()

            $("#room_type").change(function (){

                $("#room_name_container").show()
            });

        });
    </script>

    <script>
        $(document).ready(function (){

            var x = 1;
            var y = 1;
            var z = 1;

            var adult = $("#input-room").val(x);
            var bed = $("#input-bed").val(y);
            var guest = $("#input-guest").val(z);

            $("#room-plus").click(function (){

                if (x==9)
                {
                    $("#error-2").html("Max: Available is 10 items")

                    $("#error-2").show()
                }

                else
                {
                    if (x <= 9)
                    {
                        $(adult).val(++x);

                    }
                }

            });

            $("#room-minus").click(function (){

                $("#error-2").hide()

                if (x==1)
                {
                    $("#error").html("Min is 1 item")

                    $("#error").show()
                }
                else
                {
                    if (x > 1)
                    {
                        $(adult).val(--x);

                    }
                }
            });

            $("#bed-plus").click(function (){

                if (y==9)
                {
                    $("#error-2").html("Max: Available is 10 items")

                    $("#error-2").show()
                }

                else
                {
                    if (y <= 9)
                    {
                        $(bed).val(++y);

                    }
                }

            });

            $("#bed-minus").click(function (){

                $("#error-2").hide()

                if (y==1)
                {
                    $("#error").html("Min is 1 item")

                    $("#error").show()
                }
                else
                {
                    if (y > 1)
                    {
                        $(bed).val(--y);

                    }
                }
            });

            $("#guest-plus").click(function (){

                if (z==9)
                {
                    $("#error-2").html("Max: Available is 10 items")

                    $("#error-2").show()
                }

                else
                {
                    if (z <= 9)
                    {
                        $(guest).val(++z);

                    }
                }

            });

            $("#guest-minus").click(function (){

                $("#error-2").hide()

                if (z==1)
                {
                    $("#error").html("Min is 1 item")

                    $("#error").show()
                }
                else
                {
                    if (z > 1)
                    {
                        $(guest).val(--z);

                    }
                }
            });

        });
    </script>
@stop
