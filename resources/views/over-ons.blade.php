@extends('layouts.layout')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>{{ __('messages.about_us') }}</h2>
                        <div class="bt-option">
                            <a href="{{ url('/') }}">{{ __('messages.home') }}</a>
                            <span>{{ __('messages.about_us') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Over ons Page Section Begin -->
    <section class="aboutus-page-section spad">
        <div class="container">
            <div class="about-page-text">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1">
                        <ul class="ap-services">
                            <li><i class="icon_check"></i> {{ __('messages.discount_accommodation') }}</li>
                            <li><i class="icon_check"></i> {{ __('messages.complimentary_breakfast') }}</li>
                            <li><i class="icon_check"></i> {{ __('messages.laundry_service') }}</li>
                            <li><i class="icon_check"></i> {{ __('messages.free_wifi') }}</li>
                            <li><i class="icon_check"></i> {{ __('messages.discount_fnb') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="about-page-services">
                <div class="row">
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p1.jpg">
                            <div class="api-text">
                                <h3>{{ __('messages.restaurant_services') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p2.jpg">
                            <div class="api-text">
                                <h3>{{ __('messages.travel_camping') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p3.jpg">
                            <div class="api-text">
                                <h3>{{ __('messages.event_party') }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Over ons Page Section End -->

    <!-- Video Section Begin -->
    <section class="video-section set-bg" data-setbg="img/video-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>{{ __('messages.discover_hotel_services') }}</h2>
                        <p>{{ __('messages.hurricane_season_message') }}</p>
                        <a href="https://www.youtube.com/watch?v=EzKkl64rRbM" class="play-btn video-popup">
                            <img src="img/play.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->
@endsection

@section('footer')

@endsection
