@extends('admin.layout.master')

@section('admin-css')

    <style>
        input[type=checkbox], input[type=radio] {
            transform: scale(1.5);
        }

        #roles{
            display: none;
        }

        .btn-dark{
            background-color: #34597e;
            border-radius: 0;
            border-color: #34597e;
        }

        .btn-dark:focus, .btn-dark:hover{
            background-color: #34597e!important;
            box-shadow: unset!important;
            border-color: #34597e;
        }
    </style>

@stop

@section('admin-content')

    <div class="row">
        <div class="col-md-12 d-flex justify-content-between mt-4">

            <nav arial-label="breadcrumb">
                <ol style="background: unset;" class="breadcrumb">
                    <li class="breadcrumb-item">Management</li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Users Create</li>

                </ol>
            </nav>

            <div id="back-container" class="col-md-12 mb-3 d-flex justify-content-end">
                <a class="back-btn " href="{{url('hotel-administration/management/users')}}"><i class="fas fa-arrow-circle-left pr-2"></i>Back</a>
            </div>
        </div>

        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Enter details to create new user</h4>
                    <form method="post">

                        @csrf

                        <div class="row">

                            <div class="form-group col-md-6">

                                <label>Phone Number </label>

                                <input type="text" name="phone" class="form-control">

                            </div>

                            <div class="form-group col-md-6">

                                <label>Email</label>

                                <input type="email" name="email" class="form-control">

                            </div>


                            <div class="form-group col-md-6">

                                <label>Password</label>

                                <input type="text" name="password" class="form-control">

                            </div>

                            <div style="margin-top: 29px;" class="form-group col-md-6">

                                <button id="role-btn" type="button" class="btn btn-block btn-dark">Assign Roles</button>

                            </div>


                            <div id="roles" class="form-group col-md-12">

                                <div class="card">

                                    <div id="card-header">
                                        <p class="text-center">Roles</p>
                                    </div>

                                    <div id="card-body">

                                        <div class="row">


                                                <div class="col-md-4">

                                                    <div class="custom-control custom-checkbox mr-sm-2">

                                                        <input type="checkbox" aria-label="Checkbox for following text input" name="role[]" value="">
                                                        <label class="pl-2">Manage User</label>

                                                    </div>

                                                    <div class="custom-control custom-checkbox mr-sm-2">

                                                        <input type="checkbox" aria-label="Checkbox for following text input" name="role[]" value="">
                                                        <label class="pl-2">Manage Posts</label>

                                                    </div>

                                                </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group col-md-6">
                                <div class="p-t-20">
                                    <button class="btn btn-info" type="submit">Register</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@stop

@section('admin-js')

    <script>
        $(document).ready(function (){
           $("#amenity-btn").click(function (){
              $("#amenities").slideToggle();

               $("#amenity-btn i").toggleClass('another-rotate')
           });
        });
    </script>

    <script>
        $(document).ready(function (){

            $("#role-btn").click(function (){

                $("#roles").slideToggle('1000');
            });
        });
    </script>

@stop
