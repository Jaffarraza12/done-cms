<!--footer area are start-->

<footer id="footer" style="background: #262626;color:#fff;padding: 20px 0px; ">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-info" style="color: #fff;">
                    <h3 class="white-color">operaartproduction.com</h3>
                    <p class="white-color">Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4 class="white-color">Useful Links</h4>
                    <ul>
                        <li ><i class="ion-ios-arrow-right"></i> <a class="white-color" href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="white-color"><i class="ion-ios-arrow-right white-color"></i> <a class="white-color" href="#">About us</a></li>
                        <li class="white-color"><i class="ion-ios-arrow-right white-color"></i> <a class="white-color" href="#">Services</a></li>
                        <li class="white-color"><i class="ion-ios-arrow-right white-color"></i> <a class="white-color" href="#">Terms of service</a></li>
                        <li class="white-color"><i class="ion-ios-arrow-right white-color"></i> <a class="white-color" href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-contact">
                    <h4 class="white-color">تواصل معنا</h4>
                    <p class="white-color">
                        العنوان - الجرف – فلامنجو مول – مكتب رقم 113



                        <br>
                        عجمان<br>

                        <strong>هاتف :</strong> 97167379830 <br>
                        <strong>Email:</strong> info@operaartproduction.com<br>
                    </p>

                    <div class="social-links">
                        <a href="https://twitter.com/operaartpro" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/operaartpro" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/operaartpro/" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCgHddnKxhIVOWJwZ0OOgT0A?view_as=subscriber" class="google-plus"><i class="fa fa-google-plus"></i></a>
                    </div>

                </div>



            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            © Copyright <strong>OperaartProduction</strong>. All Rights Reserved
        </div>
    </div>
</footer>
<!-- Body main wrapper end -->
<!-- Placed js at the end of the document so the pages load faster -->
<!-- jquery latest version -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.0.min.js"></script>
<!-- Bootstrap framework js -->
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- Slider js
<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
            directionNav: true,
            animSpeed: 500,
            slices: 18,
            pauseTime: 750000,
            pauseOnHover: false,
            controlNav: false,
            prevText: '<i class="fa fa-angle-left nivo-prev-icon"></i>',
            nextText: '<i class="fa fa-angle-right nivo-next-icon"></i>'
        });
    });
    elem = $('.what-new')
    elem.owlCarousel({
        dots:true,
        nav: true,
        loop: true,
        margin: 10,
        lazyLoad: true,
        navText: ["<button><i class='fa fa-angle-left'></i></button>","<button><i class='fa fa-angle-right'></i></button>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        }
    });

    $('.our-team').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        nav: true,
        lazyLoad: true,
        navText: ["<button><i class='fa fa-angle-left'></i></button>","<button><i class='fa fa-angle-right'></i></button>"],

        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            }
        }
    });


</script>
<!-- All js plugins included in this file. -->
<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>