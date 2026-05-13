<header class="rts__main__header header__function" style="background-color: #001a19;">
    <div class="main__left">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('logo.png') }}" class="mb-2 mt-2" alt="logo" style="max-height: 50px; width: auto; transition: all 0.3s ease;">
            </a>
        </div>
    </div>

    <div class="main__menu">
        <div class="rts__main__menu">
            <nav class="mobile__menu__active">
                <ul>

                    <li>
                        <a href="{{ route('home') }}"
                            class="{{ request()->routeIs('home') ? 'active-menu' : '' }}" style="color: white;">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}"
                            class="{{ request()->routeIs('about') ? 'active-menu' : '' }}" style="color: white;">
                            About us
                        </a>
                    </li>

                    <li class="has-dropdown">
                        <a href="{{ route('services') }}"
                            class="{{ request()->routeIs('services') ? 'active-menu' : '' }}" style="color: white;">
                            Services
                        </a>

                        <ul class="sub-menu">
                            @foreach($header_categories as $category)
                            <li>
                                <a href="{{ route('services', ['category' => $category->slug]) }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
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
</style>