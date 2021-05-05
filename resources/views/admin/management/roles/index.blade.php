@extends('admin.layout.master')

@section('admin-css')

@stop

@section('admin-content')

    <div class="row">
        <div class="col-md-12 d-flex justify-content-start mt-3">

            <nav arial-label="breadcrumb">
                <ol style="background: unset;" class="breadcrumb">
                    <li class="breadcrumb-item">Management</li>
                    <li class="breadcrumb-item">Roles</li>
                    <li class="breadcrumb-item active">Roles List</li>

                </ol>
            </nav>

        </div>

        <div class="col-md-12">
            <button data-toggle="modal" data-target="#role-modal" class="btn btn-info">New Role</button>

            @include('admin.modals.roles.index')
        </div>

        <div class="col-md-12 mt-3">

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <p class="text-center">Roles List</p>

                    </div>
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
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
