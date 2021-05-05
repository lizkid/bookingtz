<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/f50cbe1cfd.js" crossorigin="anonymous"></script>

    <!--automation on scroll-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    {{--    slick slider--}}
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    {{--    main css--}}
    <link rel="stylesheet" href="{{asset('resources/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('resources/css/topBarContent.css')}}">


    <style>@yield('css')</style>

</head>
<body>

<div class="wrapper">

    <!--    navigation -->
    <div id="navigation">
        <div id="top-navigation">
            <div class="date">
                <p data-text="Book with us now!!!">Book with us now!!!</p>
            </div>

            <div class="order">
                <a href="#"  >More about Covid 19</a>

            </div>


        </div>

        <div id="nav-content">

            <nav class="navbar navbar-expand-lg">

                <a class="navbar-brand" href="{{url('/')}}">Booking Tz</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a data-toggle="modal" data-target="#lang" id="lang-link" class="nav-link">Eng <span class="sr-only">(current)</span></a>

                            @include('modal.topBarContent.language')

                        </li>
                        <li class="nav-item">
                            <a data-toggle="modal" data-target="#currency-modal" class="nav-link" >USD</a>

                            @include('modal.topBarContent.currency')
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Help
                            </a>
                        </li>

                        <li class="nav-item">
                            <a data-toggle="modal" data-target="#login" class="nav-link" >Sign in </a>
                            @include('modal.auth.login')
                        </li>
                        <li class="nav-item">
                            <a data-toggle="modal" data-target="#register" class="nav-link" >Register</a>
                            @include('modal.auth.register')
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="{{url('list-your-property')}}">Host Property</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a style="float: end;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >My Profile</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('my-profile/booking-information')}}">Booking Information</a>
                                <a class="dropdown-item" href="{{url('my-profile/touring-information')}}">Touring Information</a>
                                <a class="dropdown-item" href="{{url('my-profile/both-information')}}">Both</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>


    </div>

    <!--    navigation end-->

    <!--    main-content-->

    <div class="main">

        @yield('content')

    </div>



    <!--    end main-content-->

    @include('partial.footer')
</div>



{{--slick slider--}}
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    AOS.init({
        offset: 300,
        once: true,
        duration: 1000
    });
</script>
<!--main js-->
<script src="{{url('resources/js/main.js')}}"></script>

<script>
    $('#slideshow').slick({
        dots: false,
        focusOnSelect:false,
        slidesToShow: 6,
        slideToScroll: 1,
        infinite: false,
        useCSS:true,
        variableWidth: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });


</script>



<script>
    $(document).ready(function(){
        var num = $("#nav-content").offset().top=122;
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > num) {
                $('#nav-content').addClass('sticky');
            }
            else {
                $('#nav-content').removeClass('sticky');
            }
        });
    });
</script>

<script>
    $(document).ready(function (){
        $("#select-time").change(function (){
            let time = $("#select-time").val()

            $("#select-2 option:selected").html(time)

            $("#select-2").change(function (){
                let time = $("#select-2").val()

                $("#select-time option:selected").html(time)

            }) ;

        }) ;

    });
</script>

<script>
    $(document).ready(function (){
        $("#guest").click(function (e){

            $("#dropdown-account-content").fadeIn()


            $("#dropdown-account-content").show()
            e.stopPropagation();

            $("#solo").click(function (){

                $("#guest").val('');

                let solo = $("#solo p span").html();

                $("#guest").val(solo);
            });

            $("#couple").click(function (){

                $("#guest").val('');

                let couple = $("#couple p span").html();

                $("#guest").val(couple);
            });


        });

        $(document).mouseup(function(e)
        {
            var container = $("#guest-parent");

            // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && container.has(e.target).length === 0)
            {

                $("#dropdown-account-content").fadeOut()

                $("#dropdown-account-content").hide()


            }
        });

    });
</script>

<script>
    $(document).ready(function (){
        let today = new Date().toISOString().split('T')[0];

        let x = 1;
        let currentDate = new Date();
        currentDate.setDate(currentDate.getDate() + x);

        $("#checkOut")[0].setAttribute('min', currentDate.toISOString().split('T')[0]);

        $("#checkIn")[0].setAttribute('min', today);


    });
</script>


