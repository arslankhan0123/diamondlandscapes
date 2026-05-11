<header class="rts__main__header header__function">
    <div class="main__left">
        <div class="logo">
            <a href="index.html"><img src="https://html.themewant.com/greenaro/assets/images/logo/logo.svg" alt="logo"></a>
        </div>
    </div>
    <div class="main__menu">
        <div class="rts__main__menu">
            <nav class="mobile__menu__active">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About us</a></li>
                    <li class="has-dropdown">
                        <a href="{{ route('services') }}">Service</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('services') }}">Service</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="main__right">
        <div class="main__right__btn">
            <a href="{{ route('contact') }}" class="rts-btn btn-primary">Contact us <i class="fa-regular fa-arrow-right"></i></a>
        </div>
        <div class="menu__btn offcanvas-toggle d-lg-none">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
</header>