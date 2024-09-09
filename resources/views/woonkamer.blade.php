@extends('layouts.layout')

@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>{{ __('messages.living_room_kitchen') }}</h2>
                    <div class="bt-option">
                        <a href="{{ url('/') }}">{{ __('messages.home') }}</a>
                        <a href="{{ url('/appartement') }}">{{ __('messages.apartment') }}</a>
                        <span>{{ __('messages.living_room_kitchen') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- About Us Page Section Begin -->
<section class="aboutus-page-section spad">
    <div class="container">
        <div class="about-page-text">
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <ul class="ap-services">
                        <li><i class="icon_check"></i> {{ __('messages.wifi') }}</li>
                        <li><i class="icon_check"></i> {{ __('messages.dining_table') }}</li>
                        <li><i class="icon_check"></i> {{ __('messages.sofa_bed') }}</li>
                        <li><i class="icon_check"></i> {{ __('messages.fully_equipped_kitchen') }}</li>
                        <li><i class="icon_check"></i> {{ __('messages.dish_cabinet') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Page Section End -->

<!-- Image Slider Section Begin -->
<section class="image-slider-section">
    <div class="container">
        <div class="row">
            <div class="accordion-content">
                @foreach([
                    'binnenkomst.jpg' => 'Badeend in zwembad',
                    'binnenkomsttafel.jpg' => 'Binnenkomst vakantiehuis',
                    'IMG_6427.jpg' => '',
                    'IMG_6429.jpg' => '',
                    'IMG_6432.jpg' => '',
                    'IMG_6433.jpg' => '',
                    'IMG_6435.jpg' => '',
                    'IMG_6439.jpg' => '',
                    'IMG_6440.jpg' => '',
                    'IMG_6483.jpg' => '',
                    'IMG_6485.jpg' => '',
                    'keuken.jpg' => 'Badeend in zwembad',
                    'keuken2.jpg' => 'Binnenkomst vakantiehuis',
                    'keuken3.jpg' => '',
                    'keuken4.jpg' => '',
                    'keuken5.jpg' => '',
                    'koffieapparaat.jpg' => '',
                    'nis_keuken.jpg' => '',
                    'pannen_keuken.jpg' => '',
                    'fornuis_kastje.jpg' => '',
                    'fornuis.jpg' => '',
                    'fornuismetkastje.jpg' => ''
                ] as $filename => $alt)
                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="{{ asset("img/huisje/{$filename}") }}">
                                <img src="{{ asset("img/huisje/{$filename}") }}" alt="{{ $alt }}" width="600" height="400">
                            </a>
                            <div class="desc"></div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- Image Slider Section End -->

<!-- White Space -->
<section class="gallery-section spad">
    <div class="container">
        <!-- Optional space or content -->
    </div>
</section>
@endsection

@section('footer')

@endsection
