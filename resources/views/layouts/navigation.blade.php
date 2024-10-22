<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="icon_close"></i>
    </div>
    <div class="search-icon search-switch">
        <i class="icon_search"></i>
    </div>
    <div class="header-configure-area">
        <a href="https://it.airbnb.ch/rooms/1005599939245778737?guests=1&adults=1&s=67&unique_share_id=1235b04c-fb57-4839-9ae9-69caf380312d"
            class="bk-btn">{{ __('messages.book_now') }}</a>
        <!-- Taalwissel -->
        <div class="language-option">
            <!-- Dynamische vlag en taalcode -->
            @php
                $currentLocale = app()->getLocale();
                $flags = [
                    'nl' => ['src' => 'img/nederland.png', 'code' => 'NL'],
                    'en' => ['src' => 'img/engels.png', 'code' => 'EN'],
                    'it' => ['src' => 'img/italie.png', 'code' => 'IT'], 
                    'fr' => ['src' => 'img/frankrijk.png', 'code' => 'FR']
                ];
                $currentFlag = $flags[$currentLocale] ?? $flags['nl']; 
            @endphp
            <img src="{{ $currentFlag['src'] }}" alt="flag" style="width: 26px;">
            <span>{{ $currentFlag['code'] }} <i class="fa fa-angle-down"></i></span>
            <div class="flag-dropdown">
                <ul>
                    @foreach ($flags as $locale => $flag)
                        <li class="{{ $currentLocale === $locale ? 'active' : '' }}">
                            <a href="{{ route('set-locale', ['locale' => $locale]) }}">
                                {{ $flag['code'] }} 
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <nav class="mainmenu mobile-menu">
        <ul>
            <li><a href="{{ url('/') }}">{{ __('messages.home') }}</a></li>
            <li><a href="{{ url('/appartement') }}">{{ __('messages.apartment') }}</a>
                <ul class="dropdown">
                    <li><a href="{{ url('/fotos') }}">{{ __('messages.photos') }}</a></li>
                    <li><a href="{{ url('/meer-informatie') }}">{{ __('messages.more_info') }}</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/wat-te-doen') }}">{{ __('messages.what_to_do') }}</a></li>
            <li class="active"><a href="{{ url('/contact') }}">{{ __('messages.contact') }}</a>
                <ul class="dropdown">
                    <li><a href="{{ url('/routebeschrijving') }}">{{ __('messages.route_description') }}</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="top-social">
        <a href="https://www.instagram.com/il_bandito_arancione?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fa fa-instagram"></i></a>
    </div>
    <ul class="top-widget">
        <li><i class="fa fa-phone"></i> +31 6 81 02 29 85</li>
        <li><i class="fa fa-envelope"></i> ilbanditoarancione@gmail.com</li>
    </ul>
</div>

<header class="header-section header-normal">
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="tn-left">
                        <li><i class="fa fa-phone"></i> +31 6 81 02 29 85</li>
                        <li><i class="fa fa-envelope"></i> ilbanditoarancione@gmail.com</li>
                    </ul>
                </div>
                <div class="col-lg-6 header-configure-area">
                    <div class="tn-right">
                        <div class="top-social">
                            <a href="https://www.instagram.com/il_bandito_arancione?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        {{-- <div class="header-configure-area"> --}}
                             <!-- Boekingsknop -->
                             <a href="https://it.airbnb.ch/rooms/1005599939245778737?guests=1&adults=1&s=67&unique_share_id=1235b04c-fb57-4839-9ae9-69caf380312d" class="bk-btn">
                                {{ __('messages.book_now') }}
                            </a>
                            <!-- Taalwissel -->
                            <div class="language-option">
                                <!-- Dynamische vlag en taalcode -->
                                @php
                                    $currentLocale = app()->getLocale();
                                    $flags = [
                                        'nl' => ['src' => 'img/nederland.png', 'code' => 'NL'],
                                        'en' => ['src' => 'img/engels.png', 'code' => 'EN'],
                                        'it' => ['src' => 'img/italie.png', 'code' => 'IT'], 
                                        'fr' => ['src' => 'img/frankrijk.png', 'code' => 'FR']
                                    ];
                                    $currentFlag = $flags[$currentLocale] ?? $flags['nl']; 
                                @endphp
                                <img src="{{ $currentFlag['src'] }}" alt="flag" style="width: 26px;">
                                <span>{{ $currentFlag['code'] }} <i class="fa fa-angle-down"></i></span>
                                <div class="flag-dropdown">
                                    <ul>
                                        @foreach ($flags as $locale => $flag)
                                            <li class="{{ $currentLocale === $locale ? 'active' : '' }}">
                                                <a href="{{ route('set-locale', ['locale' => $locale]) }}">
                                                    {{ $flag['code'] }} 
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="img/logo.png" class="logo-menu" alt="Logo Il Bandito Arancione" style="width: 125px;">
                        </a>
                    </div>                    
                </div>
                <div class="col-lg-10">
                    <div class="nav-menu">
                        <nav class="mainmenu">
                            <ul>
                                <li><a href="{{ url('/') }}">{{ __('messages.home') }}</a></li>
                                <li><a href="{{ url('/appartement') }}">{{ __('messages.apartment') }}</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/fotos') }}">{{ __('messages.photos') }}</a></li>
                                        <li><a href="{{ url('/meer-informatie') }}">{{ __('messages.more_info') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/wat-te-doen') }}">{{ __('messages.what_to_do') }}</a></li>
                                <li><a href="{{ url('/contact') }}">{{ __('messages.contact') }}</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/routebeschrijving') }}">{{ __('messages.route_description') }}</a></li>
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
</header>
