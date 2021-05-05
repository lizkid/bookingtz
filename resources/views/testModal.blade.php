@extends('layout.frontMaster')

<style>
    .search-container{
        /*position: relative;*/
    }

    #results{
        /*position: absolute;*/
        width: 100%;
        display: none;
    }

    input[type="input"]:focus{
        background: white!important;
    }

    #main-2.main-again{
        border-radius: 5px;
        background: white;
        z-index: 99;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    input:focus::placeholder {
        color: transparent;
    }


</style>


<p class="px-3 pt-3">Popular nearby destinations</p>
<div id="destination" class="d-flex justify-content-between px-3">
    <div class="d-flex justify-content-between">

        <div>
            <p style="background: #928f8f; border-radius: 5px; "><span><i class="fas fa-map-marker-alt"></i></span></p>
        </div>
        <div class="pl-3 pt-1">
            <p id="name">Dsm,<span style="opacity: 0.6;">Tanzania</span></p>
        </div>

    </div>
    <div class="pt-1">
        <p>Properties</p>
    </div>
</div>

<div class="d-flex justify-content-between px-3">
    <div class="d-flex justify-content-between">

        <div>
            <p style="background: #928f8f; border-radius: 5px; "><span><i class="fas fa-map-marker-alt"></i></span></p>
        </div>
        <div class="pl-3 pt-1">
            <p>Zanzibar,<span style="opacity: 0.6;">Tanzania</span></p>
        </div>

    </div>
    <div class="pt-1">
        <p>Properties</p>
    </div>
</div>


<div class="d-flex justify-content-between px-3">
    <div class="d-flex justify-content-between">

        <div>
            <p style="background: #928f8f; border-radius: 5px; "><span><i class="fas fa-map-marker-alt"></i></span></p>
        </div>
        <div class="pl-3 pt-1">
            <p>Dubai,<span style="opacity: 0.6;">UAE</span></p>
        </div>

    </div>
    <div class="pt-1">
        <p>Properties</p>
    </div>
</div>

@section('content')

    <!--    back-main-->
    <div style="margin-top: 200px; margin-bottom: 100px;" id="back-main">

        <div>

            <div id="main-2"  style="margin: auto; display: block; width: 50%;">
                <div class="search-container">
                    <input id="find" style="cursor: auto;" type="input" class="form-control" placeholder="Search here">

                    <div id="results">
                        <div class="d-flex justify-content-between px-3 pt-3">
                            <p>lucks</p>
                            <p>lizkid</p>
                            <p>don</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>



@endsection

@section('js')

    <script>
        $(document).ready(function (){

            $("#find").focus(function (){

                $(".form-control").toggleClass('toggled')

                $('#main-2').addClass('main-again')

                // $('#main-2').css('border', '1px solid black')

                $("#results").fadeIn()

                $("#results").show()

                $(document).mouseup(function(e)
                {
                    var container = $("#main-2");

                    // if the target of the click isn't the container nor a descendant of the container
                    if (!container.is(e.target) && container.has(e.target).length === 0)
                    {
                        $("#results").hide()
                    }
                });

            });
        });
    </script>

@endsection
