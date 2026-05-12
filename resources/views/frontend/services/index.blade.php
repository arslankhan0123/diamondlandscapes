@extends('layouts.frontend.main')
@section('title', 'Services')

@section('content')
    <!-- rts breadcrumb area start -->
    <section class="rts__breadcrumb__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts__breadcrumb__content"
                        data-bg-src="https://html.themewant.com/greenaro/assets/images/breadcrumb/bg.webp">
                        <ul class="list">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li><a href="{{ route('services') }}">Our Services</a></li>
                            @if($selected_category)
                                <li><i class="fa-solid fa-chevron-right"></i></li>
                                <li><a href="#">{{ $selected_category->name }}</a></li>
                            @endif
                        </ul>
                        <h2 class="title rts-text-anime">{{ $selected_category ? $selected_category->name : 'Our Services' }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- rts breadcrumb area end -->

    <!-- rts service area start -->
    <section class="rts-service-inner-area rts-section-gap ">
        <div class="container">
            <div class="rts-service-inner-wrapper">
                <div class="row g-30">
                    @forelse($services as $service)
                    <div class="col-xxl-3 col-xl-4 col-md-6">
                        <div class="single-service-inner wow fadeInUp" data-wow-delay=".{{ ($loop->index % 9) + 2 }}s" style="padding: 0; overflow: hidden; border: 1px solid #eee; height: 100%; background: #fff; transition: all 0.3s ease; border-radius: 12px;">
                            <div class="thumbnail">
                                <a href="{{ route('services.details', $service->id) }}">
                                    @if($service->feature_image)
                                        <img src="{{ asset($service->feature_image) }}" alt="{{ $service->name }}" style="width: 100%; height: 220px; object-fit: cover;">
                                    @else
                                        <div style="width: 100%; height: 220px; background: #f4f4f4; display: flex; align-items: center; justify-content: center;">
                                            <i class="fa-solid fa-solar-panel" style="font-size: 50px; color: #004638;"></i>
                                        </div>
                                    @endif
                                </a>
                            </div>
                            <div class="content" style="padding: 20px;">
                                <h3 class="title" style="font-size: 20px; margin-bottom: 10px;"><a href="{{ route('services.details', $service->id) }}">{{ $service->name }}</a></h3>
                                <p class="desc" style="font-size: 14px; color: #666; line-height: 1.5;">{{ Str::limit($service->short_description, 100) }}</p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center">
                        <h3>No services found.</h3>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!-- rts service area end -->
@endsection