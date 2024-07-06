@extends('home.layouts.app')

@section('content')
    <!-- Hero Section -->

    @include('home.partials.hero')

    <!-- Features Section -->

    @include('home.partials.feature')

    <!-- Testimonials Section -->

    @include('home.partials.testimonial')

    <!-- Pricing Section -->

    @include('home.partials.pricing')
    <!-- FAQ Section -->

    @include('home.partials.faq')

    <!-- Call to Action Section -->

    @include('home.partials.calltoaction')

@endsection

