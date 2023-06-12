@extends('layouts.main')

@section('site-title')
    GoTaxi - Connected with People
@endsection

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-between">
                <div class="banner-content col-lg-6 col-md-6 ">
                    <h6 class="text-white ">Want a taxi? just call</h6>
                    <h1 class="text-uppercase">
                        +91 9475148121
                    </h1>
                    <p class="pt-10 pb-10 text-white">
                        Whether you enjoy city breaks or extended holidays in the sun, you can always improve your travel
                        experiences by staying in a small.
                    </p>
                    <a href="tel:+91 9475148121" class="primary-btn text-uppercase">Call for taxi</a>
                </div>
                <div class="col-lg-4  col-md-6 header-right">
                    <h4 class="pb-30">Book Your Taxi Online!</h4>
                    <form class="form">
                        <div class="from-group">
                            <input class="form-control txt-field" type="text" name="name" placeholder="Your name"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'">
                            <input class="form-control txt-field" type="email" name="email" placeholder="Email address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'">
                            <input class="form-control txt-field" type="tel" name="phone" placeholder="Phone number"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'">
                        </div>
                        <div class="form-group">
                            <div class="default-select" id="default-select">
                                <select>
                                    <option value="" disabled selected hidden>From Destination</option>
                                    <option value="1">Destination One</option>
                                    <option value="2">Destination Two</option>
                                    <option value="3">Destination Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="default-select" id="default-select2">
                                <select>
                                    <option value="" disabled selected hidden>To Destination</option>
                                    <option value="1">Destination One</option>
                                    <option value="2">Destination Two</option>
                                    <option value="3">Destination Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group dates-wrap">
                                <input id="datepicker2" class="dates form-control" placeholder="Date & time" type="text">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">

                            <button class="btn btn-default btn-lg btn-block text-center text-uppercase">Make
                                reservation</button>

                        </div>
                    </form>
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
                        Sikkim, Pin: 737133, India...
                    </p>
                    <a class="text-uppercase primary-btn" href="{{ route('about') }}">Read more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End home-about Area -->

    <!-- Start services Area -->
    <section class="services-area pb-120">
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

    <!-- Start reviews Area -->
    <section class="reviews-area section-gap">
        <div class="container">
            <div class="row section-title">
                <h1>Client’s Reviews</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row">
                @forelse ($reviews as $review)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-review">
                            <h4>{{ $review->name }}</h4>
                            <p>
                                {{ $review->message }}
                            </p>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Nothing to display</p>
                @endforelse
            </div>
        </div>
    </section>
    <!-- End reviews Area -->
@endsection
