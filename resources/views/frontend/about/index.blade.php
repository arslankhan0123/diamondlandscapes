@extends('layouts.frontend.main')
@section('title', 'About Us')

@section('content')
<style>
    /* FAQ Section - Premium Professional Redesign */
    .rts__faq__area {
        background-color: #ffffff;
        padding: 40px 0;
    }
    .faq__accordion__wrapper .accordion-item {
        border: 1px solid rgba(0, 37, 36, 0.08) !important;
        margin-bottom: 8px;
        border-radius: 6px !important;
        background: #ffffff !important;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        overflow: hidden;
    }
    .faq__accordion__wrapper .accordion-item:hover {
        border-color: #34A853 !important;
        box-shadow: 0 4px 12px rgba(0, 37, 36, 0.03);
    }
    .faq__accordion__wrapper .accordion-button {
        padding: 12px 15px !important;
        font-size: 16px !important;
        font-weight: 600 !important;
        color: #002524 !important;
        background: transparent !important;
        border: none !important;
        box-shadow: none !important;
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
    }
    .faq__accordion__wrapper .accordion-button:not(.collapsed) {
        color: #34A853 !important;
        padding-bottom: 5px !important;
    }
    .faq__accordion__wrapper .accordion-button .text {
        display: flex !important;
        align-items: center !important;
        gap: 0 !important;
    }
    .faq__accordion__wrapper .accordion-button .number {
        font-size: 12px !important;
        color: #666 !important;
        margin-right: 12px !important;
        font-weight: 700 !important;
        width: 28px !important;
        height: 28px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        border-radius: 4px !important;
        background: #f4f6f4 !important;
        transition: all 0.3s ease !important;
    }
    .faq__accordion__wrapper .accordion-button:not(.collapsed) .number {
        background: #34A853 !important;
        color: #ffffff !important;
    }
    .faq__accordion__wrapper .accordion-button .title {
        color: inherit !important;
        font-size: inherit !important;
        line-height: 1.4 !important;
    }
    .faq__accordion__wrapper .accordion-button .icon {
        font-size: 12px !important;
        color: #cbd5e0 !important;
        transition: transform 0.4s ease !important;
        margin-left: auto !important;
    }
    .faq__accordion__wrapper .accordion-button:not(.collapsed) .icon {
        color: #34A853 !important;
        transform: rotate(180deg) !important;
    }
    .faq__accordion__wrapper .accordion-button::after {
        display: none !important;
    }
    .faq__accordion__wrapper .accordion-body {
        padding: 0 15px 12px 55px !important;
        font-size: 14px !important;
        line-height: 1.5 !important;
        color: #555555 !important;
        background: transparent !important;
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
<!-- rts breadcrumb area start -->
<section class="rts__breadcrumb__area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rts__breadcrumb__content" data-bg-src="https://html.themewant.com/greenaro/assets/images/breadcrumb/bg.webp">
                    <ul class="list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                    </ul>
                    <h2 class="title rts-text-anime">About Diamond Landscapes</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rts breadcrumb area end -->

<!-- about area -->
<section class="rts__about__area rts-section-gap ">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="about__img">
                    <img src="{{ asset('frontend/assets/images/about/1.jpg') }}" style="width: 100%; max-height: 500px;" alt="about">
                    <div class="about__circle">
                        <!-- <div class="rts__circle">
                            <svg class="spinner" viewBox="0 0 100 100">
                                <defs>
                                    <path id="circle-2" d="M50,50 m-37,0a37,37 0 1,1 74,0a37,37 0 1,1 -74,0"></path>
                                </defs>
                                <text>
                                    <textPath xlink:href="#circle-2">EXPERTDESIGN . PREMIUMSERVICE . LANDSCAPING
                                    </textPath>
                                </text>
                            </svg>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content style-3">
                    <div class="section-title">
                        <span class="sub-title">About Company</span>
                        <h2 class="heading-title rts-text-animes">Crafting Exceptional Landscapes Since 1999</h2>
                    </div>
                    <div class="rts-tabs">
                        <div class="nav-tabs" role="tablist">
                            <button class="nav-link active" id="mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission" aria-selected="true">
                                Our Mission
                            </button>
                            <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision" aria-selected="false">
                                Our Vision
                            </button>
                        </div>
                        <div class="tab-content mt-20" id="content-nav-tabs">
                            <div class="tab-pane show active" id="nav-mission" role="tabpanel" aria-labelledby="mission-tab" tabindex="0">
                                <div class="desc">
                                    <p>To transform outdoor spaces into beautiful, functional environments through innovative design, meticulous craftsmanship, and a deep commitment to our clients' vision.</p>
                                    <p>Our mission is to enhance the natural beauty of every property we touch, ensuring lasting value and aesthetic appeal through professional landscaping excellence.</p>
                                </div>
                                <div class="about__stats">
                                    <div class="about-stats__item">
                                        <h3 class="about-stats__number"><span class="odometer" data-count="1200">0</span>+</h3>
                                        <p class="about-stats__label">Projects Completed</p>
                                    </div>
                                    <div class="about-stats__item">
                                        <h3 class="about-stats__number"><span class="odometer" data-count="25">0</span>+</h3>
                                        <p class="about-stats__label">Years of Experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane show" id="nav-vision" role="tabpanel" aria-labelledby="vision-tab" tabindex="0">
                                <div class="desc">
                                    <p>To be the premier landscaping partner in the region, recognized for our artistic innovation, unwavering reliability, and the superior quality of our outdoor transformations.</p>
                                    <p>We envision a future where every garden and commercial space we manage becomes a benchmark for excellence and sustainability in the landscaping industry.</p>
                                </div>
                                <div class="about__stats mt-35">
                                    <div class="about-stats__item">
                                        <h3 class="about-stats__number"><span class="odometer" data-count="500">0</span>+</h3>
                                        <p class="about-stats__label">Commercial Contracts</p>
                                    </div>
                                    <div class="about-stats__item">
                                        <h3 class="about-stats__number"><span class="odometer" data-count="15">0</span>+</h3>
                                        <p class="about-stats__label">Industry Awards</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="about__lists">
                        <ul>
                            <li><i class="fa-light fa-check"></i> Creative Landscape Design</li>
                            <li><i class="fa-light fa-check"></i> High-Quality Hardscaping</li>
                            <li><i class="fa-light fa-check"></i> Reliable Maintenance Plans</li>
                            <li><i class="fa-light fa-check"></i> Certified Professionals</li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about area end -->

<!-- brand area -->
<div class="rts__brand__area ">
    <div class="container">
        <h2 class="brand-title rts-text-anime">Trusted by Leading Property Managers and Businesses for Over 25 Years</h2>
        <div class="brand__slide__wrapper">
            <div class="swiper brand__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://html.themewant.com/greenaro/assets/images/brand/1.svg" alt="svg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://html.themewant.com/greenaro/assets/images/brand/2.svg" alt="svg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://html.themewant.com/greenaro/assets/images/brand/3.svg" alt="svg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://html.themewant.com/greenaro/assets/images/brand/4.svg" alt="svg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://html.themewant.com/greenaro/assets/images/brand/5.svg" alt="svg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://html.themewant.com/greenaro/assets/images/brand/6.svg" alt="svg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://html.themewant.com/greenaro/assets/images/brand/1.svg" alt="svg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://html.themewant.com/greenaro/assets/images/brand/2.svg" alt="svg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://html.themewant.com/greenaro/assets/images/brand/3.svg" alt="svg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://html.themewant.com/greenaro/assets/images/brand/4.svg" alt="svg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://html.themewant.com/greenaro/assets/images/brand/5.svg" alt="svg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://html.themewant.com/greenaro/assets/images/brand/6.svg" alt="svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand area end -->

<!-- rts service area -->
<section class="rts-service-area rts-section-gap bg-one ">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title">Our Services</span>
            <h2 class="heading-title rts-text-anime">Premium Landscaping Solutions</h2>
            <p class="desc">We provide a comprehensive range of landscaping and maintenance services tailored to the unique needs of your property — designed to ensure lush, beautiful outdoor environments year-round.</p>
        </div>
        <div class="rts-service-wrapper">
            <div class="row g-30">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-service wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="fa-solid fa-trowel-bricks" style="font-size: 40px; color: #34A853;"></i>
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="{{ route('services') }}">Hardscape Services</a></h3>
                            <p class="desc">Expert design and installation of patios, retaining walls, and pathways that stand the test of time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-service wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon">
                            <i class="fa-solid fa-seedling" style="font-size: 40px; color: #34A853;"></i>
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="{{ route('services') }}">Property Maintenance</a></h3>
                            <p class="desc">Comprehensive lawn care, seasonal cleanups, and ongoing maintenance for residential and commercial sites.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-service wow fadeInUp" data-wow-delay=".6s">
                        <div class="icon">
                            <i class="fa-solid fa-droplet" style="font-size: 40px; color: #34A853;"></i>
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="{{ route('services') }}">Irrigation Systems</a></h3>
                            <p class="desc">Modern irrigation installation and repair services ensuring efficient water management for your landscape.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-service wow fadeInUp" data-wow-delay=".8s">
                        <div class="icon">
                            <i class="fa-solid fa-hammer" style="font-size: 40px; color: #34A853;"></i>
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="{{ route('services') }}">Custom Wood Work</a></h3>
                            <p class="desc">High-quality craftsmanship for custom decks, fences, pergolas, and unique outdoor wood features.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rts service area end -->

<!-- rts team area three -->
<!-- <section class="rts__team__area rts-section-gap ">
    <div class="container">
        <div class="rts__team__wrapper__three">
            <div class="row gy-5 gy-lg-0 justify-content-between">
                <div class="col-lg-3">
                    <div class="section-title">
                        <h2 class="heading-title rts-text-anime">Leadership & Expertise You Can Trust</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="rts__team__item__wrappers">
                        <div class="swiper team__item__slide">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single__item">
                                        <div class="team__thumb">
                                            <a href="#"><img src="https://html.themewant.com/greenaro/assets/images/team/1.webp" alt="team"></a>
                                        </div>
                                        <div class="team__body">
                                            <h3 class="title"><a href="#">Arslan Khan</a></h3>
                                            <span class="designation">Founder & Lead Landscape Architect</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single__item">
                                        <div class="team__thumb">
                                            <a href="#"><img src="https://html.themewant.com/greenaro/assets/images/team/2.webp" alt="team"></a>
                                        </div>
                                        <div class="team__body">
                                            <h3 class="title"><a href="#">David Miller</a></h3>
                                            <span class="designation">Hardscape Expert</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single__item">
                                        <div class="team__thumb">
                                            <a href="#"><img src="https://html.themewant.com/greenaro/assets/images/team/3.webp" alt="team"></a>
                                        </div>
                                        <div class="team__body">
                                            <h3 class="title"><a href="#">Alex Johnson</a></h3>
                                            <span class="designation">Irrigation Specialist</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single__item">
                                        <div class="team__thumb">
                                            <a href="#"><img src="https://html.themewant.com/greenaro/assets/images/team/4.webp" alt="team"></a>
                                        </div>
                                        <div class="team__body">
                                            <h3 class="title"><a href="#">Sarah Wilson</a></h3>
                                            <span class="designation">Project Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-nav-area">
                            <div class="rts-btn-prev btn-nav"><i class="fa-sharp fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="rts-btn-next btn-nav"><i class="fa-sharp fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- rts team area end -->

<!-- rts map area -->
<!-- <section class="rts__map__area rts-section-gap bg-one ">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title text-white">Our Presence</span>
            <h3 class="heading-title rts-text-anime text-white">Landscaping Projects Across the Region</h3>
        </div>
        <div class="row">
            <div class="col-lg-10">
                <div class="map__main__wrapper">
                    <img src="https://html.themewant.com/greenaro/assets/images/map/map.webp" alt="World map showing solar installation locations">
                    <ul class="round-shape">
                        <li class="one">
                            <i class="fa-light fa-plus" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true"
                                data-bs-custom-class="map-tooltip" title="<span class='tt-name'>Russia</span><br><span class='tt-size'>System Size: 150kW</span>"></i>
                        </li>
                        <li class="two">
                            <i class="fa-light fa-plus" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true"
                                data-bs-custom-class="map-tooltip" title="<span class='tt-name'>USA</span><br><span class='tt-size'>System Size: 170kW</span>"></i>
                        </li>
                        <li class="three">
                            <i class="fa-light fa-plus" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true"
                                data-bs-custom-class="map-tooltip" title="<span class='tt-name'>Brazil</span><br><span class='tt-size'>System Size: 130kW</span>"></i>
                        </li>
                        <li class="four">
                            <i class="fa-light fa-plus" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true"
                                data-bs-custom-class="map-tooltip" title="<span class='tt-name'>Africa</span><br><span class='tt-size'>System Size: 100kW</span>"></i>
                        </li>
                        <li class="five">
                            <i class="fa-light fa-plus" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true"
                                data-bs-custom-class="map-tooltip" title="<span class='tt-name'>Australia</span><br><span class='tt-size'>System Size: 120kW</span>"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- rts map area end -->

<!-- rts testimonial area -->
<section class="rts__testimonial__area rts-section-gap ">
    <div class="container">
        <div class="section-title-area">
            <div class="section-title">
                <span class="sub-title">Testimonial</span>
                <h3 class="heading-title rts-text-anime">Success Stories from <br> Our Clients</h3>
            </div>
            <div class="testi__right">
                <div class="testi__reviews">
                    <div class="icon">
                        <img src="https://html.themewant.com/greenaro/assets/images/icon/google.svg" alt="">
                    </div>
                    <div class="rattings">
                        <span>Google Rating</span>
                        <div class="ratting">
                            <span>4.9</span>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="test__btn">
                    <button class="rts-btn-prev"><i class="fa-light fa-chevron-left"></i></button>
                    <button class="rts-btn-next"><i class="fa-light fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
        <div class="testimonial__slide__item__wrapper">
            <div class="swiper testi__slider">
                <div class="swiper-wrapper mb-40">
                    <div class="swiper-slide">
                        <div class="testimonial__slide__item mt-35">
                            <div class="icon mb-10">
                                <img src="https://html.themewant.com/greenaro/assets/images/icon/quotes.svg" alt="">
                            </div>
                            <p class="desc mb-40">I've worked with many agencies before, but this one really stood
                                out. It wasn't just about the visuals they understood our business.</p>
                            <div class="info d-flex gap-3 align-items-center">
                                <div class="thumb">
                                    <img src="https://html.themewant.com/greenaro/assets/images/testimonial/t-1.webp" alt="testimonial">
                                </div>
                                <div class="content">
                                    <h3 class="title">Michael Brown</h3>
                                    <span class="designation">Residential Client</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial__slide__item style-2 mt-35">
                            <div class="icon mb-10">
                                <img src="https://html.themewant.com/greenaro/assets/images/icon/quotes.svg" alt="">
                            </div>
                            <p class="desc mb-40">I've worked with many agencies before, but this one really stood
                                out. It wasn't just about the visuals they understood our business.</p>
                            <div class="info d-flex gap-3 align-items-center">
                                <div class="thumb">
                                    <img src="https://html.themewant.com/greenaro/assets/images/testimonial/t-2.webp" alt="testimonial">
                                </div>
                                <div class="content">
                                    <h3 class="title">James Carter</h3>
                                    <span class="designation">NovaTech Solutions</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial__slide__item mt-35">
                            <div class="icon mb-10">
                                <img src="https://html.themewant.com/greenaro/assets/images/icon/quotes.svg" alt="">
                            </div>
                            <p class="desc mb-40">I've worked with many agencies before, but this one really stood
                                out. It wasn't just about the visuals they understood our business.</p>
                            <div class="info d-flex gap-3 align-items-center">
                                <div class="thumb">
                                    <img src="https://html.themewant.com/greenaro/assets/images/testimonial/t-3.webp" alt="testimonial">
                                </div>
                                <div class="content">
                                    <h3 class="title">Sarah Mitchell</h3>
                                    <span class="designation">Homeowner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial__slide__item style-2 mt-35">
                            <div class="icon mb-10">
                                <img src="https://html.themewant.com/greenaro/assets/images/icon/quotes.svg" alt="">
                            </div>
                            <p class="desc mb-40">"I've worked with many landscaping companies before, but Diamond Landscapes really stood out. They understood our vision and transformed our property into something beautiful."</p>
                            <div class="info d-flex gap-3 align-items-center">
                                <div class="thumb">
                                    <img src="https://html.themewant.com/greenaro/assets/images/testimonial/t-4.webp" alt="testimonial">
                                </div>
                                <div class="content">
                                    <h3 class="title">David Thompson</h3>
                                    <span class="designation">Estate Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial__slide__item mt-35">
                            <div class="icon mb-10">
                                <img src="https://html.themewant.com/greenaro/assets/images/icon/quotes.svg" alt="">
                            </div>
                            <p class="desc mb-40">"I've worked with many landscaping companies before, but Diamond Landscapes really stood out. They understood our vision and transformed our property into something beautiful."</p>
                            <div class="info d-flex gap-3 align-items-center">
                                <div class="thumb">
                                    <img src="https://html.themewant.com/greenaro/assets/images/testimonial/t-1.webp" alt="testimonial">
                                </div>
                                <div class="content">
                                    <h3 class="title">Sarah Williams</h3>
                                    <span class="designation">Residential Client</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial__slide__item style-2 mt-35">
                            <div class="icon mb-10">
                                <img src="https://html.themewant.com/greenaro/assets/images/icon/quotes.svg" alt="">
                            </div>
                            <p class="desc mb-40">"I've worked with many landscaping companies before, but Diamond Landscapes really stood out. They understood our vision and transformed our property into something beautiful."</p>
                            <div class="info d-flex gap-3 align-items-center">
                                <div class="thumb">
                                    <img src="https://html.themewant.com/greenaro/assets/images/testimonial/t-2.webp" alt="testimonial">
                                </div>
                                <div class="content">
                                    <h3 class="title">James Carter</h3>
                                    <span class="designation">NovaTech Solutions</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rts-dot-pagination text-center"></div>
            </div>
        </div>
    </div>
</section>
<!-- rts testimonial area end -->

<!-- rts faq area start -->
<section class="rts__faq__area rts-section-gap inner-bg ">
    <div class="container-1428">
        <div class="section-title text-center inner-style">
            <span class="sub-title">FAQ</span>
            <h2 class="heading-title rts-text-anime">Frequently Asked Questions</h2>
        </div>
        <div class="rts__faq__wrapper mt-45">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="faq__accordion__wrapper">
                        <div class="accordion" id="rts-faq-accordion">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="text">
                                            <span class="number">01.</span>
                                            <span class="title">How long does a typical landscaping project take?</span>
                                        </span>
                                        <i class="fa-solid fa-chevron-down icon"></i>
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#rts-faq-accordion">
                                    <div class="accordion-body">
                                        The timeline depends on the scope. Small garden updates might take a few days, while complex hardscape projects can take 2-4 weeks.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="text">
                                            <span class="number">02.</span>
                                            <span class="title">Do you provide ongoing maintenance services?</span>
                                        </span>
                                        <i class="fa-solid fa-chevron-down icon"></i>
                                    </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#rts-faq-accordion">
                                    <div class="accordion-body">
                                        Yes, we offer flexible maintenance plans for both residential and commercial properties, covering everything from mowing to pruning.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span class="text">
                                            <span class="number">03.</span>
                                            <span class="title">Can you help with irrigation system design?</span>
                                        </span>
                                        <i class="fa-solid fa-chevron-down icon"></i>
                                    </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#rts-faq-accordion">
                                    <div class="accordion-body">
                                        Absolutely. We specialize in designing and installing efficient irrigation systems tailored to the specific needs of your landscape.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="text">
                                            <span class="number">04.</span>
                                            <span class="title">What materials do you use for hardscaping?</span>
                                        </span>
                                        <i class="fa-solid fa-chevron-down icon"></i>
                                    </button>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#rts-faq-accordion">
                                    <div class="accordion-body">
                                        We use premium materials including natural stone, high-quality pavers, and durable timber to ensure longevity and aesthetic appeal.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="text">
                                            <span class="number">05.</span>
                                            <span class="title">Are your landscaping services affordable?</span>
                                        </span>
                                        <i class="fa-solid fa-chevron-down icon"></i>
                                    </button>
                                </div>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#rts-faq-accordion">
                                    <div class="accordion-body">
                                        We provide competitive pricing and can tailor our designs to fit various budgets while maintaining high standards of quality.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rts faq area end -->
@endsection