@extends('layouts.layout')

@section('content')
    <!-- Blog Details Hero Section Begin -->
    <section class="blog-details-hero set-bg" data-setbg="img/wheretogo/montemolino.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="bd-hero-text">
                        <h2>{{ __('messages.more_information') }}</h2>
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
                            <p> • {{ __('messages.emi_superstore') }}: <a href="https://www.google.com/maps/place/Emi+Superstore+Todi/@42.8026547,12.4067598,15z/data=!4m6!3m5!1s0x132ec071264ecad5:0x8d800c0979e8548d!8m2!3d42.8026547!4d12.4067598!16s%2Fg%2F1pp2tk49d?entry=ttu">EMI-superstore</a>. {{ __('messages.supermarket_info') }}</br> 
                                • {{ __('messages.dog_policy') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Recommend Blog Section Begin -->
    <section class="recommend-blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>{{ __('messages.things_to_do') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Recommend Blog Section End -->

@endsection

@section('footer')

@endsection
