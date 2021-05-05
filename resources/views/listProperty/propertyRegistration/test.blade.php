<link rel="stylesheet" href="{{asset('resources/listProperty/style.css')}}">
@extends('layout.listPropertyRegistration')

@section('css')
    #msform {
    text-align: center;
    position: relative;
    }

    #msform fieldset .form-card {
    background: white;
    border: 0 none;
    border-radius: 0px;
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    position: relative
    }

    #hotel-details{
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    padding-bottom: 20px;
    position: relative
    }

    #hotel-details .d-flex{
    background: white;
    border: 0 none;
    border-radius: 0px;
    padding: 40px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    position: relative;
    text-align: start;
    }

    #msform fieldset {
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
    }

    #msform fieldset:not(:first-of-type) {
    display: none
    }

    #msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E
    }


    #msform .action-button {
    width: 200px;
    background: #1a556e;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #1a556e
    }

    #msform .action-button-previous {
    width: 200px;
    background: #573a3a;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #573a3a
    }

    select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px
    }

    select.list-dt:focus {
    border-bottom: 2px solid skyblue
    }

    .card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative
    }

    .fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left
    }

    #progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
    }

    #progressbar .active {
    color: #000000
    }

    #progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 12.5%;
    float: left;
    position: relative;
    text-align: center;
    }

    #progressbar li strong{
    display: block;
    text-align: center;
    }



    #progressbar #account:before {
    font-family: FontAwesome;
    content: "\f023";
    }

    #progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
    }

    #progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d"
    }

    #progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
    }

    #progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 50px;
    /* display: block; */
    font-size: 12px;
    color: #ffffff;
    background: lightgray;
    border-radius: 25px;
    /* margin: 0 auto 10px; */
    padding: 5px;
    }

    #progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
    background: #f2851c;
    }

    .radio-group {
    position: relative;
    margin-bottom: 25px
    }

    .radio {
    display: inline-block;
    width: 204px;
    height: 104px;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor: pointer;
    margin: 8px 2px
    }

    .radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
    }

    .radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
    }

    .fit-image {
    width: 100%;
    object-fit: cover
    }
@stop

@section('content')

    <div class="container pb-3">

        <div class="row mt-3">

            <div style="padding-left: 0!important; padding-right: 0!important;" class="col-md-12 mt-3">


                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active" id="account"><strong><a href="#">Property's Name</a></strong></li>
                    <li id="personal"><strong>Property's Details</strong></li>
                    <li id="payment"><strong>Pricing</strong></li>
                    <li id="confirm"><strong>Facilities & Services</strong></li>
                    <li id="payment"><strong>Amenities</strong></li>
                    <li id="confirm"><strong>Photos</strong></li>
                    <li id="payment"><strong>Policies</strong></li>
                    <li id="confirm"><strong>Payments</strong></li>
                </ul>

                <div>

                    <form id="msform">

                        <div>

                            <fieldset>

                                <div class="form-card">

                                    <h3 class="py-2"><strong style="color: #636363;"> Tell us your property's name</strong></h3>

                                    <div id="book-details">
                                        <div>
                                            <h6 style="color: red;" id="error-input"></h6>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">

                                                <label>Hotel Name</label><span style="color:red;">*</span>
                                                <input type="text" class="form-control" id="fname" >

                                                <input type="text" class="form-control mt-2" id="fname" >

                                                <label>Does this property has multiple location</label><span style="color:red;">*</span>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Yes</label>
                                                        <input type="radio" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>No</label>
                                                        <input type="radio">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <input id="btn-1" type="button" name="next" class="next action-button btn btn-primary" value="Next" />

                            </fieldset>

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

                                    <div class="col-md-6">
                                        <label>Zip Code</label>
                                        <input type="text" name="sa1" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Star Type</label>
                                        <input value="{{$starTypeId}}" type="text" name="sa1" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Category </label>
                                        <input value="{{$categoryId}}" type="text" name="sa1" class="form-control">
                                    </div>


                                </div>


                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                                <input id="btn-2" type="button" name="next" class="next action-button btn btn-primary" value="Pay" />

                            </fieldset>

                            <fieldset>
                                <div class="form-card" >
                                    <h5 class="py-2">Payment method</h5>

                                    <div class="form-row border-bottom ">

                                        <div class="form-group col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="debit-radio" value="option1">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Debit/Credit card
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="paypal-radio" value="option1">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Paypal
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="paypal">
                                        <h4>Pay with paypal</h4>
                                        <p>You will be redirected to paypal website to continue</p>
                                    </div>

                                    <div id="debit-credit">

                                        <h4>Allowed cards</h4>

                                        <div id="img-hover" class="d-flex justify-content-start mt-2">
                                            <img class="img-thumbnail" width="100" height="100" src="{{asset('resources/images/hotel/mastercard.png')}}" alt="latest product">
                                            <img class="img-thumbnail ml-5" width="100" height="100" src="{{asset('resources/images/hotel/visa.png')}}" alt="latest product">
                                        </div>

                                        <div class="pt-3">
                                            <h6 style="color: red;" id="error-input3"></h6>
                                        </div>

                                        <div class="form-row">

                                            <div class="form-group col-md-6">
                                                <label>Card Name</label><span style="color:red;">*</span>
                                                <input type="text" class="form-control" id="cardname">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Card Number</label><span style="color:red;">*</span>
                                                <input type="text" class="form-control" id="cardno">
                                            </div>

                                        </div>

                                        <div class="form-row">

                                            <div class="form-group col-md-6">
                                                <label>Expiration Date</label><span style="color:red;">*</span>
                                                <input type="text" class="form-control" id="expire">
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label>Card Type</label><span style="color:red;">*</span>
                                                <select id="cardtype" class="form-control">
                                                    <option selected disabled>--select card--</option>
                                                    <option>Master card</option>
                                                    <option>Visa card</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label>Cvc</label><span style="color:red;">*</span>
                                                <input type="text" class="form-control" id="cvc">
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div>
                                    <div class="mt-3">
                                        <p class="px-5">
                                            Your booking is directly with Tembo House Hotel and by completing this booking
                                            you agree to the booking conditions, general terms, and privacy policy.
                                        </p>
                                    </div>
                                </div>

                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                <input id="btn-3" type="button" name="make_payment" class="next action-button btn btn-primary" value="Confirm Payment" />
                            </fieldset>

                            <fieldset>

                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Completed Booking Successfully</h5>
                                            <a href="{{url('/')}}" class="btn btn-success">Back to home page</a>
                                        </div>
                                    </div>
                                </div>

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
        $(document).ready(function(){

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $("#btn-1").click(function(){

                let fname = $("#fname").val();
                let lname = $("#lname").val();
                let email = $("#email").val();
                let conf = $("#conf_email").val();

                if (fname != '' && lname != '' && email != '' && conf != '' )
                {

                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();

//Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

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

//Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

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

            $("#btn-3").click(function(){

                let cardName = $("#cardname").val();
                let cardNo = $("#cardno").val();
                let cardType = $("#cardtype").val();
                let cvc = $("#cvc").val();

                if (cardName != '' && cardNo != '' && cardType != '' && cvc != '' )
                {

                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();

//Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

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
                    $("#error-input3").text('Please fill in the required fields')
                }


            });

            $(".previous").click(function(){

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

//Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
                previous_fs.show();

//hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function(now) {
// for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({'opacity': opacity});
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function(){
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function(){
                return false;
            })

        });
    </script>

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
