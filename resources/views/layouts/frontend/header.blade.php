<header class="rts__main__header header__function" style="background-color: #001a19;">
    <div class="main__left">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('logo.png') }}" class="mb-2 mt-2" alt="logo"
                    style="max-height: 70px; width: auto; transition: all 0.3s ease;">
            </a>
        </div>
    </div>

    <div class="main__menu">
        <div class="rts__main__menu">
            <nav class="mobile__menu__active">
                <ul>

                    <li>
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active-menu' : '' }}"
                            style="color: white;">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active-menu' : '' }}"
                            style="color: white;">
                            About
                        </a>
                    </li>

                    <li class="has-dropdown">
                        <a href="{{ route('services') }}"
                            class="{{ request()->routeIs('services') ? 'active-menu' : '' }}" style="color: white;">
                            Services
                        </a>

                        <ul class="sub-menu">
                            @foreach($header_categories as $category)
                                @if(stripos($category->name, 'irrigation') !== false)
                                    <li class="menu-item-category" style="cursor: pointer;">
                                        <a href="{{ route('services') }}?category={{ $category->slug }}" class="category-label" style="display: block; text-decoration: none;">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @else
                                    <li class="menu-item-category">
                                        <span class="category-label">{{ $category->name }}</span>
                                    </li>
                                    @foreach($category->services as $service)
                                        <li class="menu-item-service">
                                            <a href="{{ route('services.details', $service->id) }}">
                                                <i class="fa-solid fa-arrow-right-long"></i> {{ $service->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            @endforeach
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('gallery') }}"
                            class="{{ request()->routeIs('gallery') ? 'active-menu' : '' }}" style="color: white;">
                            Gallery
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('quote') }}"
                            class="{{ request()->routeIs('quote') ? 'active-menu' : '' }}" style="color: white;">
                            Get a Quote
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}"
                            class="{{ request()->routeIs('contact') ? 'active-menu' : '' }}" style="color: white;">
                            Contact
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>

    <div class="main__right">
        <div class="main__right__btn">
            <a href="{{ route('contact') }}" class="rts-btn btn-primary">
                Contact us
                <i class="fa-regular fa-arrow-right"></i>
            </a>
        </div>

        <div class="menu__btn offcanvas-toggle d-lg-none">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
</header>

<style>
    .active-menu {
        color: #f3d77a !important;
        /* Light yellow */
        font-weight: 700 !important;
    }

    .category-label {
        display: block;
        padding: 8px 20px !important;
        font-weight: 800 !important;
        text-transform: uppercase !important;
        font-size: 12px !important;
        letter-spacing: 0.5px;
        color: #001a19 !important;
        background: #f8f9fa;
        border-bottom: 1px solid #eee;
    }

    .menu-item-service a {
        padding: 6px 20px 6px 30px !important;
        font-size: 14px !important;
        transition: all 0.3s ease !important;
        line-height: 1.4 !important;
    }

    .menu-item-service a:hover {
        padding-left: 35px !important;
        color: #34A853 !important;
    }

    .menu-item-service a i {
        font-size: 10px;
        margin-right: 8px;
        opacity: 0.6;
    }

    .sub-menu {
        min-width: 260px !important;
        max-height: 350px !important;
        overflow-y: auto !important;
        padding: 0 !important;
        border-radius: 8px !important;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
        border: 1px solid #eee !important;
    }

    /* Custom Scrollbar for Dropdown */
    .sub-menu::-webkit-scrollbar {
        width: 6px;
    }

    .sub-menu::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    .sub-menu::-webkit-scrollbar-thumb {
        background: #001a19;
        border-radius: 10px;
    }

    .sub-menu::-webkit-scrollbar-thumb:hover {
        background: #34A853;
    }
</style>