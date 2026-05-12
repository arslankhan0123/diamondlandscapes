@extends('layouts.frontend.main')
@section('title', 'Contact Us')

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

    /* Contact Info Cards Redesign - Dark Theme */
    .rts-contact-info-area {
        background: #ffffff !important;
    }
    .single-contact-info {
        background: #002524 !important; /* Deep Dark Green */
        padding: 40px 30px !important;
        border-radius: 16px !important;
        border: 1px solid rgba(255, 255, 255, 0.05) !important;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
        height: 100% !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
        text-align: left !important;
    }
    .single-contact-info:hover {
        transform: translateY(-10px) !important;
        box-shadow: 0 20px 40px rgba(0, 37, 36, 0.2) !important;
        background: #003635 !important; /* Slightly lighter on hover */
        border-color: #34A853 !important;
    }
    .single-contact-info .icon {
        width: 60px !important;
        height: 60px !important;
        background: rgba(52, 168, 83, 0.1) !important;
        border-radius: 12px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        margin-bottom: 25px !important;
        transition: all 0.3s ease !important;
        border: 1px solid rgba(52, 168, 83, 0.2) !important;
    }
    .single-contact-info .icon svg path {
        stroke: #34A853 !important;
    }
    .single-contact-info:hover .icon {
        background: #34A853 !important;
        border-color: #34A853 !important;
    }
    .single-contact-info:hover .icon svg path {
        stroke: #ffffff !important;
    }
    .single-contact-info .content .title {
        display: block !important;
        font-size: 13px !important;
        font-weight: 700 !important;
        color: #34A853 !important;
        text-transform: uppercase !important;
        letter-spacing: 1.5px !important;
        margin-bottom: 12px !important;
    }
    .single-contact-info .content a {
        font-size: 20px !important;
        font-weight: 600 !important;
        color: #ffffff !important;
        transition: all 0.3s ease !important;
        text-decoration: none !important;
        line-height: 1.3 !important;
        display: block !important;
    }
    .single-contact-info .content a:hover {
        color: #34A853 !important;
    }
</style>
<!-- rts breadcrumb area start -->
<section class="rts__breadcrumb__area bg-light ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rts__breadcrumb__content" data-bg-src="https://html.themewant.com/greenaro/assets/images/breadcrumb/bg.webp">
                    <ul class="list">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <h2 class="title rts-text-anime">Contact Diamond Landscapes</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rts breadcrumb area end -->

@if(session('success'))
<div class="container mt-5">
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-left: 5px solid #34A853;">
        <i class="fas fa-check-circle me-2"></i> <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

@if($errors->any())
<div class="container mt-5">
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="border-left: 5px solid #dc3545;">
        <i class="fas fa-exclamation-circle me-2"></i> <strong>Error!</strong> Please fix the following:
        <ul class="mb-0 mt-2">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

<!-- rts contact info area start -->
<div class="rts-contact-info-area py-100">
    <div class="container-1428">
        <div class="rts-contact-info-wrapper">
            <div class="row g-30">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info">
                        <div class="icon">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.8869 10.3281L15.7031 14.5433C14.7236 15.3203 13.3457 15.3203 12.3663 14.5433L7.13867 10.3281" stroke="#002524" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7277 24.5C23.2759 24.5098 25.6673 21.5945 25.6673 18.0114V9.99835C25.6673 6.4153 23.2759 3.5 19.7277 3.5H8.27364C4.7254 3.5 2.33398 6.4153 2.33398 9.99835V18.0114C2.33398 21.5945 4.7254 24.5098 8.27364 24.5H19.7277Z" stroke="#002524" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="content">
                            <span class="title">Email Us</span>
                            <a href="mailto:admin@diamondlandscapes">admin@diamondlandscapes</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info">
                        <div class="icon">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.453 14.5524C18.107 19.2051 19.1628 13.8225 22.1259 16.7836C24.9827 19.6395 26.6246 20.2117 23.0051 23.8301C22.5518 24.1945 19.6712 28.5779 9.54805 18.4576C-0.576376 8.33597 3.80453 5.45249 4.16898 4.99924C7.79719 1.37079 8.35952 3.02225 11.2163 5.87819C14.1794 8.84055 8.79912 9.89978 13.453 14.5524Z" stroke="#002524" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="content">
                            <span class="title">Call Us</span>
                            <a href="tel:+1234567890">+1 (234) 567-890</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info">
                        <div class="icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path id="Stroke1" fill-rule="evenodd" clip-rule="evenodd" d="M14.5 10.5005C14.5 9.11924 13.3808 8 12.0005 8C10.6192 8 9.5 9.11924 9.5 10.5005C9.5 11.8808 10.6192 13 12.0005 13C13.3808 13 14.5 11.8808 14.5 10.5005Z" stroke="#002524" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path id="Stroke3" fill-rule="evenodd" clip-rule="evenodd" d="M11.9995 21C10.801 21 4.5 15.8984 4.5 10.5633C4.5 6.38664 7.8571 3 11.9995 3C16.1419 3 19.5 6.38664 19.5 10.5633C19.5 15.8984 13.198 21 11.9995 21Z" stroke="#002524" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="content">
                            <span class="title">Our Location</span>
                            <a href="#">Your Office Address, City, State</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts contact info area end -->

<!-- rts contact area start -->
<section class="rts__contact__area rts-section-gapBottom">
    <div class="container-1428">
        <div class="rts__contact__wrapper">
            <div class="row gy-5 align-items-end">
                <div class="col-lg-6">
                    <div class="rts__contact__form">
                        <div class="section-title">
                            <span class="sub-title">Contact</span>
                            <h2 class="heading-title rts-text-anime">Let's Connect & Start Something Great</h2>
                        </div>
                        <form action="{{ route('contact.store') }}" method="POST" class="contact__form-wrapper">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form__input">
                                        <label for="fname">First Name *</label>
                                        <input type="text" name="fname" id="fname" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form__input">
                                        <label for="lname">Last Name *</label>
                                        <input type="text" name="lname" id="lname" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form__input">
                                        <label for="email">Email *</label>
                                        <input type="email" name="email" id="email" placeholder="Your Email.." required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form__input">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" name="phone" id="phone" placeholder="Your Phone Number..">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form__input">
                                        <label for="message">Message *</label>
                                        <textarea name="message" id="message" placeholder="Your Message.." required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form__input">
                                        <input type="checkbox" id="terms" required>
                                        <label for="terms" class="terms"> I agree with the <a href="#">Terms and
                                                Conditions</a> </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="rts-btn btn-primary">Send Message <i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                        <div id="form-messages" class="mt-10"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rts__contact__info">
                        <div class="rts__contact__info__social">
                            <p>Follow us on Socials:</p>
                            <div class="social__list">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="rts__contact__info__map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29208.72412242517!2d90.42666760000002!3d23.7797909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1759116516178!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rts contact area end -->

<!-- rts faq area start -->
<section class="rts__faq__area rts-section-gap inner-bg ">
    <div class="container-1428">
        <div class="section-title text-center position-static">
            <span class="sub-title"> FAQ</span>
            <h2 class="heading-title rts-text-anime">Frequently Asked Questions</h2>
        </div>
        <div class="rts__faq__wrapper mt-50">
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