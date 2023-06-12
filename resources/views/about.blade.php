@extends('layouts.main')

@section('site-title')
    About | Gotaxi
@endsection

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        About Us
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('home') }}">Home </a> <span
                            class="lnr lnr-arrow-right"></span> <a href="{{ route('about') }}"> About Us</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start home-about Area -->
    <section class="home-about-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 about-left">
                    <img class="img-fluid" src="{{ asset('assets/img/about-img.jpg') }}" alt="">
                </div>
                <div class="col-lg-6 about-right">
                    <h1 class="pb-2">About</h1>
                    <p>GoTaxi is an Inter-city Taxi booking facilitator. It is owned and operated by GoTaxi Services Private
                        Limited, a company incorporated in India, having its registered office at Rhenock, Pakyong District,
                        Sikkim, Pin: 737133, India.
                        It is involved in Supporting and auxilary transport activities; activities of travel agencies. We
                        started this venture out of a personal pain point of having to pay two way changes for a one way
                        drop trip. Market taxis charge two-ways, usually citing the reason of returning empty. By harnessing
                        information and communication technologies, we have disrupted the conventional practice. GoTaxi
                        Service platform makes your travel smooth. We provide you with best and professional driver to make
                        your day enjoy with safety.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End home-about Area -->
@endsection
