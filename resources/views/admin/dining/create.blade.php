@extends('admin.layout.master')

@section('admin-css')

    <style>
        input[type=checkbox], input[type=radio] {
            transform: scale(1.5);
        }

    </style>

@stop

@section('admin-content')

    <div class="row">
        <div class="col-md-12 d-flex justify-content-between mt-4">
            <nav arial-label="breadcrumb">
                <ol style="background: unset;" class="breadcrumb">
                    <li class="breadcrumb-item">Dining</li>
                    <li class="breadcrumb-item active">Dining Create</li>

                </ol>
            </nav>

            <div id="back-container" class="col-md-12 mb-3 d-flex justify-content-end">
                <a class="back-btn " href="{{url('hotel-administration/dining')}}"><i class="fas fa-arrow-circle-left pr-2"></i>Back</a>
            </div>
        </div>



        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Enter details to create new dining</h4>
                    <form  action="" method="post">
                        @csrf
                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label>Name</label>
                                <input  type="text" name="lname" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Code</label>
                                <input  type="text" name="lname" class="form-control" required>
                            </div>

{{--                            <div class="col-md-3 mb-3">--}}
{{--                                <label>Timetable</label>--}}
{{--                                <select class="form-control">--}}
{{--                                    <option selected disabled>--select number of beds--</option>--}}
{{--                                    <option>1 Bed</option>--}}
{{--                                @for($x=2; $x<=4; $x++)--}}

{{--                                        <option value="{{$x}}">{{$x}} Beds</option>--}}

{{--                                    @endfor--}}
{{--                                </select>--}}
{{--                            </div>--}}

                            <div class="col-md-12 mb-3">
                                <label> Description</label>
                                <textarea class="form-control">

                                </textarea>
                            </div>

                            <div class="col-md-3 mb-3">
                                <button id="submit" type="submit" class="btn btn-info btn-block">Save</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@stop

@section('admin-js')


@stop
