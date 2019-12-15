<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Sweetwedding - Responsive OnePage HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/pogo-slider.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="preloader pulse">
            <h3>Karlene Hoard & Jonas Pare</h3>
        </div>
    </div><!-- end loader -->
    <!-- END LOADER -->
    
    <!-- Start header -->
    <header class="top-header">
     @include('navbar')
    </header>
    <!-- End header -->
    
    <!-- Start Banner -->
   
    <!-- End Banner -->
    
    <!-- Start About us -->
    
    <!-- End About us -->
    
    <!-- Start Story -->
    
    <!-- End Story -->
    
    <!-- Start Family -->
    
    <!-- End Family -->
    
    <!-- Start Gallery -->
    
    <!-- End Gallery -->
    
    <!-- Start Wedding -->
    
    
    
    <!-- End Wedding -->
    
    <!-- Start Events -->
    <div id="events" class="events-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Events</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="event-inner">
                        <div class="event-img">
                            <img class="img-fluid" src="images/event-img-01.jpg" alt="" />
                        </div>
                        <h2>2 June 2018 Engagement</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                        <a href="#">See location <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="event-inner">
                        <div class="event-img">
                            <img class="img-fluid" src="images/event-img-02.jpg" alt="" />
                        </div>
                        <h2>3 June 2018 Main Ceremony </h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                        <a href="#">See location <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="event-inner">
                        <div class="event-img">
                            <img class="img-fluid" src="images/event-img-03.jpg" alt="" />
                        </div>
                        <h2>4 June 2018 Wedding party </h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                        <a href="#">See location <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- End Events -->
    
    <!-- Start Contact -->
    
    <!-- End Contact -->
    
    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Sweetwedding</a> Design By : <a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- ALL JS FILES -->
    <script src="{{URL::to('/')}}/js/jquery.min.js"></script>
    <script src="{{URL::to('/')}}/js/popper.min.js"></script>
    <script src="{{URL::to('/')}}/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="{{URL::to('/')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{URL::to('/')}}/js/jquery.pogo-slider.min.js"></script> 
    <script src="{{URL::to('/')}}/js/slider-index.js"></script>
    <script src="{{URL::to('/')}}/js/smoothscroll.js"></script>
    <script src="{{URL::to('/')}}/js/responsiveslides.min.js"></script>
    <script src="{{URL::to('/')}}/js/timeLine.min.js"></script>  
    <script src="{{URL::to('/')}}/js/form-validator.min.js"></script>
    <script src="{{URL::to('/')}}/js/contact-form-script.js"></script>
    <script src="{{URL::to('/')}}/js/custom.js"></script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function() {
        console.log("here1");
      $(".nav a").on("click", function(){
        console.log('here');
      $(".nav").find(".active").removeClass("active");
      $(this).addClass("active");
   });
});
</script>