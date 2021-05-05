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

                                <h3 class="py-2"><strong style="color: #636363;">Payments</strong></h3>

                                <div class="pt-3">
                                    <h6 style="color: red;" id="error-input2"></h6>
                                </div>

                                <div class="form-row form-card">

                                    <div class="col-md-12 mb-3">
                                        <label>Guest Payment Options</label>
                                        <select name="fname[]" class="form-control">
                                            <option selected disabled>--select payment option--</option>
                                            <option value="1 King Bed">Cash Only</option>
                                            <option value="2 Kings Bed">Credit/Debit Card Only</option>
                                            <option value="2 Kings Bed">Both</option>

                                        </select>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label>Commission Payments</label>
                                        <p>Choose name to be displayed on the invoice</p>
                                        <select name="fname[]" class="form-control">
                                            <option value="Royal Suite">Musa King</option>
                                            <option value="1 King Bed">Jumba Bovu</option>
                                            <option value="2 Kings Bed">Company Name (if available)</option>

                                        </select>
                                    </div>

                                </div>

                                <input id="btn-2" type="submit" name="save" class="mt-3 btn btn-primary btn-block" value="Continue" />

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
