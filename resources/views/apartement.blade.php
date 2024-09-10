@extends('layouts.layout')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>{{ __('messages.apartment_title') }}</h2>
                        <div class="bt-option">
                            <a href="{{ url('/') }}">{{ __('messages.home') }}</a>
                            <span>{{ __('messages.apartment') }}</span>
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
                            <h4>{{ __('messages.living_room') }}</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>{{ __('messages.living_room_bed') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>{{ __('messages.living_room_services') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/woonkamer') }}" class="primary-btn">{{ __('messages.details') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/bedrooms/blue/slaapkamerblauw_bed.jpg" alt="">
                        <div class="ri-text">
                            <h4>{{ __('messages.bedroom1') }}</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>{{ __('messages.bedroom1_bed') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>{{ __('messages.bedroom1_services') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/slaapkamer') }}" class="primary-btn">{{ __('messages.details') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/bedrooms/classico/bed10.jpg" alt="">
                        <div class="ri-text">
                            <h4>{{ __('messages.bedroom2') }}</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>{{ __('messages.bedroom2_bed') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>{{ __('messages.bedroom2_services') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/slaapkamer') }}" class="primary-btn">{{ __('messages.details') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/bathrooms/nieuw/wasbakwcnieuw.jpg" alt="">
                        <div class="ri-text">
                            <h4>{{ __('messages.bathroom1') }}</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Inhoud:</td>
                                        <td>{{ __('messages.bathroom1_content') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/badkamer') }}" class="primary-btn">{{ __('messages.details') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/bathrooms/classico/wasbakwc.jpg" alt="">
                        <div class="ri-text">
                            <h4>{{ __('messages.bathroom2') }}</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Inhoud:</td>
                                        <td>{{ __('messages.bathroom2_content') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/badkamer') }}" class="primary-btn">{{ __('messages.details') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/outside/buitened.jpg" alt="">
                        <div class="ri-text">
                            <h4>{{ __('messages.garden_pool') }}</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>{{ __('messages.garden_pool_content') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/buiten') }}" class="primary-btn">{{ __('messages.details') }}</a>
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
