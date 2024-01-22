@extends('layouts.layout')
<style>
    div.gallery img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 15px;
        text-align: center;
    }


    .responsive {
        padding: 0 6px;
        float: left;
        width: 24.99999%;
    }

    @media only screen and (max-width: 700px) {
        .responsive {
            width: 49.99999%;
            margin: 6px 0;
        }
    }

    @media only screen and (max-width: 500px) {
        .responsive {
            width: 100%;
        }
    }

    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }
    .gallery img:hover {
        transform: scale(1.2);
        /* You can adjust the scaling factor as needed */
        transition: transform 0.3s ease;
        /* Optional: Add a smooth transition effect */
    }
</style>

@section('content')
   <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Slaapkamers</h2>
                        <div class="bt-option">
                            <a href="{{ url('/index') }}">Home</a>
                            <a href="{{ url('/appartement') }}">Appartement</a>
                            <span>Slaapkamers</span>
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
                            <li><i class="icon_check"></i> Wifi</li>
                            <li><i class="icon_check"></i> Kingsize bed & 2 eenpersoonsbedden </li>
                            <li><i class="icon_check"></i> Opbergmogelijkheden</li>
                            <li><i class="icon_check"></i> Openslaande deuren naar klein terras</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Over ons Page Section End -->

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
                            <img src="img/bedrooms/blue/slaapkamerblauw_kastje.jpg" alt="Northern Lights" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/blue/slaapkamerblauw_muur.jpg">
                            <img src="img/bedrooms/blue/slaapkamerblauw_muur.jpg" alt="Northern Lights" width="600"
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
                            <img src="img/bedrooms/classico/bed3.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/classico/bed4.jpg">
                            <img src="img/bedrooms/classico/bed4.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/classico/bed6.jpg">
                            <img src="img/bedrooms/classico/bed6.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/classico/kapstok.jpg">
                            <img src="img/bedrooms/classico/kapstok.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/classico/kastje.jpg">
                            <img src="img/bedrooms/classico/kastje.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/classico/stoel_muur.jpg">
                            <img src="img/bedrooms/classico/stoel_muur.jpg" alt="Northern Lights" width="600"
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
                        <img src="img/bedrooms/blue/slaapkamerblauw_kastje.jpg" alt="Northern Lights" width="600"
                            height="400">
                    </a>
                    <div class="desc"></div>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/bedrooms/blue/slaapkamerblauw_muur.jpg">
                        <img src="img/bedrooms/blue/slaapkamerblauw_muur.jpg" alt="Northern Lights" width="600"
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