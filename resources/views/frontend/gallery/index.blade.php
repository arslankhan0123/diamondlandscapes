@extends('layouts.frontend.main')

@section('title', 'Gallery | Diamond Landscapes')

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
<div class="rts-gallery-area rts-section-gap">
    <div class="container">
        <div class="row mb--50">
            <div class="col-lg-12">
                <div class="filter-button-group d-flex flex-wrap justify-content-center gap-3">
                    <button class="filter-btn active" data-filter="all">All Projects</button>
                    <button class="filter-btn" data-filter="hardscape">Hardscape</button>
                    <button class="filter-btn" data-filter="decks">Deck Projects</button>
                    <button class="filter-btn" data-filter="commercial">Commercial Maintenance</button>
                    <button class="filter-btn" data-filter="irrigation">Irrigation Installs</button>
                    <button class="filter-btn" data-filter="beforeafter">Before & After</button>
                </div>
            </div>
        </div>
        <div class="row g-5 mt-1" id="gallery-grid">
            <!-- Hardscape -->
            <div class="col-lg-4 col-md-6 gallery-item hardscape">
                <div class="single-gallery-item">
                    <img src="{{ asset('frontend/assets/images/5.jpg') }}" alt="Hardscape Project" style="border-radius: 15px; width: 100%; height: 300px; object-fit: cover;">
                    <div class="content">
                        <h5 class="title">Custom Stone Patio</h5>
                        <span>Hardscape</span>
                    </div>
                </div>
            </div>
            <!-- Decks -->
            <div class="col-lg-4 col-md-6 gallery-item decks">
                <div class="single-gallery-item">
                    <img src="{{ asset('frontend/assets/images/6.jpg') }}" alt="Deck Project" style="border-radius: 15px; width: 100%; height: 300px; object-fit: cover;">
                    <div class="content">
                        <h5 class="title">Modern Cedar Deck</h5>
                        <span>Decks</span>
                    </div>
                </div>
            </div>
            <!-- Commercial -->
            <div class="col-lg-4 col-md-6 gallery-item commercial">
                <div class="single-gallery-item">
                    <img src="{{ asset('frontend/assets/images/7.jpg') }}" alt="Commercial Maintenance" style="border-radius: 15px; width: 100%; height: 300px; object-fit: cover;">
                    <div class="content">
                        <h5 class="title">Office Park Maintenance</h5>
                        <span>Commercial</span>
                    </div>
                </div>
            </div>
            <!-- Irrigation -->
            <div class="col-lg-4 col-md-6 gallery-item irrigation">
                <div class="single-gallery-item">
                    <img src="{{ asset('frontend/assets/images/3.jpg') }}" alt="Irrigation Install" style="border-radius: 15px; width: 100%; height: 300px; object-fit: cover;">
                    <div class="content">
                        <h5 class="title">Smart Sprinkler System</h5>
                        <span>Irrigation</span>
                    </div>
                </div>
            </div>
            <!-- Before & After -->
            <div class="col-lg-4 col-md-6 gallery-item beforeafter">
                <div class="single-gallery-item">
                    <img src="{{ asset('frontend/assets/images/2.jpg') }}" alt="Before & After" style="border-radius: 15px; width: 100%; height: 300px; object-fit: cover;">
                    <div class="content">
                        <h5 class="title">Lawn Restoration</h5>
                        <span>Before & After</span>
                    </div>
                </div>
            </div>
            <!-- More items for variety -->
            <div class="col-lg-4 col-md-6 gallery-item hardscape">
                <div class="single-gallery-item">
                    <img src="{{ asset('frontend/assets/images/1.jpg') }}" alt="Hardscape Project" style="border-radius: 15px; width: 100%; height: 300px; object-fit: cover;">
                    <div class="content">
                        <h5 class="title">Retaining Wall</h5>
                        <span>Hardscape</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- gallery area end -->

<style>
    .filter-btn {
        background: linear-gradient(135deg, #1e3c2f, #2d5a40);
        border: none;
        color: #fff;
        padding: 10px 25px;
        border-radius: 50px;
        transition: all 0.3s ease;
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .filter-btn:hover,
    .filter-btn.active {
        background: linear-gradient(135deg, #34A853, #2d8a46);
        transform: translateY(-2px);
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

    .gallery-item {
        transition: all 0.5s ease;
    }

    .gallery-item.hide {
        display: none;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active class
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.getAttribute('data-filter');

                galleryItems.forEach(item => {
                    if (filter === 'all' || item.classList.contains(filter)) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 400);
                    }
                });
            });
        });
    });
</script>
@endsection