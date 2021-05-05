<link rel="stylesheet" href="{{asset('resources/listProperty/style.css')}}">
@extends('layout.listProperty')

@section('css')

@stop

@section('content')

    <div class="container pb-5">

        <div class="row mt-3">
            <div class="col-md-12 pt-3 mt-3 mb-3">

                <div>

                    <div class="text-center">
                        @include('partial.flash.index')
                    </div>

                    <h4>Star rating for your property</h4>

                    <div>
                        <div class="row">
                            @foreach($stars->results as $row)
                                <div class="col-md-6 mb-3">
                                    <a href="{{url('list-your-property/property-registration',[$categoryId, $row->ID])}}">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4>{{$row->RatingType}}</h4>
                                                <p>{{$row->Description}}</p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

@stop

@section('js')


@stop
