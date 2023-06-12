@extends('layouts.main')

@section('site-title')
    Services | Gotaxi
@endsection

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Services
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('home') }}">Home </a> <span
                            class="lnr lnr-arrow-right"></span> <a href="{{ route('services') }}"> Services</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start services Area -->
    <section class="services-area section-gap">
        <div class="container">
            <div class="row section-title">
                <h1>What Services we offer to our clients</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 single-service">
                    <span class="lnr lnr-car"></span>
                    <a href="#">
                        <h4>Taxi Service</h4>
                    </a>
                    <p>
                        We offer timely, efficient and safe transportation from one place to another in the same city and
                        another city. We can provide services in Rhenock, Pakyong, Rangpo, Singtam, Rongli, Aritar.
                    </p>
                </div>
                <div class="col-lg-4 single-service">
                    <span class="lnr lnr-briefcase"></span>
                    <a href="#">
                        <h4>Office Pick-ups</h4>
                    </a>
                    <p>
                        Tired of city traffic on your daily commute? Make the most of your time by working, reading, or even
                        catching some shut-eye while traveling in the comfort of your car with GoTaxi Office Pick-Up
                        service.
                    </p>
                </div>
                <div class="col-lg-4 single-service">
                    <span class="lnr lnr-bus"></span>
                    <a href="#">
                        <h4>Event Transportation</h4>
                    </a>
                    <p>
                        Our Event Transportation makes special events like weddings, parties and receptions memorable.
                        Arrange seamless transport for the players, VIP’s or guests.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End services Area -->

    <!-- Start home-calltoaction Area -->
    <section class="home-calltoaction-area relative">
        <div class="container">
            <div class="overlay overlay-bg"></div>
            <div class="row align-items-center section-gap">
                <div class="col-lg-8">
                    <h1>Work with GoTaxi</h1>
                    <p>
                        Join forces with GoTaxi, your trusted local taxi service. With experienced drivers and a commitment
                        to safety, we offer efficient routes and a punctual service. Enjoy convenient bookings through our
                        app, website, or customer support. Partner with GoTaxi for competitive pricing and the best taxi
                        service in town
                    </p>
                </div>
                <div class="col-lg-4 btn-left">
                    <a href="#" class="primary-btn">Reach Our Support Team</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End home-calltoaction Area -->
@endsection
