@extends('_layouts.master')

@section('content')
    <section class="hero">
        <div class="container container--narrow">
            <h1 class="hero__heading">Prosser Media Revise</h1>
            <div class="hero__content">
                <div class="hero__text">
                    <h3 class="hero__subheading">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut.</h3>
                </div>
                <div class="hero__illustration">
                    <img src="{{ $page->baseUrl }}/assets/images/hero-illustration.svg" alt="home page hero illustration">
                </div>
            </div>
        </div>
    </section>

    <div class="testimonial">
        <div class="container container--narrow">
            <p class="testimonial__content">
                “Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est” 
            </p>
            <p class="testimonial__author">- John Doe</p>
        </div>
    </div>

    <div class="home-feature">
        <div class="container container--narrow">
            <div class="home-feature__content">
                <div class="home-feature__text">
                    <h2 class="home-feature__heading">Perfect for every occasion.</h2>
                    <p class="home-feature__text-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                </div>
                <div class="home-feature__illustration">
                    <img src="{{ $page->baseUrl }}/assets/images/perfect-occasion-illustration.svg" alt="home page perfect for every occasion illustration">
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="get-revising-button">Click here to get revising now...</a>
@endsection
