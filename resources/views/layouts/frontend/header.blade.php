<style>
    @media (min-width: 992px) {
        .mega-menu-service {
            max-height: 450px !important;
            overflow-y: auto !important;
            overflow-x: hidden !important;
        }

        /* Custom Scrollbar for the dropdown */
        .mega-menu-service::-webkit-scrollbar {
            width: 5px;
        }

        .mega-menu-service::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .mega-menu-service::-webkit-scrollbar-thumb {
            background: #7c3aed;
            border-radius: 10px;
        }

        .mega-menu-service::-webkit-scrollbar-thumb:hover {
            background: #6d28d9;
        }
    }
</style>
<!-- start: Offcanvas Menu -->
<div class="tj-offcanvas-area d-none d-lg-block">
    <div class="hamburger_bg"></div>
    <div class="hamburger_wrapper">
        <div class="hamburger_inner">
            <div class="hamburger_top d-flex align-items-center justify-content-between">
                <div class="hamburger_logo">
                    <a href="{{ route('home') }}" class="mobile_logo">
                        <!-- <img src="{{asset('frontend/assets/images/logos/logo-2.webp')}}" alt="Logo"> -->
                        <img src="{{asset('logo.png')}}" alt="Logo">
                    </a>
                </div>
                <div class="hamburger_close">
                    <button class="hamburger_close_btn"><i class="fa-thin fa-times"></i></button>
                </div>
            </div>
            <div class="offcanvas-text">
                <p>Developing personalize our customer journeys to increase satisfaction & loyalty of our expansion
                    recognized
                    by industry leaders.</p>
            </div>
            <div class="hamburger-search-area">
                <h5 class="hamburger-title">Search Now!</h5>
                <div class="hamburger_search">
                    <form method="get" action="{{ route('home') }}">
                        <button type="submit"><i class="tji-search"></i></button>
                        <input type="search" autocomplete="off" name="s" value="" placeholder="Search here...">
                    </form>
                </div>
            </div>
            <div class="hamburger-infos">
                <h5 class="hamburger-title">Contact Info</h5>
                <div class="contact-info">
                    <div class="contact-item">
                        <span class="subtitle">Phone</span>
                        <a class="contact-link" href="tel:+14038300054">+1 (403) 830-0054</a>
                    </div>
                    <div class="contact-item">
                        <span class="subtitle">Email</span>
                        <a class="contact-link" href="mailto:info@truenorthbuild.ca">info@truenorthbuild.ca</a>
                    </div>
                    <div class="contact-item">
                        <span class="subtitle">Location</span>
                        <span class="contact-link">100 Whiteram Close Northeast, T1Y 5X8</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="hamburger-socials">
            <h5 class="hamburger-title">Follow Us</h5>
            <div class="social-links style-3">
                <ul>
                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li><a href="https://x.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end: Offcanvas Menu -->

<!-- start: Hamburger Menu -->
<div class="hamburger-area d-lg-none">
    <div class="hamburger_bg"></div>
    <div class="hamburger_wrapper">
        <div class="hamburger_inner">
            <div class="hamburger_top d-flex align-items-center justify-content-between">
                <div class="hamburger_logo">
                    <a href="{{ route('home') }}" class="mobile_logo">
                        <!-- <img src="{{asset('frontend/assets/images/logos/logo-2.webp')}}" alt="Logo"> -->
                        <img src="{{asset('logo.png')}}" alt="Logo">
                    </a>
                </div>
                <div class="hamburger_close">
                    <button class="hamburger_close_btn"><i class="fa-thin fa-times"></i></button>
                </div>
            </div>
            <div class="hamburger-search-area">
                <h5 class="hamburger-title">Search Now!</h5>
                <div class="hamburger_search">
                    <form method="get" action="{{ route('home') }}">
                        <button type="submit"><i class="tji-search"></i></button>
                        <input type="search" autocomplete="off" name="s" value="" placeholder="Search here...">
                    </form>
                </div>
            </div>
            <div class="hamburger_menu">
                <div class="mobile_menu"></div>
            </div>
            <div class="hamburger-infos">
                <h5 class="hamburger-title">Contact Info</h5>
                <div class="contact-info">
                    <div class="contact-item">
                        <span class="subtitle">Phone</span>
                        <a class="contact-link" href="tel:+14038300054">+1 (403) 830-0054</a>
                    </div>
                    <div class="contact-item">
                        <span class="subtitle">Email</span>
                        <a class="contact-link" href="mailto:info@truenorthbuild.ca">info@truenorthbuild.ca</a>
                    </div>
                    <div class="contact-item">
                        <span class="subtitle">Location</span>
                        <span class="contact-link">100 Whiteram Close Northeast, T1Y 5X8</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="hamburger-socials">
            <h5 class="hamburger-title">Follow Us</h5>
            <div class="social-links style-3">
                <ul>
                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li><a href="https://x.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end: Hamburger Menu -->

