@extends('layouts.frontend.main')
@section('title', 'About Us')

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const header = document.querySelector(".header-area");
            if (header) {
                header.classList.remove("header-2");
                header.classList.add("header-1");
            }

            const logo = document.querySelector(".logo img");
            if (logo) {
                logo.src = "{{asset('logo.png')}}";
                // logo.src = "{{ asset('frontend/assets/images/logos/logo.webp') }}";
            }
        });
    </script>
    <main id="primary" class="site-main">

        <div class="space-for-header"></div>
        <!-- start: Breadcrumb Section -->
        <section class="tj-page-header section-gap-x" data-bg-image="{{asset('6.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tj-page-header-content text-center">
                            <h1 class="tj-page-title">About Us</h1>
                            <div class="tj-page-link">
                                <span><i class="tji-home"></i></span>
                                <span>
                                    <a href="{{ route('home') }}">Home</a>
                                </span>
                                <span><i class="tji-arrow-right"></i></span>
                                <span>
                                    <span>About Us</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-header-overlay"
                data-bg-image="https://themejunction.net/html/bexon/demo/assets/images/shape/pheader-overlay.webp"></div>
        </section>
        <!-- end: Breadcrumb Section -->

        <!-- start: Choose Section -->
        <section id="choose" class="tj-choose-section section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-heading-wrap">
                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Choose the
                                Best</span>
                            <div class="heading-wrap-content">
                                <div class="sec-heading">
                                    <h2 class="sec-title title-anim">Trusted Outdoor Construction <span>Services.</span>
                                    </h2>
                                    <!-- <p>At North Build, we make it easy for you to choose reliable and professional outdoor services that fit your needs perfectly. Whether it’s landscaping, construction, or maintenance, our team ensures high-quality results with attention to detail and long-term durability.</p> -->
                                </div>
                                <div class="btn-wrap wow fadeInUp" data-wow-delay=".6s">
                                    <a class="tj-primary-btn" href="{{ route('contact') }}">
                                        <span class="btn-text"><span>Request a Call</span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-gap-4 rightSwipeWrap">
                    <div class="col-lg-4">
                        <div class="choose-box right-swipe">
                            <div class="choose-content">
                                <div class="choose-icon">
                                    <i class="tji-innovative"></i>
                                </div>
                                <h4 class="title">Professional Quality Work</h4>
                                <p class="desc">We deliver high-standard workmanship in every project, ensuring strong,
                                    durable, and visually appealing results. Our team focuses on precision, detail, and
                                    long-lasting performance for complete customer satisfaction.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="choose-box right-swipe">
                            <div class="choose-content">
                                <div class="choose-icon">
                                    <i class="tji-award"></i>
                                </div>
                                <h4 class="title">Reliable & On-Time Service</h4>
                                <p class="desc">We value your time and ensure every project is completed on schedule without
                                    compromising quality. Our team is dedicated to providing fast, efficient, and dependable
                                    services you can trust.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="choose-box right-swipe">
                            <div class="choose-content">
                                <div class="choose-icon">
                                    <i class="tji-support"></i>
                                </div>
                                <h4 class="title">Complete Outdoor Solutions</h4>
                                <p class="desc">From landscaping to construction and seasonal maintenance, we offer
                                    all-in-one outdoor services. This makes it easier for you to manage your property with
                                    one trusted company.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Choose Section -->

        <!-- start: About Section -->
        <section class="tj-about-section-2 section-gap section-gap-x">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 order-lg-1 order-2">
                        <div class="about-img-area style-2 wow fadeInLeft" data-wow-delay=".3s">
                            <div class="about-img overflow-hidden">
                                <img data-speed=".8" src="{{asset('9.jpg')}}" alt="">
                            </div>
                            <div class="box-area style-2">
                                <div class="progress-box wow fadeInUp" data-wow-delay=".3s">
                                    <h4 class="title">Business Progress</h4>
                                    <ul class="tj-progress-list">
                                        <li>
                                            <h6 class="tj-progress-title">Revenue</h6>
                                            <div class="tj-progress">
                                                <span class="tj-progress-percent">82%</span>
                                                <div class="tj-progress-bar" data-percent="82">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <h6 class="tj-progress-title">Satisfaction</h6>
                                            <div class="tj-progress">
                                                <span class="tj-progress-percent">90%</span>
                                                <div class="tj-progress-bar" data-percent="90">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="about-btn-area wow fadeInUp" data-wow-delay=".6s">
                            <a class="tj-primary-btn" href="{{ route('about') }}">
                                <span class="btn-text"><span>Learn More About Us</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 order-lg-2 order-1">
                        <div class="about-content-area">
                            <div class="sec-heading">
                                <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Get to Know
                                    Us</span>
                                <!-- <h2 class="sec-title title-anim">Driving Innovation and Excellence for Sustainable Corporate Success
                                                        <span>Worldwide.</span>
                                                    </h2> -->
                                <p>At North Build, we take pride in delivering reliable outdoor construction, landscaping,
                                    and property maintenance services that enhance the beauty, safety, and value of every
                                    project we handle.</p>
                            </div>
                        </div>
                        <div class="about-bottom-area">
                            <div class="mission-vision-box wow fadeInLeft" data-wow-delay=".5s">
                                <h4 class="title">Our Mission</h4>
                                <!-- <p class="desc">Our mission is to provide high-quality, dependable, and affordable outdoor
                                                        services that improve residential and commercial properties.</p> -->
                                <ul class="list-items">
                                    <li><i class="tji-list"></i>Deliver reliable and high-quality services on every project
                                    </li>
                                    <li><i class="tji-list"></i>Ensure customer satisfaction through professional
                                        workmanship</li>
                                    <li><i class="tji-list"></i>Use modern tools and efficient techniques for better results
                                    </li>
                                </ul>
                            </div>
                            <div class="mission-vision-box wow fadeInRight" data-wow-delay=".5s">
                                <h4 class="title">Our Vision</h4>
                                <!-- <p class="desc">Our vision is to become a trusted and leading name in outdoor construction
                                                        and landscaping services by continuously improving our quality.</p> -->
                                <ul class="list-items">
                                    <li><i class="tji-list"></i>Become a trusted leader in landscaping and construction
                                        services</li>
                                    <li><i class="tji-list"></i>Deliver excellence in every residential and commercial
                                        project</li>
                                    <li><i class="tji-list"></i>Expand services with innovation and modern techniques</li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="about-btn-area wow fadeInUp" data-wow-delay=".6s">
                                                <a class="tj-primary-btn" href="{{ route('about') }}">
                                                    <span class="btn-text"><span>Learn More About Us</span></span>
                                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                </a>
                                            </div> -->
                    </div>
                </div>
            </div>
            <div class="bg-shape-1">
                <img src="https://themejunction.net/html/bexon/demo/assets/images/shape/pattern-2.svg" alt="">
            </div>
            <div class="bg-shape-2">
                <img src="https://themejunction.net/html/bexon/demo/assets/images/shape/pattern-3.svg" alt="">
            </div>
        </section>
        <!-- end: About Section -->

        <!-- start: Client Section -->
        <section class="tj-client-section client-section-gap-2 wow fadeInUp" data-wow-delay=".4s">
            <div class="container-fluid client-container">
                <div class="row">
                    <div class="col-12">
                        <div class="client-content">
                            <h5 class="sec-title">Join Over <span class="client-numbers">1000+</span> Companies with
                                <span class="client-text">Bexon</span> Here
                            </h5>
                        </div>
                        <div class="swiper client-slider client-slider-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide client-item">
                                    <div class="client-logo">
                                        <img src="https://themejunction.net/html/bexon/demo/assets/images/brands/brand-1.webp"
                                            alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide client-item">
                                    <div class="client-logo">
                                        <img src="https://themejunction.net/html/bexon/demo/assets/images/brands/brand-2.webp"
                                            alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide client-item">
                                    <div class="client-logo">
                                        <img src="https://themejunction.net/html/bexon/demo/assets/images/brands/brand-3.webp"
                                            alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide client-item">
                                    <div class="client-logo">
                                        <img src="https://themejunction.net/html/bexon/demo/assets/images/brands/brand-4.webp"
                                            alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide client-item">
                                    <div class="client-logo">
                                        <img src="https://themejunction.net/html/bexon/demo/assets/images/brands/brand-5.webp"
                                            alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide client-item">
                                    <div class="client-logo">
                                        <img src="https://themejunction.net/html/bexon/demo/assets/images/brands/brand-6.webp"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Client Section -->

        <!-- start: Testimonial Section -->
        <section class="tj-testimonial-section-2 section-bottom-gap">
            <div class="container">
                <div class="row row-gap-3">
                    <div class="col-lg-6 d-flex">
                        <div class="testimonial-img-area wow fadeInUp h-100 w-100" data-wow-delay=".3s">
                            <div class="testimonial-img h-100">
                                <img src="{{asset('9.jpg')}}" alt="">
                                <div class="sec-heading style-2">
                                    <h2 class="sec-title title-anim">Hear from Our <span>Customer.</span></h2>
                                </div>
                            </div>
                            <div class="box-area">
                                <div class="rating-box wow fadeInUp" data-wow-delay=".5s">
                                    <h2 class="title">4.9</h2>
                                    <div class="rating-area">
                                        <div class="star-ratings">
                                            <div class="fill-ratings" style="width: 100%">
                                                <span>★★★★★</span>
                                            </div>
                                            <div class="empty-ratings">
                                                <span>★★★★★</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="rating-text">(80+ Clients Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="testimonial-wrapper wow fadeInUp" data-wow-delay=".5s">
                            <div class="swiper testimonial-slider-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <span class="quote-icon"><i class="tji-quote"></i></span>
                                            <div class="desc">
                                                <p>North Build did an amazing job on our landscaping project. The team was
                                                    professional, on time, and paid great attention to detail. Our outdoor
                                                    space now looks clean, modern, and well-maintained. Highly recommended
                                                    for anyone looking for reliable service.</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-inner">
                                                    <div class="author-img">
                                                        <img src="https://themejunction.net/html/bexon/demo/assets/images/testimonial/client-1.webp"
                                                            alt="">
                                                    </div>
                                                    <div class="author-header">
                                                        <h4 class="title">Guy Hawkins</h4>
                                                        <span class="designation">Co. Founder</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <span class="quote-icon"><i class="tji-quote"></i></span>
                                            <div class="desc">
                                                <p>We hired North Build for fencing and concrete work, and the results were
                                                    excellent. Everything was completed on schedule with great quality. The
                                                    team was very cooperative and understood exactly what we needed. Very
                                                    satisfied with their service.</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-inner">
                                                    <div class="author-img">
                                                        <img src="https://themejunction.net/html/bexon/demo/assets/images/testimonial/client-2.webp"
                                                            alt="">
                                                    </div>
                                                    <div class="author-header">
                                                        <h4 class="title">Ralph Edwards</h4>
                                                        <span class="designation">Co. Founder</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <span class="quote-icon"><i class="tji-quote"></i></span>
                                            <div class="desc">
                                                <p>Excellent experience with North Build! They handled our property cleanup
                                                    and maintenance very professionally. The staff was friendly,
                                                    hardworking, and efficient. Our yard has never looked this good before.
                                                </p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-inner">
                                                    <div class="author-img">
                                                        <img src="https://themejunction.net/html/bexon/demo/assets/images/testimonial/client-3.webp"
                                                            alt="">
                                                    </div>
                                                    <div class="author-header">
                                                        <h4 class="title">Devon Lane</h4>
                                                        <span class="designation">Co. Founder</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination-area"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Testimonial Section -->

        <!-- start: Team Section -->
        <section class="tj-team-section-3 section-gap section-gap-x">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-heading text-center">
                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i> Meet Our
                                Team</span>
                            <h2 class="sec-title title-anim">Success <span>Stories</span> Fuel our Innovation.</h2>
                        </div>
                    </div>
                </div>
                <div class="row leftSwipeWrap">
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-item left-swipe">
                            <div class="team-img">
                                <div class="team-img-inner">
                                    <img src="https://themejunction.net/html/bexon/demo/assets/images/team/team-1.webp"
                                        alt="">
                                </div>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                                    class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li><a href="https://x.com/" target="_blank"><i
                                                    class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/" target="_blank"><i
                                                    class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4 class="title"><a href="#">Eade Marren</a></h4>
                                <span class="designation">Chief Executive</span>
                                <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-item left-swipe">
                            <div class="team-img">
                                <div class="team-img-inner">
                                    <img src="https://themejunction.net/html/bexon/demo/assets/images/team/team-2.webp"
                                        alt="">
                                </div>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                                    class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li><a href="https://x.com/" target="_blank"><i
                                                    class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/" target="_blank"><i
                                                    class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4 class="title"><a href="#">Savannah Ngueen</a></h4>
                                <span class="designation">Operations Head</span>
                                <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-item left-swipe">
                            <div class="team-img">
                                <div class="team-img-inner">
                                    <img src="https://themejunction.net/html/bexon/demo/assets/images/team/team-3.webp"
                                        alt="">
                                </div>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                                    class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li><a href="https://x.com/" target="_blank"><i
                                                    class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/" target="_blank"><i
                                                    class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4 class="title"><a href="#">Kristin Watson</a></h4>
                                <span class="designation">Marketing Lead</span>
                                <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-item left-swipe">
                            <div class="team-img">
                                <div class="team-img-inner">
                                    <img src="https://themejunction.net/html/bexon/demo/assets/images/team/team-4.webp"
                                        alt="">
                                </div>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                                    class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li><a href="https://x.com/" target="_blank"><i
                                                    class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/" target="_blank"><i
                                                    class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4 class="title"><a href="#">Darlene Robertson</a></h4>
                                <span class="designation">Business Director</span>
                                <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-shape-1">
                <img src="https://themejunction.net/html/bexon/demo/assets/images/shape/pattern-2.svg" alt="">
            </div>
            <div class="bg-shape-2">
                <img src="https://themejunction.net/html/bexon/demo/assets/images/shape/pattern-3.svg" alt="">
            </div>
        </section>
        <!-- end: Team Section -->

        <!-- start: Faq Section -->
        <section class="tj-faq-section section-gap">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4">
                        <div class="content-wrap">
                            <div class="sec-heading">
                                <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Common
                                    Questions</span>
                                <h2 class="sec-title title-anim">Need <span>Help?</span> Start Here...</h2>
                            </div>
                            <p class="desc wow fadeInUp" data-wow-delay=".6s">We offer complete outdoor construction,
                                landscaping, maintenance, and property improvement services.</p>
                            <div class="wow fadeInUp" data-wow-delay=".8s">
                                <a class="tj-primary-btn" href="{{ route('contact') }}">
                                    <span class="btn-text"><span>Request a Call</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="accordion tj-faq" id="faqOne">
                            <div class="accordion-item active wow fadeInUp" data-wow-delay=".3s">
                                <button class=" faq-title" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1"
                                    aria-expanded="true">What services does North Build provide?</button>
                                <div id="faq-1" class="collapse show" data-bs-parent="#faqOne">
                                    <div class="accordion-body faq-text">
                                        <p>North Build provides a wide range of outdoor services including landscaping,
                                            fencing, concrete work, grading, irrigation installation, sod installation, junk
                                            removal, tree planting, and seasonal cleanup. We also offer snow removal and
                                            maintenance services for year-round property care.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay=".4s">
                                <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-2" aria-expanded="false">Do you provide services for both
                                    residential and commercial properties?</button>
                                <div id="faq-2" class="collapse" data-bs-parent="#faqOne">
                                    <div class="accordion-body faq-text">
                                        <p>Yes, we work with both residential and commercial clients. Whether it’s a small
                                            home project or a large commercial site, our team delivers professional and
                                            high-quality results tailored to your needs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-3" aria-expanded="false">How do I get a quote for my
                                    project?</button>
                                <div id="faq-3" class="collapse" data-bs-parent="#faqOne">
                                    <div class="accordion-body faq-text">
                                        <p>You can contact us through our website or call our team directly. We will review
                                            your requirements and provide a free, customized quote based on your project
                                            size and service type.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay=".6s">
                                <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-4" aria-expanded="false">Do you offer seasonal maintenance
                                    services?</button>
                                <div id="faq-4" class="collapse" data-bs-parent="#faqOne">
                                    <div class="accordion-body faq-text">
                                        <p>Yes, we provide seasonal services such as spring cleanup, fall cleanup, lawn
                                            maintenance, and winter snow removal. Our year-round services ensure your
                                            property stays clean and well-maintained in every season.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-5" aria-expanded="false">Why should I choose North Build?</button>
                                <div id="faq-5" class="collapse" data-bs-parent="#faqOne">
                                    <div class="accordion-body faq-text">
                                        <p>North Build is known for reliable service, skilled workmanship, and attention to
                                            detail. We focus on customer satisfaction, timely project completion, and
                                            delivering long-lasting outdoor solutions you can trust.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Faq Section -->

        <!-- start: Cta Section -->
        <section class="tj-cta-section mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cta-area">
                            <div class="cta-content">
                                <h2 class="title title-anim">Let’s Build Future Together.</h2>
                                <div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
                                    <a class="tj-primary-btn btn-dark" href="{{ route('contact') }}">
                                        <span class="btn-text"><span>Get Started Now</span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div class="cta-img">
                                <img src="https://themejunction.net/html/bexon/demo/assets/images/cta/cta-bg.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Cta Section -->
    </main>
@endsection