<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- icons-->
    <script src="https://kit.fontawesome.com/f50cbe1cfd.js" crossorigin="anonymous"></script>

    {{--    slick slider--}}
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>


    <style>
        body{
            overflow-x: hidden;
            background: #efecec;
        }

        input[type=checkbox], input[type=radio] {
            transform: scale(1.5);
            margin: 0 5px;
        }

        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
        }

        #navigation{
            position: fixed;
            display: block;
            width: 100%;
            z-index: 99;
            margin: 0;
            top: 0;
        }

        #navigation .navbar {
            background: white;
            box-shadow: 0 0 10px #888888;
        }
    .navbar-brand {
    font-family: 'Poppins', sans-serif;
    color: #e2a043;
    font-size: 20px!important;
    font-weight: bold;
    }

    .navbar-brand:hover{
        color: #e2a043;
    }

    ul li a {
    display: block;
    color: black;
    opacity: 0.7;
    font-weight: bold;
    padding: 10px;
    margin: 10px;
    cursor: pointer;
    transition: 0.2s;
    }

        ul li a:hover{
            color: #e58926;
            opacity: 1;
        }

        .getStarted {
            background: #e2a043;
            color: #fae8d8;
            border: 1px solid #e2a043;
            width: 150px;
            text-align: center;
            padding: 10px;
            cursor: pointer;
            transition: 0.2s ease-in-out;
            border-radius: 0;
        }
        .getStarted:hover{
            color: white;
            text-decoration: none;
        }
        /*.main{*/
        /*    margin-top: 77px;*/
        /*}*/

        h4{
            font-size: 16px;
        }

        form{
            width: 80%;
            margin: auto;
            display: block;
        }

        #reg_info{
            position: fixed;
            display: block;
            margin: 100px;
            padding: 0;
        }

        .navTab ul li{
            background: #efeff1;
            margin-left: 20px;
        }

        .navTab ul li a{
            color: #242222;
            text-align: center;
            width: 150px;
            font-size: 14px;
            margin: 10px 0 10px 5px;
        }

        .navTab ul li.active a{
            color: #e2a043;
            opacity: 1;
        }

        .navTab ul li a:hover{
            color: #e2a043;
        }

        .input-container{
            border: 1px solid #d4cfcf;
            border-radius: 5px;
            /*background: #fff;*/
        }

        .row-container{
            padding: 20px;
        }

    </style>
    <style>@yield('css')</style>

</head>
<body>

<div class="wrapper">

    <!--    navigation -->
    <div id="navigation">

        <div id="nav-content" >

            <nav class="navbar navbar-expand-lg">

                <a class="navbar-brand" >Booking Tz</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a href="#" class="nav-link" >Home</a>
                        </li>


                    </ul>
                </div>

                <a  href="{{url('list-your-property/logout')}}">Logout</a>

            </nav>




        </div>


    </div>

    <nav style="margin-top: 80px;" class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div  class="collapse navbar-collapse navTab" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item {{ Request::url() == url('/list-your-property/property-registration', [$categoryId, $starTypeId]) ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('list-your-property/property-registration', [$categoryId, $starTypeId])}}">Property's Name <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ Request::url() == url('/list-your-property/property-details', [$categoryId, $starTypeId]) ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('list-your-property/property-details', [$categoryId, $starTypeId])}}">Property's Details</a>
                </li>

                <li class="nav-item {{ Request::url() == url('/list-your-property/property-layout', [$categoryId, $starTypeId]) ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('list-your-property/property-layout' , [$categoryId, $starTypeId])}}">Layout</a>
                </li>

                <li class="nav-item {{ Request::url() == url('/list-your-property/property-services', [$categoryId, $starTypeId]) ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('list-your-property/property-services' , [$categoryId, $starTypeId])}}">Services</a>
                </li>

                <li class="nav-item {{ Request::url() == url('/list-your-property/property-amenities', [$categoryId, $starTypeId]) ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('list-your-property/property-amenities' , [$categoryId, $starTypeId])}}">Amenities</a>
                </li>

                <li class="nav-item {{ Request::url() == url('/list-your-property/property-photos', [$categoryId, $starTypeId]) ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('list-your-property/property-photos' , [$categoryId, $starTypeId])}}">Photos</a>
                </li>

                <li class="nav-item {{ Request::url() == url('/list-your-property/property-payments', [$categoryId, $starTypeId]) ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('list-your-property/property-payments' , [$categoryId, $starTypeId])}}">Payments</a>
                </li>

            </ul>

        </div>
    </nav>

    <!--    navigation end-->

    <!--    main-content-->

    <div class="main">

        @yield('content')

    </div>



    <!--    end main-content-->

    @include('partial.listPropertyFooter2')
</div>


<!--main js-->
<script src="{{url('resources/js/main.js')}}"></script>

@yield('js')


</body>
</html>
