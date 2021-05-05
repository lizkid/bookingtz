<link rel="stylesheet" href="{{asset('resources/listProperty/style.css')}}">
@extends('layout.listProperty')

@section('css')

@stop

@section('content')

    <div class="container pb-3">

        <div class="row mt-3">
            <div class="col-md-12 pt-3 mt-3 mb-3">

                <div style="width: 40%; margin: auto; ">
                    <div class="text-center">
                        @include('partial.flash.index')
                    </div>
                    <p id="error-input"></p>
                    <h4 class="text-center">Create an account to list and manage your property</h4>

                    <form action="{{url('list-your-property/user-registration/store')}}" method="post" id="msform">
                       @csrf
                        <div>
                            <fieldset>

                                <div class="form-card">
                                    <div class="col-md-12 pt-3 mb-3">
                                        <label>First Name</label><span class="star">*</span>
                                        <input  type="text" id="fname" name="fname" class="form-control" >
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label>Middle Name</label><span class="star">*</span>
                                        <input  type="text" id="mname" name="mname" class="form-control">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label>Last Name</label><span class="star">*</span>
                                        <input  type="text" id="lname" name="lname" class="form-control">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label>Phone</label><span class="star">*</span>
                                        <input  type="text" id="phone" name="phone" class="form-control" >
                                    </div>
                                </div>

                                <input id="btn-1" type="button" name="next" class="next action-button btn-block btn btn-primary" value="Next"/>
                            </fieldset>

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
                                        <input  type="password" name="password" class="form-control" >
                                    </div>

                                </div>

                                <input id="btn-2" type="submit" name="next" class="next action-button btn-block btn btn-primary" value="Register" />

                            </fieldset>

                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>

@stop


@section('js')
    <script>
        $(document).ready(function (){
            $('.toast').toast('show');
        });
    </script>
    <script>
        $(document).ready(function(){

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $("#btn-1").click(function(){

                let fname = $("#fname").val();
                let mname = $("#mname").val();
                let lname = $("#lname").val();
                let email = $("#email").val();
                let phone = $("#phone").val();


                if (fname != '' && mname != '' && lname != '' && email != '' && phone != ''  )
                {

                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();

//show the next fieldset
                    next_fs.show();
//hide the current fieldset with style
                    current_fs.animate({opacity: 0}, {
                        step: function(now) {
// for making fielset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            next_fs.css({'opacity': opacity});
                        },
                        duration: 600
                    });
                }

                else
                {
                    $("#error-input").text('Please fill in the required fields')
                }


            });

            $("#btn-2").click(function(){

                let phone = $("#phone").val();
                let country = $("#country").val();


                if (phone != '' && country != '' )
                {

                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();

//show the next fieldset
                    next_fs.show();
//hide the current fieldset with style
                    current_fs.animate({opacity: 0}, {
                        step: function(now) {
// for making fielset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            next_fs.css({'opacity': opacity});
                        },
                        duration: 600
                    });
                }

                else
                {
                    $("#error-input2").text('Please fill in the required fields')
                }


            });

            $(".submit").click(function(){
                return false;
            })

        });
    </script>
@stop
