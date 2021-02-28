<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>bluemarlin</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="{{asset('/')}}assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/--mp---Multiple-items-slider-responsive.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/Animated-Scroll-Down-Mouse.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/Bootstrap-4---Team-Members.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/DA_Whatsapp.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/gradient-navbar-1.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/gradient-navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/Scroll-To-Top.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/Social-Menu-Sticky.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/styles.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/Swipe-Slider-7.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/Team-with-rotating-cards.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/Team.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/WOWSlider-about-us-1.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/WOWSlider-about-us-2.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/WOWSlider-about-us.css">
</head>

<body style="font-size: 28px;">




<!--   header-->
<nav class="navbar navbar-dark navbar-expand-md" id="app-navbar">
    <div class="container-fluid"><a class="navbar-brand" href="#"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1"><span class="navbar-text" data-aos="fade-down" data-aos-delay="800" style="font-size: 26px;color: rgba(0,8,210,0.5);"><strong>B</strong></span>
            <p class="navbar-text" data-aos="fade-down" data-aos-delay="600" style="color: rgba(0,0,0,0.5);margin-top: 0;padding-top: 28px;font-size: 19px;"><strong>luemarlin</strong></p>
            <ul class="nav navbar-nav ml-auto">

                <li class="nav-item active" role="presentation"><a class="nav-link" href="{{ route('home') }}" style="color: rgba(255,255,255,0.75);margin-right: 10px;margin-left: 10px;font-size: 16px;margin-top: 4px""><strong>Home</strong></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('about') }}" style="color: rgba(255,255,255,0.75);margin-right: 10px;margin-left: 10px;font-size: 16px;margin-top: 4px""><strong>About</strong></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('contact') }}" style="color: rgba(255,255,255,0.75);margin-right: 10px;margin-left: 10px;font-size: 16px;margin-top: 4px""><strong>Contact</strong></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('ourprojects') }}" style="color: rgba(255,255,255,0.75);margin-right: 10px;margin-left: 10px;font-size: 16px;margin-top: 4px""><strong>{{__('messages.ourprojects_title')}}</strong></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('ourteam') }}" style="color: rgba(255,255,255,0.75);margin-right: 10px;margin-left: 10px;font-size: 16px;margin-top: 4px"><strong>{{__('messages.Jointeam_title')}}</strong></a></li>





                <li class="nav-item" role="presentation" style="margin-left: 10px;margin-right: 10px;">
                    <div class="nav-item dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="font-size: 17px;color: white"><strong style="color: rgba(255,255,255,0.75);">Service</strong></a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="{{ route('mobile') }}">Mobile App</a>
                            <a class="dropdown-item" role="presentation" href="{{ route('web') }}">Web Development</a>
                            <a class="dropdown-item" role="presentation" href="{{ route('seo') }}">Search Engine Optimization</a>
                            <a class="dropdown-item" role="presentation" href="{{ route('socialmediamanagment') }}">Social Media Management</a>
                            <a class="dropdown-item" role="presentation" href="{{ route('branding') }}">Branding</a>
                            <a class="dropdown-item" role="presentation" href="{{ route('digitalmarketing') }}">Digital Marketing</a>
                            <a class="dropdown-item" role="presentation" href="{{ route('influencer') }}">Influencer</a>
                            <a class="dropdown-item" role="presentation" href="{{ route('photoshooting') }}">Photo shooting</a>
                            <a class="dropdown-item" role="presentation" href="{{ route('drone') }}">Drone Services</a>
                            <a class="dropdown-item" role="presentation" href="{{ route('eventmangement') }}">Event Management</a>
                            <a class="dropdown-item" role="presentation" href="{{ route('sponsership') }}">Sponsorship services</a>
                            <a class="dropdown-item" role="presentation" href="{{ route('sponsership') }}">videoproduction services</a>
                        </div>
                    </div>
                </li>
                {{--                <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: rgba(255,255,255,0.75);margin-right: 33px;margin-left: 18px;font-size: 18px;font-family: 'Roboto Slab', serif;"><strong>English</strong></a></li>--}}

                {{--                <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: rgba(255,255,255,0.75);margin-right: 33px;margin-left: 18px;font-size: 18px;font-family: 'Roboto Slab', serif;"><strong>العربيه</strong></a></li>--}}

                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <div class="div" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{--                                              <img src="images/sliderhome/uaeicon.png" style="display: inline-block;width: 30px;height: 30px;border-radius: 5px;">--}}
                                <p style="color: rgba(255,255,255,0.75);margin-right: 33px;margin-top: 10px;margin-left: 18px;font-size: 18px;font-family: 'Roboto Slab', serif;"> {{ $properties['native'] }}</p>
                            </a>
                        </div>
                    </li>

                @endforeach
            </ul>
        </div>
    </div>
</nav>
<!-- Paradise Slider -->



@yield('content')


<!--footer    -->
<footer style="background-color: rgb(56,131,205);">
    <div class="row">
        <div class="col-sm-6 col-md-4 footer-navigation" data-aos="fade-up" data-aos-delay="550" style="margin-top: 5px;">
            <h3><a href="#" style="font-family: Roboto, sans-serif;font-size: 32px;"><strong>Bluemarline</strong></a></h3>
            <p>{{__('messages.whowearehome_desc')}}</p>
            <div class="social-links social-icons"><a href="#" style="background-color: rgb(25,109,160);"><i class="fa fa-facebook"></i></a><a href="#" style="background-color: rgb(11,101,156);"><i class="fa fa-twitter"></i></a><a href="#" style="background-color: rgb(25,106,154);"><i class="fa fa-linkedin"></i></a></div>
        </div>
        <div class="col-sm-6 col-md-4 footer-contacts" data-aos="fade-up" data-aos-delay="600" style="margin-top: 5px;">
            <h1 style="font-size: 27px;"><strong>Contact Us</strong></h1>
            <div><span class="fa fa-map-marker footer-contacts-icon" style="background-color: rgb(0,209,255);"> </span>
                <p><span class="new-line-span">{{__('messages.address_desc')}}</span></p>
            </div>
            <div><i class="fa fa-phone footer-contacts-icon" style="background-color: rgb(2,160,255);"></i>
                <p class="footer-center-info email text-left">{{__('messages.phone_desc')}}</p>
            </div>
            <div><i class="fa fa-envelope footer-contacts-icon" style="background-color: rgb(0,159,255);"></i>
                <p class="footer-center-info email text-left" style="font-size: 14px;">{{__('messages.email_desc')}}</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 footer-navigation" data-aos="fade-up" data-aos-delay="700" style="margin-top: 5px;">
            <h3><a href="#" style="font-family: Roboto, sans-serif;font-size: 30px;"><strong>Our Pages</strong></a></h3>
            <ul>
                <li style="margin-bottom: 5px;">Home</li>
                <li style="margin-top: 5px;margin-bottom: 5px;">About Us</li>
                <li style="margin-top: 5px;margin-bottom: 5px;">Services</li>
                <li style="margin-top: 5px;margin-bottom: 5px;">Contact Us</li>
            </ul>
        </div>
    </div>
</footer>
<!-- end footer  -->






<script src="{{asset('/')}}assets/js/jquery.min.js"></script>
<script src="{{asset('/')}}assets/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
<script src="{{asset('/')}}assets/js/--mp---Multiple-items-slider-responsive-1.js"></script>
<script src="{{asset('/')}}assets/js/--mp---Multiple-items-slider-responsive.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="{{asset('/')}}assets/js/Simple-Slider.js"></script>
<script src="{{asset('/')}}assets/js/Swipe-Slider-7.js"></script>
<script src="{{asset('/')}}assets/js/WOWSlider-about-us.js"></script>
<script>
    setTimeout(function(){
        $('.loader_bg').fadeToggle();
    },4000);
</script>
</body>

</html>
