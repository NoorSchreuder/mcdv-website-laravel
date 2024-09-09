@extends('layouts.layout')

@section('content')
   <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>{{ __('messages.bedrooms') }}</h2>
                        <div class="bt-option">
                            <a href="{{ url('/') }}">{{ __('messages.home') }}</a>
                            <a href="{{ url('/appartement') }}">{{ __('messages.apartment') }}</a>
                            <span>{{ __('messages.bedrooms') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Bedrooms Page Section Begin -->
    <section class="aboutus-page-section spad">
        <div class="container">
            <div class="about-page-text">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1">
                        <ul class="ap-services">
                            <li><i class="icon_check"></i> {{ __('messages.wifi') }}</li>
                            <li><i class="icon_check"></i> {{ __('messages.kingsize_and_single_beds') }}</li>
                            <li><i class="icon_check"></i> {{ __('messages.storage_options') }}</li>
                            <li><i class="icon_check"></i> {{ __('messages.door_to_small_terrace') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bedrooms Page Section End -->

    <section class="image-slider-section">
        <div class="container">
            <div class="row">
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/blue/slaapkamerblauw_bed.jpg">
                            <img src="img/bedrooms/blue/slaapkamerblauw_bed.jpg" alt="Badeend in zwembad" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/blue/slaapkamerblauw_deur.jpg">
                            <img src="img/bedrooms/blue/slaapkamerblauw_deur.jpg" alt="Binnenkomst vakantiehuis"
                                width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/blue/slaapkamerblauw_kastje.jpg">
                            <img src="img/bedrooms/blue/slaapkamerblauw_kastje.jpg" alt="" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/blue/slaapkamerblauw_muur.jpg">
                            <img src="img/bedrooms/blue/slaapkamerblauw_muur.jpg" alt="" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/classico/binnenkomst.jpg">
                            <img src="img/bedrooms/classico/binnenkomst.jpg" alt="Badeend in zwembad" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/classico/bed1.jpg">
                            <img src="img/bedrooms/classico/bed1.jpg" alt="Badeend in zwembad" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/classico/bed3.jpg">
                            <img src="img/bedrooms/classico/bed3.jpg" alt="" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/classico/bed4.jpg">
                            <img src="img/bedrooms/classico/bed4.jpg" alt="" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/classico/bed6.jpg">
                            <img src="img/bedrooms/classico/bed6.jpg" alt="" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/classico/kapstok.jpg">
                            <img src="img/bedrooms/classico/kapstok.jpg" alt="" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/classico/kastje.jpg">
                            <img src="img/bedrooms/classico/kastje.jpg" alt="" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/classico/stoel_muur.jpg">
                            <img src="img/bedrooms/classico/stoel_muur.jpg" alt="" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="gallery">
                    <a target="_blank" href="img/bedrooms/blue/slaapkamerblauw_bed.jpg">
                        <img src="img/bedrooms/blue/slaapkamerblauw_bed.jpg" alt="Badeend in zwembad" width="600"
                            height="400">
                    </a>
                    <div class="desc"></div>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/bedrooms/blue/slaapkamerblauw_deur.jpg">
                        <img src="img/bedrooms/blue/slaapkamerblauw_deur.jpg" alt="Binnenkomst vakantiehuis" width="600"
                            height="400">
                    </a>
                    <div class="desc"></div>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/bedrooms/blue/slaapkamerblauw_kastje.jpg">
                        <img src="img/bedrooms/blue/slaapkamerblauw_kastje.jpg" alt="" width="600"
                            height="400">
                    </a>
                    <div class="desc"></div>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/bedrooms/blue/slaapkamerblauw_muur.jpg">
                        <img src="img/bedrooms/blue/slaapkamerblauw_muur.jpg" alt="" width="600"
                            height="400">
                    </a>
                    <div class="desc"></div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <!-- white space -->
    <section class="gallery-section spad">
        <div class="container">

        </div>
    </section>
@endsection

@section('footer')

@endsection