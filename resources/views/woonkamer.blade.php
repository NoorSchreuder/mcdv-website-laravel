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
                    <h2>Woonkamer-keuken</h2>
                    <div class="bt-option">
                        <a href="./index.html">Home</a>
                        <a href="./apartment.html">Appartement</a>
                        <span>Woonkamer-keuken</span>
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
                        <li><i class="icon_check"></i> Eettafel </li>
                        <li><i class="icon_check"></i> Slaapbank </li>
                        <li><i class="icon_check"></i> Volledig ingerichte keuken</li>
                        <li><i class="icon_check"></i> Servieskast</li>
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
                        <a target="_blank" href="img/huisje/binnenkomst.jpg">
                            <img src="img/huisje/binnenkomst.jpg" alt="Badeend in zwembad" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/huisje/binnenkomsttafel.jpg">
                            <img src="img/huisje/binnenkomsttafel.jpg" alt="Binnenkomst vakantiehuis" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/huisje/IMG_6427.jpg">
                            <img src="img/huisje/IMG_6427.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/huisje/IMG_6429.jpg">
                            <img src="img/huisje/IMG_6429.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/huisje/IMG_6432.jpg">
                            <img src="img/huisje/IMG_6432.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/huisje/IMG_6433.jpg">
                            <img src="img/huisje/IMG_6433.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/huisje/IMG_6435.jpg">
                            <img src="img/huisje/IMG_6435.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/huisje/IMG_6439.jpg">
                            <img src="img/huisje/IMG_6439.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/huisje/IMG_6440.jpg">
                            <img src="img/huisje/IMG_6440.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/huisje/IMG_6483.jpg">
                            <img src="img/huisje/IMG_6483.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/huisje/IMG_6485.jpg">
                            <img src="img/huisje/IMG_6485.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/kitchen/keuken.jpg">
                            <img src="img/kitchen/keuken.jpg" alt="Badeend in zwembad" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/kitchen/keuken2.jpg">
                            <img src="img/kitchen/keuken2.jpg" alt="Binnenkomst vakantiehuis" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/kitchen/keuken3.jpg">
                            <img src="img/kitchen/keuken3.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/kitchen/keuken4.jpg">
                            <img src="img/kitchen/keuken4.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/kitchen/keuken5.jpg">
                            <img src="img/kitchen/keuken5.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/kitchen/koffieapparaat.jpg">
                            <img src="img/kitchen/koffieapparaat.jpg" alt="Northern Lights" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/kitchen/nis_keuken.jpg">
                            <img src="img/kitchen/nis_keuken.jpg" alt="Northern Lights" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/kitchen/pannen_keuken.jpg">
                            <img src="img/kitchen/pannen_keuken.jpg" alt="Northern Lights" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/kitchen/fornuis_kastje.jpg">
                            <img src="img/kitchen/fornuis_kastje.jpg" alt="Northern Lights" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/kitchen/fornuis.jpg">
                            <img src="img/kitchen/fornuis.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/kitchen/fornuismetkastje.jpg">
                            <img src="img/kitchen/fornuismetkastje.jpg" alt="Northern Lights" width="600"
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

<!-- white space -->
<section class="gallery-section spad">
    <div class="container">

    </div>
</section>
@endsection

@section('footer')

@endsection