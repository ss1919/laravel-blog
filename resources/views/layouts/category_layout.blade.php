<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rethouse - Real Estate HTML Template">
    <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency" />
    <meta name="author" content="mardianto - retenvi.com">
    <title>@yield('title')</title>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link href="{{ asset('assets/front/images/favicon.ico') }}" rel="icon">
    <meta name="theme-color" content="#3454d1">
    <link href="{{ asset('assets/front/css/front.css') }}" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- NAVBAR TOP -->
        <div class="topbar d-none d-sm-block">
            <div class="container ">
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="topbar-left">
                            <div class="topbar-text">
                                Monday, March 22, 2020
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="list-unstyled topbar-right">
                            <ul class="topbar-link">
                                <li><a href="#" title="">Career</a></li>
                                <li><a href="#" title="">Contact Us</a></li>
                                <li><a href="{{ route('login') }}" title="">Login / Register</a></li>
                            </ul>
                            <ul class="topbar-sosmed">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END NAVBAR TOP -->
        <!-- NAVBAR -->
        <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/front/images/logo.svg') }}" alt="" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav99">
                    <ul class="navbar-nav  mx-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ route('home') }}"> Home </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Pages </a>
                            <ul class="dropdown-menu animate fade-up">
    
                                <li><a class="dropdown-item icon-arrow" href="#"> Agent </a>
                                    <ul class="submenu dropdown-menu  animate fade-up">
                                        <li><a class="dropdown-item" href="/agents-v1.html">Style 1</a></li>
                                        <li><a class="dropdown-item" href="/agents-v2.html">Style 2</a></li>
                                        <li><a class="dropdown-item" href="/agents-detail.html">Agent detail</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
    
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown"> Blog </a>
                            <ul class="dropdown-menu dropdown-menu-left animate fade-up">
                                <li><a class="dropdown-item" href="#"> Blog </a>
                                </li>
                                <li><a class="dropdown-item" href="#"> Blog Single </a></li>
    
                            </ul>
                        </li>
    
                        <li class="nav-item"><a class="nav-link" href="{{ route('contacts') }}"> contact </a></li>
                    </ul>
    
    
                    <!-- Search bar.// -->
                    <ul class="navbar-nav">
                        <li>
                            <a href="#" class="btn btn-primary text-capitalize">
                                <i class="fa fa-plus-circle mr-1"></i> add listing</a>
                        </li>
                    </ul>
                    <!-- Search content bar.// -->
                    <div class="top-search navigation-shadow">
                        <div class="container">
                            <div class="input-group ">
                                <form action="#">
    
                                    <div class="row no-gutters mt-3">
                                        <div class="col">
                                            <input class="form-control border-secondary border-right-0 rounded-0"
                                                type="search" value="" placeholder="Search " id="example-search-input4">
                                        </div>
                                        <div class="col-auto">
                                            <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right"
                                                href="/search-result.html">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
    
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Search content bar.// -->
                </div> <!-- navbar-collapse.// -->
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- BREADCRUMB -->
        <div class="bg-theme-overlay">
            <section class="section__breadcrumb ">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 text-center">
                            <h2 class="text-capitalize text-white">@yield('title')</h2>
                            <ul class="list-inline ">
                                <li class="list-inline-item">
                                    <a href="{{ route('home') }}" class="text-white">
                                        home
                                    </a>
                                </li>
                                {{-- <li class="list-inline-item">
                                    <a href="{{ route('categories.single', ['slug' => $category->slug]) }}" class="text-white">
                                          {{ $category->title }}
                                    </a>
                                </li> --}}
    
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END BREADCRUMB -->
    </header>
    <div class="clearfix"></div>

    <!-- BLOG -->
    @yield('content')
    <!-- END LISTING LIST -->


    <!-- CALL TO ACTION -->
    <section class="cta-v1 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <h2 class="text-uppercase text-white">Looking To Sell Or Rent Your Property?</h2>
                    <p class="text-capitalize text-white">We Will Assist You In The Best And Comfortable Property
                        Services
                        For You
                    </p>

                </div>
                <div class="col-lg-3">
                    <a href="#" class="btn btn-light text-uppercase ">request a quote
                        <i class="fa fa-angle-right ml-3 arrow-btn "></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- END CALL TO ACTION -->

    <!-- Footer  -->
    <footer>
        <div class="wrapper__footer bg-theme-footer">
            <div class="container">
                <div class="row">
                    <!-- ADDRESS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <figure>
                                <img src="assets/front/images/logo.svg" alt="" class="logo-footer">
                            </figure>
                            <p>
                                Rethouse Real Estate is a premium Property template based on Bootstrap 4. Rethouse Real
                                Estate helped thousands of clients to find the right property for their needs.

                            </p>

                            <ul class="list-unstyled mb-0 mt-3">
                                <li> <b> <i class="fa fa-map-marker"></i></b><span>214 West Arnold St. New York, NY
                                        10002</span> </li>
                                <li> <b><i class="fa fa-phone-square"></i></b><span>(123) 345-6789</span> </li>
                                <li> <b><i class="fa fa-phone-square"></i></b><span>(+100) 123 456 7890</span> </li>
                                <li> <b><i class="fa fa-headphones"></i></b><span>support@realvilla.demo</span> </li>
                                <li> <b><i class="fa fa-clock-o"></i></b><span>Mon - Sun / 9:00AM - 8:00PM</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- END ADDRESS -->

                    <!-- QUICK LINKS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <h4 class="footer-title">Quick Links</h4>
                            <div class="link__category-two-column">
                                <ul class="list-unstyled ">
                                    <li class="list-inline-item">
                                        <a href="#">Commercial</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">business</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">House</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Residential</a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#">Residential Tower</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Beverly Hills</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Los angeles</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">The beach</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Property Listing</a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#">Clasic</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Modern Home</a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#">Luxury</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Beach Pasadena</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END QUICK LINKS -->


                    <!-- NEWSLETTERS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <h4 class="footer-title">follow us </h4>
                            <p class="mb-2">
                                Follow us and stay in touch to get the latest news
                            </p>
                            <p>
                                <button class="btn btn-social btn-social-o facebook mr-1">
                                    <i class="fa fa-facebook-f"></i>
                                </button>
                                <button class="btn btn-social btn-social-o twitter mr-1">
                                    <i class="fa fa-twitter"></i>
                                </button>

                                <button class="btn btn-social btn-social-o linkedin mr-1">
                                    <i class="fa fa-linkedin"></i>
                                </button>
                                <button class="btn btn-social btn-social-o instagram mr-1">
                                    <i class="fa fa-instagram"></i>
                                </button>

                                <button class="btn btn-social btn-social-o youtube mr-1">
                                    <i class="fa fa-youtube"></i>
                                </button>
                            </p>
                            <br>
                            <h4 class="footer-title">newsletter</h4>
                            <!-- Form Newsletter -->
                            <div class="widget__form-newsletter ">
                                <p>

                                    Don’t miss to subscribe to our news feeds, kindly fill the form below
                                </p>
                                <div class="mt-3">
                                    <input type="text" class="form-control mb-2" placeholder="Your email address">

                                    <button class="btn btn-primary btn-block text-capitalize" type="button">subscribe

                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END NEWSLETTER -->
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="bg__footer-bottom-v1">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="col-md-6">
                        <span>
                            © 2022 Laravel 8 Blog
                        </span>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-inline ">
                            <li class="list-inline-item">
                                <a href="#">
                                    privacy
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    contact
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    about
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    faq
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer  -->
    </footer>





    <!-- SCROLL TO TOP -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TO TOP -->
    <script src="{{ asset('assets/front/js/front.js') }}"></script>
</body>

</html>
