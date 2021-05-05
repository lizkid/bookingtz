<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- icons-->
    <script src="https://kit.fontawesome.com/f50cbe1cfd.js" crossorigin="anonymous"></script>


    <!--css-->
    <link rel="stylesheet" type="text/css" href="{{asset('resources/admin/css/style.css')}}">

    @yield('admin-css')

</head>
<body>

<div id="wrapper">

    <nav id="top-nav" class="navbar navbar-expand navbar-light">
        <div class="d-flex justify-content-center align-items-center">
            <img class="rounded-circle" src="{{asset('resources/images/hotel-zanzi.jpg')}}" width="40" height="40">
        </div>
        <button class="btn" id="mobile"><i class="fas fa-bars"></i></button>

        <ul class="navbar-nav ml-auto">

            <li id="user-details"  class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                    Admin
                </a>
                <div id="dropdown-menu" class="dropdown-menu">
                    <a class="dropdown-item" href="../access/logout.php"><span style="opacity: 0.3;"><i class="fas fa-sign-out-alt w-25"></i></span>Logout</a>
                </div>
            </li>

        </ul>
    </nav>

@include('admin.partial.sidebar')

<!--main content center-->

    <div id="page-content-wrapper">
        <div class="container pb-5">

            @yield('admin-content')

        </div>
    </div>

</div>



<!--jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script  src="{{asset('resources/admin/js/main.js')}}"></script>

@yield('admin-js')
</body>
</html>
