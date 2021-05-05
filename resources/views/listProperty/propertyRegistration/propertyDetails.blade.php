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
                                        <label>Country</label>
                                        <select id="country_change" name="country_id" class="form-control">
                                            <option selected disabled>--select-country--</option>
                                            @foreach($countries->countries as $row)
                                                <option value="{{$row->CountryID}}">{{$row->CountryName}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label>Sub Country</label>
                                        <select id="sub_country_id" name="sub_country_id" class="form-control">

                                        </select>
                                    </div>


                                    <div class="col-md-12 mb-3">
                                        <label>Region</label>
                                        <select id="region_id" name="region_id" class="form-control">

                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Street Address</label>
                                        <input type="text" name="sa1" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Street Address 2</label>
                                        <input type="text" name="sa2" class="form-control">
                                    </div>

                                    <div class="col-md-12">
                                        <label>Zip Code</label>
                                        <input type="text" name="zip_code" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <input value="{{$starTypeId}}" type="hidden" name="star" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <input value="{{$categoryId}}" type="hidden" name="category" class="form-control">
                                    </div>


                                </div>

                                <input id="btn-2" type="submit" name="save" class="mt-3 btn btn-primary" value="Continue" />

                            </fieldset>

                        </div>

                    </form>

                </div>

            </div>

            <div class="col-md-4">
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
