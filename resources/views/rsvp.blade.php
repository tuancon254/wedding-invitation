@extends('layouts.app')

@section('content')
    <!-- BEGIN PAGE HEADER -->
    <div class="page-header section-divider-bottom-1 section-divider-bg-color">
        <div class="container">
            <div class="row">
                <div class="col center">
                    <h1 class="page-title">RSVP</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE HEADER -->


    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content no-padding">

        <!-- BEGIN MAIN CONTENT -->
        <main class="main">

            <!-- BEGIN CONTACT FORM SECTION -->
            <section class="section-bg-color overflow-content-over">
                <div class="side-flowers"></div>

                <div class="container">
                    <div class="row gx-6">
                        <div class="col-xl-6 col-lg-5 overflow-image-wrapper center">
                            <h2 class="title">We're getting married !</h2>
                            <p class="center">We are thrilled to invite you to the wedding celebration of Minh Tuấn and Minh
                                Lan! It's a moment we've been dreaming of, and we can't wait to share it with you.</p>
                            <p class="center">On September 8th, 2024, we will embark on a new chapter in our lives,
                                surrounded by the people we love and cherish. The ceremony will take place at below
                                location, followed by a reception filled with joy, music, and delicious food.</p>
                            <p class="center">We would be honored if you could join us to celebrate this special occasion.
                                Your presence means the world to us, and we look forward to sharing this unforgettable day
                                with you.</p>

                            <blockquote class="neela-quote small extra-margin">
                                Please, confirm your attendance<br>on or before 1st of August
                            </blockquote>

                            <ul class="contact-info">
                                <li><span>Phone:</span> +84 966-785-693</li>
                                <li><span>E-mail:</span> <a href="mailto:isabella.andrew@example.com">tuanlan020920@gmail.com</a></li>
                            </ul>
                        </div>

                        <!-- BEGIN CONTACT FORM -->
                        <div class="col-xl-6  col-lg-7">
                            <div class="form-wrapper no-shadow overflow neela-style">
                                <form id="form-rsvp" method="post" action="{{ route('rsvp.store') }}">
                                    <h2 class="section-title">Will you Attend?</h2>
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    <div class="form-floating">
                                        <input type="text" name="name" id="name" placeholder="Your Name*"
                                            class="form-control required">
                                        <label for="name">Your Name*</label>
                                    </div>

                                    <div class="form-floating">
                                        <input type="email" name="email" id="email" placeholder="E-mail*"
                                            class="form-control">
                                        <label for="email">E-mail (Optional)</label>
                                    </div>

                                    <div class="form-floating">
                                        <select class="form-select required" aria-label="guestOf" name="guestOf"
                                            id="guestOf">
                                            <option value=""></option>
                                            <option value="Groom">Groom</option>
                                            <option value="Bride">Bride</option>
                                        </select>

                                        <label for="guestOf">Guest Of</label>
                                    </div>

                                    <div class="form-check-wrapper">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input required" type="radio" name="will_come"
                                                value="1" id="attend_wedding_yes">
                                            <label for="attend_wedding_yes">Yes, I will attend.</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input required" type="radio" name="will_come"
                                                value="0" id="attend_wedding_no">
                                            <label for="attend_wedding_no">Sorry, I can't come.</label>
                                        </div>
                                    </div>

                                    <div class="form-floating">
                                        <input type="number" name="number_of_guest" id="number_of_guest"
                                            placeholder="Number of guests" min="0" max="10" value="1"
                                            class="form-control required numberOfGuest">
                                        <label for="number_of_guest">Number of guests</label>
                                    </div>

                                    <div class="form-floating">
                                        <textarea id="message" name="message" placeholder="Message" class="form-control" rows="4"></textarea>
                                        <label for="message">Wishes to the bride and groom</label>
                                    </div>

                                    <div class="form_status_message"></div>

                                    <div class="center">
                                        <button type="submit" class="btn btn-primary submit_form">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END CONTACT FORM -->
                    </div>
                </div>
            </section>
            <!-- END CONTACT FORM SECTION -->


            <!-- BEGIN WEDDING LOCATION SECTION -->
            <div id="location">
                <div class="gmap" id="map" style="width: 100%; height: 550px; z-index:0;"></div>
            </div>
            <!-- END WEDDING LOCATION SECTION -->

        </main>
        <!-- END MAIN CONTENT -->

    </div>
    <!-- END PAGE CONTENT -->
@endsection
