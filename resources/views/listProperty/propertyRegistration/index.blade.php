<link rel="stylesheet" href="{{asset('resources/listProperty/style.css')}}">
@extends('layout.listPropertyRegistration')

@section('css')

@stop

@section('content')

    <div class="container pb-3">

        <div class="row mt-3">

            <div style="padding-left: 0!important; padding-right: 0!important;" class="col-md-8 mt-3">

                <div>

                    <form action="{{url('list-your-property/property-registration/store')}}" method="post">

                        @csrf

                        <div>

                            <fieldset>

                                <div class="form-card">

                                    <h3 class="py-2"><strong style="color: #636363;"> Tell us your property's name</strong></h3>

                                    <div id="book-details">
                                        <div>
                                            <h6 style="color: red;" id="error-input"></h6>
                                        </div>
                                        <div class="form-row">

                                            <div class="form-group col-md-12">
                                                <label>Hotel Name</label><span style="color:red;">*</span>
                                                <input type="text" class="form-control" name="hotel_name">
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>Owner's Full Name</label><span style="color:red;">*</span>
                                                <input type="text" class="form-control" name="full_name">
                                            </div>

                                            <div class="col-md-12">

                                                <label>Does this property has multiple location</label>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <label>Yes</label>
                                                        <input value="Yes" type="radio" name="multiple_location">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label>No</label>
                                                        <input value="No" type="radio" name="multiple_location">
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <input id="btn-1" type="submit" name="save" class="btn btn-primary mt-3" value="Save" />

                            </fieldset>

                        </div>

                    </form>

                </div>

            </div>

            <div class="col-md-4">
                @include('listProperty.partial.reg_info')
            </div>

        </div>

    </div>

@stop


@section('js')
    <script>
        $(document).ready(function (){
            let  url =   '{{url('list-your-property/helper/get-sub')}}';

            $('#country_change').change( function (){

                $('#sub_country_id').html('');

                let countryID  =   $('#country_change').val();

                $.get(url+'/'+countryID,function (result){

                    console.log(result)

                    $('#sub_country_id').append('<option selected disabled>---select sub country--</option>');

                    for (let i=0; i<result.length; i++){

                        let  distr = "<option value='"+result[i].SubCountryID+"'>"+result[i].SubCountryName+"</option>";

                        $('#sub_country_id').append(distr);

                    }

                });

            } );
        });
    </script>

    <script>
        $(document).ready(function (){
            let  url =   '{{url('list-your-property/helper/get-reg/')}}';

            $('#sub_country_id').change( function (){

                $('#region_id').html('');

                let countryID  =   $('#country_change').val();
                let subID  =   $('#sub_country_id').val();

                $.get(url+'/'+countryID+'/'+subID,function (result){

                    console.log(result)

                    $('#region_id').append('<option selected disabled>---select sub country--</option>');

                    for (let i=0; i<result.length; i++){

                        let  distr = "<option value='"+result[i].Id+"'>"+result[i].RegionName+"</option>";

                        $('#region_id').append(distr);

                    }

                });

            } );
        });
    </script>
@stop
