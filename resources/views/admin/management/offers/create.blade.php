@extends('admin.layout.master')

@section('admin-css')


@stop

@section('admin-content')

    <div class="row">
        <div class="col-md-12 d-flex justify-content-between mt-4">

            <nav arial-label="breadcrumb">
                <ol style="background: unset;" class="breadcrumb">
                    <li class="breadcrumb-item">Management</li>
                    <li class="breadcrumb-item">Offers</li>
                    <li class="breadcrumb-item active">Offers Create</li>

                </ol>
            </nav>

            <div id="back-container" class="col-md-12 mb-3 d-flex justify-content-end">
                <a class="back-btn " href="{{url('hotel-administration/management/offers')}}"><i class="fas fa-arrow-circle-left pr-2"></i>Back</a>
            </div>

        </div>

        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Enter details to add new offer</h4>
                    <form  action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Name</label>
                                <input type="text" name="offer-name" class="form-control" required>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label>Discount</label>
                                <input type="text" name="offer-discount" class="form-control" required>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label>Photo</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="offer-file" type="file" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Description</label>
                                <textarea name="offer-description" class="form-control">

                                </textarea>
                            </div>

                            <div class="col-md-3 mb-3">
                                <button id="submit" type="submit" class="btn btn-info btn-block">Save Offer</button>
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

@stop
