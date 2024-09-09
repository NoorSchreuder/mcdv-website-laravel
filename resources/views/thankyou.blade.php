@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-5 mb-5">
                <h2>{{ __('messages.thank_you_message') }}</h2>
                <p class="mb-4">{{ __('messages.thank_you_description') }}</p>
            </div>
        </div>
    </div>
@endsection

@section('footer')
@endsection
