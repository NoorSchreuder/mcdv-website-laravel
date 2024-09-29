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

    .accordion-container {
        margin-bottom: 20px;
    }

    .accordion-content {
        display: none;
        padding: 10px;
        border: 1px solid #ddd;
        border-top: none;
    }

    .accordion-container.active .accordion-content {
        display: block;
    }

    .accordion-title {
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
        margin: 0;
        padding: 10px;
        background-color: #f47f34;
        border: 1px solid #ddd;
        border-top: none;
        text-align: left;
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
                        <h2>Foto's </h2>
                        <div class="bt-option">
                            <a href="{{ url('/') }}">Home</a>
                            <span>Foto's</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Image Slider Section Begin -->
    <section class="image-slider-section">
        <div class="container">
            <div class="row">
                <div class="accordion-container bk-btn">
                    <h2 class="accordion-title">{{ __('messages.cottage') }}</h2>
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
                                    <img src="img/huisje/IMG_6483.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>
                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/huisje/IMG_6485.jpg">
                                    <img src="img/huisje/IMG_6485.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="accordion-container">
                    <h2 class="accordion-title">{{ __('messages.kitchen') }}</h2>
                    <div class="accordion-content">
                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/kitchen/keuken.jpg">
                                    <img src="img/kitchen/keuken.jpg" alt="Badeend in zwembad" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

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
                                    <img src="img/kitchen/keuken3.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/kitchen/keuken4.jpg">
                                    <img src="img/kitchen/keuken4.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/kitchen/keuken5.jpg">
                                    <img src="img/kitchen/keuken5.jpg" alt="Northern Lights" width="600"
                                        height="400">
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
                                    <img src="img/kitchen/fornuis.jpg" alt="Northern Lights" width="600"
                                        height="400">
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
                <div class="accordion-container">
                    <h2 class="accordion-title">{{ __('messages.first_bedroom') }}</h2>
                    <div class="accordion-content">
                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bedrooms/blue/slaapkamerblauw_bed.jpg">
                                    <img src="img/bedrooms/blue/slaapkamerblauw_bed.jpg" alt="Badeend in zwembad"
                                        width="600" height="400">
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
                                    <img src="img/bedrooms/blue/slaapkamerblauw_kastje.jpg" alt="Northern Lights"
                                        width="600" height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bedrooms/blue/slaapkamerblauw_muur.jpg">
                                    <img src="img/bedrooms/blue/slaapkamerblauw_muur.jpg" alt="Northern Lights"
                                        width="600" height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-container">
                    <h2 class="accordion-title">{{ __('messages.second_bedroom') }} </h2>
                    <div class="accordion-content">

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bedrooms/classico/binnenkomst.jpg">
                                    <img src="img/bedrooms/classico/binnenkomst.jpg" alt="Badeend in zwembad"
                                        width="600" height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bedrooms/classico/bed1.jpg">
                                    <img src="img/bedrooms/classico/bed1.jpg" alt="Badeend in zwembad" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bedrooms/classico/bed3.jpg">
                                    <img src="img/bedrooms/classico/bed3.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bedrooms/classico/bed4.jpg">
                                    <img src="img/bedrooms/classico/bed4.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bedrooms/classico/bed6.jpg">
                                    <img src="img/bedrooms/classico/bed6.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bedrooms/classico/kapstok.jpg">
                                    <img src="img/bedrooms/classico/kapstok.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bedrooms/classico/kastje.jpg">
                                    <img src="img/bedrooms/classico/kastje.jpg" alt="Northern Lights" width="600"
                                        height="400">
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
                    </div>
                </div>
                <div class="accordion-container">
                    <h2 class="accordion-title">{{ __('messages.first_badroom') }}</h2>
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

                    </div>

                </div>
                <div class="accordion-container">
                    <h2 class="accordion-title">{{ __('messages.second_badroom') }}</h2>
                    <div class="accordion-content">

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bathrooms/nieuw/binnenkomst.jpg">
                                    <img src="img/bathrooms/nieuw/binnenkomst.jpg" alt="Badeend in zwembad"
                                        width="600" height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/bathrooms/nieuw/haakjesbadkamer.jpg">
                                    <img src="img/bathrooms/nieuw/haakjesbadkamer.jpg" alt="Northern Lights"
                                        width="600" height="400">
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
                <div class="accordion-container">
                    <h2 class="accordion-title">{{ __('messages.outside') }}</h2>
                    <div class="accordion-content">

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/outside/buitened.jpg">
                                    <img src="img/outside/buitened.jpg" alt="Badeend in zwembad" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/outside/buitenplaat.jpg">
                                    <img src="img/outside/buitenplaat.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/outside/olives.jpg">
                                    <img src="img/outside/olives.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/outside/padzwembad.jpg">
                                    <img src="img/outside/padzwembad.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/outside/pottenhorizontaal.jpg">
                                    <img src="img/outside/pottenhorizontaal.jpg" alt="Northern Lights" width="600"
                                        height="400">
                                </a>
                                <div class="desc"></div>
                            </div>
                        </div>

                        <div class="responsive">
                            <div class="gallery">
                                <a target="_blank" href="img/zwembad/badeendrecht.jpg">
                                    <img src="img/zwembad/badeendrecht.jpg" alt="Northern Lights" width="600"
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var accordions = document.querySelectorAll('.accordion-container');

        accordions.forEach(function(accordion) {
            var title = accordion.querySelector('.accordion-title');

            title.addEventListener('click', function() {
                // Toggle active class on the accordion container
                accordion.classList.toggle('active');
            });
        });
    });
</script>
