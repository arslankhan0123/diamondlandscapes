@extends('layouts.frontend.main')
@section('title', 'Home')

@section('content')
    <style>
        .rts__banner__area {
            position: relative;
            overflow: hidden;
        }

        .rts__banner__area::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            /* Darker overlay for better contrast */
            backdrop-filter: blur(4px);
            /* Professional blur effect */
            z-index: 1;
        }

        .rts__banner__area .container-1520 {
            position: relative;
            z-index: 2;
            /* Ensures text is above the blur/overlay */
        }

        .banner-title {
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
        }

        .banner-content .desc {
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            color: rgba(255, 255, 255, 0.95) !important;
        }

        /* Carousel Button Styles */
        .service-prev,
        .service-next {
            position: absolute;
            top: 40%;
            transform: translateY(-50%);
            z-index: 100;
            transition: all 0.3s ease;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #34A853 !important;
            border: none !important;
            color: white !important;
            width: 45px;
            height: 45px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .service-prev {
            left: -25px;
        }

        .service-next {
            right: -25px;
        }

        .service-prev:hover,
        .service-next:hover {
            background: #2d8e47 !important;
            transform: translateY(-50%) scale(1.1);
        }

        .service-slider {
            overflow: hidden !important;
            position: relative;
            padding: 0 5px;
        }

        @media screen and (max-width: 768px) {
            .service-prev, .service-next {
                width: 35px;
                height: 35px;
            }
            .service-prev { left: 5px; }
            .service-next { right: 5px; }
        }
    </style>
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
    <!-- rts banner area two -->
    <section class="rts__banner__area " data-bg-src="{{ asset('frontend/assets/images/1.jpg') }}"
        style="background-size: cover; background-position: center;">
        <div class="container-1520">
            <div class="rts-banner-wrapper-two">
                <div class="banner-content">
                    <!-- <span class="icon"><img src="https://html.themewant.com/greenaro/assets/images/banner/sun.webp" width="60" alt="sun"></span> -->
                    <h1 class="banner-title rts-text-anime">Premium Landscaping for <br> Homes & Businesses </h1>
                    <p class="desc">Transform your outdoor space with expert landscaping and maintenance solutions. From
                        stunning hardscapes to lush lawn care, we bring your vision to life with precision and care.</p>
                    <a href="{{ route('contact') }}" class="rts-btn btn-primary">Book a Service <i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="banner-reivew">
                    <!-- <div class="banner-play-icon">
                        <a href="https://www.youtube.com/watch?v=4_DW081WUE8" class="banner-icon popup-video"><i class="fa-solid fa-play"></i></a>
                    </div> -->

                    <!-- <div class="banner-client-count">
                        <div class="client-thumb"><img src="https://html.themewant.com/greenaro/assets/images/banner/client-2.webp" width="148" alt="client"></div>
                        <div class="client-count">
                            <h2 class="count-title"><span class="odometer" data-count="25">0</span>k+</h2>
                            <p class="desc">Global Customer</p>
                        </div>
                    </div> -->

                    <!-- <a href="about.html" class="banner-arrow"><img src="https://html.themewant.com/greenaro/assets/images/icon/arrow-right-lg.svg" alt=""></a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- rts banner area end -->

    <!-- rts service area two -->
    <!-- <section class="rts-service-area-two rts-section-gap ">
        <div class="container-1428">
            <div class="section-title text-center">
                <span class="sub-title">Our Services</span>
                <h2 class="heading-title-two rts-text-anime">Comprehensive Outdoor Solutions</h2>
                <p class="desc">We offer a wide range of landscaping and property maintenance services designed to enhance the beauty and value of your property.</p>
            </div>
            <div class="rts-service-wrapper-two">
                <div class="single-service-item">
                    <div class="icon">
                        <i class="fa-solid fa-trowel-bricks" style="font-size: 32px; color: #0D0D0D;"></i>
                    </div>
                    <div class="content">
                        <h3 class="title"><a href="{{ route('services') }}">Hardscape Services</a></h3>
                        <p class="desc">Expert construction of patios, paving stones, retaining walls, and walkways to create durable outdoor living spaces.</p>
                    </div>
                </div>
                <div class="single-service-item">
                    <div class="icon">
                        <i class="fa-solid fa-seedling" style="font-size: 32px; color: #0D0D0D;"></i>
                    </div>
                    <div class="content">
                        <h3 class="title"><a href="{{ route('services') }}">Commercial Property Maintenance</a></h3>
                        <p class="desc">Professional lawn care, seasonal cleanups, snow removal, and ongoing maintenance for commercial properties.</p>
                    </div>
                </div>
                <div class="single-service-item">
                    <div class="icon">
                        <i class="fa-solid fa-droplet" style="font-size: 32px; color: #0D0D0D;"></i>
                    </div>
                    <div class="content">
                        <h3 class="title"><a href="{{ route('services') }}">Irrigation Services</a></h3>
                        <p class="desc">Installation and maintenance of irrigation systems, sprinkler repairs, spring start-ups, and fall blowouts.</p>
                    </div>
                </div>
                <div class="single-service-item">
                    <div class="icon">
                        <i class="fa-solid fa-hammer" style="font-size: 32px; color: #0D0D0D;"></i>
                    </div>
                    <div class="content">
                        <h3 class="title"><a href="{{ route('services') }}">Custom Decks & Wood Work</a></h3>
                        <p class="desc">High-quality deck design and construction, fences, pergolas, and custom outdoor wood features.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- rts service area end -->

    <!-- rts about area two -->
    <!-- <section class="rts__about__area rts-section-gapBottom ">
        <div class="container">
            <div class="rts__about__wrapper">
                <div class="row g-30 align-items-center">
                    <div class="col-lg-4">
                        <div class="about__content style-2">
                            <div class="section-title">
                                <h2 class="heading-title-two rts-text-anime">Transforming Your Landscape with Precision</h2>
                                <p class="desc">Bring beauty and functionality to your property with our expert landscaping services. We combine creative design with professional maintenance to create outdoor spaces you'll love for years.</p>
                            </div>
                            <a href="{{ route('services') }}" class="rts-btn btn-primary">Our Expertise <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about__img style-1">
                            <img src="https://html.themewant.com/greenaro/assets/images/about/1.webp" alt="about">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="rts__about__items">
                            <div class="item">
                                <h3 class="number"><span class="odometer" data-count="500">0</span>+</h3>
                                <p class="desc">Projects Completed</p>
                            </div>
                            <div class="item">
                                <img class="w-100" src="https://html.themewant.com/greenaro/assets/images/about/2.webp" alt="img">
                            </div>
                            <div class="item">
                                <h3 class="number"><span class="odometer" data-count="1200">0</span>+</h3>
                                <p class="desc">Happy clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- rts about area end -->

    <!-- rts map area two -->
    <!-- <section class="rts__map__area area-two rts-section-gap bg-green ">
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title">Our Reach</span>
                <h2 class="heading-title-two rts-text-anime">Service Locations</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="map__main__wrapper">
                        <img src="https://html.themewant.com/greenaro/assets/images/map/map.webp" alt="World map showing solar installation locations">
                        <ul class="round-shape">
                            <li class="one">
                                <i class="fa-light fa-plus" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true"
                                    data-bs-custom-class="map-tooltip-two" title="<span class='tt-name'>Russia</span><br><span class='tt-size'>System Size: 150kW</span>"></i>
                            </li>
                            <li class="two">
                                <i class="fa-light fa-plus" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true"
                                    data-bs-custom-class="map-tooltip-two" title="<span class='tt-name'>USA</span><br><span class='tt-size'>System Size: 170kW</span>"></i>
                            </li>
                            <li class="three">
                                <i class="fa-light fa-plus" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true"
                                    data-bs-custom-class="map-tooltip-two" title="<span class='tt-name'>Brazil</span><br><span class='tt-size'>System Size: 130kW</span>"></i>
                            </li>
                            <li class="four">
                                <i class="fa-light fa-plus" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true"
                                    data-bs-custom-class="map-tooltip-two" title="<span class='tt-name'>Africa</span><br><span class='tt-size'>System Size: 100kW</span>"></i>
                            </li>
                            <li class="five">
                                <i class="fa-light fa-plus" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true"
                                    data-bs-custom-class="map-tooltip-two" title="<span class='tt-name'>Australia</span><br><span class='tt-size'>System Size: 120kW</span>"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- rts map area end -->

    <!-- rts project area two -->
    <section class="rts__project__area area-two rts-section-gap ">
        <div class="container">
            <div class="rts-section-title-area">
                <div class="section-title">
                    <span class="sub-title">Portfolio</span>
                    <h2 class="heading-title-two rts-text-anime">Featured Projects</h2>
                </div>
                <a href="{{ route('services') }}" class="rts-btn btn-primary">View All Work <i
                        class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="project__wrapper__two">
                <div class="row g-30 justify-content-lg-center">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="project__single__item wow fadeInUp" data-wow-delay=".2s">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('frontend/assets/images/1.jpg') }}"
                                        style="width: 100%; max-height: 300px; object-fit: cover;" alt="img"></a>
                            </div>
                            <div class="content">
                                <h3 class="title"><a href="#">Luxury Patio & Hardscape</a></h3>
                                <p class="desc">Residential Project 2026</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="project__single__item wow fadeInUp" data-wow-delay=".4s">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('frontend/assets/images/2.jpg') }}"
                                        style="width: 100%; max-height: 400px; object-fit: cover;" alt="img"></a>
                            </div>
                            <div class="content">
                                <h3 class="title"><a href="#">Commercial Grounds Upkeep</a></h3>
                                <p class="desc">Corporate HQ 2026</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="project__single__item wow fadeInUp" data-wow-delay=".6s">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('frontend/assets/images/3.jpg') }}"
                                        style="width: 100%; max-height: 300px; object-fit: cover;" alt="img"></a>
                            </div>
                            <div class="content">
                                <h3 class="title"><a href="#">Custom Deck & Pergola</a></h3>
                                <p class="desc">Backyard Oasis 2026</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- rts project area end -->

    <section class="rts__blog__area rts-section-gap " style="background-color: #001a19;">
        <div class="container-1428">
            <div class="section-title text-center">
                <span class="sub-title" style="color: white;">Our Services</span>
                <h2 class="heading-title-two rts-text-anime" style="color: white;">Comprehensive Outdoor Solutions</h2>
                <p>We offer a wide range of landscaping and property maintenance services designed to enhance the beauty and
                    value of your property.</p>
            </div>
            <div class="blog__items__wrapper" style="position: relative;">
                <div class="swiper service-slider">
                    <div class="swiper-wrapper">
                        @foreach ($services as $service)
                            <div class="swiper-slide">
                                <div class="single-blog-item wow fadeInUp" data-wow-delay=".2s">
                                    <div class="thumb">
                                        <a href="{{ route('services.details', $service->id) }}"><img
                                                src="{{ asset($service->feature_image) }}"
                                                style="width: 100%; height: 250px; object-fit: cover; border-radius: 12px;"
                                                alt="blog"></a>
                                    </div>
                                    <div class="content">
                                        <h3 class="title" style="color: white;"><a
                                                href="{{ route('services.details', $service->id) }}">{{ $service->name }}</a>
                                        </h3>
                                        <p class="desc" style="font-size: 14px; color: #666; line-height: 1.5;">
                                            {{ Str::limit($service->short_description, 60) }}</p>
                                        <div class="info">
                                            <span class="date"
                                                style="color: white;">{{ $service->created_at->format('M j, Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @if(count($services) > 0 && count($services) < 8)
                            @foreach ($services as $service)
                                <div class="swiper-slide">
                                    <div class="single-blog-item wow fadeInUp" data-wow-delay=".2s">
                                        <div class="thumb">
                                            <a href="{{ route('services.details', $service->id) }}"><img
                                                    src="{{ asset($service->feature_image) }}"
                                                    style="width: 100%; height: 250px; object-fit: cover; border-radius: 12px;"
                                                    alt="blog"></a>
                                        </div>
                                        <div class="content">
                                            <h3 class="title" style="color: white;"><a
                                                    href="{{ route('services.details', $service->id) }}">{{ $service->name }}</a>
                                            </h3>
                                            <p class="desc" style="font-size: 14px; color: #666; line-height: 1.5;">
                                                {{ Str::limit($service->short_description, 60) }}</p>
                                            <div class="info">
                                                <span class="date"
                                                    style="color: white;">{{ $service->created_at->format('M j, Y') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- Navigation Buttons Moved Outside Swiper -->
                <button class="rts-btn-prev service-prev">
                    <i class="fa-light fa-chevron-left"></i>
                </button>
                <button class="rts-btn-next service-next">
                    <i class="fa-light fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <script>
        window.addEventListener('load', function () {
            if (typeof Swiper !== 'undefined') {
                new Swiper(".service-slider", {
                    slidesPerView: 4,
                    spaceBetween: 25,
                    loop: true,
                    centeredSlides: false,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: ".service-next",
                        prevEl: ".service-prev",
                    },
                    pagination: {
                        el: ".swiper-pagination-area",
                        clickable: true,
                    },
                    breakpoints: {
                        0: { slidesPerView: 1 },
                        576: { slidesPerView: 2 },
                        992: { slidesPerView: 3 },
                        1200: { slidesPerView: 4 }
                    }
                });
            }
        });
    </script>

    <!-- rts choose area two -->
    <section class="rts__choose__area area-two rts-section-gap2 ">
        <div class="container-1428">
            <div class="section-title text-center">
                <span class="sub-title">Why Choose Us</span>
                <h2 class="heading-title-two rts-text-anime">The Diamond Landscapes Edge</h2>
                <p class="desc">We combine creative artistry, technical skill, and reliable <br> maintenance to deliver
                    landscapes that exceed expectations.</p>
            </div>
            <div class="choose-items-wrapper-two">
                <div class="row gy-5 gy-lg-0">
                    <div class="col-xl-4 col-lg-6">
                        <div class="choose__item__wrapper">
                            <!-- <div class="choose__single__items wow fadeInUp" data-wow-delay=".2s">
                                <div class="icon">
                                    <i class="fa-solid fa-star" style="font-size: 20px; color: #34A853;"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">Expert Craftsmanship</h3>
                                    <p class="desc">Detail-oriented work from patios to pergolas.</p>
                                </div>
                            </div> -->
                            <div class="choose__single__items wow fadeInUp" data-wow-delay=".4s">
                                <div class="icon">
                                    <i class="fa-solid fa-calendar-check" style="font-size: 20px; color: #34A853;"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">Reliable Maintenance</h3>
                                    <p class="desc style-2">Scheduled care for your property year-round.</p>
                                </div>
                            </div>
                            <div class="choose__single__items wow fadeInUp" data-wow-delay=".6s">
                                <div class="icon">
                                    <i class="fa-solid fa-headset" style="font-size: 20px; color: #34A853;"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">Dedicated Support</h3>
                                    <p class="desc">Always available for your landscape needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6">
                        <div class="choose-images wow fadeInUp" data-wow-delay=".2s">
                            <img src="{{ asset('frontend/assets/images/1.jpg') }}"
                                style="width: 100%; max-height: 500px; object-fit: cover;" alt="img">
                            <!-- <ul class="round-shape">
                                <li class="one">
                                    <i class="fa-light fa-plus" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-custom-class="tooltipx" title="1 MWh = 1,000 kWh"></i>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- rts choose area end -->

    <!-- rts team area two -->
    <!-- <section class="rts__team__area area-one rts-section-gap ">
        <div class="container">
            <div class="section__title__area">
                <div class="section-title">
                    <span class="sub-title">Team Members</span>
                    <h2 class="heading-title-two rts-text-anime">Leadership & Expertise You Can Trust</h2>
                </div>
                <a href="#" class="rts-btn btn-primary">Explore Profiles <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="team__items__wrapper">
                <div class="row g-30">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team__items_card wow fadeInUp" data-wow-delay=".2s">
                            <div class="team_thumb_social">
                                <div class="team_thumb">
                                    <a href="#"><img src="https://html.themewant.com/greenaro/assets/images/team/1.webp"
                                            alt="team"></a>
                                </div>
                                <ul class="team_social_icon">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="team_content">
                                <h3 class="title"><a href="#">Arslan Khan</a></h3>
                                <p class="designation">Founder & Lead Landscape</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team__items_card wow fadeInUp" data-wow-delay=".4s">
                            <div class="team_thumb_social">
                                <div class="team_thumb">
                                    <a href="#"><img src="https://html.themewant.com/greenaro/assets/images/team/2.webp"
                                            alt="team"></a>
                                </div>
                                <ul class="team_social_icon">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="team_content">
                                <h3 class="title"><a href="#">David Miller</a></h3>
                                <p class="designation">Hardscape Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team__items_card wow fadeInUp" data-wow-delay=".6s">
                            <div class="team_thumb_social">
                                <div class="team_thumb">
                                    <a href="#"><img src="https://html.themewant.com/greenaro/assets/images/team/3.webp"
                                            alt="team"></a>
                                </div>
                                <ul class="team_social_icon">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="team_content">
                                <h3 class="title"><a href="#">Alex Johnson</a></h3>
                                <p class="designation">Irrigation Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team__items_card wow fadeInUp" data-wow-delay=".8s">
                            <div class="team_thumb_social">
                                <div class="team_thumb">
                                    <a href="#"><img src="https://html.themewant.com/greenaro/assets/images/team/4.webp"
                                            alt="team"></a>
                                </div>
                                <ul class="team_social_icon">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="team_content">
                                <h3 class="title"><a href="#">Wade Warren</a></h3>
                                <p class="designation">Project Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- rts team area end -->

    <!-- rts testimonial area two -->
    <!-- <section class="rts__testimonial__area-two rts-section-gap ">
        <div class="container-1428">
            <div class="section-title-area">
                <div class="section-title">
                    <span class="sub-title">Testimonials</span>
                    <h3 class="heading-title-two rts-text-anime mb-0">What Our Customers <br> Say About Us</h3>
                </div>
                <div class="testi-review">
                    <img src="https://html.themewant.com/greenaro/assets/images/testimonial/client.webp" width="208" alt="client">
                    <p>More then 12k Clients Reviews</p>
                </div>
            </div>
            <div class="rts__testimonials__wrapper__two">
                <div class="row gy-5 gy-lg-0 align-items-center">
                    <div class="col-lg-4">
                        <div class="testi-thumb">
                            <img src="https://html.themewant.com/greenaro/assets/images/testimonial/1.webp" alt="testiuser">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="test-slide-content">
                            <div class="swiper testi__sliders-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testi-content">
                                            <div class="star-rating">
                                                <ul class="stars">
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <span class="rating-val">4.8</span>
                                            </div>
                                            <p class="desc">"The transformation of my backyard was incredible. Diamond Landscapes took my rough idea for a patio and deck and turned it into a stunning reality. Their maintenance team is also fantastic!"</p>
                                            <div class="author">
                                                <h3 class="name">Sarah Mitchell</h3>
                                                <span class="role">Residential Client</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-content">
                                            <div class="star-rating">
                                                <ul class="stars">
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <span class="rating-val">4.9</span>
                                            </div>
                                            <p class="desc">"Reliable, professional, and creative. Their irrigation system setup saved my lawn during the peak of summer. Highly recommend for any property maintenance needs."</p>
                                            <div class="author">
                                                <h3 class="name">Michael Brown</h3>
                                                <span class="role">Estate Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-content">
                                            <div class="star-rating">
                                                <ul class="stars">
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <span class="rating-val">4.8</span>
                                            </div>
                                            <p class="desc">"Excellent craftsmanship on our new fence and pergola. The wood work is solid and looks beautiful. Arslan and his team are true professionals."</p>
                                            <div class="author">
                                                <h3 class="name">Emma Davis</h3>
                                                <span class="role">Homeowner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tesi-nav-area">
                    <div class="tesi-btn rts-btn-prev">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                    <div class="tesi-btn rts-btn-next">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- rts testimonial area end -->

    <!-- rts blog area tow -->
    <!-- <section class="rts__blog__area rts-section-gap " style="background-color: #001a19;">
        <div class="container-1428">
            <div class="section-title text-center">
                <span class="sub-title" style="color: white;">Expert Advice</span>
                <h2 class="heading-title-two rts-text-anime" style="color: white;">Landscaping Insights & Maintenance Tips</h2>
            </div>
            <div class="blog__items__wrapper">
                <div class="row g-30">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-item wow fadeInUp" data-wow-delay=".2s">
                            <div class="thumb">
                                <a href="#"><img src="https://html.themewant.com/greenaro/assets/images/blog/1.webp" alt="blog"></a>
                            </div>
                            <div class="content">
                                <div class="top">
                                    <a href="#" class="link-btn">Learn</a>
                                    <p class="read" style="color: white;">5-minute read</p>
                                </div>
                                <h3 class="title" style="color: white;"><a href="#">How to Maintain a Lush Green Lawn All Year</a></h3>
                                <div class="info">
                                    <h4 class="name" style="color: white;">Arslan Khan</h4>
                                    <span class="date" style="color: white;">October 1, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-item wow fadeInUp" data-wow-delay=".4s">
                            <div class="thumb">
                                <a href="#"><img src="https://html.themewant.com/greenaro/assets/images/blog/2.webp" alt="blog"></a>
                            </div>
                            <div class="content">
                                <div class="top">
                                    <a href="#" class="link-btn">Learn</a>
                                    <p class="read" style="color: white;">5-minute read</p>
                                </div>
                                <h3 class="title" style="color: white;"><a href="#">The Benefits of Professional Hardscaping</a></h3>
                                <div class="info">
                                    <h4 class="name" style="color: white;">David Miller</h4>
                                    <span class="date" style="color: white;">October 1, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-item wow fadeInUp" data-wow-delay=".6s">
                            <div class="thumb">
                                <a href="#"><img src="https://html.themewant.com/greenaro/assets/images/blog/3.webp" alt="blog"></a>
                            </div>
                            <div class="content">
                                <div class="top">
                                    <a href="#" class="link-btn">Learn</a>
                                    <p class="read" style="color: white;">5-minute read</p>
                                </div>
                                <h3 class="title" style="color: white;"><a href="#">Top Irrigation Tips for a Healthy Garden</a></h3>
                                <div class="info">
                                    <h4 class="name" style="color: white;">Alex Johnson</h4>
                                    <span class="date" style="color: white;">October 1, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- rts blog area end -->
@endsection