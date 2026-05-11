<footer class="tj-footer-section footer-2 section-gap-x">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-subscribe wow fadeInUp" data-wow-delay=".3s">
                        <div class="subscribe-logo">
                            <img src="{{asset('logo.png')}}" alt="">
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="email" name="email" placeholder="Enter email">
                                <button class="tj-primary-btn" type="submit">
                                    <span class="btn-text"><span>Send Message</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-main-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-md-6">
                    <div class="footer-widget footer-col-1 wow fadeInUp" data-wow-delay=".1s">
                        <div class="footer-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{asset('logo.png')}}" alt="Logos">
                            </a>
                        </div>
                        <div class="footer-text">
                            <p>Developing personalze our customer journeys to increase satisfaction & loyalty of our
                                expansion.
                            </p>
                        </div>
                        <!-- <div class="award-logo-area">
                            <div class="award-logo">
                                <img src="{{asset('frontend/assets/images/footer/award-logo-white-1.webp')}}" alt="">
                            </div>
                            <div class="award-logo">
                                <img src="{{asset('frontend/assets/images/footer/award-logo-white-2.webp')}}" alt="">
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="footer-widget footer-col-2 widget-nav-menu wow fadeInUp" data-wow-delay=".3s">
                        <h5 class="title">Services</h5>
                        <ul>
                            @foreach($header_services->take(5) as $fs)
                                <li>
                                    <a href="{{ route('services.details', ['id' => $fs->id]) }}"
                                        style="display:block; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; max-width:100%;">
                                        {{ $fs->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="footer-widget footer-col-3 widget-nav-menu wow fadeInUp" data-wow-delay=".5s">
                        <h5 class="title">Resources</h5>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('careers') }}">Careers</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="footer-widget widget-contact wow fadeInUp" data-wow-delay=".7s">
                        <h5 class="title">Our Office</h5>
                        <div class="footer-contact-info">
                            <div class="contact-item">
                                <span>100 Whiteram Close Northeast, T1Y 5X8</span>
                            </div>
                            <div class="contact-item">
                                <a href="tel:+14038300054">P: +1 (403) 830-0054</a>
                                <a href="mailto:info@truenorthbuild.ca">M: info@truenorthbuild.ca</a>
                            </div>
                            <div class="contact-item">
                                <span><i class="tji-clock"></i> Mon-Fri 08am-06pm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-marquee">
        <div class="swiper marquee-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide marquee-item">
                    <h4 class="marquee-text">Grading</h4>
                    <div class="marquee-img">
                        <img src="{{asset('6.jpg')}}"
                            alt="">
                    </div>
                </div>
                <div class="swiper-slide marquee-item">
                    <h4 class="marquee-text">Landscape Maintenance</h4>
                    <div class="marquee-img">
                        <img src="{{asset('6.jpg')}}"
                            alt="">
                    </div>
                </div>
                <div class="swiper-slide marquee-item">
                    <h4 class="marquee-text">Concrete Work</h4>
                    <div class="marquee-img">
                        <img src="{{asset('4.jpg')}}"
                            alt="">
                    </div>
                </div>
                <div class="swiper-slide marquee-item">
                    <h4 class="marquee-text">Grading</h4>
                    <div class="marquee-img">
                        <img src="{{asset('6.jpg')}}"
                            alt="">
                    </div>
                </div>
                <div class="swiper-slide marquee-item">
                    <h4 class="marquee-text">Landscape Maintenance</h4>
                    <div class="marquee-img">
                        <img src="{{asset('2.jpg')}}"
                            alt="">
                    </div>
                </div>
                <div class="swiper-slide marquee-item">
                    <h4 class="marquee-text">Grading</h4>
                    <div class="marquee-img">
                        <img src="{{asset('8.jpg')}}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tj-copyright-area-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-content-area">
                        <div class="copyright-text">
                            <p>&copy; <span>2026</span> <a href="{{ route('home') }}" target="_blank">True North
                                    Build</a> All right reserved</p>
                        </div>
                        <div class="social-links style-3">
                            <ul>
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li><a href="https://x.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                                </li>
                                <li><a href="https://www.linkedin.com/" target="_blank"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="copyright-menu">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
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
</footer>