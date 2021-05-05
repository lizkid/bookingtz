@extends('admin.layout.master')

@section('admin-css')

@stop

@section('admin-content')

    <div class="row">
        <div class="col-md-12 d-flex justify-content-between mt-3">
            <h4>Hotel</h4>
            <nav arial-label="breadcrumb">
                <ol style="background: unset;" class="breadcrumb">
                    <li class="breadcrumb-item">Hotel</li>
                    <li class="breadcrumb-item active">Hotel Details</li>

                </ol>
            </nav>
        </div>

        <div class="col-md-12">
            <a href="{{url('hotel-administration/hotel-details/create')}}" class="btn btn-info">New Detail</a>
        </div>

        <div class="col-md-12 mt-3">

            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Location</th>
                            <th>Distance</th>
                            <th>Price for One Night</th>
                            <th>Discount</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--                    @foreach($students as $row)--}}
                        {{--                        <tr>--}}
                        {{--                            <td>{{$row->firstname}}</td>--}}
                        {{--                            <td>{{$row->lastname}}</td>--}}
                        {{--                            <td>{{$row->email}}</td>--}}
                        {{--                            <td>{{$row->gender}}</td>--}}
                        {{--                        </tr>--}}
                        {{--                    @endforeach--}}
                        <tr id="tbody">

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>


    </div>

@stop

@section('admin-js')


@stop