<!-- start: Header Area -->
<header class="header-area header-2 header-absolute section-gap-x">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="header-wrapper">
                    <!-- site logo -->
                    <div class="site_logo">
                        <a class="logo" href="{{ route('home') }}"><img src="{{asset('logo.png')}}" alt=""></a>
                    </div>

                    <!-- navigation -->
                    <div class="menu-area d-none d-lg-inline-flex align-items-center">
                        <nav id="mobile-menu" class="mainmenu">
                            <ul>
                                <li class="{{ request()->routeIs('home') ? 'current-menu-ancestor' : '' }}"><a
                                        href="{{ route('home') }}">Home</a></li>
                                <li class="{{ request()->routeIs('about') ? 'current-menu-ancestor' : '' }}"><a
                                        href="{{ route('about') }}">About</a></li>
                                <!-- <li class="has-dropdown"><a href="about.html">Pages</a>
                                    <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                                        <li>
                                            <div class="mega-menu-wrapper">

                                                <div class="mega-menu-pages-single">
                                                    <div class="mega-menu-pages-single-inner">
                                                        <h6 class="mega-menu-title">Main Pages</h6>
                                                        <div class="mega-menu-list">
                                                            <a href="about.html">About us</a>
                                                            <a href="history.html">Our history <span
                                                                    class="mega-menu-badge tj-zoom-in-out-anim mega-menu-badge-hot ">HOT</span></a>
                                                            <a href="team.html">Team</a>
                                                            <a href="team-details.html">Team details</a>
                                                            <a href="careers.html">Careers <span
                                                                    class="mega-menu-badge tj-zoom-in-out-anim ">NEW</span></a>
                                                            <a href="careers-details.html">Careers details</a>
                                                            <a href="pricing.html">Pricing plan</a>
                                                            <a href="#">Feedbacks</a>
                                                            <a href="faq.html">Faq</a>
                                                            <a href="contact.html">Contact</a>


                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="mega-menu-pages-single">
                                                    <div class="mega-menu-pages-single-inner">
                                                        <h6 class="mega-menu-title">Other Pages</h6>
                                                        <div class="mega-menu-list">
                                                            <a href="service.html">Services</a>
                                                            <a href="{{ route('services.details', ['id' => 1]) }}">Service details</a>
                                                            <a href="portfolio.html">Portfolio</a>
                                                            <a href="portfolio-details.html">Portfolio details</a>
                                                            <a href="error.html">Error 404</a>
                                                            <a href="blog-grid.html">Blog grid <span
                                                                    class="mega-menu-badge tj-zoom-in-out-anim ">NEW</span></a>
                                                            <a href="blog.html">Blog standard</a>
                                                            <a href="blog-details.html">Blog details</a>
                                                            <a href="terms-and-conditions.html">Term & conditions</a>
                                                            <a href="#">Recognition <span
                                                                    class="mega-menu-badge tj-zoom-in-out-anim ">NEW</span></a>


                                                        </div>
                                                    </div>

                                                </div>
                                                <div class=" mega-menu-pages-single">
                                                    <div class="mega-menu-pages-single-inner">
                                                        <h6 class="mega-menu-title">Shop Pages</h6>
                                                        <div class="mega-menu-list">
                                                            <a href="shop.html">Shop <span
                                                                    class="mega-menu-badge tj-zoom-in-out-anim mega-menu-badge-hot ">HOT</span></a>
                                                            <a href="shop-details.html">Shop details </a>
                                                            <a href="cart.html">Cart</a>
                                                            <a href="checkout.html">Checkout</a>
                                                            <a href="wishlist.html">Wishlist<span
                                                                    class="mega-menu-badge tj-zoom-in-out-anim ">NEW</span></a>
                                                            <a href="login.html">Login</a>

                                                            <a href="#">Tracking</a>
                                                            <a href="#">Order confirm</a>
                                                            <a href="login.html">Registration</a>
                                                            <a href="#">Coming soon</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-12 col-lg-3 mega-menu-pages-single">
                                                    <div class="mega-menu-pages-single-inner">
                                                        <div class="feature-box">
                                                            <div class="feature-content">
                                                                <h2 class="title">Modern</h2>
                                                                <span>Home Makeover</span>
                                                                <a class="read-more feature-contact" href="tel:8321890640">
                                                                    <i class="tji-phone-3"></i>
                                                                    <span>+8 (321) 890-640</span>
                                                                </a>
                                                            </div>
                                                            <div class="feature-images">
                                                                <img src="{{asset('frontend/assets/images/service/service-ad.webp')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li> -->
                                <li
                                    class="has-dropdown {{ request()->is('services*') ? 'current-menu-ancestor' : '' }}">
                                    <a href="{{ route('services') }}">Services</a>
                                    <ul class="sub-menu  mega-menu-service">
                                        @foreach($header_services as $s_item)
                                            <li>
                                                <a class="mega-menu-service-single"
                                                    href="{{ route('services.details', ['id' => $s_item->id]) }}">
                                                    <span class="mega-menu-service-icon">
                                                        <i class="tji-service-{{ ($loop->index % 6) + 1 }}"></i>
                                                    </span>
                                                    <span class="mega-menu-service-title">{{ $s_item->name }}</span>
                                                    <span class="mega-menu-service-nav">
                                                        <i class="tji-arrow-right-long"></i>
                                                        <i class="tji-arrow-right-long"></i>
                                                    </span>
                                                </a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                                <!-- <li class="has-dropdown"><a href="portfolio.html">Portfolio</a>
                                    <ul class="sub-menu">
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li class="has-dropdown"><a href="blog.html">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li> -->
                                <li class="{{ request()->routeIs('careers') ? 'current-menu-ancestor' : '' }}"><a
                                        href="{{ route('careers') }}">Careers</a></li>
                                <li class="{{ request()->routeIs('contact') ? 'current-menu-ancestor' : '' }}"><a
                                        href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- header right info -->
                    <div class="header-right-item d-none d-lg-inline-flex">
                        <div class="header-search">
                            <button class="search">
                                <i class="tji-search"></i>
                            </button>
                            <button type="button" class="search_close_btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="header-button">
                            <a class="tj-primary-btn" href="{{ route('contact') }}">
                                <span class="btn-text"><span>Let’s Talk</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                        <div class="menu_bar menu_offcanvas d-none d-lg-inline-flex">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <!-- menu bar -->
                    <div class="menu_bar mobile_menu_bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Popup -->
    <div class="search_popup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="tj_search_wrapper">
                        <div class="search_form">
                            <form action="#">
                                <div class="search_input">
                                    <div class="search-box">
                                        <input class="search-form-input" type="text"
                                            placeholder="Type Words and Hit Enter" required>
                                        <button type="submit">
                                            <i class="tji-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end: Header Area -->

