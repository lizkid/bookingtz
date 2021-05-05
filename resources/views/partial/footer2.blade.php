
<style>
    #footer{
        background: #172536;
        height: 417px;
    }


    #footer-header{
        padding-top: 50px;
        margin-left: 100px;
        margin-right: 100px;
    }

    #footer-header h3{
        font-size: 20px;
        color: #c2bfbf;
    }

    .social{
        display: grid;
        grid-template-columns: auto;
        justify-content: start;
    }

    .social a:hover{
        text-decoration: none;
    }

    .social a .fab{
        font-size: 20px;
        margin: 5px 5px;
        text-align: center;
        width: 50px;
        border-radius: 25px;
        transition: 0.3s ease;
        height: 50px;
        display: grid;
        justify-content: center;
        align-items: center;
    }

    .fa-facebook-f{
        background: #3b5998 ;
        color: white;
    }

    .fa-facebook-f:hover{
        background: white;
        color: #3b5998;
    }

    .fa-twitter{
        background: #00acee;
        color: white;
    }

    .fa-twitter:hover{
        background: white;
        color: #00acee;
    }

    .fa-instagram{
        background: #cd486b;
        color: white;
    }

    .fa-instagram:hover{
        background: white;
        color: #cd486b;
    }

    .fa-youtube{
        background: #FF0000;
        color: white;
    }

    .fa-youtube:hover{
        background: white;
        color: #FF0000;
    }


    #contact-details p{
        color: #a59d88 !important;
    }

    #links a{
        display: block;
        color: #a59d88;
        transition: 0.3s ease-in-out;
    }

    #links a:hover{
        color: white;
        opacity: 1 !important;
    }

    #copyright{
        background: #202d36;
    }

    #copyright p{
        color: #a59d88 !important;
        padding: 40px;
        text-align: center;
    }

</style>
<!--footer-->
<div id="footer">

    <div id="footer-header">
        <div class="row">
            <div class="col-md-4">
                <h3>CONTACT DETAILS</h3>
                <div id="contact-details">
                    <p>Hotel name</p>
                    <p>P.O. BOX 48690 – 00100</p>
                    <p>Location</p>
                    <p>Tel: +254 732 123 333</p>
                    <p>Email: htttsymmnbc@gmail.com</p>
                </div>
            </div>

            <div class="col-md-4">

                <h3>HOTEL NAME</h3>
                <div id="links">
                    <a href="#">About Us</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">FAQs</a>
                    <a href="#">Get Help</a>
                </div>

            </div>

            <div class="col-md-4">
                <h3>SOCIAL MEDIA</h3>
                <div class="social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>


</div>
<div id="copyright">

    <?php
    $date = date('Y');?>
    <p >copyright &copy <?php echo $date;?>, All rights reserved</p>

    <?php

    ?>
</div>
