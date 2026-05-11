@extends('layouts.frontend.main')
@section('title', 'Home')

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
    <main id="primary" class="site-main">
        <div class="top-space-15"></div>
        <!-- start: Banner Slider -->
        <section class="tj-slider-section">
            <div class="swiper hero-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide tj-slider-item">
                        <div class="slider-bg-image"
                            data-bg-image="{{asset('1.jpg')}}">
                        </div>
                        <div class="container">
                            <div class="slider-wrapper">
                                <div class="slider-content">
                                    <h1 class="slider-title">Reliable Outdoor Services <span>You Can Trust.</span></h1>
                                    <div class="slider-desc">We provide professional landscaping, construction, and
                                        maintenance services to keep your property clean, safe, and visually appealing all
                                        year round.</div>
                                    <div class="slider-btn">
                                        <a class="tj-primary-btn" href="{{route('contact')}}">
                                            <span class="btn-text"><span>Get Started</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tj-slider-item">
                        <div class="slider-bg-image"
                            data-bg-image="{{asset('4.jpg')}}">
                        </div>
                        <div class="container">
                            <div class="slider-wrapper">
                                <div class="slider-content">
                                    <h1 class="slider-title">Complete Property <span>Care Solutions.</span></h1>
                                    <div class="slider-desc">From fencing and concrete work to snow removal and cleanup, we
                                        handle all your outdoor needs with quality and precision.</div>
                                    <div class="slider-btn">
                                        <a class="tj-primary-btn" href="{{route('contact')}}">
                                            <span class="btn-text"><span>Get Started</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tj-slider-item">
                        <div class="slider-bg-image"
                            data-bg-image="{{asset('7.jpg')}}">
                        </div>
                        <div class="container">
                            <div class="slider-wrapper">
                                <div class="slider-content">
                                    <h1 class="slider-title">Building Better Outdoor <span>Spaces.</span></h1>
                                    <div class="slider-desc">Our expert team delivers durable, efficient, and customized
                                        solutions to enhance the beauty and value of your property.</div>
                                    <div class="slider-btn">
                                        <a class="tj-primary-btn" href="{{route('contact')}}">
                                            <span class="btn-text"><span>Get Started</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-navigation d-inline-flex wow fadeIn" data-wow-delay="1.5s">
                    <div class="slider-prev">
                        <span class="anim-icon">
                            <i class="tji-arrow-left"></i>
                            <i class="tji-arrow-left"></i>
                        </span>
                    </div>
                    <div class="slider-next">
                        <span class="anim-icon">
                            <i class="tji-arrow-right"></i>
                            <i class="tji-arrow-right"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="swiper hero-thumb wow fadeIn" data-wow-delay="2s">
                <div class="swiper-wrapper">
                    <div class="swiper-slide thumb-item">
                        <img src="{{asset('1.jpg')}}"
                            alt="Thumbnail">
                    </div>
                    <div class="swiper-slide thumb-item">
                        <img src="{{asset('4.jpg')}}"
                            alt="Thumbnail">
                    </div>
                    <div class="swiper-slide thumb-item">
                        <img src="{{asset('7.jpg')}}"
                            alt="Thumbnail">
                    </div>
                </div>
            </div>
            <div class="circle-text-wrap wow fadeInUp" data-wow-delay="1s">
                <span class="circle-text" data-bg-image="{{asset('frontend/assets/images/hero/circle-text.webp')}}"></span>
                <a class="circle-icon" href="{{ route('services') }}"><i class="tji-arrow-down-big"></i></a>
            </div>
        </section>
        <!-- end: Banner Slider -->

        <!-- start: Client Section -->
        <section class="tj-client-section section-top-gap">
            <div class="container-fluid client-container">
                <div class="row">
                    <div class="col-12">
                        <div class="client-content style-2 wow fadeIn" data-wow-delay=".3s">
                            <h5 class="sec-title">Join Over <span class="client-numbers">1000+</span> Companies with
                                <span class="client-text">True North Build</span> Here
                            </h5>
                        </div>
                        <div class="swiper client-slider client-slider-1 wow fadeIn" data-wow-delay=".5s">
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

        <!-- start: About Section -->
        <section class="tj-about-section section-gap">
            <div class="container">
                <div class="row row-gap-4">
                    <div class="col-lg-4 col-md-6 order-lg-1 order-3">
                        <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".1s">
                            <span class="count-icon"><i class="tji-complete"></i></span>
                            <span class="steps">01.</span>
                            <div class="count-inner">
                                <span class="count-text">Projects Completed.</span>
                                <div class="inline-content">
                                    <span class="odometer countup-number" data-count="93"></span>
                                    <span class="count-plus">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12 order-lg-2 order-1">
                        <div class="about-content-area-2 wow fadeInUp" data-wow-delay=".3s">
                            <div class="about-content">
                                <div class="sec-heading style-2">
                                    <span class="sub-title">Get to Know Us</span>
                                    <h2 class="sec-title title-highlight">Driving Innovation and Excellence for Sustainable
                                        Corporate Success <span>Worldwide.</span></h2>
                                </div>
                                <div class="wow fadeInUp" data-wow-delay=".3s">
                                    <a class="text-btn" href="{{ route('about') }}">
                                        <span class="btn-text"><span>Learn More</span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div class="video-img wow fadeInRight" data-wow-delay=".7s">
                                <img src="{{asset('6.jpg')}}"
                                    alt="Image">
                                <!-- <a class="video-btn video-popup" data-autoplay="true" data-vbtype="video"
                                    data-maxwidth="1200px"
                                    href="https://www.youtube.com/watch?v=MLpWrANjFbI&amp;ab_channel=eidelchteinadvogados">
                                    <span><i class="tji-play"></i></span>
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 order-lg-3 order-2">
                        <div class="customers-box style-2 wow fadeInUp" data-wow-delay=".3s">
                            <div class="customers-bg"
                                data-bg-image="{{asset('6.jpg')}}">
                            </div>
                            <div class="customers">
                                <ul>
                                    <li class="wow fadeInLeft" data-wow-delay=".3s"><img
                                            src="https://themejunction.net/html/bexon/demo/assets/images/testimonial/client-1.webp"
                                            alt=""></li>
                                    <li class="wow fadeInLeft" data-wow-delay=".4s"><img
                                            src="https://themejunction.net/html/bexon/demo/assets/images/testimonial/client-2.webp"
                                            alt=""></li>
                                    <li class="wow fadeInLeft" data-wow-delay=".5s"><img
                                            src="https://themejunction.net/html/bexon/demo/assets/images/testimonial/client-3.webp"
                                            alt=""></li>
                                    <li class="wow fadeInLeft" data-wow-delay=".6s"><span><i class="tji-plus"></i></span>
                                    </li>
                                </ul>
                            </div>
                            <h6 class="customers-text wow fadeInLeft" data-wow-delay=".6s">We have 100+ happy customer.</h6>
                            <div class="star-icon zoomInOut"><img
                                    src="https://themejunction.net/html/bexon/demo/assets/images/shape/star.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 order-lg-4 order-4">
                        <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".5s">
                            <span class="count-icon"><i class="tji-worldwide"></i></span>
                            <span class="steps">02.</span>
                            <div class="count-inner">
                                <span class="count-text">Reach Worldwide</span>
                                <div class="inline-content">
                                    <span class="odometer countup-number" data-count="20"></span>
                                    <span class="count-plus">M</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 order-lg-5 order-5">
                        <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".7s">
                            <span class="count-icon"><i class="tji-growth"></i></span>
                            <span class="steps">03.</span>
                            <div class="count-inner">
                                <span class="count-text">Faster Growth</span>
                                <div class="inline-content">
                                    <span class="odometer countup-number" data-count="8.5"></span>
                                    <span class="count-plus">X</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: About Section -->

        <!-- start: Service Section -->
        <section class="tj-service-section service-2 section-gap section-gap-x slidebar-stickiy-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="content-wrap  slidebar-stickiy">
                            <div class="sec-heading style-2">
                                <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Our Solutions</span>
                                <h2 class="sec-title text-white text-anim">Tailored Business Solutions for our
                                    <span>Corporates.</span>
                                </h2>
                            </div>
                            <div class="wow fadeInUp" data-wow-delay=".6s">
                                <a class="tj-primary-btn" href="{{ route('services') }}">
                                    <span class="btn-text"><span>More Services</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="service-wrapper-2">
                            @foreach($services as $index => $service)
                                <div class="service-item-wrapper tj-fadein-right-on-scroll">
                                    <div class="service-item style-2 ">
                                        <div class="title-area">
                                            <div class="service-icon">
                                                <i class="tji-service-{{ ($index % 4) + 1 }}"></i>
                                            </div>
                                            <h4 class="title"><a
                                                    href="{{ route('services.details', $service->id) }}">{{ $service->name }}</a>
                                            </h4>
                                        </div>
                                        <div class="service-content">
                                            <p class="desc">{{ $service->short_description }}</p>
                                            <!-- <ul class="list-items">{{ $service->short_description }}</ul> -->
                                            <!-- @if($service->highlights->count() > 0)
                                                                                            <ul class="list-items">
                                                                                                @foreach($service->highlights as $highlight)
                                                                                                <li><i class="tji-list"></i>{{ $highlight->highlight }}</li>
                                                                                                @endforeach
                                                                                            </ul>
                                                                                            @endif -->
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
            <div class="bg-shape-3">
                <img src="https://themejunction.net/html/bexon/demo/assets/images/shape/shape-blur.svg" alt="">
            </div>
        </section>
        <!-- end: Service Section -->

        <!-- start: Project Section -->
        <!-- <section class="tj-project-section-2 section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="sec-heading style-2 text-center">
                                <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Proud Projects</span>
                                <h2 class="sec-title text-anim">Breaking Boundaries, Building <span>Dreams.</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="project-wrapper wow fadeInUp" data-wow-delay=".5s">
                                <div class="swiper project-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="project-item">
                                                <div class="project-img"
                                                    data-bg-image="https://themejunction.net/html/bexon/demo/assets/images/project/project-1.webp">
                                                </div>
                                                <div class="project-content">
                                                    <span class="categories"><a
                                                            href="portfolio-details.html">Business</a></span>
                                                    <div class="project-text">
                                                        <h3 class="title"><a href="portfolio-details.html">Event Management
                                                                Platform</a></h3>
                                                        <a class="project-btn" href="portfolio-details.html">
                                                            <i class="tji-arrow-right-big"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item">
                                                <div class="project-img"
                                                    data-bg-image="https://themejunction.net/html/bexon/demo/assets/images/project/project-4.webp">
                                                </div>
                                                <div class="project-content">
                                                    <span class="categories"><a
                                                            href="portfolio-details.html">Business</a></span>
                                                    <div class="project-text">
                                                        <h3 class="title"><a href="portfolio-details.html">Environmental Impact
                                                                Dashboard</a></h3>
                                                        <a class="project-btn" href="portfolio-details.html">
                                                            <i class="tji-arrow-right-big"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item">
                                                <div class="project-img"
                                                    data-bg-image="https://themejunction.net/html/bexon/demo/assets/images/project/project-5.webp">
                                                </div>
                                                <div class="project-content">
                                                    <span class="categories"><a
                                                            href="portfolio-details.html">Business</a></span>
                                                    <div class="project-text">
                                                        <h3 class="title"><a href="portfolio-details.html">Event Management
                                                                Platform</a></h3>
                                                        <a class="project-btn" href="portfolio-details.html">
                                                            <i class="tji-arrow-right-big"></i>
                                                        </a>
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
            </section> -->
        <!-- end: Project Section -->

        <!-- start: Working process Section -->
        <div class="tj-working-process section-gap section-gap-x">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-heading-wrap">
                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Our Process</span>
                            <div class="heading-wrap-content">
                                <div class="sec-heading style-2">
                                    <h2 class="sec-title text-anim">Seamless Process, Great <span>Results.</span></h2>
                                </div>
                                <p class="desc wow fadeInUp" data-wow-delay=".5s">Developing personalized customer journeys
                                    to
                                    increase
                                    satisfaction and loyalty.</p>
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
                <div class="row">
                    <div class="col-12">
                        <div class="working-process-area">
                            <div class="process-item wow fadeInLeft" data-wow-delay=".5s">
                                <div class="process-step">
                                    <span>01</span>
                                </div>
                                <div class="process-content">
                                    <h4 class="title">Consultation & Planning</h4>
                                    <p class="desc">We start by understanding your requirements, property needs, and project
                                        goals. Our team discusses the best solutions and creates a clear plan tailored to
                                        your needs.</p>
                                </div>
                            </div>
                            <div class="process-item wow fadeInLeft" data-wow-delay=".7s">
                                <div class="process-step">
                                    <span>02</span>
                                </div>
                                <div class="process-content">
                                    <h4 class="title">Execution & Implementation</h4>
                                    <p class="desc">Our skilled team begins the work using professional tools and proven
                                        techniques. We ensure every step is completed with precision, quality, and attention
                                        to detail.</p>
                                </div>
                            </div>
                            <div class="process-item wow fadeInLeft" data-wow-delay=".9s">
                                <div class="process-step">
                                    <span>03</span>
                                </div>
                                <div class="process-content">
                                    <h4 class="title">Final Review & Completion</h4>
                                    <p class="desc">After completing the project, we conduct a final inspection to ensure
                                        everything meets our quality standards. We make sure you are fully satisfied before
                                        final delivery.</p>
                                </div>
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
        </div>
        <!-- end: Working process Section -->

        <!-- start: Testimonial Section -->
        <section class="tj-testimonial-section-2 section-gap">
            <div class="container">
                <div class="row row-gap-3">
                    <div class="col-lg-6 d-flex">
                        <div class="testimonial-img-area wow fadeInUp h-100 w-100" data-wow-delay=".3s">
                            <div class="testimonial-img h-100">
                                <img data-speed=".8"
                                    src="{{asset('9.jpg')}}"
                                    alt="">
                                <div class="sec-heading style-2">
                                    <h2 class="sec-title text-anim">Hear from Our <span>Customer.</span></h2>
                                </div>
                            </div>
                            <div class="box-area">
                                <div class="rating-box wow fadeInUp" data-wow-delay=".3s">
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
                    <div class="col-lg-6 d-flex">
                        <div class="testimonial-wrapper wow fadeInUp h-100 w-100" data-wow-delay=".5s">
                            <div class="swiper testimonial-slider-2 h-100">
                                <div class="swiper-wrapper h-100">
                                    <div class="swiper-slide h-100">
                                        <div class="testimonial-item h-100">
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
                                    <div class="swiper-slide h-100">
                                        <div class="testimonial-item h-100">
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
                                    <div class="swiper-slide h-100">
                                        <div class="testimonial-item h-100">
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
        <section class="tj-team-section section-separator">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-heading text-center style-2">
                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Meet Our Team</span>
                            <h2 class="sec-title text-anim">People Behind <span>North Build.</span></h2>
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
                                <h4 class="title"><a href="team-details.html">Eade Marren</a></h4>
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
                                <h4 class="title"><a href="team-details.html">Savannah Ngueen</a></h4>
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
                                <h4 class="title"><a href="team-details.html">Kristin Watson</a></h4>
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
                                <h4 class="title"><a href="team-details.html">Darlene Robertson</a></h4>
                                <span class="designation">Business Director</span>
                                <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Team Section -->

        <!-- start: Pricing Section -->
        <!-- <section class="tj-pricing-section section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="sec-heading text-center style-2">
                                <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Pricing plan</span>
                                <h2 class="sec-title text-anim">Our Pricing <span>Plan.</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row row-gap-4">
                        <div class="col-xl-4 col-md-6">
                            <div class="pricing-box wow fadeInUp" data-wow-delay=".5s">
                                <div class="pricing-header">
                                    <h4 class="package-name">Basic Plan</h4>
                                    <div class="package-desc">
                                        <p>Essential Business Services</p>
                                    </div>
                                    <div class="package-price">
                                        <span class="package-currency">$</span>
                                        <span class="price-number">99</span>
                                        <span class="package-period">/per month</span>
                                    </div>
                                    <div class="pricing-btn">
                                        <a class="text-btn" href="{{ route('contact') }}">
                                            <span class="btn-text"><span>Chose Plan</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <ul>
                                        <li><i class="tji-list"></i>Access to core services</li>
                                        <li><i class="tji-list"></i>Limited customer support (email)</li>
                                        <li><i class="tji-list"></i>1 project per month</li>
                                        <li><i class="tji-list"></i>Basic reporting and analytics</li>
                                        <li><i class="tji-list"></i>Standard templates and tools</li>
                                        <li><i class="tji-list"></i>Basic performance tracking</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="pricing-box active wow fadeInUp" data-wow-delay=".7s">
                                <div class="pricing-header">
                                    <h4 class="package-name">Standard Plan</h4>
                                    <div class="package-desc">
                                        <p>Complete Business Solutions</p>
                                    </div>
                                    <div class="package-price">
                                        <span class="package-currency">$</span>
                                        <span class="price-number">249</span>
                                        <span class="package-period">/per month</span>
                                    </div>
                                    <div class="pricing-btn">
                                        <a class="text-btn" href="{{ route('contact') }}">
                                            <span class="btn-text"><span>Chose Plan</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <ul>
                                        <li><i class="tji-list"></i>All features in Basic Plan</li>
                                        <li><i class="tji-list"></i>Priority customer support</li>
                                        <li><i class="tji-list"></i>Up to 3 projects per month</li>
                                        <li><i class="tji-list"></i>Monthly performance reviews</li>
                                        <li><i class="tji-list"></i>Collaboration tools for team</li>
                                        <li><i class="tji-list"></i>Custom templates</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="pricing-box wow fadeInUp" data-wow-delay=".9s">
                                <div class="pricing-header">
                                    <h4 class="package-name">Premium Plan</h4>
                                    <div class="package-desc">
                                        <p>Advanced Business Services</p>
                                    </div>
                                    <div class="package-price">
                                        <span class="package-currency">$</span>
                                        <span class="price-number">499</span>
                                        <span class="package-period">/per month</span>
                                    </div>
                                    <div class="pricing-btn">
                                        <a class="text-btn" href="{{ route('contact') }}">
                                            <span class="btn-text"><span>Chose Plan</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <ul>
                                        <li><i class="tji-list"></i>All features in Standard Plan</li>
                                        <li><i class="tji-list"></i>Dedicated account manager</li>
                                        <li><i class="tji-list"></i>Tailored strategy sessions</li>
                                        <li><i class="tji-list"></i>Quarterly performance audits</li>
                                        <li><i class="tji-list"></i>Priority support</li>
                                        <li><i class="tji-list"></i>24/7 emergency service</li>
                                    </ul>
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
            </section> -->
        <!-- end: Pricing Section -->


        <!-- start: Blog Section -->
        <!-- <section class="tj-blog-section-2 section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="sec-heading-wrap">
                                <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Read Blogs</span>
                                <div class="heading-wrap-content">
                                    <div class="sec-heading style-2">
                                        <h2 class="sec-title text-anim">Strategies and <span>Insights.</span></h2>
                                    </div>
                                    <div class="wow fadeInUp" data-wow-delay=".5s">
                                        <p class="desc">Developing personalized customer journeys to increase satisfaction and
                                            loyalty.
                                        </p>
                                    </div>
                                    <div class="slider-navigation d-none d-md-inline-flex wow fadeInUp" data-wow-delay=".7s">
                                        <div class="slider-prev">
                                            <span class="anim-icon">
                                                <i class="tji-arrow-left"></i>
                                                <i class="tji-arrow-left"></i>
                                            </span>
                                        </div>
                                        <div class="slider-next">
                                            <span class="anim-icon">
                                                <i class="tji-arrow-right"></i>
                                                <i class="tji-arrow-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-wrapper wow fadeIn" data-wow-delay=".5s">
                                <div class="swiper blog-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="blog-item style-2">
                                                <div class="blog-thumb">
                                                    <a href="blog-details.html"><img
                                                            src="https://themejunction.net/html/bexon/demo/assets/images/blog/blog-4.webp"
                                                            alt=""></a>
                                                    <div class="blog-date">
                                                        <span class="date">28</span>
                                                        <span class="month">Feb</span>
                                                    </div>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="title-area">
                                                        <div class="blog-meta">
                                                            <span class="categories"><a
                                                                    href="blog-details.html">Business</a></span>
                                                            <span>By <a href="blog-details.html">Ellinien Loma</a></span>
                                                        </div>
                                                        <h4 class="title"><a href="blog-details.html">Harnessing Digital
                                                                Transform a Roadmap
                                                                Businesses.</a></h4>
                                                    </div>
                                                    <a class="text-btn" href="blog-details.html">
                                                        <span class="btn-text"><span>Read More</span></span>
                                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="blog-item style-2">
                                                <div class="blog-thumb">
                                                    <a href="blog-details.html"><img
                                                            src="https://themejunction.net/html/bexon/demo/assets/images/blog/blog-5.webp"
                                                            alt=""></a>
                                                    <div class="blog-date">
                                                        <span class="date">28</span>
                                                        <span class="month">Feb</span>
                                                    </div>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="title-area">
                                                        <div class="blog-meta">
                                                            <span class="categories"><a
                                                                    href="blog-details.html">Business</a></span>
                                                            <span>By <a href="blog-details.html">Ellinien Loma</a></span>
                                                        </div>
                                                        <h4 class="title"><a href="blog-details.html">Mastering Change
                                                                Management Lessons for
                                                                Businesses.</a></h4>
                                                    </div>
                                                    <a class="text-btn" href="blog-details.html">
                                                        <span class="btn-text"><span>Read More</span></span>
                                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                    </a>
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
            </section> -->
        <!-- end: Blog Section -->
    </main>
@endsection