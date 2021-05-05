<link rel="stylesheet" href="{{asset('resources/listProperty/style.css')}}">
@extends('layout.listProperty')

@section('css')

    #fa-eye{
    font-size: 25px;
    margin-top: -30px;
    padding-bottom: 30px;
    cursor: pointer;
    float: right;
    }

    #fa-eye i{

    color: #7a7c7d;
    float: right;
    padding: 0 10px;
    }


@stop

@section('content')

    <div class="container pb-5">

        <div class="row mt-3">
            <div class="col-md-12 pt-3 mt-3 mb-3">

                <div style="width: 35%; margin: auto; ">

                    <div class="text-center">
                        @include('partial.flash.index')
                    </div>

                    <h4 class="text-center">Login to manage your property</h4>
                    <form id="msform"  action="{{url('list-your-property/login')}}" method="post">
                        @csrf
                        <fieldset>

                            <div class="form-card">
                                <div class="pt-3">
                                    <h6 style="color: red;" id="error-input2"></h6>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Email</label><span class="star">*</span>
                                    <input  type="email" name="email" class="form-control">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Password</label><span class="star">*</span>
                                    <input id="password"  type="password" name="password" class="form-control" ><span id="fa-eye"></span>
                                </div>

                            </div>

                            <input id="btn-2" type="submit" name="next" class="next action-button btn-block btn-block btn btn-primary" value="Login" />

                        </fieldset>
                    </form>
                </div>

            </div>
        </div>

    </div>

@stop

@section('js')

    <script>
        $(document).ready(function (){

            $('#fa-eye').html('<i class="fas fa-eye"></i>');


            $('#fa-eye').click(function (){

                if ($('#password').attr('type') == 'text') {
                    $('#password').attr('type', 'password');
                    $('#fa-eye').html('');
                    $('#fa-eye').html('<i class="fas fa-eye"></i>');
                } else {
                    $('#fa-eye').html('<i class="fas fa-eye-slash"></i>');
                    $('#password').attr('type', 'text');
                }
            });
        });


    </script>
@stop
