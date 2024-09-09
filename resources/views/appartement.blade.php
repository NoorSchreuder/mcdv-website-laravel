@extends('layouts.layout')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Ons appartement</h2>
                        <div class="bt-option">
                            <a href="{{ url('/') }}">Home</a>
                            <span>Appartement</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- apartment Section Begin -->
    <section class="apartment-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/huisje/binnenkomsttafel.jpg" alt="">
                        <div class="ri-text">
                            <h4>Woonkamer-keuken</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>Slaapbank</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, eettafel, volledig ingerichte keuken, servieskast
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/woonkamer') }}" class="primary-btn">Meer details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/bedrooms/blue/slaapkamerblauw_bed.jpg" alt="">
                        <div class="ri-text">
                            <h4>Slaapkamer 1</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>Twee 1 persoonsbedden</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, opbergmogelijkheden </td>
                                    </tr>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/slaapkamer') }}" class="primary-btn">Meer details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/bedrooms/classico/bed10.jpg" alt="">
                        <div class="ri-text">
                            <h4>Slaapkamer 2</h4>
                            <table>
                                <tbody>

                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>Kingsize bed</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, opbergmogelijkheden, openslaande deuren naar klein terras</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/slaapkamer') }}" class="primary-btn">Meer details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/bathrooms/nieuw/wasbakwcnieuw.jpg" alt="">
                        <div class="ri-text">
                            <h4>Badkamer 1</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Inhoud:</td>
                                        <td>Wastafel, toilet, douche</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/badkamer') }}" class="primary-btn">Meer details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/bathrooms/classico/wasbakwc.jpg" alt="">
                        <div class="ri-text">
                            <h4>Badkamer 2</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Inhoud:</td>
                                        <td>Wastafel, toilet, douche, bidet</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/badkamer') }}" class="primary-btn">Meer details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/outside/buitened.jpg" alt="">
                        <div class="ri-text">
                            <h4>Tuin & zwembad</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Terras uitgerust met tuinmeubilair en BBQ, eigen ingang naar zwembad, eigen
                                            parkeerplaats
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/buiten') }}" class="primary-btn">Meer details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- apartment Section End -->
@endsection

@section('footer')
    
@endsection
<!-- Footer Section End -->
