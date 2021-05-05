@extends('admin.layout.master')

@section('admin-css')


@stop

@section('admin-content')

    <div class="row">
        <div class="col-md-12 d-flex justify-content-start mt-3">

            <nav arial-label="breadcrumb">
                <ol style="background: unset;" class="breadcrumb">
                    <li class="breadcrumb-item">Management</li>
                    <li class="breadcrumb-item active">Room Amenities</li>

                </ol>
            </nav>

        </div>

        <div class="col-md-12 mt-3">

            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="text-center">Enter details to save amenity</h4>
                            <form  action="" method="post">
                                @csrf
                                <div class="row">

                                    <div class="col-md-12 mb-3">
                                        <input id="fname" type="text" name="fname" class="form-control" required placeholder="Amenity Name">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <input id="lname" type="text" name="lname" class="form-control" required placeholder="Amenity Code">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <button id="submit" type="submit" class="btn btn-info">Save</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div  class="col-md-8">
                            <div class="d-flex justify-content-center">
                                <h4 class="text-center">Amenities</h4>

                            </div>
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Amenity Name</th>
                                    <th>Amenity Code</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
{{--                                <tbody>--}}
{{--                                @foreach($students as $row)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{$row->firstname}}</td>--}}
{{--                                        <td>{{$row->lastname}}</td>--}}
{{--                                        <td>{{$row->email}}</td>--}}
{{--                                        <td>{{$row->gender}}</td>--}}

{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                <tr id="tbody">--}}

{{--                                </tr>--}}
{{--                                </tbody>--}}
                            </table>
                        </div>

                    </div>

                </div>
            </div>

        </div>


    </div>

@stop

@section('admin-js')


@stop
