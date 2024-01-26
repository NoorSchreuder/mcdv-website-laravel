@extends('layouts.layout')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Badkamers</h2>
                        <div class="bt-option">
                            <a href="{{ url('/') }}">Home</a>
                            <a href="{{ url('/appartement') }}">Appartement</a>
                            <span>Badkamers</span>
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
                            <li><i class="icon_check"></i> Wastafel</li>
                            <li><i class="icon_check"></i> Douche</li>
                            <li><i class="icon_check"></i> Toilet</li>
                            <li><i class="icon_check"></i> Bidet</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Over ons Page Section End -->

        <!-- Image Slider Section Begin -->
        <section class="image-slider-section">
            <div class="container">
                <div class="row">
                    <div class="accordion-content">
                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bathrooms/classico/badkamergordijnopen.jpg">
                                    <img src="img/bathrooms/classico/badkamergordijnopen.jpg" alt="Badeend in zwembad"
                                        width="600" height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bathrooms/classico/badkamerwc.jpg">
                                    <img src="img/bathrooms/classico/badkamerwc.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bathrooms/classico/wasbakwc.jpg">
                                    <img src="img/bathrooms/classico/wasbakwc.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bathrooms/classico/wastafel.jpg">
                                    <img src="img/bathrooms/classico/wastafel.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bathrooms/nieuw/binnenkomst.jpg">
                                    <img src="img/bathrooms/nieuw/binnenkomst.jpg" alt="Badeend in zwembad" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bathrooms/nieuw/haakjesbadkamer.jpg">
                                    <img src="img/bathrooms/nieuw/haakjesbadkamer.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bathrooms/nieuw/overview_badkamernieuw.jpg">
                                    <img src="img/bathrooms/nieuw/overview_badkamernieuw.jpg" alt="Northern Lights"
                                        width="600" height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bathrooms/nieuw/wasbakdichtbijnieuw.jpg">
                                    <img src="img/bathrooms/nieuw/wasbakdichtbijnieuw.jpg" alt="Northern Lights"
                                        width="600" height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bathrooms/nieuw/wasbaknieuw.jpg">
                                    <img src="img/bathrooms/nieuw/wasbaknieuw.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bathrooms/nieuw/wasbakwcnieuw.jpg">
                                    <img src="img/bathrooms/nieuw/wasbakwcnieuw.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- Image Slider Section End -->
@endsection

@section('footer')

@endsection