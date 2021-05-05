@extends('admin.layout.master')

@section('admin-css')

@stop

@section('admin-content')

    <div class="row">
        <div class="col-md-12 d-flex justify-content-start mt-3">

            <nav arial-label="breadcrumb">
                <ol style="background: unset;" class="breadcrumb">
                    <li class="breadcrumb-item">Management</li>
                    <li class="breadcrumb-item">Offers</li>
                    <li class="breadcrumb-item active">Offers List</li>

                </ol>
            </nav>

        </div>

        <div class="col-md-12">
            <a href="{{url('hotel-administration/management/offers/create')}}" class="btn btn-info">New Offer</a>
        </div>

        <div class="col-md-12 mt-3">

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <p class="text-center">Offers List</p>

                    </div>
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Discount</th>
                            <th>Description</th>
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
