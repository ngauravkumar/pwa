<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A carefully-crafted product landing page template specially for the digital watch showcase and promotion. HTML5 and Bootstrap integrated SEO friendly landing page website template.">
        <meta name="keywords" content="">
        <meta name="author" content="Awaiken">
        <!-- Page Title -->
        <title>ULaunch - Product Landing Page Templates</title>
        <!-- Google Fonts css-->
        <link href="{{ asset('css.css?family=Rubik:300,400,500,700,900') }}" rel="stylesheet">
        <!-- Bootstrap css -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('css/bootsnav.css') }}" rel="stylesheet" media="screen">
        <!-- Font Awesome icon css-->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet" media="screen"> 
        <!-- Swiper's CSS -->
        <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}"> 
        <!-- Animated css -->
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet"> 
        <!-- Magnific Popup CSS -->
        <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet"> 
        <!-- Main custom css -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" media="screen">

        <!-- PWA  -->
        <meta name="theme-color" content="#6777ef"/>
        <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
        <link rel="manifest" href="{{ asset('/manifest.json') }}">

        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
        <script>
            window.OneSignal = window.OneSignal || [];
            OneSignal.push(function () {
                OneSignal.init({
                    appId: "4c2bcb8c-b973-4c65-8385-55c5943fb74d",
                    safari_web_id: "",
                    notifyButton: {
                        enable: true,
                    },
                    allowLocalhostAsSecureOrigin: true,
                });
            });
        </script>
    </head>
    <body>

        <!-- Preloader starts -->
        <div class="preloader">
            <span class="loader">
                <span class="loader-inner"></span>
            </span>
        </div>
        <!-- Preloader Ends -->

        <!-- Header Section Starts-->
        <header>
            <nav class="navbar navbar-default navbar-fixed-top navbar-scrollspy bootsnav" data-minus-value-desktop="68" data-minus-value-mobile="66" data-speed="1000">
                <div class="container">      
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" class="logo" alt=""></a> 

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">

                        <ul class="nav navbar-nav navbar-right">
                            <li class="active scroll"><a href="#home">Home</a></li>
                            <li class="scroll"><a href="#features">Features</a></li>
                            <li class="scroll"><a href="#about">About</a></li>
                            <li class="scroll"><a href="#products">Products</a></li>
                            <li class="scroll"><a href="#testimonial">Testimonial</a></li>
                            <li class="scroll"><a href="#pricing">Pricing</a></li>
                            <li class="scroll"><a href="#contact">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>   
            </nav>
        </header>
        <!-- Header Section Ends-->
        @yield('content')


        <!-- Footer section starts -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jumptotop" id="back-to-top">
                            <a href="#"><i class="fa fa-chevron-up"></i></a>
                        </div>
                        <div class="footer-siteinfo">
                            <p>Copyright &copy; 2018, ULauch by awaiken</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer section ends -->

        <!-- Jquery Library File -->
        <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script> 
        <!-- Bootstrap js file -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
        <script src="{{ asset('js/bootsnav.js') }}"></script> 
        <!-- Bootstrap form validator -->
        <script src="{{ asset('js/validator.min.js') }}"></script> 
        <!-- Counterup js file -->
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script> 
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script> 
        <!-- Wow js file -->
        <script src="{{ asset('js/wow.js') }}"></script> 
        <!-- Swiper Carousel js file -->
        <script src="{{ asset('js/swiper.min.js') }}"></script> 
        <!-- Magnific Popup core JS file -->
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script> 
        <!-- Parallaxie js file -->
        <script src="{{ asset('js/parallaxie.js') }}"></script> 
        <!-- SmoothScroll -->
        <script src="{{ asset('js/SmoothScroll.js') }}"></script> 
        <!-- Main Custom js file -->
        <script src="{{ asset('js/function.js') }}"></script> 

        <script src="{{ asset('/sw.js') }}"></script>
        <script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
        </script>
    </body>
</html>