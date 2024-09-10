@extends('layouts.layout')

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>{{ __('messages.welcome') }}</h1>
                        <a href="{{ __('messages.booking_link') }}" class="primary-btn">{{ __('messages.book_now') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/homepagina/badeend.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/homepagina/voorkantdeur.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/homepagina/woonkamer.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/homepagina/tafel.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/homepagina/zwembad.jpg"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="about-text text-center">
                        <div class="section-title">
                            <span>{{ __('messages.about_us') }}</span>
                            <h2>{{ __('messages.il_bandito_arancione') }}</h2>
                        </div>
                        <p class="f-para">
                            {{ __('messages.welcome_message') }}
                        </p>
                        <p class="text-center">
                            {{ __('messages.learn_more_text') }}
                        </p>
                        <a href="{{ url('/appartement') }}" class="primary-btn about-btn">{{ __('messages.learn_more') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>{{ __('messages.what_we_do') }}</span>
                        <h2>{{ __('messages.discover_our_services') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-036-parking"></i>
                        <a href="{{ url('/routebeschrijving') }}">
                            <h4>{{ __('messages.directions') }}</h4>
                            <p>{{ __('messages.directions_text') }}</p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>{{ __('messages.catering_service') }}</h4>
                        <p>{{ __('messages.catering_service_text') }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-024-towel"></i>
                        <h4>{{ __('messages.washing_machine') }}</h4>
                        <p>{{ __('messages.washing_machine_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/bedrooms/classico/bed10.jpg">
                            <div class="hr-text">
                                <h3>{{ __('messages.bedrooms') }}</h3>
                                <a href="{{ url('/slaapkamer') }}" class="primary-btn">{{ __('messages.more_details') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/bathrooms/nieuw/overview_badkamernieuw.jpg">
                            <div class="hr-text">
                                <h3>{{ __('messages.bathrooms') }}</h3>
                                <a href="{{ url('/badkamer') }}" class="primary-btn">{{ __('messages.more_details') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/huisje/overviewliving.jpg">
                            <div class="hr-text">
                                <h3>{{ __('messages.living_room') }}</h3>
                                <a href="{{ url('/woonkamer') }}" class="primary-btn">{{ __('messages.more_details') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/outside/buitened.jpg">
                            <div class="hr-text">
                                <h3>{{ __('messages.outside') }}</h3>
                                <a href="{{ url('/buiten') }}" class="primary-btn">{{ __('messages.more_details') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Room Section End -->
@endsection

@section('footer')
@endsection
