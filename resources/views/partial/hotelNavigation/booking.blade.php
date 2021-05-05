<style>
    #book-btn{
        background: #e5b433;
        cursor: pointer;
        border: #e5b433;
        outline: #e5b433;
        color: white;
        border-radius: 0px;
        width: 180px;
        font-size: 20px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    #book-btn:hover, #book-btn:focus{
        box-shadow: unset;
        border: #e0b449;
        opacity: unset!important;

    }

    #book-container.sticky{
        top: 56px;
        position: fixed;
        z-index: 99;
        right: 0;
        margin-top: 0;
        width: 100%;
    }
</style>

<div id="book-container" style="display: flex;     background: white; justify-content: flex-end;">
    <a href="{{url('hotel-view/booking/')}}" class="btn" id="book-btn">BOOK NOW</a>
</div>


<script>
    $(document).ready(function(){
        var num = $("#book-container").offset().top=500;
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > num) {
                $('#book-container').addClass('sticky');
            }
            else {
                $('#book-container').removeClass('sticky');
            }
        });
    });
</script>
