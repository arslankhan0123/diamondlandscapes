@extends('layouts.frontend.main')
@section('title', 'Services')

@section('content')
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
        <section class="tj-page-header section-gap-x"
            data-bg-image="{{asset('6.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tj-page-header-content text-center">
                            <h1 class="tj-page-title">Service</h1>
                            <div class="tj-page-link">
                                <span><i class="tji-home"></i></span>
                                <span>
                                    <a href="{{ route('home') }}">Home</a>
                                </span>
                                <span><i class="tji-arrow-right"></i></span>
                                <span>
                                    <span>Service</span>
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

        <div class="container mt-5">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show mb-5 p-4 border-0 shadow-sm" role="alert"
                    style="border-radius: 15px; background-color: #d1e7dd; color: #0f5132;">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-check-circle me-3 fa-2x"></i>
                        <div>
                            <h5 class="alert-heading mb-1 fw-bold">Success!</h5>
                            <p class="mb-0">{{ session('success') }}</p>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show mb-5 p-4 border-0 shadow-sm" role="alert"
                    style="border-radius: 15px;">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-exclamation-circle me-3 fa-2x"></i>
                        <div>
                            <h5 class="alert-heading mb-1 fw-bold">Error!</h5>
                            <p class="mb-0">{{ session('error') }}</p>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

        <!-- start: Service Section -->
        <section class="tj-service-section service-4 section-gap">
            <div class="container">
                <div class="row row-gap-4">
                    @foreach($services as $service)
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item style-4 wow fadeInUp" data-wow-delay=".{{ ($loop->index % 9) + 1 }}s">
                                <div class="service-icon">
                                    <i class="tji-service-{{ ($loop->index % 6) + 1 }}"></i>
                                </div>
                                <div class="service-content">
                                    <h4 class="title"><a
                                            href="{{ route('services.details', $service->id) }}">{{ $service->name }}</a></h4>
                                    <p class="desc">{{ $service->short_description }}</p>
                                    <a class="text-btn" href="{{ route('services.details', $service->id) }}">
                                        <span class="btn-text"><span>Learn More</span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- end: Service Section -->

        <!-- start: Contact Section -->
        <section class="tj-contact-section section-gap section-gap-x">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="global-map wow fadeInUp" data-wow-delay=".3s">
                            <div class="global-map-img">
                                <img src="https://themejunction.net/html/bexon/demo/assets/images/bg/map.svg" alt="Image">
                                <div class="location-indicator loc-1">
                                    <div class="location-tooltip">
                                        <span>Head office:</span>
                                        <p>100 Whiteram Close Northeast, T1Y 5X8</p>
                                        <a href="tel:10095447818">P: +1 (403) 830-0054</a>
                                        <a href="mailto:info@truenorthbuild.ca">M: info@truenorthbuild.ca</a>
                                    </div>
                                </div>
                                <div class="location-indicator loc-2">
                                    <div class="location-tooltip">
                                        <span>Regional office:</span>
                                        <p>Hessisch Lichtenau 37235, Kassel, Germany.</p>
                                        <a href="tel:10098801810">P: +1 (009) 880-1810</a>
                                        <a href="mailto:info@truenorthbuild.ca">M: info@truenorthbuild.ca</a>
                                    </div>
                                </div>
                                <div class="location-indicator loc-3">
                                    <div class="location-tooltip">
                                        <span>Regional office:</span>
                                        <p>32 Altamira, State of Pará, Brazil.</p>
                                        <a href="tel:10095447818">P: +1 (403) 830-0054</a>
                                        <a href="mailto:info@truenorthbuild.ca">M: info@truenorthbuild.ca</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form style-2 wow fadeInUp" data-wow-delay=".4s">
                            <style>
                                .dots-loader {
                                    display: none;
                                    align-items: center;
                                    justify-content: center;
                                    gap: 6px;
                                }

                                .dots-loader div {
                                    width: 12px;
                                    height: 12px;
                                    background-color: #ffffff;
                                    border-radius: 50%;
                                    animation: dots-loading 1.4s infinite ease-in-out both;
                                }

                                .dots-loader div:nth-child(1) {
                                    animation-delay: -0.32s;
                                }

                                .dots-loader div:nth-child(2) {
                                    animation-delay: -0.16s;
                                }

                                @keyframes dots-loading {

                                    0%,
                                    80%,
                                    100% {
                                        transform: scale(0);
                                        opacity: 0.3;
                                    }

                                    40% {
                                        transform: scale(1.0);
                                        opacity: 1;
                                    }
                                }

                                button:disabled .dots-loader {
                                    display: flex;
                                }

                                button:disabled .btn-text,
                                button:disabled .btn-icon {
                                    display: none !important;
                                }

                                .tj-primary-btn:disabled {
                                    cursor: not-allowed;
                                    opacity: 0.8;
                                }
                            </style>
                            <div class="sec-heading">
                                <span class="sub-title text-white"><i class="tji-box"></i>Get in Touch</span>
                                <h2 class="sec-title title-anim">Drop Us a <span>Line.</span></h2>
                            </div>
                            <form id="contact-form-2" action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="row wow fadeInUp" data-wow-delay=".5s">
                                    <div class="col-sm-6">
                                        <div class="form-input">
                                            <input type="text" name="conName" placeholder="Full Name *" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-input">
                                            <input type="email" name="conEmail" placeholder="Email Address *" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-input">
                                            <input type="tel" name="conPhone" placeholder="Phone number *" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-input">
                                            <div class="tj-nice-select-box">
                                                <div class="tj-select">
                                                    <select name="conSubject">
                                                        <option value="">Choose a service</option>
                                                        @foreach($services as $service)
                                                            <option value="{{ $service->name }}" {{ old('conSubject') == $service->name ? 'selected' : '' }}>{{ $service->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-input message-input">
                                            <textarea name="conMessage" id="message" placeholder="Type message *"
                                                required></textarea>
                                        </div>
                                    </div>
                                    <div class="submit-btn">
                                        <button class="tj-primary-btn" type="submit" id="submit-btn-2">
                                            <span class="btn-text"><span>Send Message</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                            <div class="dots-loader">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const serviceForm = document.getElementById('contact-form-2');
                                    if (serviceForm) {
                                        serviceForm.addEventListener('submit', function() {
                                            const btn = document.getElementById('submit-btn-2');
                                            if (btn) {
                                                btn.disabled = true;
                                            }
                                        });
                                    }
                                });
                            </script>
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
        <!-- end: Contact Section -->

        <!-- start: Pricing Section -->
        <!-- <section class="tj-pricing-section-2 section-top-gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="sec-heading text-center wow fadeInUp" data-wow-delay=".3s">
                                        <span class="sub-title"><i class="tji-box"></i>Pricing plan</span>
                                        <h2 class="sec-title">Our Pricing <span>Plan.</span></h2>
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
                                                <a class="text-btn" href="contact.html">
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
                                                <a class="text-btn" href="contact.html">
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
                                                <a class="text-btn" href="contact.html">
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
                    </section> -->
        <!-- end: Pricing Section -->

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

        <!-- start: Cta Section -->
        <section class="tj-cta-section mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cta-area">
                            <div class="cta-content">
                                <h2 class="title title-anim">Let’s Build Future Together.</h2>
                                <div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
                                    <a class="tj-primary-btn btn-dark" href="contact.html">
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