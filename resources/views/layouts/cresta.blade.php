<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RetrivalPrime | </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/retrivalprime.png') }}">
    {{--  <!-- Place favicon.ico in the root directory --> --}}

    {{--  <!-- CSS here --> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    {{--  <!-- pre loader area start --> --}}
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_four"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_one"></div>
            </div>
        </div>
    </div>
    {{--  <!-- pre loader area end --> --}}

    {{--  <!-- back to top start --> --}}
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    {{--  <!-- back to top end --> --}}

    <header>

        {{--  <!-- header-top-area start--> --}}
        <div class="tg-header-top__area gradient-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9 col-7">
                        <div class="tg-header-top__info">
                            <ul>
                                <li>
                                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                                    <a href="https://www.google.com/maps" target="_blank">6391 Elgin St. Celina,
                                        10299</a>
                                </li>
                                <li class="d-none d-md-inline-block">
                                    <i class="fa-light fa-clock"></i>
                                    <span>Sunday - Friday: 9 am - 8 pm</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-5">
                        <div class="tg-header-top__social text-end">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  <!-- header-top-area end--> --}}

        {{--  <!-- header-area -start--> --}}
        <div id="sticky-header" class="tg-header__area black-bg-2 tg-header__mob-space">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-5 col-md-5 col-6">
                        <div class="logo">
                            <a href="{{ route('pages.index') }}">
                                <img src="{{ asset('assets/img/logo/retrivalprime_full_white.png') }}" />
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7
                                    d-none d-xl-block">
                        <div class="tgmenu__wrap">
                            <div class="tgmenu__navbar-wrap tgmenu__main-menu">
                                <nav class="tgmenu__nav">
                                    <ul class="navigation">

                                        <li><a href="{{ route('pages.about') }}">About</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('pages.services') }}">Services</a>
                                            <ul class="sub-menu">
                                                @foreach ($services as $service)
                                                    <li>
                                                        <a
                                                            href="{{ route('pages.service', $service) }}">{{ $service->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('pages.index') }}#testimonials">Testimonials</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pages.news') }}">News</a>

                                        </li>
                                        <li><a href="{{ route('pages.faq') }}">FAQ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-7 col-md-7 col-6">
                        <div class="tgmenu__btn-box d-flex justify-content-end">
                            <a class="tg-btn-gradient d-none d-md-block" href="{{ route('pages.contact') }}">Get
                                Started</a>
                            <div class="mobile-nav-toggler d-xl-none">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  <!-- header-area-end --> --}}

        {{--  <!-- Mobile Menu  --> --}}
        <div class="tgmobile__menu">
            <nav class="tgmobile__menu-box">
                <div class="close-btn"><i class="fa-sharp fa-regular fa-xmark"></i></div>
                <div class="nav-logo">
                    <a href="index.html">
                        <img src="assets/img/logo/logo-white.png" alt="Nerko">
                    </a>
                </div>
                <div class="tgmobile__menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--> --}}
                </div>
                <div class="social-links">
                    <ul class="list-wrap">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-discord"></i></a></li>
                        <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="tgmobile__menu-backdrop"></div>
        {{--  <!-- End Mobile Menu --> --}}


    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>

        {{--  <!-- footer area start --> --}}
        <div class="tg-footer-area fix p-relative z-index black-bg pt-50 pb-100">
            {{-- <div class="tg-footer-shape-1">
                <img src="{{ asset('assets/img/logo/retrivalprime_full_white.png') }}" />
            </div> --}}
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50  wow tgfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".3s">
                        <div class="tg-footer-widget footer-col-1">
                            <div class="tg-footer-logo pb-15">
                                <a href="index.html">
                                    <img src="{{ asset('assets/img/logo/retrivalprime_full_white.png') }}" />

                                    {{-- <img src="assets/img/logo/logo-white.png" alt=""> --}}
                                </a>
                            </div>
                            <div class="tg-footer-text">
                                <p>Top Tech Experts and specialist you can trust </p>
                            </div>
                            <div class="tg-footer-social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 col-md-6 col-sm-6 mb-50  wow tgfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".5s">
                        <div class="tg-footer-widget footer-col-2">
                            <h4 class="tg-footer-widget-title">Useful Links</h4>
                            <div class="tg-footer-list">
                                <ul>
                                    <li> <a href="{{ route('pages.index') }}">
                                            <i class="fa-regular fa-angle-right"></i>Home </a></li>
                                    <li> <a href="{{ route('pages.about') }}">
                                            <i class="fa-regular fa-angle-right"></i>About Us</a></li>
                                    <li> <a href="{{ route('pages.services') }}">
                                            <i class="fa-regular fa-angle-right"></i>Services </a></li>
                                    <li> <a href="{{ route('pages.contact') }}">
                                            <i class="fa-regular fa-angle-right"></i>Contact Us</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-50  wow tgfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".7s">
                        <div class="tg-footer-widget footer-col-3">
                            <h4 class="tg-footer-widget-title">Office Information</h4>
                            <div class="tg-footer-Office-info mb-20">
                                <span>
                                    <a target="_blank" href="#"><i class="fa-solid fa-location-dot"></i>1901
                                        Thornridge
                                        Cir. Shiloh <br>
                                        81063</a>
                                </span>
                                <span>
                                    <a href="tel:201555-0124"><i class="fa-solid fa-phone"></i>(201) 555-0124</a>
                                </span>
                            </div>
                            <div class="tg-footer-Office-schedule">
                                <h6 class="mb-15">Open Hours :</h6>
                                <span>Mon - Sat: 8 am-5pm, <br>
                                    Sunday: Closed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  <!-- footer area end --> --}}

        {{--  <!-- copy-right area start --> --}}
        <div class="tg-copyright-area black-bg">
            <div class="container">
                <div class="tg-copyright-border tg-copyright-ptb">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12  wow tgfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".3s">
                            <div class="tg-copyright-left text-center text-md-start">
                                <p>Copyright@2024 Retrivalprime All Right Reserved</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12  wow tgfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".3s">
                            <div class="tg-copyright-right text-center text-md-end">
                                <a class="text-anim-2" href="{{ route('pages.index') }}">Home</a>
                                <a class="text-anim-2" href="{{ route('pages.services') }}">Services</a>
                                <a class="text-anim-2"
                                    href="{{ route('pages.index') }}#testimonials">Testimonials</a>
                                <a class="text-anim-2" href="{{ route('pages.about') }}">About</a>
                                <a class="text-anim-2" href="{{ route('pages.contact') }}">Contact</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  <!-- copy-right area end --> --}}

    </footer>

    {{--  <!-- JS here --> --}}
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/purecounter.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
