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
     <nav class="navbar header-nav navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
            <ul class="navbar-nav">
                <li><a class="nav-link " href="{{URL::to('/')}}/home">Home</a></li>
                <li><a class="nav-link" href="{{URL::to('/')}}/about">About Us</a></li>
                <li><a class="nav-link" href="{{URL::to('/')}}/story">Story</a></li>
                <li><a class="nav-link" href="{{URL::to('/')}}/family">Family</a></li>
                <li><a class="nav-link" href="{{URL::to('/')}}/gallery">Gallery</a></li>
                <li><a class="nav-link" href="{{URL::to('/')}}/wedding">Wedding</a></li>
                <li><a class="nav-link" href="{{URL::to('/')}}/event">Events</a></li>
                <li><a class="nav-link active" href="{{URL::to('/')}}/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
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
    
    <!-- End Events -->
    
    <!-- Start Contact -->
    <div id="contact" class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Contact wth us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                  <div class="contact-block">
                    <form id="contactForm">
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>                                 
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="custom-select d-block form-control" id="guest" required data-error="Please select an item in the list.">
                                  <option disabled selected>Number Of Guest*</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="custom-select d-block form-control" id="event" required data-error="Please select an item in the list.">
                                  <option disabled selected>I Am Attending*</option>
                                  <option value="1">All events</option>
                                  <option value="2">Wedding ceremony</option>
                                  <option value="3">Reception party</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div> 
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> 
                                <textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="submit-button text-center">
                                <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                <div class="clearfix"></div> 
                            </div>
                        </div>
                      </div>            
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
    
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