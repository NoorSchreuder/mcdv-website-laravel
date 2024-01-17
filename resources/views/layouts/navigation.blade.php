<!-- Navigation Section Begin -->
<div class="menu-item">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="nav-menu">
                    <nav class="mainmenu">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="{{ Request::is('apartment*') ? 'active' : '' }}">
                                <a href="{{ url('/apartment') }}">Appartement</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('/photos') }}">Foto's</a></li>
                                    <li><a href="{{ url('/more-information') }}">Meer informatie</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/what-to-do') }}">Wat te doen</a></li>
                            <li class="{{ Request::is('contact*') ? 'active' : '' }}">
                                <a href="{{ url('/contact') }}">Contact</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('/how-to-get-there') }}">Routebeschrijving</a></li>
                                    <!-- <li><a href="{{ url('/about-us') }}">Over ons</a></li> -->
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="nav-right search-switch">
                        <i class="icon_search"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navigation Section End -->
