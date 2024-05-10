<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        @yield("title")
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="Web Development Dubai,
     Enterprise Website Development Dubai, E-commerce Website Services Dubai,
     Education Website Design Dubai, Startup Website Solutions Dubai, Blog Development Services Dubai,
     Corporate Website Design Dubai, Government Website Solutions Dubai, Professional Portfolio Website Dubai,
     Repair Website Services Dubai, Trading Company Website Development Dubai, School Website Services Dubai,
     Mobile App Development Dubai, E-commerce App Developers Dubai, Educational App Development Dubai, Health and Fitness App Dubai,
      Gym App Development Dubai, IoT Smart Integration Dubai, Smart Home Solutions Dubai, Wearable Technology Dubai, Healthcare IoT Solutions Dubai,
      Industrial IoT Solutions Dubai, Digital Marketing Services Dubai, Advertising Campaigns Dubai, Social Media Management Dubai,
       Content Marketing Services Dubai, SEO Services Dubai, Google AdWords Management Dubai, Video Animation Services Dubai, Architecture Animation Dubai,
        3D Safety Induction Videos Dubai, 3D Animated Video Production Dubai, 3D Character Animation Dubai, 3D Interior Modeling Dubai,
        Explainer Video Services Dubai, Cartoon Animation Services Dubai">

    <meta content="We are a full-service creative branding agency in Dubai,
    UAE expertise in branding, web design&development,Smart Home,App Development,digital marketing and logo design" name="description">

    <link rel="canonical" href="{{ canonical() }}"/>

    <link href="{{asset("user/logo.png")}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('user/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('user/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('user/css/style.css')}}" rel="stylesheet">
<style>
.dropdown-menu-multi-column {
    width: 80vw;
    max-height: 90vh;
    overflow-y: auto;
    right: -43px;
    left: auto;
    height: auto;
    position: absolute;

}
p.mb-0.c {
    color: white;
}
.dropdown-menu-multi-column .row {
    width: 100%;
    margin: 0; /* Remove default margin */
}
img.logo {
    width: 167px;
    height: 104px;
}
nav.navbar.navbar-expand-lg.navbar-dark.px-5.py-3.py-lg-0 {
    background-color: white;
}.navbar-dark .navbar-nav .nav-link {
    font-family: 'Nunito', sans-serif;
    position: relative;
    margin-left: 25px;
    padding: 35px 0;
    color: #000000;
    font-size: 18px;
    font-weight: 600;
    outline: none;
    transition: .5s;
}
.dropdown-section .dropdown-header {
    font-weight: bold;
    font-size: 16px; /* Adjustable based on device size */
    padding: 8px 10px;
    background-color: #f8f9fa;
    border-bottom: 1px solid #dee2e6;
    color: #06a3da;
}
.navbar-dark .navbar-brand h1 {
    color: #000000;
}
.dropdown-list {
    list-style: none;
    padding: 0 10px 10px 20px; /* Indent items under headers */
}

.dropdown-list .dropdown-item {
    display: block;
    padding: 2px 5px;
    color: #282828;
    text-decoration: none;
}

/* Responsive Styles for Tablets */
@media (max-width: 768px) {
    .dropdown-menu-multi-column {
        width: 100vw; /* Full width on smaller screens */
        right: 0;
        left: 0; /* Center the dropdown */


    }

    .dropdown-section .dropdown-header {
        font-size: 14px; /* Smaller font size for smaller screens */
    }
}

/* Responsive Styles for Mobile Phones */
@media (max-width: 576px) {
    .dropdown-menu-multi-column {
        position: static; /* Adjust positioning for mobile navigation */
        width: 100%;/* Full width on smaller screens */
    }

    .col-md-4 {
        width: 100%; /* Stack columns vertically on small screens */
    }

    .dropdown-section .dropdown-header {
        padding: 8px; /* Reduce padding on very small screens */
    }

    .dropdown-list {
        padding-left: 15px; /* Adjust list padding */
    }
}
.float {
    position: fixed;
    width: 67px;
    height: 66px;
    bottom: 112px;
    right: 36px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 26px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
}a.float.call {
    height: 66px;
    bottom: 34px;
    right: 36px;
}a.float.call {
    background-color: white;
}  .call {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full height of the viewport */
        }

        .fa-phone-square {
            font-size: 48px; /* Larger icon size */
            color: #4CAF50; /* Green color */
        }
        i.fa.fa-phone-square {
    color: #06a3da;
}
.my-float{
	margin-top:16px;
}a.btn.btn-lg.btn-primary.btn-lg-square.rounded.back-to-top {
    display: none;
}
</style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <a href="https://api.whatsapp.com/send?phone=+971557474526&text=Hello%20MPTS%20TECH" class="float" target="_blank">

    <i class="fab fa-whatsapp  my-float"></i>
    </a>
    <a  href="tel:+971557474526" class="float call" target="_blank">
        <i class="fa fa-phone-square"></i>
        </a>
    <?php $services = App\Models\Service::with('types')->get(); ?>
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light "><i class="fa fa-map-marker-alt me-2"></i>Dubai - al barsha 1 - B8 Building - Office No. 501
                    </small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+971557474526</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@mptstech.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{route('user_home')}}" class="navbar-brand p-0">
                <h1 class="m-0">  <img class="logo" src="{{asset("user/logo.png")}}"></i> </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{route('user_home')}}" class="nav-item nav-link {{ Request::is('user_home') ? 'active' : '' }}">Home</a>
                    <a href="{{route('about')}}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                     <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0 dropdown-menu-multi-column">
                            <div class="row">
                                @php
                                    $totalServices = $services->count();
                                    $servicesPerColumn = ceil($totalServices / 3);
                                @endphp
                                @foreach ($services->chunk($servicesPerColumn) as $serviceChunk)
                                <div class="col-md-4">
                                    @foreach ($serviceChunk as $service)
                                    <div class="dropdown-section">
                                        <strong class="dropdown-header">{{ $service->name_service }}</strong>
                                        @if ($service->types->isNotEmpty())
                                        <ul class="dropdown-list">
                                            @foreach ($service->types as $type)
                                            <li><a href="{{str_replace('%20', '-', route('type_service_component', ['name'=>$service->name_service, 'name_type'=>$type->name_type]))}}" class="dropdown-item">{{ $type->name_type }}</a></li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>



                    {{-- <a href="{{route('blog')}}" class="nav-item nav-link {{ Request::is('blog') ? 'active' : '' }}">Blog</a> --}}

                    <a href="{{route('iotservices')}}" class="nav-item nav-link">  IOT Development</a>

                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                    <a href="{{route('freequote')}}" class="nav-item nav-link">Free Quote</a>


                </div>

            </div>
        </nav>




        {{$slot}}


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="{{route("user_home")}}" class="navbar-brand">
                            <h1 class="m-0 text-white">MPTS TECH</h1>
                        </a>

                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0 c">Dubai - al barsha 1 - B8 Building - Office No. 501
                                </p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0 c">info@mptstech.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0 c">+971557474526</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{route('user_home')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="{{route('about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="{{route('services')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light" href="{{route('contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                @foreach ($services as $service )
                                <a class="text-light mb-2" href="{{route('service_component',['name'=>$service->name_service])}}" >
                                    <i class="bi bi-arrow-right text-primary me-2"></i>{{$service->name_service}}</a>


                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">MPTS TECH  </a>. All Rights Reserved.

						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						Designed by <a class="text-white border-bottom" href="{{route("user_home")}}">MPTS TECH</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('user/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('user/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('user/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('user/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('user/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('user/js/main.js')}}"></script>
</body>

</html>
