@extends('frontend.layout.app')

@section('content')

    @include('frontend.main.slider')

    <div class="container">
        @include('frontend.main.info-box')
    </div>

    <section class="featured-products-section">
        @include('frontend.main.feature-product')
    </section>

    <section class="new-products-section">
        @include('frontend.main.new-product')
    </section>

    <section class="feature-boxes-container">
        @include('frontend.main.box')
    </section>

    <section class="blog-section pb-0">
        @include('frontend.main.blog')
    </section>
@endsection