<script>
    $(document).ready(function (){

        $("#propertyCategories").focus(function (e){

            $(".form-control").toggleClass('toggled')

            $('#searched-output').addClass('main-again')

            if ($("#propertyCategories").val() == '')
            {
                $("#searched-output").fadeIn();

                $("#searched-output").show();
                e.stopPropagation();
            }

            $(document).on('click', '#popular tr', function (){

                let name = $(this).children("td:nth-child(2)").children('p').text()

                // let name = $(this).find('td:eq(1)').text())

                $("#propertyCategories").val(name)

                $("#searched-output").hide();

            });

            $("#propertyCategories").keyup(function (){

                $("#searched-output").fadeOut()

                $("#searched-output").hide()

                let input = $("#propertyCategories").val();

                if (input != '')
                {
                    var _token = $('input[name="_token"]').val();

                    $.ajax({

                        url:'{{url('/search')}}',
                        method:'post',
                        data:{

                            input:input, _token:_token

                        },
                        success:function (response){

                            $("#appended-result").fadeIn()

                            $("#appended-result").html(response)

                        }
                    });

                }

                else
                {
                    $("#appended-result").fadeOut()

                    $("#appended-result").html('')
                }

                $(document).on('click', '#searched-row tr',function (){

                    let searched = $(this).children("td:nth-child(2)").children('p').text()

                    $("#propertyCategories").val(searched);  //capturing the value into the insert box
                    $("#appended-result").fadeOut();
                    $("#appended-result").html('');  //making the list empty after selecting the item


                });

            });


        });

        $(document).mouseup(function(e)
        {
            var container = $("#propertyCategories-parent");

            // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && container.has(e.target).length === 0)
            {
                $("#searched-output").fadeOut();

                $("#searched-output").hide()
            }
        });

        $(document).mouseup(function(e)
        {
            var container = $("#propertyCategories-parent");

            // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && container.has(e.target).length === 0)
            {
                $("#appended-result").fadeOut()

                $("#appended-result").html('')
            }
        });

    });
</script>

