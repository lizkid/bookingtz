<link rel="stylesheet" href="{{asset('resources/listProperty/style.css')}}">
@extends('layout.listPropertyRegistration')

@section('css')

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

                                <h3 class="py-2"><strong style="color: #636363;">Location for your property</strong></h3>

                                <div class="pt-3">
                                    <h6 style="color: red;" id="error-input2"></h6>
                                </div>

                                <div class="form-row form-card">

                                    <div class="col-md-12 mb-3">
                                        <label>Room Type</label>
                                        <select name="fname[]" class="form-control">
                                            <option selected disabled>--select room type--</option>
                                            <option value="Royal Suite">Single</option>
                                            <option value="1 King Bed">Double</option>
                                            <option value="2 Kings Bed">Twin</option>

                                        </select>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label>Number of rooms (for selected type)</label>
                                        <input  type="text" name="lname" class="form-control" >
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label>Beds available in this room</label>
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


                                    <div class="col-md-12 mb-3">
                                        <label>Number Of Beds</label>
                                        <select class="form-control">
                                            <option selected disabled>--select number of beds--</option>
                                            <option>1 Bed</option>
                                            @for($x=2; $x<=4; $x++)

                                                <option value="{{$x}}">{{$x}} Beds</option>

                                            @endfor
                                        </select>
                                    </div>

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

                                <input id="btn-2" type="submit" name="save" class="mt-3 btn btn-primary" value="Continue" />

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

@stop
