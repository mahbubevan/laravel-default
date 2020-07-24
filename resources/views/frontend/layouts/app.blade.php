<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.theme.default.min.css')}}">
    
    <link rel="shortcut icon" href="{{asset('assets/frontend/images/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <title>{{$setting->title??''}}</title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-wrapper"></div>
    </div>
    <!-- Preloader -->
    <div class="overlay"></div>
    <!-- Header Section Stars Here -->
    <a href="#" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <!-- Fixed Sidebar Section Ends Here -->

    <!-- ============Header Section Starts Here================== -->
    <header class="header-section">
        <div class="header-area">
            <div class="logo">
                <a href="{{url('/')}}"><img src="{{asset($setting->logo??'')}}" alt="logo"></a>
            </div>
            <ul class="menu">
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a href="#0">Schedule</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
                <li>
                    <a href="{{route('ticket.view')}}" class="header-button">buy ticket</a>
                </li>
            </ul>
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
    <!-- ============Header Section Ends Here================== -->

    @yield('content')
   
    <!-- ============Footer Section Starts Here================== -->
    <footer>
        <div class="footer-shape"></div>
        <div class="footer-right-shape">
            <img src="{{asset('assets/frontend/images/parallax/parallax10.png')}}" alt="parallax">
        </div>
        <div id="parallax04" class=" d-none d-lg-block">
            <div class="layer" data-depth=".4">
                <img src="{{asset('assets/frontend/images/parallax/parallax08.png')}}" alt="parallax">
            </div>
            <div class="layer" data-depth=".4">
                <img src="{{asset('assets/frontend/images/parallax/parallax09.png')}}" alt="parallax">
            </div>
        </div>
        <div class="container">
            <div class="footer-top">
                <div class="footer-logo">
                    <a href="{{url('/')}}"><img src="{{asset($setting->logo??'')}}" alt="logo"></a>
                </div>
                <ul class="social-icons">
                    <li>
                        <a href="#0" class="facebook"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#0" class="twitter"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#0" class="instagram"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#0" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                </ul>
                <ul class="footer-menu">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="speaker.html">Speakers</a>
                    </li>
                    <li>
                        <a href="schedule.html">Schedule</a>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>Copyright <a href="index.html">Specon</a> &copy; 2019. All rights reserved</p>
            </div>
        </div>
    </footer>
    <!-- ============Footer Section Ends Here================== -->
    

    <!-- JavaScript File Links -->
    <script src="{{asset('assets/frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/waypoint.js')}}"></script>
    <script src="{{asset('assets/frontend/js/counterup.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/countdown.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/lightcase.js')}}"></script>
    <script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/parallax.js')}}"></script>
    <script src="{{asset('assets/frontend/js/tweenmax.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
    <script src="{{asset('assets/frontend/js/map.js')}}"></script>
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>

    @stack('external-js')

    @include('sweet-alert.error')
    @include('sweet-alert.errors')
    @include('sweet-alert.success')
</body>

</html>