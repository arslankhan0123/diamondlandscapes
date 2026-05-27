@extends('layouts.frontend.main')

@section('title', 'Gallery | Diamond Landscapes')

@section('content')
<style>
    /* Carousel Button Styles */
    .gallery-prev,
    .gallery-next {
        position: absolute;
        top: 50%;
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

    .gallery-prev {
        left: -25px;
    }

    .gallery-next {
        right: -25px;
    }

    .gallery-prev:hover,
    .gallery-next:hover {
        background: #2d8e47 !important;
        transform: translateY(-50%) scale(1.1);
    }

    .gallery-slider {
        overflow: hidden !important;
        position: relative;
        padding: 20px 10px;
    }

    .single-gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        cursor: pointer;
    }

    .single-gallery-item .content {
        position: absolute;
        bottom: -100%;
        left: 0;
        width: 100%;
        padding: 20px;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.9));
        transition: all 0.4s ease;
    }

    .single-gallery-item:hover .content {
        bottom: 0;
    }

    .single-gallery-item .content h5 {
        color: white;
        margin-bottom: 5px;
    }

    .single-gallery-item .content span {
        color: #34A853;
        font-size: 14px;
    }

    @media screen and (max-width: 1200px) {
        .gallery-prev {
            left: 0;
        }

        .gallery-next {
            right: 0;
        }
    }

    .rts__breadcrumb__content {
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .rts__breadcrumb__content::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.45);
        /* black overlay */
        z-index: -1;
        border-radius: inherit;
    }

    .rts__breadcrumb__content .list,
    .rts__breadcrumb__content .title {
        position: relative;
        z-index: 2;
    }
</style>

<!-- rts breadcrumb area start -->
<section class="rts__breadcrumb__area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rts__breadcrumb__content"
                    data-bg-src="{{ asset('services_page_bg.jpeg') }}">
                    <ul class="list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li>Our Project Gallery</li>
                    </ul>
                    <h2 class="title rts-text-anime">Our Project Gallery</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rts breadcrumb area end -->

<!-- gallery area start -->
<div class="rts-gallery-area rts-section-gap mt-5" style="background-color: #001a19;">
    <div class="container">
        <div class="row mb--50 text-center">
            <div class="col-lg-12">
                <span class="subtitle" style="color: #34A853;">Visual Portfolio</span>
                <h2 class="title" style="color: white;">A Glimpse of Our Work</h2>
            </div>
        </div>

        <div class="gallery__items__wrapper" style="position: relative;">
            <div class="swiper gallery-slider">
                <div class="swiper-wrapper">
                    @php
                    $gallery_items = [
                    ['img' => '5.jpg', 'title' => 'Custom Stone Patio', 'cat' => 'Hardscape'],
                    ['img' => '6.jpg', 'title' => 'Modern Cedar Deck', 'cat' => 'Decks'],
                    ['img' => '7.jpg', 'title' => 'Office Park Maintenance', 'cat' => 'Commercial'],
                    ['img' => '3.jpg', 'title' => 'Smart Sprinkler System', 'cat' => 'Irrigation'],
                    ['img' => '2.jpg', 'title' => 'Lawn Restoration', 'cat' => 'Before & After'],
                    ['img' => '1.jpg', 'title' => 'Retaining Wall', 'cat' => 'Hardscape'],
                    ['img' => '5.jpg', 'title' => 'Stone Walkway', 'cat' => 'Hardscape'],
                    ['img' => '6.jpg', 'title' => 'Composite Decking', 'cat' => 'Decks'],
                    ['img' => '7.jpg', 'title' => 'Retail Center Care', 'cat' => 'Commercial'],
                    ['img' => '3.jpg', 'title' => 'Drip Irrigation', 'cat' => 'Irrigation'],
                    ];
                    @endphp

                    @foreach ($gallery_items as $item)
                    <div class="swiper-slide">
                        <div class="single-gallery-item">
                            <img src="{{ asset('frontend/assets/images/' . $item['img']) }}"
                                alt="{{ $item['title'] }}"
                                style="border-radius: 15px; width: 100%; height: 350px; object-fit: cover;">
                            <div class="content">
                                <h5 class="title">{{ $item['title'] }}</h5>
                                <span>{{ $item['cat'] }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button class="rts-btn-prev gallery-prev">
                <i class="fa-light fa-chevron-left"></i>
            </button>
            <button class="rts-btn-next gallery-next">
                <i class="fa-light fa-chevron-right"></i>
            </button>
        </div>
    </div>
</div>
<!-- gallery area end -->

<script>
    window.addEventListener('load', function() {
        if (typeof Swiper !== 'undefined') {
            new Swiper(".gallery-slider", {
                slidesPerView: 4,
                spaceBetween: 25,
                loop: true,
                centeredSlides: false,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".gallery-next",
                    prevEl: ".gallery-prev",
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1
                    },
                    576: {
                        slidesPerView: 2
                    },
                    992: {
                        slidesPerView: 3
                    },
                    1200: {
                        slidesPerView: 4
                    }
                }
            });
        }
    });
</script>
@endsection