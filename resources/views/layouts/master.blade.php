<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DN Multi Services</title>
    <meta name="description" content="DN Multiservices">
    <meta name="author" content="kreative-touch">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/favicon.svg">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/odometer-theme-default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/layout/pages/_about-us.scss') }}">
</head>

<body class="body-2">

    <!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

    <!-- preloader start -->
    <div id="preloader">
        <div class="preloader-close">x</div>
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- preloader end -->
    <header>
        <div id="header-sticky" class="header__area header-2">
            <div class="container">
                <div class="mega__menu-wrapper p-relative">
                    <div class="header__main">
                        <div class="header__left d-flex align-items-center">
                            <div class="header__logo">
                                <a href="index.html">
                                    <div class="logo">
                                        <img src="{{ asset('assets/imgs/logo/logo-two-color.png') }}" alt="logo not found">
                                    </div>
                                </a>
                            </div>

                            <div class="mean__menu-wrapper d-none d-xl-block">
                                <div class="main-menu main-menu-2">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Our Services</a></li>
                                            <li><a href="#">Our Team</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="header__right">
                            <div class="header__action d-flex align-items-center">
                                <div class="header__btn-wrap align-items-center d-inline-flex">

                                    <div class="rr-header-contact-btn d-flex align-items-center d-none d-lg-flex">
                                        <div class="rr-header-contact-btn__icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <div class="rr-header-contact-btn__text">
                                            <p class="mb-0 color-white">Need help?</p>
                                            <h5 class="mb-0 color-white"><a href="tel:243972329000">+243 972 329 000</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="header__hamburger ml-30 d-xl-none">
                                    <div class="sidebar__toggle">
                                        <a class="bar-icon" href="javascript:void(0)">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="home-2__background">
        @yield('content')
    </main>
    <footer>
        <section class="footer-2__area-common theme-bg-color-900 overflow-hidden"
            data-background="assets/imgs/footer-2/background.png">
            <div class="container">
                <div class="row mb-minus-50">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-2__widget footer-2__widget-item-1">
                            <div class="footer-2__logo mb-30 mb-xs-25">
                                <a href="index.html">
                                    <img class="img-fluid" src="assets/imgs/logo/logo-white.svg"
                                        alt="logo not found">
                                </a>
                            </div>

                            <div class="footer-2__content">
                                <p class="mb-0">It is a long established fact that a reader will be distracted</p>
                            </div>

                            <div class="footer-2__social mt-30 mt-xs-30">
                                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/">
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.0596 6.77295L15.8879 -0.00195312H14.5068L9.44607 5.8806L5.40411 -0.00195312H0.742188L6.85442 8.89352L0.742188 15.998H2.12338L7.4676 9.78587L11.7362 15.998H16.3981L10.0593 6.77295H10.0596ZM8.16787 8.97189L7.54857 8.0861L2.62104 1.03779H4.74248L8.71905 6.726L9.33834 7.61179L14.5074 15.0056H12.386L8.16787 8.97223V8.97189Z"
                                            fill="white" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6">
                        <div class="footer-2__widget footer-2__widget-item-2">
                            <div class="footer-2__widget-title">
                                <h4>Services</h4>
                            </div>
                            <div class="footer-2__link">
                                <ul>
                                    <li><a href="about-us.html">Reliable Rentals</a></li>
                                    <li><a href="about-us.html">Golden Key Properties</a></li>
                                    <li><a href="about-us.html">Swift Home Sales</a></li>
                                    <li><a href="about-us.html">Elite Realty Services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="footer-2__widget footer-2__widget-item-3">
                            <div class="footer-2__widget-title">
                                <h4>Our Office</h4>
                            </div>

                            <div class="footer-2__link footer-2__link-location">
                                <ul>
                                    <li><a href="mailto:debra.holt@example.com"><i class="fa-solid fa-envelope"></i>
                                            debra.holt@example.com</a></li>
                                    <li><a href="https://maps.app.goo.gl/4XYAPDmpesGnSbsC8"><i
                                                class="fa-solid fa-location-dot"></i> 3891 Ranchview Dr. Richardson,
                                            California 62639</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-2__widget footer-2__widget-item-4">
                            <div class="footer-2__widget-title">
                                <h4>are you ready to start ?</h4>
                            </div>

                            <div class="footer-2__subscribe-content">
                                <p class="mb-30 mb-xs-25 color-white">Custom Software Development Tailored Solutions
                                    for Your Business Custom Software</p>

                                <div class="footer-2__subscribe d-flex mt-30 mt-xs-25">
                                    <input type="text" placeholder="Enter Email">
                                    <button type="submit" class="rr-btn rr-btn__theme">
                                        <span class="btn-wrap">
                                            <span class="text-one">Contact Us</span>
                                            <span class="text-two">Contact Us</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-2__bottom-wrapper">
                <div class="container">
                    <div class="footer-2__bottom">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="footer-2__copyright text-lg-start text-center">
                                    <p class="mb-0">© <a href="index.html">Medilix</a> 2024 | All Rights Reserved
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="footer-2__copyright-menu">
                                    <ul>
                                        <li><a href="about-us.html">Trams & Condition</a></li>
                                        <li><a href="about-us.html">Privacy Policy</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- Footer area end -->

    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/type.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/SplitText.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/tween-max.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/draggable.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smoothscroll.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
