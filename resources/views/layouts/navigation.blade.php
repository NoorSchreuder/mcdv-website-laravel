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
                            <li class="{{ Request::is('appartement*') ? 'active' : '' }}">
                                <a href="{{ url('/appartement') }}">Appartement</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('/fotos') }}">Foto's</a></li>
                                    <li><a href="{{ url('/meer-informatie') }}">Meer informatie</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/wat-te-doen') }}">Wat te doen</a></li>
                            <li class="{{ Request::is('contact*') ? 'active' : '' }}">
                                <a href="{{ url('/routebeschrijving') }}">Routebeschrijving</a>
                                {{-- <a href="{{ url('/contact') }}">Contact</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('/routebeschrijving') }}">Routebeschrijving</a></li>
                                    <!-- <li><a href="{{ url('/over-ons') }}">Over ons</a></li> -->
                                </ul> --}}
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
