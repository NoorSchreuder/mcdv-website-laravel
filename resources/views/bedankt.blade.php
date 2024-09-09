@extends('layouts.layout')

@section('content')
    <!-- Thank You Section Begin -->
    <section class="thankyou-section spad">
        <div class="container">
            <div class="thankyou-text">
                <h2>{{ __('messages.thank_you_title') }}</h2>
                <p>{{ __('messages.thank_you_message') }}</p>
            </div>
        </div>
    </section>
    <!-- Thank You Section End -->
@endsection

@section('footer')
@endsection
