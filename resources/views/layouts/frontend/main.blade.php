<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GREENARO - Sustainable Power Solutions HTML Template">
    <meta name="keywords" content="wind energy, renewable energy, wind turbines, sustainable power, solar systems, clean energy, green energy, wind power solutions">
    <meta name="robots" content="index, follow">
    <!-- for open graph social media -->
    <meta property="og:title" content="Sustainable Power Solutions">
    <meta property="og:description" content="GREENARO - Sustainable Power Solutions HTML Template">
    <!-- for twitter sharing -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sustainable Power Solutions">
    <meta name="twitter:description" content="GREENARO - Sustainable Power Solutions HTML Template">
    <!-- favicon -->
    <link rel="icon" href="https://html.themewant.com/greenaro/assets/images/fav.svg" type="image/x-icon">
    <!-- title -->
    <title>@yield('title')</title>

    <!-- Bootstrap Css -->
    <link rel="preload" href="https://html.themewant.com/greenaro/assets/css/plugins/bootstrap.min.css" as="style">
    <!-- Fontawesome Css -->
    <link rel="preload" href="https://html.themewant.com/greenaro/assets/css/plugins/fontawesome.css" as="style">
    <!-- Animate css -->
    <link rel="preload" href="https://html.themewant.com/greenaro/assets/css/plugins/animate.css" as="style">
    <!-- Magnific Popup Css -->
    <link rel="preload" href="https://html.themewant.com/greenaro/assets/css/plugins/magnific-popup.css" as="style">
    <!-- Odometer css -->
    <link rel="preload" href="https://html.themewant.com/greenaro/assets/css/plugins/odometer.css" as="style">
    <!-- Swiper css -->
    <link rel="preload" href="https://html.themewant.com/greenaro/assets/css/plugins/swiper.min.css" as="style">
    <!-- Main Style -->
    <link rel="preload" href="https://html.themewant.com/greenaro/assets/css/style.css" as="style">



    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://html.themewant.com/greenaro/assets/css/plugins/bootstrap.min.css">
    <!-- Fontawesome Css -->
    <link rel="stylesheet" href="https://html.themewant.com/greenaro/assets/css/plugins/fontawesome.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="https://html.themewant.com/greenaro/assets/css/plugins/animate.css">
    <!-- Magnific Popup Css -->
    <link rel="stylesheet" href="https://html.themewant.com/greenaro/assets/css/plugins/magnific-popup.css">
    <!-- Odometer css -->
    <link rel="stylesheet" href="https://html.themewant.com/greenaro/assets/css/plugins/odometer.css">
    <!-- Swiper css -->
    <link rel="stylesheet" href="https://html.themewant.com/greenaro/assets/css/plugins/swiper.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="https://html.themewant.com/greenaro/assets/css/style.css">
</head>

<body>
    <!-- rts preloader area start -->
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- rts preloader area end -->
    <!-- top header area -->
    <div class="header__top">
        <ul class="top__left">
            <li><i class="fa-solid fa-envelope"></i><a href="mailto:contact@greeninfo.com">contact@greenaro.com</a>
            </li>
            <li><i class="fa-solid fa-phone"></i><a href="tel:+1214114741">+1 214-114-741</a></li>
        </ul>
        <div class="top__right">
            <div class="ofc">
                <i class="fa-regular fa-clock"></i>
                <p>Mon-Fri, 8:30am - 5:00pm</p>
            </div>
            <div class="social__icons">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- top header area end -->

    <!-- main header area -->
    @include('layouts.frontend.header')
    <!-- main header area end -->

    @yield('content')

    <!-- rts footer area start -->
    @include('layouts.frontend.footer')
    <!-- rts footer area end -->
    <div class="rts__offcanvas">
        <div class="rts__offcanvas__wrapper">
            <div class="rts__offcanvas__header">
                <div class="logo">
                    <a href="index.html"><img src="https://html.themewant.com/greenaro/assets/images/logo/logo.svg" alt=""></a>
                </div>
                <div class="rts__offcanvas__toggle__close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>

            <div class="rts__offcanvas__mobile__menu">
                <nav></nav>
            </div>

            <div class="rts__offcanvas__footer">
                <div class="social">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="rts__offcanvas__overlay"></div>
    <!-- back to top -->
    <button type="button" class="rts__back__top" id="rts-back-to-top">
        <svg width="20" height="20" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.30201 1.51317L7.29917 21.3422C7.29912 21.7057 6.97211 21.9993 6.5674 21.9993C6.16269 21.9992 5.83577 21.7055 5.83582 21.342L5.83844 3.10055L1.39753 7.08842C1.11169 7.34511 0.647535 7.34506 0.361762 7.0883C0.0759894 6.83155 0.0760493 6.41464 0.361896 6.15795L6.05367 1.04682C6.26405 0.857899 6.5773 0.802482 6.85167 0.905201C7.12374 1.00792 7.30205 1.24823 7.30201 1.51317Z" fill="#FFF" />
            <path d="M12.9991 6.6318C12.9991 6.80021 12.9282 6.96861 12.7841 7.09592C12.4983 7.35261 12.0341 7.35256 11.7483 7.0958L6.05118 1.97719C5.76541 1.72043 5.76547 1.30352 6.05131 1.04684C6.33716 0.790152 6.80131 0.790206 7.08709 1.04696L12.7842 6.16557C12.9283 6.29498 12.9991 6.46339 12.9991 6.6318Z" fill="#FFF" />
        </svg>
    </button>
    <!-- back to top end -->

    <!-- script js -->
    <script defer src="https://html.themewant.com/greenaro/assets/js/plugins/jquery.min.js"></script>
    <script defer src="https://html.themewant.com/greenaro/assets/js/plugins/popper.js"></script>
    <script defer src="https://html.themewant.com/greenaro/assets/js/plugins/bootstrap.min.js"></script>
    <script defer src="https://html.themewant.com/greenaro/assets/js/plugins/gsap.min.js"></script>
    <script defer src="https://html.themewant.com/greenaro/assets/js/plugins/scrolltigger.js"></script>
    <script defer src="https://html.themewant.com/greenaro/assets/js/plugins/split-text.js"></script>
    <script defer src="https://html.themewant.com/greenaro/assets/js/plugins/split-type.js"></script>
    <script defer src="https://html.themewant.com/greenaro/assets/js/plugins/swiperjs.js"></script>
    <script defer src="https://html.themewant.com/greenaro/assets/js/plugins/magnific-popup.js"></script>
    <script defer src="https://html.themewant.com/greenaro/assets/js/plugins/odometer.js"></script>
    <script defer src="https://html.themewant.com/greenaro/assets/js/plugins/smooth-scroll.js"></script>
    <script defer src="https://html.themewant.com/greenaro/assets/js/plugins/wow.js"></script>
    <script defer src="https://html.themewant.com/greenaro/assets/js/main.js"></script>
</body>

</html>