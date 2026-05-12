<header class="rts__main__header header__function">
    <div class="main__left">
        <div class="logo">
            <a href="index.html">
                <img src="https://html.themewant.com/greenaro/assets/images/logo/logo.svg" alt="logo">
            </a>
        </div>
    </div>

    <div class="main__menu">
        <div class="rts__main__menu">
            <nav class="mobile__menu__active">
                <ul>

                    <li>
                        <a href="{{ route('home') }}"
                            class="{{ request()->routeIs('home') ? 'active-menu' : '' }}">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}"
                            class="{{ request()->routeIs('about') ? 'active-menu' : '' }}">
                            About us
                        </a>
                    </li>

                    <li class="has-dropdown">
                        <a href="{{ route('services') }}"
                            class="{{ request()->routeIs('services') ? 'active-menu' : '' }}">
                            Service
                        </a>

                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('services') }}"
                                    class="{{ request()->routeIs('services') ? 'active-menu' : '' }}">
                                    Service
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}"
                            class="{{ request()->routeIs('contact') ? 'active-menu' : '' }}">
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