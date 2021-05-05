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

                                    <div class="col-md-12 mb-5 input-container">
                                        <div class="row row-container">
                                            <div class="col-md-6 mb-3">
                                                <label>Breakfast</label>
                                                <select name="fname[]" class="form-control">
                                                    <option value="1 King Bed">Yes</option>
                                                    <option value="2 Kings Bed">No</option>

                                                </select>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>Parking</label>
                                                <select name="fname[]" class="form-control">
                                                    <option value="1 King Bed">Yes</option>
                                                    <option value="2 Kings Bed">No</option>

                                                </select>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>Language spoken </label>
                                                <select name="fname[]" class="form-control">
                                                    <option value="1 King Bed">Swahili</option>
                                                    <option value="2 Kings Bed">English</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-12 mb-5 input-container">

                                        <div class="row row-container">
                                            <div class="col-md-12">
                                                <label>Facilities available at the hotel</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                        <label>Spa</label>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                        <label>Free Wifi</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                        <label>Swimming Pool</label>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                        <label>Bar</label>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                        <label>Air Conditioning</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                        <label>Smoking Zone</label>
                                                    </div>
                                                </div>
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

            <div class="col-md-4">
                <div class="col-md-4">
                    @include('listProperty.partial.reg_info')
                </div>
            </div>
        </div>

    </div>

@stop


@section('js')

@stop
