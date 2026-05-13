@extends('layouts.frontend.main')

@section('title', 'Reviews | Diamond Landscapes')

@section('content')
<!-- rts breadcrumb area start -->
<section class="rts__breadcrumb__area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rts__breadcrumb__content" data-bg-src="https://html.themewant.com/greenaro/assets/images/breadcrumb/bg.webp">
                    <ul class="list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li>Customer Reviews</li>
                    </ul>
                    <h2 class="title rts-text-anime">Customer Reviews</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rts breadcrumb area end -->

<!-- reviews area start -->
<div class="rts-reviews-area rts-section-gap">
    <div class="container">
        <div class="row align-items-center mb--60">
            <div class="col-lg-8">
                <div class="title-area">
                    <span class="subtitle" style="color: #34A853;">Testimonials</span>
                    <h2 class="title">What Our Clients Are Saying</h2>
                </div>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="#" class="rts-btn btn-primary">Write a Review on Google <i class="fa-brands fa-google ms-2"></i></a>
            </div>
        </div>
        <div class="row g-5">
            <!-- Review 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="single-review-card p-5" style="background: #001514; border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; height: 100%;">
                    <div class="rating mb-4" style="color: #FFD700;">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="desc mb-5" style="color: rgba(255,255,255,0.8); font-style: italic;">"Diamond Landscapes transformed our backyard into a stunning oasis. Their attention to detail on the hardscape was incredible. Highly recommend!"</p>
                    <div class="author-info d-flex align-items-center">
                        <div class="info">
                            <h5 class="name mb-0" style="color: white;">John Smith</h5>
                            <span class="designation" style="color: #34A853; font-size: 14px;">Residential Client</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Review 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="single-review-card p-5" style="background: #001514; border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; height: 100%;">
                    <div class="rating mb-4" style="color: #FFD700;">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="desc mb-5" style="color: rgba(255,255,255,0.8); font-style: italic;">"We've been using them for our commercial maintenance for two years. They are reliable, professional, and our grounds have never looked better."</p>
                    <div class="author-info d-flex align-items-center">
                        <div class="info">
                            <h5 class="name mb-0" style="color: white;">Sarah Williams</h5>
                            <span class="designation" style="color: #34A853; font-size: 14px;">Property Manager</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Review 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="single-review-card p-5" style="background: #001514; border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; height: 100%;">
                    <div class="rating mb-4" style="color: #FFD700;">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="desc mb-5" style="color: rgba(255,255,255,0.8); font-style: italic;">"Excellent irrigation install. They were quick, clean, and the system works perfectly. Saved us so much time and water."</p>
                    <div class="author-info d-flex align-items-center">
                        <div class="info">
                            <h5 class="name mb-0" style="color: white;">Michael Brown</h5>
                            <span class="designation" style="color: #34A853; font-size: 14px;">Homeowner</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- reviews area end -->
@endsection
