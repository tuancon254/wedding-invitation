@extends('layouts.app')

@section('content')
    <!-- BEGIN HERO SECTION -->
    <div id="hero" class="bg-slideshow section-divider-bottom-1 section-divider-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="v-center">
                        <div class="hero-divider-top light" data-animation-direction="from-top" data-animation-delay="700">
                        </div>

                        <h1 class="hero-title light">
                            <span data-animation-direction="from-right" data-animation-delay="300">Minh Tuấn</span>
                            <small data-animation-direction="from-top" data-animation-delay="300" class="mx-3">&</small>
                            <span data-animation-direction="from-left" data-animation-delay="300">Minh Lan</span>
                        </h1>

                        <div class="hero-divider-bottom light" data-animation-direction="from-bottom"
                            data-animation-delay="700"></div>

                        <div class="hero-subtitle light">Are getting Married in</div>

                        <div class="countdown" data-date="2024/09/08 11:30 AM"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- BEGIN BRIDE & GROOM SECTION -->
    <section class="section-bg-color overflow-content-over no-padding-top">

        <div class="section-bg-color overflow-content no-padding">
            <div class="container">
                <div class="row">
                    <div class="col overflow-image-wrapper">

                        <div class="overflow-image-text extra-padding-top">
                            <h2 class="title">He asker her & she said yes!</h2>
                            <p class="center">Phasellus a sapien tincidunt nunc dapibus mollis. Etiam ultricies
                                bibendum sodales. Nulla libero tortor, auctor at elit ut, pharetra placerat libero.
                                Aenean gravida in libero sed tincidunt. Nulla non mattis nisl, in imperdiet justo.
                                Proin metus mauris, gravida vel ante et, ornare laoreet libero sed ut quam vitae.
                                Aenean aliquam augue turpis, in tempor elit condimentum sit amet. Aenean aliquam
                                augue turpis, in tempor elit condimentum sit amet. Phasellus a sapien tincidunt nunc
                                dapibus mollis. Etiam ultricies bibendum sodales.</p>
                            <p class="center"><a class="btn btn-primary" href="about-us.html">Our Love Story</a>
                            </p>
                        </div>

                        <div class="overflow-image flower">
                            <img src="{{ asset('images/bride_groom4.jpg') }}" alt="Couple Photo">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- END BRIDE & GROOM SECTION -->


    <!-- BEGIN WEDDING INVITE SECTION -->
    @include('components.invitation')
    <!-- END WEDDING INVITE SECTION -->

    @include('components.location')


    <!-- BEGIN CONTACTS SECTION -->
    <section id="rsvp-2" class="section-bg-color extra-padding-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2  col-xxl-6 offset-xxl-3">

                    <div class="form-wrapper flowers neela-style">
                        <h2 class="section-title">Will you Attend?</h2>
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <form id="form-rsvp" method="post" action="#">

                            <div class="form-floating">
                                <input type="text" name="Name" id="name" placeholder="Your Name*"
                                    class="form-control required fromName">
                                <label for="name">Your Name*</label>
                            </div>

                            <div class="form-floating">
                                <input type="email" name="E-mail" id="email" placeholder="E-mail*"
                                    class="form-control fromEmail">
                                <label for="email">E-mail (Optional)</label>
                            </div>

                            <div class="form-floating">
                                <select class="form-select required" aria-label="FriendOf" name="FriendOf"
                                    id="friend_of">
                                    <option value=""></option>
                                    <option value="groom">Groom</option>
                                    <option value="bride">Bride</option>
                                </select>

                                <label for="friend_of">Friend Of</label>
                            </div>

                            <div class="form-check-wrapper">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input required" type="radio" name="Attend wedding"
                                        id="attend_wedding_yes">
                                    <label for="attend_wedding_yes">Yes, I will attend.</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input required" type="radio" name="Attend wedding"
                                        id="attend_wedding_no">
                                    <label for="attend_wedding_no">Sorry, I can't come.</label>
                                </div>
                            </div>

                            <div class="form-floating">
                                <input type="number" name="number_of_guest" id="number_of_guest" placeholder="Number of guests" min="0" max="10"
                                    class="form-control required numberOfGuest">
                                <label for="number_of_guest">Number of guests</label>
                            </div>

                            <div class="form-floating">
                                <textarea id="message" name="Message" placeholder="Message" class="form-control" rows="4"></textarea>
                                <label for="message">Wishes to the bride and groom</label>
                            </div>

                            <div class="center">
                                <div class="g-recaptcha" data-sitekey="6LcTJDEUAAAAACOL__6CedRrCb6m2M94OSmqF4MV">
                                </div>
                            </div>

                            <div class="form_status_message"></div>

                            <div class="center">
                                <button type="submit" class="btn btn-primary submit_form">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACTS SECTION -->
@endsection
