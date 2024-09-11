<footer class="footer-section">
    <div class="container">
        <div class="footer-text">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ft-about">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="img/logo.png" alt="Logo" height="100" width="50">
                            </a>
                        </div>
                        <p> {{ __('messages.description') }} </p>
                        <div class="fa-social">
                            <!-- <a href="#"><i class="fa fa-tripadvisor"></i></a> -->
                            <a href="https://www.instagram.com/il_bandito_arancione?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="ft-contact">
                        <h6>{{ __('messages.contact_title') }}</h6>
                        <ul>
                            <li>+31 6 81 02 29 85</li>
                            <li>ilbanditoarancione@gmail.com</li>
                            <li>Via del Furioso, 28, 06057 <br> Monte Castello di Vibio</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <!-- Taalkeuze sectie -->
                    <div class="ft-contact">
                        <h6>{{ __('messages.language_choice') }}</h6>
                        <ul>
                            <li><a href="{{ route('set-locale', ['locale' => 'nl']) }}">{{ __('messages.dutch') }}</a></li>
                            <li><a href="{{ route('set-locale', ['locale' => 'en']) }}">{{ __('messages.english') }}</a></li>
                            <li><a href="{{ route('set-locale', ['locale' => 'it']) }}">{{ __('messages.italiano') }}</a></li>
                            <li><a href="{{ route('set-locale', ['locale' => 'fr']) }}">{{ __('messages.france') }}</a></li>
                            <!-- Voeg meer talen toe indien nodig -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <ul>
                        <li><a href="{{ url('/') }}">{{ __('messages.home') }}</a></li>
                        <li><a href="{{ url('/appartement') }}">{{ __('messages.apartment') }}</a></li>
                        <li><a href="{{ url('/wat-te-doen') }}">{{ __('messages.activities') }}</a></li>
                        <li><a href="{{ url('/contact') }}">{{ __('messages.contact') }}</a></li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="co-text">
                        <p>
                            {{ __('messages.copyright') }} &copy;
                            <script>document.write(new Date().getFullYear());</script> {{ __('messages.rights') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search model Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Zoek hier...">
        </form>
    </div>
</div>
<!-- Search model end -->
