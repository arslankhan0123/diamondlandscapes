@extends('layouts.frontend.main')
@section('title', 'Contact Us')

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
                            <h1 class="tj-page-title">Contact Us</h1>
                            <div class="tj-page-link">
                                <span><i class="tji-home"></i></span>
                                <span>
                                    <a href="{{ route('home') }}">Home</a>
                                </span>
                                <span><i class="tji-arrow-right"></i></span>
                                <span>
                                    <span>Contact Us</span>
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

        <!-- start: Contact Top Section -->
        <div class="tj-contact-area section-gap">
            <div class="container">
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
                <div class="row">
                    <div class="col-12">
                        <div class="sec-heading text-center">
                            <span class="sub-title wow fadeInUp" data-wow-delay=".1s"><i class="tji-box"></i>Contact
                                info</span>
                            <h2 class="sec-title title-anim"><span>Reach</span> Out to Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row row-gap-4">
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".3s">
                            <div class="contact-icon">
                                <i class="tji-location-3"></i>
                            </div>
                            <h3 class="contact-title">Our Location</h3>
                            <p>100 Whiteram Close Northeast, T1Y 5X8</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".5s">
                            <div class="contact-icon">
                                <i class="tji-envelop"></i>
                            </div>
                            <h3 class="contact-title">Email us</h3>
                            <ul class="contact-list">
                                <li><a href="mailto:info@truenorthbuild.ca">info@truenorthbuild.ca</a></li>
                                <!-- <li><a href="mailto:israr@truenorthbuild.ca">israr@truenorthbuild.ca</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".7s">
                            <div class="contact-icon">
                                <i class="tji-phone"></i>
                            </div>
                            <h3 class="contact-title">Call us</h3>
                            <ul class="contact-list">
                                <li><a href="tel:+14038300054"><b>Phone:</b> +1 (403) 830-0054</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".9s">
                            <div class="contact-icon">
                                <i class="tji-chat"></i>
                            </div>
                            <h3 class="contact-title">Live chat</h3>
                            <ul class="contact-list">
                                <li><a href="mailto:admin@truenorthbuild.ca">admin@truenorthbuild.ca</a></li>
                                <li class="active"><a href="{{ route('contact') }}">Need help?</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Contact Top Section -->

        <!-- start: Contact Section -->
        <section class="tj-contact-section-2 section-bottom-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-form wow fadeInUp" data-wow-delay=".1s">
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
                            <h3 class="title">Feel Free to Get in Touch or Visit our Location.</h3>
                            <form id="contact-form" action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-input">
                                            <input type="text" name="conName" placeholder="Full Name*"
                                                value="{{ old('conName') }}" required>
                                            @error('conName') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-input">
                                            <input type="email" name="conEmail" placeholder="Email Address*"
                                                value="{{ old('conEmail') }}" required>
                                            @error('conEmail') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-input">
                                            <input type="tel" name="conPhone" placeholder="Phone number*"
                                                value="{{ old('conPhone') }}" required>
                                            @error('conPhone') <small class="text-danger">{{ $message }}</small> @enderror
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
                                                    @error('conSubject') <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-input message-input">
                                            <textarea name="conMessage" id="message" placeholder="Type message*"
                                                required>{{ old('conMessage') }}</textarea>
                                            @error('conMessage') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>
                                    <div class="submit-btn">
                                        <button class="tj-primary-btn" type="submit" id="submit-btn">
                                            <span class="btn-text"><span>Submit Now</span></span>
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
                                    const contactForm = document.getElementById('contact-form');
                                    if (contactForm) {
                                        contactForm.addEventListener('submit', function() {
                                            const btn = document.getElementById('submit-btn');
                                            if (btn) {
                                                btn.disabled = true;
                                            }
                                        });
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="map-area wow fadeInUp" data-wow-delay=".3s">
                            <iframe width="100%" height="450" style="border:0;" loading="lazy" allowfullscreen
                                src="https://www.google.com/maps?q=100+Whiteram+Close+Northeast,+T1Y+5X8&output=embed">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Contact Section -->

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