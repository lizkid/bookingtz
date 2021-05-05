@extends('admin.layout.master')

@section('admin-css')

@stop

@section('admin-content')

    <div class="row">
        <div class="col-md-12 d-flex justify-content-start mt-3">
            <nav arial-label="breadcrumb">
                <ol style="background: unset;" class="breadcrumb">
                    <li class="breadcrumb-item">Dining</li>
                    <li class="breadcrumb-item active">Dining List</li>

                </ol>
            </nav>
        </div>

        <div class="col-md-12">
            <a href="{{url('hotel-administration/dining/create')}}" class="btn btn-info">New Dining</a>
        </div>

        <div class="col-md-12 mt-3">

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <p class="text-center">Dining List</p>

                    </div>
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Timetable</th>
                            <th>Description</th>
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
