@extends('layouts.layout')

@section('content')
    <!-- Blog Details Hero Section Begin -->
    <section class="blog-details-hero set-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="bd-hero-text">
                        <h2>{{ __('messages.route_description') }}</h2>
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
                            <p>{{ __('messages.our_home_location') }}</p>
                        </div>
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <h4>{{ __('messages.by_car') }}</h4>
                                <p>{{ __('messages.by_car_description') }}</p>
                            </div>
                            <div class="bm-item">
                                <h4>{{ __('messages.by_plane') }}</h4>
                                <p>{{ __('messages.by_plane_description') }}</p>
                            </div>
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
