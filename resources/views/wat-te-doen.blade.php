@extends('layouts.layout')

@section('content')
    <!-- Blog Details Hero Section Begin -->
    <section class="blog-details-hero set-bg" data-setbg="img/wheretogo/montemolino.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="bd-hero-text">
                        <!-- <span>{{ __('messages.more_info') }}</span> -->
                        <h2>{{ __('messages.what_to_do') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="blog-details-text">
                        <div class="bd-title">
                            <p>
                                {{ __('messages.central_location') }}<br>
                                {{ __('messages.accessibility') }}<br>
                                {{ __('messages.skiing') }}<br><br>
                                {{ __('messages.local_trips') }}<br><br>
                                {{ __('messages.donkey_walk') }}<br>
                                {{ __('messages.goat_farm_tasting') }}<br>
                                {{ __('messages.wine_tasting') }}<br>
                                {{ __('messages.electric_bike') }}<br><br>
                                {{ __('messages.google_list') }}<br><br>
                                {{ __('messages.add_place') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
@endsection

@section('footer')

@endsection
