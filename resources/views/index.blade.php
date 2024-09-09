@extends('layouts.layout')

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>{{ __('messages.welcome') }}</h1>
                        <a href="https://www.vrbo.com/nl-nl/vakantiewoning/p11405700?chkin=2024-05-11&chkout=2024-05-18&d1=2024-05-11&d2=2024-05-18&startDate=2024-05-11&endDate=2024-05-18&x_pwa=1&rfrr=HSR&pwa_ts=1697727574882&referrerUrl=aHR0cHM6Ly93d3cudnJiby5jb20vSG90ZWwtU2VhcmNo&useRewards=true&adults=1&children=&regionId=6025720&destination=Monte+Castello+di+Vibio%2C+Umbri%C3%AB%2C+Itali%C3%AB&destType=MARKET&latLong=42.837948%2C12.348275&privacyTrackingState=CAN_NOT_TRACK&searchId=d014ac90-3947-463d-a5fb-40417f04e673&sort=RECOMMENDED&top_dp=1346&top_cur=EUR&userIntent=&selectedRoomType=99714158&selectedRatePlan=0001308e9440e1094be4ab23465b24aff073&expediaPropertyId=99714158"
                            class="primary-btn">{{ __('messages.book_now') }}</a>
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
                            {{ __('messages.learn_more') }}
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
                            <p>See how to get to us!</p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>{{ __('messages.catering_service') }}</h4>
                        <p>Available upon request</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-024-towel"></i>
                        <h4>{{ __('messages.washing_machine') }}</h4>
                        <p>Available for a fee.</p>
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

    <!-- Testimonial Section Begin -->
    <!-- <section class="testimonial-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>{{ __('messages.testimonial') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="testimonial-slider owl-carousel">
                            <div class="ts-item">
                                <p>After a construction project took longer than expected, my husband, my daughter and I
                                    needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                                    city, neighborhood and the types of housing options available and absolutely love our
                                    vacation at Sona Hotel.</p>
                                <div class="ti-author">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                    <h5> - Alexander Vasquez</h5>
                                </div>
                                <img src="img/testimonial-logo.png" alt="">
                            </div>
                            <div class="ts-item">
                                <p>After a construction project took longer than expected, my husband, my daughter and I
                                    needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                                    city, neighborhood and the types of housing options available and absolutely love our
                                    vacation at Sona Hotel.</p>
                                <div class="ti-author">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                    <h5> - Alexander Vasquez</h5>
                                </div>
                                <img src="img/testimonial-logo.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- Testimonial Section End -->

    <!-- White Space -->
    <section class="gallery-section spad">
        <div class="container">
        </div>
    </section>
@endsection

@section('footer')
@endsection
