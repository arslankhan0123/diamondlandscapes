@extends('layouts.frontend.main')
@section('title', 'Service Details')

@section('content')
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

        <!-- https://themejunction.net/html/bexon/demo/assets/images/bg/pheader-bg.webp -->
        <section class="tj-page-header section-gap-x" data-bg-image="{{asset($service->feature_image)}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tj-page-header-content text-center">
                            <h1 class="tj-page-title">Service Details</h1>
                            <div class="tj-page-link">
                                <span><i class="tji-home"></i></span>
                                <span>
                                    <a href="{{ route('home') }}">Home</a>
                                </span>
                                <span><i class="tji-arrow-right"></i></span>
                                <span>
                                    <span>Service Details</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- https://themejunction.net/html/bexon/demo/assets/images/shape/pheader-overlay.webp -->
            <div class="page-header-overlay" data-bg-image="{{asset($service->feature_image)}}"></div>
        </section>
        <!-- end: Breadcrumb Section -->

        <!-- start: Blog Section -->
        <section class="tj-blog-section section-gap slidebar-stickiy-container">
            <div class="container">
                <div class="row row-gap-5">
                    <div class="col-lg-8">
                        <div class="post-details-wrapper">
                            <div class="blog-images wow fadeInUp" data-wow-delay=".1s">
                                <img src="{{asset($service->feature_image)}}" alt="Images">
                            </div>
                            <h2 class="title title-anim">{{ $service->name }}</h2>
                            <div class="blog-text">
                                <p class="wow fadeInUp" data-wow-delay=".3s">{!! $service->long_description !!}</p>
                                <!-- <ul class="wow fadeInUp" data-wow-delay=".3s">
                                    <li><span><i class="tji-check"></i></span>Personalization at Scale</li>
                                    <li><span><i class="tji-check"></i></span>Improved Customer Retention</li>
                                    <li><span><i class="tji-check"></i></span>Data-Driven Insights</li>
                                    <li><span><i class="tji-check"></i></span>Omni-channel Integration</li>
                                    <li><span><i class="tji-check"></i></span>Customer Retention</li>
                                    <li><span><i class="tji-check"></i></span>Support Optimization</li>
                                    <li><span><i class="tji-check"></i></span>Proactive Engagement</li>
                                </ul> -->
                                @if($service->galleries->count() > 0)
                                    <div class="images-wrap">
                                        <div class="row">
                                            @foreach($service->galleries as $gallery)
                                                <div class="col-sm-6">
                                                    <div class="image-box wow fadeInUp" data-wow-delay=".{{ $loop->index + 3 }}s">
                                                        <img src="{{asset($gallery->image)}}" alt="Gallery Image"
                                                            style="width: 100%; height: 250px; object-fit: cover; border-radius: 12px;">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                <h3 class="wow fadeInUp" data-wow-delay=".3s">Our Range of Customer Services</h3>
                                <p class="wow fadeInUp" data-wow-delay=".3s">At Bexon, we don't just focus on solving
                                    customer
                                    problems—we focus on creating experiences that
                                    delight and build lasting relationships. Whether it's through improving customer service
                                    operations,
                                    leveraging technology, or designing more engaging digital experiences, our team is here
                                    to help
                                    you
                                    exceed your customers' expectations every time. We help you understand your customers
                                    deeply,
                                    optimize
                                    their experience.</p>                                @if($service->highlights->count() > 0)
                                <div class="details-content-box">
                                    @foreach($service->highlights as $highlight)
                                    @php $delays = ['.2s', '.4s', '.6s']; @endphp
                                    <div class="service-details-item wow fadeInUp" data-wow-delay="{{ $delays[$loop->index] ?? '.2s' }}">
                                        <span class="number">{{ sprintf('%02d', $loop->iteration) }}.</span>
                                        <h6 class="title">{{ $highlight->title }}</h6>
                                        <div class="desc">
                                            <p>{{ $highlight->description }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                                @if($service->faqs->count() > 0)
                                    <h3 class="wow fadeInUp" data-wow-delay=".3s">Frequently asked questions</h3>
                                    <div class="accordion tj-faq style-2" id="faqOne">
                                        @foreach($service->faqs as $faq)
                                            <div class="accordion-item {{ $loop->first ? 'active' : '' }} wow fadeInUp"
                                                data-wow-delay=".3s">
                                                <button class="faq-title {{ $loop->first ? '' : 'collapsed' }}" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-{{ $faq->id }}"
                                                    aria-expanded="{{ $loop->first ? 'true' : 'false' }}">
                                                    {{ $faq->question }}
                                                </button>
                                                <div id="faq-{{ $faq->id }}" class="collapse {{ $loop->first ? 'show' : '' }}"
                                                    data-bs-parent="#faqOne">
                                                    <div class="accordion-body faq-text">
                                                        <p>{{ $faq->answer }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                            </div>
                            <div class="tj-post__navigation mb-0 wow fadeInUp" data-wow-delay=".3s">
                                <!-- previous post -->
                                <div class="tj-nav__post previous">
                                    <div class="tj-nav-post__nav prev_post">
                                        @if($prevService)
                                            <a href="{{ route('services.details', ['id' => $prevService->id]) }}">
                                                <span><i class="tji-arrow-left"></i></span>{{ $prevService->name }}
                                            </a>
                                        @else
                                            <span class="text-muted"><i class="tji-arrow-left"></i> No Previous</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="tj-nav-post__grid">
                                    <a href="{{ route('services') }}"><i class="tji-window"></i></a>
                                </div>
                                <!-- next post -->
                                <div class="tj-nav__post next">
                                    <div class="tj-nav-post__nav next_post">
                                        @if($nextService)
                                            <a href="{{ route('services.details', ['id' => $nextService->id]) }}">
                                                {{ $nextService->name }}<span><i class="tji-arrow-right"></i></span>
                                            </a>
                                        @else
                                            <span class="text-muted">No Next <i class="tji-arrow-right"></i></span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tj-main-sidebar slidebar-stickiy">
                            <div class="tj-sidebar-widget service-categories wow fadeInUp" data-wow-delay=".1s">
                                <h4 class="widget-title">More services</h4>
                                <ul>
                                    @foreach ($services as $item)
                                        <li><a class="{{ $item->id == $service->id ? 'active' : '' }}"
                                                href="{{ route('services.details', ['id' => $item->id]) }}">{{ $item->name }}<span
                                                    class="icon"><i class="tji-arrow-right"></i></span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tj-sidebar-widget widget-feature-item wow fadeInUp" data-wow-delay=".3s">
                                <div class="feature-box">
                                    <div class="feature-content">
                                        <h2 class="title">Modern</h2>
                                        <span>Home Makeover</span>
                                        <a class="read-more feature-contact" href="tel:+14038300054">
                                            <i class="tji-phone-3"></i>
                                            <span>+1 (403) 830-0054</span>
                                        </a>
                                    </div>
                                    <div class="feature-images">
                                        <img src="https://themejunction.net/html/bexon/demo/assets/images/service/service-ad.webp"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Blog Section -->

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