<!-- start: Header Area -->
<header class="header-area header-2 header-duplicate header-sticky section-gap-x">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="header-wrapper">
                    <!-- site logo -->
                    <div class="site_logo">
                        <!-- <a class="logo" href="{{ route('home') }}"><img src="{{asset('frontend/assets/images/logos/logo.webp')}}" alt=""></a> -->
                        <a class="logo" href="{{ route('home') }}"><img src="{{asset('logo.png')}}" alt=""></a>
                    </div>

                    <!-- navigation -->
                    <div class="menu-area d-none d-lg-inline-flex align-items-center">
                        <nav class="mainmenu">
                            <ul>
                                <li class="{{ request()->routeIs('home') ? 'current-menu-ancestor' : '' }}"><a
                                        href="{{ route('home') }}">Home</a></li>
                                <li class="{{ request()->routeIs('about') ? 'current-menu-ancestor' : '' }}"><a
                                        href="{{ route('about') }}">About</a></li>
                                <!-- <li class="has-dropdown"><a href="about.html">Pages</a>
                                    <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                                        <li>
                                            <div class="mega-menu-wrapper">

                                                <div class="mega-menu-pages-single">
                                                    <div class="mega-menu-pages-single-inner">
                                                        <h6 class="mega-menu-title">Main Pages</h6>
                                                        <div class="mega-menu-list">
                                                            <a href="about.html">About us</a>
                                                            <a href="history.html">Our history <span
                                                                    class="mega-menu-badge tj-zoom-in-out-anim mega-menu-badge-hot ">HOT</span></a>
                                                            <a href="team.html">Team</a>
                                                            <a href="team-details.html">Team details</a>
                                                            <a href="careers.html">Careers <span
                                                                    class="mega-menu-badge tj-zoom-in-out-anim ">NEW</span></a>
                                                            <a href="careers-details.html">Careers details</a>
                                                            <a href="pricing.html">Pricing plan</a>
                                                            <a href="#">Feedbacks</a>
                                                            <a href="faq.html">Faq</a>
                                                            <a href="contact.html">Contact</a>


                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="mega-menu-pages-single">
                                                    <div class="mega-menu-pages-single-inner">
                                                        <h6 class="mega-menu-title">Other Pages</h6>
                                                        <div class="mega-menu-list">
                                                            <a href="service.html">Services</a>
                                                            <a href="{{ route('services.details', ['id' => 1]) }}">Service details</a>
                                                            <a href="portfolio.html">Portfolio</a>
                                                            <a href="portfolio-details.html">Portfolio details</a>
                                                            <a href="error.html">Error 404</a>
                                                            <a href="blog-grid.html">Blog grid <span
                                                                    class="mega-menu-badge tj-zoom-in-out-anim ">NEW</span></a>
                                                            <a href="blog.html">Blog standard</a>
                                                            <a href="blog-details.html">Blog details</a>
                                                            <a href="terms-and-conditions.html">Term & conditions</a>
                                                            <a href="#">Recognition <span
                                                                    class="mega-menu-badge tj-zoom-in-out-anim ">NEW</span></a>


                                                        </div>
                                                    </div>

                                                </div>
                                                <div class=" mega-menu-pages-single">
                                                    <div class="mega-menu-pages-single-inner">
                                                        <h6 class="mega-menu-title">Shop Pages</h6>
                                                        <div class="mega-menu-list">
                                                            <a href="shop.html">Shop <span
                                                                    class="mega-menu-badge tj-zoom-in-out-anim mega-menu-badge-hot ">HOT</span></a>
                                                            <a href="shop-details.html">Shop details </a>
                                                            <a href="cart.html">Cart</a>
                                                            <a href="checkout.html">Checkout</a>
                                                            <a href="wishlist.html">Wishlist<span
                                                                    class="mega-menu-badge tj-zoom-in-out-anim ">NEW</span></a>
                                                            <a href="login.html">Login</a>

                                                            <a href="#">Tracking</a>
                                                            <a href="#">Order confirm</a>
                                                            <a href="login.html">Registration</a>
                                                            <a href="#">Coming soon</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-12 col-lg-3 mega-menu-pages-single">
                                                    <div class="mega-menu-pages-single-inner">
                                                        <div class="feature-box">
                                                            <div class="feature-content">
                                                                <h2 class="title">Modern</h2>
                                                                <span>Home Makeover</span>
                                                                <a class="read-more feature-contact" href="tel:8321890640">
                                                                    <i class="tji-phone-3"></i>
                                                                    <span>+8 (321) 890-640</span>
                                                                </a>
                                                            </div>
                                                            <div class="feature-images">
                                                                <img src="{{asset('frontend/assets/images/service/service-ad.webp')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li> -->
                                <li
                                    class="has-dropdown {{ request()->is('services*') ? 'current-menu-ancestor' : '' }}">
                                    <a href="{{ route('services') }}">Services</a>
                                    <ul class="sub-menu  mega-menu-service">
                                        @foreach($header_services as $s_item)
                                            <li>
                                                <a class="mega-menu-service-single"
                                                    href="{{ route('services.details', ['id' => $s_item->id]) }}">
                                                    <span class="mega-menu-service-icon">
                                                        <i class="tji-service-{{ ($loop->index % 6) + 1 }}"></i>
                                                    </span>
                                                    <span class="mega-menu-service-title">{{ $s_item->name }}</span>
                                                    <span class="mega-menu-service-nav">
                                                        <i class="tji-arrow-right-long"></i>
                                                        <i class="tji-arrow-right-long"></i>
                                                    </span>
                                                </a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                                <!-- <li class="has-dropdown"><a href="portfolio.html">Portfolio</a>
                                    <ul class="sub-menu">
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li class="has-dropdown"><a href="blog.html">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li> -->
                                <li class="{{ request()->routeIs('careers') ? 'current-menu-ancestor' : '' }}"><a
                                        href="{{ route('careers') }}">Careers</a></li>
                                <li class="{{ request()->routeIs('contact') ? 'current-menu-ancestor' : '' }}"><a
                                        href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- header right info -->
                    <div class="header-right-item d-none d-lg-inline-flex">
                        <div class="header-search">
                            <button class="search">
                                <i class="tji-search"></i>
                            </button>
                            <button type="button" class="search_close_btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="header-button">
                            <a class="tj-primary-btn" href="{{ route('contact') }}">
                                <span class="btn-text"><span>Let’s Talk</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                        <div class="menu_bar menu_offcanvas d-none d-lg-inline-flex">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <!-- menu bar -->
                    <div class="menu_bar mobile_menu_bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Popup -->
    <div class="search_popup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="tj_search_wrapper">
                        <div class="search_form">
                            <form action="#">
                                <div class="search_input">
                                    <div class="search-box">
                                        <input class="search-form-input" type="text"
                                            placeholder="Type Words and Hit Enter" required>
                                        <button type="submit">
                                            <i class="tji-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end: Header Area -->