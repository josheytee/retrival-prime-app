<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RetrivalPrime | {{ $title }}</title>

    <meta name="robots" content="noindex, follow" />
    <meta name="description"
        content="Discover the top rated Titanium Stainless Steel cookware- we have the right pot, pan or baking dish when it’s time to whip up a masterpiece in your kitchen! best cookware in Lagos Nigeira">
    <meta name="description"
        content="Browse our wide selection of high-quality cookware sets, saucepans, stock pots, skillets, sautés, and more. Enhance your cooking experience with our gourmet slow cookers and specialty items. We also offer a range of bakeware including cookie sheets, cake pans, and loaf pans. Shop now for the best cookware and bakeware sets to elevate your culinary creations.">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('og_title')" />
    <meta property="og:url" content="@yield('og_url')" />
    <meta property="og:site_name" content="Kitchen Craft | waterlesscookware" />



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

                {{-- <div class="object" id="object_four"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_one"></div>
                <div class="object" id="object_one">
                </div> --}}
                <img class="object" id="object_logo" src="{{ asset('assets/img/logo/retrivalprime.png') }}" />
            </div>
        </div>
    </div>
    {{--  <!-- pre loader area end --> --}}

    {{--  <!-- back to top start --> --}}
    {{-- <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div> --}}
    {{--  <!-- back to top end --> --}}
    <style>
        #floating-button {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            /* background: #db4437; */
            position: fixed;
            bottom: 30px;
            right: 30px;
            cursor: pointer;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);

        }

        .plus {
            color: white;
            position: absolute;
            top: 0;
            display: block;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            padding: 0;
            margin: 0;
            line-height: 55px;
            font-size: 20px;
            font-weight: 300;
            animation: plus-out 0.3s;
            transition: all 0.3s;
        }

        #container-floating {
            position: fixed;
            width: 70px;
            height: 70px;
            bottom: 30px;
            right: 30px;
            z-index: 500;
        }

        #container-floating:hover {
            height: 400px;
            width: 90px;
            padding: 30px;
        }

        #container-floating:hover .plus {
            animation: plus-in 0.15s linear;
            animation-fill-mode: forwards;
        }

        .edit {
            color: white;
            position: absolute;
            top: 0;
            display: block;
            bottom: 0;
            left: 0;
            display: block;
            font-size: 20px;
            right: 0;
            padding: 0;
            opacity: 0;
            margin: auto;
            line-height: 55px;
            transform: rotate(90deg);
            transition: all 0.3s;
            animation: edit-out 0.3s;

        }

        #container-floating:hover .edit {
            animation: edit-in 0.2s;
            animation-delay: 0.1s;
            animation-fill-mode: forwards;
        }

        @keyframes edit-in {
            from {
                opacity: 0;
                transform: rotateZ(90deg);
            }

            to {
                opacity: 1;
                transform: rotateZ(0deg);
            }
        }

        @keyframes edit-out {
            from {
                opacity: 1;
                transform: rotate(0deg);
            }

            to {
                opacity: 0;
                transform: rotate(90deg);
            }
        }

        @keyframes plus-in {
            from {
                opacity: 1;
                transform: rotateZ(0deg);
            }

            to {
                opacity: 0;
                transform: rotateZ(180deg);
            }
        }

        @keyframes plus-out {
            from {
                opacity: 0;
                transform: rotateZ(180deg);
            }

            to {
                opacity: 1;
                transform: rotateZ(0deg);
            }
        }

        .nds {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            position: fixed;
            z-index: 300;
            transform: scale(0);
            cursor: pointer;
        }

        .nd1 {
            /* background: #d3a411; */
            right: 40px;
            bottom: 120px;
            animation-delay: 0.2s;
            animation: bounce-out-nds 0.3s linear;
            animation-fill-mode: forwards;
        }

        .nd3 {
            /* background: #3c80f6; */
            right: 40px;
            bottom: 180px;
            animation-delay: 0.15s;
            animation: bounce-out-nds 0.15s linear;
            animation-fill-mode: forwards;
        }

        .nd4 {
            /* background: #ba68c8; */
            right: 40px;
            bottom: 240px;
            animation-delay: 0.1s;
            animation: bounce-out-nds 0.1s linear;
            animation-fill-mode: forwards;
        }

        @keyframes bounce-nds {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes bounce-out-nds {
            from {
                opacity: 1;
                transform: scale(1);
            }

            to {
                opacity: 0;
                transform: scale(0);
            }
        }

        #container-floating:hover .nds {
            animation: bounce-nds 0.1s linear;
            animation-fill-mode: forwards;
        }

        #container-floating:hover .nd3 {
            animation-delay: 0.08s;
        }

        #container-floating:hover .nd4 {
            animation-delay: 0.15s;
        }

        #container-floating:hover .nd5 {
            animation-delay: 0.2s;
        }

        .letter {
            font-size: 23px;
            font-family: "Roboto";
            color: white;
            position: absolute;
            left: 0;
            right: 0;
            margin: 0;
            top: 0;
            bottom: 0;
            text-align: center;
            line-height: 40px;
        }

        .reminder {
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
            top: 0;
            bottom: 0;
            line-height: 40px;
        }

        .profile {
            border-radius: 50%;
            width: 40px;
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            right: 20px;
        }
    </style>
    <div class="">

        <div id="container-floating">
            <div class="nd4 nds tg-btn-gradient sm">
                <p class="letter">
                    <a href="{{ $about->whatsapp }}" target="_blank"> <i class="fa-brands fa-whatsapp"></i></a>
                </p>
            </div>
            <div class="nd3 nds tg-btn-gradient sm">
                <p class="letter">
                    <a href="{{ $about->facebook }}" target="_blank"> <i class="fa-brands fa-facebook"></i></a>
                </p>
            </div>
            <div class="nd1 nds tg-btn-gradient sm">
                <p class="letter">
                    <a href="{{ $about->instagram }}" target="_blank"> <i class="fa-brands fa-instagram"></i></a>
                </p>
            </div>

            <div id="floating-button" class="tg-btn-gradient sm">
                <p class="plus">
                    <i class="fa-solid fa-headphones"></i>
                </p>
                <p class="edit">
                    <i class="fa-solid fa-headphones"></i>
                    {{-- <i class="fa-solid fa-microphone"></i> --}}
                </p>
                {{-- <img class="edit"
                    src="https://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/bt_compose2_1x.png"> --}}
            </div>
        </div>


    </div>

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
                                    <a href="https://www.google.com/maps" target="_blank">{{ $about->address }}</a>
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
                            <a href="{{ $about->facebook }}" target="_blank"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                            <a href="{{ $about->instagram }}" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a>
                            <a href="mailto:{{ $about->email }}" target="_blank"><i
                                    class="fa-solid fa-envelope"></i></a>
                            <a href="{{ $about->whatsapp }}" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
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
                                        {{-- <li>
                                            <a href="{{ route('pages.news') }}">News</a>
                                        </li> --}}
                                        <li><a href="{{ route('pages.contact') }}">Contact</a></li>
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
                    <a href="{{ route('pages.index') }}">
                        <img src="{{ asset('assets/img/logo/retrivalprime_full_white.png') }}"
                            alt="Retrival Prome logo">
                    </a>
                </div>
                <div class="tgmobile__menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="social-links">
                    <ul class="list-wrap">
                        <li><a href="{{ $about->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="{{ $about->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li><a href="{{ $about->whatsapp }}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </li>
                        <li><a href="mailto:{{ $about->email }}" target="_blank"><i class="fab fa-envelope"></i></a>
                        </li>
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
                                <a href="{{ $about->facebook }}" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="{{ $about->instagram }}" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="mailto:{{ $about->email }}" target="_blank"><i
                                        class="fa-solid fa-envelope"></i></a>
                                <a href="{{ $about->whatsapp }}" target="_blank"><i
                                        class="fa-brands fa-whatsapp"></i></a>
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
                                    <a target="_blank" href="#"><i
                                            class="fa-solid fa-location-dot"></i>{{ $about->address }}</a>
                                    </a>
                                </span>
                                <span>
                                    <a href="tel:201555-0124"><i
                                            class="fa-solid fa-phone"></i>{{ $about->phone }}</a>
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
