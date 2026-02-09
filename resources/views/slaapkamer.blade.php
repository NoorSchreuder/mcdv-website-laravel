@extends('layouts.layout')

@section('content')
   <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Slaapkamers</h2>
                        <div class="bt-option">
                            <a href="{{ url('/') }}">Home</a>
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
                        <a target="_blank" href="img/bedrooms/blue/room1-.jpg">
                            <img src="img/bedrooms/blue/room1-p1.jpeg" alt="Slaapkamer 1 foto 1" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/blue/room1-p2.jpeg">
                            <img src="img/bedrooms/blue/room1-p2.jpeg" alt="Slaapkamer 1 foto 2" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/classico/room2-p1.jpeg">
                            <img src="img/bedrooms/classico/room2-p1.jpeg" alt="Slaapkamer 2 foto 1" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/classico/room2-p2.jpeg">
                            <img src="img/bedrooms/classico/room2-p2.jpeg" alt="Slaapkamer 2 foto 2" width="600"
                                height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/classico/room2-p3.jpeg">
                            <img src="img/bedrooms/classico/room2-p3.jpeg" alt="Slaapkamer 2 foto 3" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="img/bedrooms/classico/room2-p4.jpeg">
                            <img src="img/bedrooms/classico/room2-p4.jpeg" alt="Slaapkamer 2 foto 4" width="600" height="400">
                        </a>
                        <div class="desc"></div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="gallery">
                    <a target="_blank" href="img/bedrooms/blue/room1-p1.jpeg">
                        <img src="img/bedrooms/blue/room1-p1.jpeg" alt="Slaapkamer 1 foto 1" width="600"
                            height="400">
                    </a>
                    <div class="desc"></div>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/bedrooms/blue/room1-p2.jpeg">
                        <img src="img/bedrooms/blue/room1-p2.jpeg" alt="Slaapkamer 1 foto 2" width="600"
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