<script>
    $(document).ready(function (){

        var x = 1;
        var y = 1;
        var z = 0;

        var adult = $("#family-input-adult").val(x+' Adult');
        var room = $("#family-input-room").val(y+' Room');
        var child = $("#family-input-child").val(z+' Children');

        $("#guest").val(+x+' Adult, ' +y+' Room, ' +z+' Children')

        $("#family-adult-plus").click(function (){

            if (x==9)
            {
                $("#error-2").html("Max: Available is 10 items")

                $("#error-2").show()
            }

            else
            {
                if (x <= 9)
                {
                    $(adult).val(++x+' Adults');

                    if (y==1 && z==1)
                    {
                        $("#guest").val(+x+' Adults, ' +y+' Room, ' +z+' Child')
                    }

                    else if(y==1 && z!=1)
                    {
                        $("#guest").val(+x+' Adults, ' +y+' Room, ' +z+' Children')
                    }

                    else if(y!=1 && z==1)
                    {
                        $("#guest").val(+x+' Adults, ' +y+' Rooms, ' +z+' Child')
                    }

                    else
                    {
                        $("#guest").val(+x+' Adults, ' +y+' Rooms, ' +z+' Children')
                    }

                }
            }

        });

        $("#family-adult-minus").click(function (){

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
                    $(adult).val(--x+' Adults');

                    if (x==2)
                    {
                        $(adult).val(--x+' Adult');
                    }

                    if (x==1)
                    {

                        if (y==1 && z==1)
                        {
                            $("#guest").val(+x+' Adult, ' +y+' Room, ' +z+' Child')
                        }

                        else if(y==1 && z!=1)
                        {
                            $("#guest").val(+x+' Adult, ' +y+' Room, ' +z+' Children')
                        }

                        else if(y!=1 && z==1)
                        {
                            $("#guest").val(+x+' Adult, ' +y+' Rooms, ' +z+' Child')
                        }

                        else
                        {
                            $("#guest").val(+x+' Adult, ' +y+' Rooms, ' +z+' Children')
                        }
                    }

                    else
                    {
                        if (y==1 && z==1)
                        {
                            $("#guest").val(+x+' Adults, ' +y+' Room, ' +z+' Child')
                        }

                        else if(y==1 && z!=1)
                        {
                            $("#guest").val(+x+' Adults, ' +y+' Room, ' +z+' Children')
                        }

                        else if(y!=1 && z==1)
                        {
                            $("#guest").val(+x+' Adults, ' +y+' Rooms, ' +z+' Child')
                        }

                        else
                        {
                            $("#guest").val(+x+' Adults, ' +y+' Rooms, ' +z+' Children')
                        }
                    }

                }
            }
        });

        $("#family-room-plus").click(function (){

            $("#error").hide()

            if (y==9)
            {
                $("#error-2").html("Max: Available is 10 items")

                $("#error-2").show()
            }

            else
            {
                if (y <= 9)
                {
                    $(room).val(++y+' Rooms');

                    if (x==1 && z==1)
                    {
                        $("#guest").val(+x+' Adult, ' +y+' Rooms, ' +z+' Child')
                    }

                    else if(x==1 && z!=1)
                    {
                        $("#guest").val(+x+' Adult, ' +y+' Rooms, ' +z+' Children')
                    }

                    else if(x!=1 && z==1)
                    {
                        $("#guest").val(+x+' Adults, ' +y+' Rooms, ' +z+' Child')
                    }

                    else
                    {
                        $("#guest").val(+x+' Adults, ' +y+' Rooms, ' +z+' Children')
                    }

                }
            }

        });

        $("#family-room-minus").click(function (){

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
                    $(room).val(--y+' Rooms');

                    if (y==2)
                    {
                        $(room).val(--y+' Room');
                    }

                    if (y==1)
                    {
                        if (x==1 && z==1)
                        {
                            $("#guest").val(+x+' Adult, ' +y+' Room, ' +z+' Child')
                        }

                        else if(x==1 && z!=1)
                        {
                            $("#guest").val(+x+' Adult, ' +y+' Room, ' +z+' Children')
                        }

                        else if(x!=1 && z==1)
                        {
                            $("#guest").val(+x+' Adults, ' +y+' Room, ' +z+' Child')
                        }

                        else
                        {
                            $("#guest").val(+x+' Adults, ' +y+' Room, ' +z+' Children')
                        }
                    }

                    else
                    {
                        if (x==1 && z==1)
                        {
                            $("#guest").val(+x+' Adult, ' +y+' Rooms, ' +z+' Child')
                        }

                        else if(x==1 && z!=1)
                        {
                            $("#guest").val(+x+' Adult, ' +y+' Rooms, ' +z+' Children')
                        }

                        else if(x!=1 && z==1)
                        {
                            $("#guest").val(+x+' Adults, ' +y+' Rooms, ' +z+' Child')
                        }

                        else
                        {
                            $("#guest").val(+x+' Adults, ' +y+' Rooms, ' +z+' Children')
                        }
                    }


                }
            }
        });

        $("#family-child-plus").click(function (){

            let age = '';

            age += '<option value="0">0 years old</option>'

            age += '<option selected>1 year old</option>'

            $("#child-age").show()

            for(let m=2; m<=17; m++)
            {
                age += '<option value="'+m+'">'+m+' years old</option>';
            }

            $("#select").append('<select id="select-age" class="form-control mt-2">'+age+'</select>')

            if (z==0)
            {
                $(child).val(++z+' Child');
            }

            else
            {
                if (z < 9)
                {
                    $(child).val(++z+' Children');

                    if (z==1)
                    {

                        if (x==1 && y==1)
                        {
                            $("#guest").val(+x+' Adult, ' +y+' Room, ' +z+' Child')
                        }

                        else if(x==1 && y!=1)
                        {
                            $("#guest").val(+x+' Adult, ' +y+' Rooms, ' +z+' Child')
                        }

                        else if(x!=1 && y==1)
                        {
                            $("#guest").val(+x+' Adults, ' +y+' Room, ' +z+' Child')
                        }

                        else
                        {
                            $("#guest").val(+x+' Adults, ' +y+' Rooms, ' +z+' Child')
                        }
                    }


                    else
                    {
                        if (x==1 && y==1)
                        {
                            $("#guest").val(+x+' Adult, ' +y+' Room, ' +z+' Children')
                        }

                        else if(x==1 && y!=1)
                        {
                            $("#guest").val(+x+' Adult, ' +y+' Rooms, ' +z+' Children')
                        }

                        else if(x!=1 && y==1)
                        {
                            $("#guest").val(+x+' Adults, ' +y+' Room, ' +z+' Children')
                        }

                        else
                        {
                            $("#guest").val(+x+' Adults, ' +y+' Rooms, ' +z+' Children')
                        }
                    }

                }
            }

        });

        $("#family-child-minus").click(function (){

            $("#error-2").hide()

                if (z > 0)
                {
                    $(child).val(--z+' Children');

                    $("#select").find("#select-age:last-child").remove()


                    if (z==1)
                    {
                        $(child).val(+z+' Child');

                        if (x==1 && y==1)
                        {
                            $("#guest").val(+x+' Adult, ' +y+' Room, ' +z+' Child')
                        }

                        else if(x==1 && y!=1)
                        {
                            $("#guest").val(+x+' Adult, ' +y+' Rooms, ' +z+' Child')
                        }

                        else if(x!=1 && y==1)
                        {
                            $("#guest").val(+x+' Adults, ' +y+' Room, ' +z+' Child')
                        }

                        else
                        {
                            $("#guest").val(+x+' Adults, ' +y+' Rooms, ' +z+' Child')
                        }
                    }


                    else
                    {
                        if (x==1 && y==1)
                        {
                            $("#guest").val(+x+' Adult, ' +y+' Room, ' +z+' Children')
                        }

                        else if(x==1 && y!=1)
                        {
                            $("#guest").val(+x+' Adult, ' +y+' Rooms, ' +z+' Children')
                        }

                        else if(x!=1 && y==1)
                        {
                            $("#guest").val(+x+' Adults, ' +y+' Room, ' +z+' Children')
                        }

                        else
                        {
                            $("#guest").val(+x+' Adults, ' +y+' Rooms, ' +z+' Children')
                        }
                    }


                }

        });

    });
</script>


@yield('js')

</body>
</html>
