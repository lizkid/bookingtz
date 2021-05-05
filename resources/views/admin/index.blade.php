<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- icons-->
    <script src="https://kit.fontawesome.com/f50cbe1cfd.js" crossorigin="anonymous"></script>

    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>

        *{
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
        }

        body{
            background-image: url("{{asset('resources/admin/images/4.jpg')}}");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            overflow: hidden;
            height: 100%;
            width: 100%;

        }


        #label{
            font-size: 14px;
            color: #dbd8d8;
        }

        #star{
            color: #ff0e0e;
            margin: 3px;
            font-size: 20px;
        }

        .form-control{
            border-radius: 0;
            border: unset!important;
        }

        #form-group input:focus{
            box-shadow: unset!important;
            background: white!important;
            outline: #24be20 !important;
            border: unset!important;
        }

        form{
            padding: 40px;

        }

        #login-btn{
            border-radius: 0;
        }

        #forgot{
            color: #f1eded;

        }

        #login-wrapper{
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            background: radial-gradient(#a19a9a96, #655656c2);
            width: 35%;
            z-index: 99;
        }

        #animation{
            z-index: 1;
            position: absolute;
            height: 100%;
            width: 100%;
        }

        .set{
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            position: absolute;
        }

        .set div{
            position: absolute;
            display: block;
        }

        .set div:nth-child(1){
            left: 20%;
            animation: leave1 15s linear infinite;
            -webkit-animation: leave1 15s linear infinite;
            -moz-animation:    leave1 15s linear infinite;
            -o-animation:      leave1 15s linear infinite;
            -ms-transition:    leave1 15s linear infinite;
            animation-delay: -7s;
            -webkit-animation-delay: -7s;
        }

        .set div:nth-child(2){
            left: 50%;
            animation: leave1 20s linear infinite;
            -webkit-animation: leave1 20s linear infinite;
            -moz-animation:    leave1 20s linear infinite;
            -o-animation:      leave1 20s linear infinite;
            -ms-transition:    leave1 20s linear infinite;
            animation-delay: -5s;
            -webkit-animation-delay: -5s;
        }

        .set div:nth-child(3){
            left: 70%;
            animation: leave1 25s linear infinite;
            -webkit-animation: leave1 25s linear infinite;
            -moz-animation:    leave1 25s linear infinite;
            -o-animation:      leave1 25s linear infinite;
            -ms-transition:    leave1 25s linear infinite;
        }

        .set div:nth-child(4){
            left: 0%;
            animation: leave1 15s linear infinite;
            -webkit-animation: leave1 15s linear infinite;
            -moz-animation:    leave1 15s linear infinite;
            -o-animation:      leave1 15s linear infinite;
            -ms-transition:    leave1 15s linear infinite;
            animation-delay: -5s;
            -webkit-animation-delay: -5s;
        }

        .set div:nth-child(5){
            left: 85%;
            animation: leave1 18s linear infinite;
            -webkit-animation: leave1 18s linear infinite;
            -moz-animation:    leave1 18s linear infinite;
            -o-animation:      leave1 18s linear infinite;
            -ms-transition:    leave1 18s linear infinite;
            animation-delay: -10s;
            -webkit-animation-delay: -10s;
        }

        .set div:nth-child(6){
            left: 0%;
            animation: leave1 12s linear infinite;
            -webkit-animation: leave1 12s linear infinite;
            -moz-animation:    leave1 12s linear infinite;
            -o-animation:      leave1 12s linear infinite;
            -ms-transition:    leave1 12s linear infinite;

        }

        .set div:nth-child(7){
            left: 15%;
            animation: leave1 14s linear infinite;
            -webkit-animation: leave1 14s linear infinite;
            -moz-animation:    leave1 14s linear infinite;
            -o-animation:      leave1 14s linear infinite;
            -ms-transition:    leave1 14s linear infinite;
        }

        .set div:nth-child(8){
            left: 60%;
            animation: leave1 15s linear infinite;
            -webkit-animation: leave1 15s linear infinite;
            -moz-animation:    leave1 15s linear infinite;
            -o-animation:      leave1 15s linear infinite;
            -ms-transition:    leave1 15s linear infinite;
        }

        @keyframes leave1 {

            0%{
                opacity: 0;
                top: -10%;
                transform: translateX(-20px) rotate(0deg);
                -webkit-transform: translateX(-20px) rotate(0deg);
            }

            10%{
                opacity: 0.5;
            }

            20%{
                opacity: 0;
                transform: translateX(-20px) rotate(45deg);
                -webkit-transform: translateX(-20px) rotate(45deg);
            }

            40%{
                opacity: 0.5;
                transform: translateX(-20px) rotate(90deg);
                -webkit-transform: translateX(-20px) rotate(90deg);
            }

            60%{
                opacity: 0;
                transform: translateX(20px) rotate(135deg);
                -webkit-transform: translateX(-20px) rotate(135deg);
            }

            80%{
                opacity: 0.5;
                transform: translateX(-20px) rotate(180deg);
                -webkit-transform: translateX(-20px) rotate(180deg);
            }

            100%{
                opacity: 0;
                top: 110%;
                transform: translateX(-20px) rotate(225deg);
                -webkit-transform: translateX(-20px) rotate(225deg);
            }
        }

        .set-2{
            transform: scale(2) rotateY(180deg);

        }

        .set-3{
            transform: scale(0.8) rotateX(180deg);

        }

        #login-img{
            width: 150px;
            margin-top: -75px;
            margin-left: 170px;
            border-radius: 75px;
        }


    </style>

</head>
<body>

<div>

    <div id="animation">

        <div class="set">
            <div><img width="100" src="{{url('resources/admin/images/fish.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves2.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves3.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves4.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves1.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves2.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves3.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves4.png')}}"></div>

        </div>

        <div class="set set-2">
            <div><img width="100" src="{{url('resources/admin/images/leaves1.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves2.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves3.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves4.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves1.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves2.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves3.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves4.png')}}"></div>
        </div>

        <div class="set set-3">
            <div><img width="100" src="{{url('resources/admin/images/leaves1.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves2.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves3.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves4.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves1.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves2.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves3.png')}}"></div>
            <div><img width="100" src="{{url('resources/admin/images/leaves4.png')}}"></div>
        </div>

    </div>

    <div id="login-wrapper">

        <img id="login-img" src="{{asset('resources/admin/images/logo.png')}}">

        <form>

            <div class="row">

                <div id="form-group" class="col-md-12">
                    <label id="label">Email</label><span id="star">*</span>
                    <input id="login-email" class="form-control mb-3" type="email" name="login-email">
                </div>

                <div id="form-group" class="col-md-12">
                    <label id="label">Password</label><span id="star">*</span>
                    <input id="login-password" class="form-control mb-3" type="password" name="login-password">
                </div>

                <div class="col-md-12">
                    <a href="{{url('hotel-administration/dashboard')}}" id="login-btn" type="submit" class="btn btn-info  btn-block">Login</a>
                </div>

                <div class="col-md-12 mt-3">
                    <a id="forgot"  href="#">Forgot password?</a>
                </div>

            </div>



        </form>


    </div>

</div>



{{--<script>--}}
{{--    $(document).ready(function (){--}}
{{--        alert($("#login-wrapper").width())--}}
{{--    })--}}
{{--</script>--}}
</body>
</html>
