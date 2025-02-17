@extends('layouts.app')

@section('content')
    <!-- BEGIN HERO SECTION -->
    <section id="hero" class="bg-slideshow section-divider-bottom-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hero-wrapper v-center">
                        <h2 data-animation-direction="fade" data-animation-delay="600">Save the Date</h2>

                        <h1 class="hero-title light">
                            <span data-animation-direction="from-right" data-animation-delay="300">Minh Tuấn</span>
                            <small data-animation-direction="from-top" data-animation-delay="300" class="mx-3">&</small>
                            <span data-animation-direction="from-left" data-animation-delay="300">Minh Lan</span>
                        </h1>

                        <div class="hero-subtitle light" data-animation-direction="fade" data-animation-delay="1000">SEPT
                            <span>08</span> 2024
                        </div>

                        <div data-animation-direction="fade" data-animation-delay="1000">
                            <a href="#rsvp" class="btn btn-light scrollto">RSVP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HERO SECTION -->


    <!-- BEGIN ABOUT US SECTION -->
    <section id="about-us">
        <div class="container">
            <div class="row about-elems-wrapper">
                <div class="element col-md-6 col-xl-4 offset-xl-2" data-animation-direction="from-left"
                    data-animation-delay="300">
                    <div class="image">
                        <img src="{{ asset('images/groom.png') }}" alt="" width="600" height="714" />
                        <div class="hover-info neela-style">
                            <div class="content">
                                <h3>Minh Tuấn<small>The Groom</small></h3>
                                <p>I am so incredibly blessed and excited to spend everyday for the rest of my life
                                    with my best friend!</p>
                                <ul class="sn-icons">
                                    <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider-about-us" data-animation-direction="fade" data-animation-delay="500">
                    <i class="icon-two-hearts"></i>
                </div>

                <div class="element col-md-6 col-xl-4" data-animation-direction="from-right" data-animation-delay="400">
                    <div class="image">
                        <img src="{{ asset('images/bride.png') }}" alt="" width="600" height="714" />
                        <div class="hover-info neela-style">
                            <div class="content">
                                <h3>Minh Lan<small>The Bride</small></h3>
                                <p>She's everything I've always dreamed of and I'm so excited to spend the rest of
                                    my life with her!</p>
                                <ul class="sn-icons">
                                    <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="about-us-desc col-lg-8 offset-lg-2" data-animation-direction="from-bottom"
                    data-animation-delay="300">
                    <h3><small>We are</small>Getting Married</h3>
                    <p>Today and always, beyond tomorrow, I need you beside me, always as my best friend, lover and
                        forever soul mate. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt
                        porttitor venenatis. Vestibulum sit amet est nisl. Vestibulum iaculis finibus sem nec
                        condimentum. Quisque nulla orci, aliquet sit amet sem eget, pellentesque euismod enim.
                        Aenean quis nisl at est consequat elementum sed vel turpis. Phasellus dignissim sit amet
                        orci vitae mattis. Phasellus a imperdiet ligula, efficitur dignissim ex. Mauris placerat
                        aliquet sem commodo molestie.</p>
                    <img src="{{ asset('images/signature-2.png') }}" alt="Andrew and Isabella">
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT US SECTION -->

    <!-- BEGIN OUR STORY TITLE SECTION -->
    <section id="our-story-title" class="parallax-background bg-color-overlay section-divider-bottom-2 padding-divider-top">
        <div class="section-divider-top-1 off-section"></div>
        <!-- The class "section-divider-top-1" can also be applied to the tag <section>. In this case, it was added on a new <div> because the tag <section> have all pseudo elements (::after and ::before) in use. -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title light">Our love story</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END OUR STORY TITLE SECTION -->

    <!-- BEGIN TIMELINE SECTION -->
    <section id="loveline">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    <div class="timeline">
                        <div class="year" data-animation-direction="from-top" data-animation-delay="250">
                            <span class="neela-style">2018</span>
                        </div>

                        <div class="template-1">
                            <div class="date" data-parallax="3" data-animation-direction="fade"
                                data-animation-delay="350">
                                <span class="neela-style">22 September</span>
                            </div>

                            <div class="image-1" data-parallax="-4" data-animation-direction="from-left"
                                data-animation-delay="250">
                                <img src="{{ asset('images/timeline-first-date.jpg') }}" alt="" width="600"
                                    height="600">
                            </div>

                            <div class="image-2" data-parallax="6" data-animation-direction="from-right"
                                data-animation-delay="250">
                                <img src="{{ asset('images/timeline-first-kiss.jpg') }}" alt="" width="600"
                                    height="818">
                            </div>

                            <div class="description-wrapper" data-parallax="-6" data-animation-direction="from-bottom"
                                data-animation-delay="250">
                                <div class="description" data-parallax="-6" data-animation-direction="from-bottom"
                                    data-animation-delay="250">
                                    <div class="neela-style">
                                        <h4>Our first date & kiss</h4>
                                        <p>Andrew was extremely nervous. He was afraid to expose his feelings to
                                            Isabella, but didn’t want to risk staying in the friend zone. So it was
                                            now or never! After all, Isabella was the one. "It was about time!" she
                                            said. It was...PERFECT!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="year" data-animation-direction="from-top" data-animation-delay="250">
                            <span class="neela-style">2019</span>
                        </div>

                        <div class="gallery-container">
                            <div class="timeline-gallery-wrapper" data-animation-direction="from-left"
                                data-animation-delay="250">
                                <div class="timeline-gallery owl-carousel">
                                    <div class="item">
                                        <a class="hover-img" href="images/timeline-slider-img1.jpg"
                                            data-lightbox="gallery-timeline" title="Our Vacations"><span
                                                class="btn btn-light btn-sm">+</span></a>
                                        <img src="{{ asset('images/timeline-slider-img1.jpg') }}" alt=""
                                            width="620" height="431" />
                                    </div>

                                    <div class="item">
                                        <a class="hover-img" href="{{ asset('images/timeline-slider-img2.jpg') }}"
                                            data-lightbox="gallery-timeline" title="Our Vacations"><span
                                                class="btn btn-light btn-sm">+</span></a>
                                        <img src="{{ asset('images/timeline-slider-img2.jpg') }}" alt=""
                                            width="620" height="431" />
                                    </div>

                                    <div class="item">
                                        <a class="hover-img" href="{{ asset('images/timeline-slider-img3.jpg') }}"
                                            data-lightbox="gallery-timeline" title="Our Vacations"><span
                                                class="btn btn-light btn-sm">+</span></a>
                                        <img src="{{ asset('images/timeline-slider-img3.jpg') }}" alt=""
                                            width="620" height="431" />
                                    </div>
                                    <div class="item">
                                        <a class="hover-img" href="{{ asset('images/timeline-slider-img4.jpg') }}"
                                            data-lightbox="gallery-timeline" title="Our Vacations"><span
                                                class="btn btn-light btn-sm">+</span></a>
                                        <img src="{{ asset('images/timeline-slider-img4.jpg') }}" alt=""
                                            width="620" height="431" />
                                    </div>
                                    <div class="item">
                                        <a class="hover-img" href="{{ asset('images/timeline-slider-img5.jpg') }}"
                                            data-lightbox="gallery-timeline" title="Our Vacations"><span
                                                class="btn btn-light btn-sm">+</span></a>
                                        <img src="{{ asset('images/timeline-slider-img5.jpg') }}" alt=""
                                            width="620" height="431" />
                                    </div>
                                    <div class="item">
                                        <a class="hover-img" href="{{ asset('images/timeline-slider-img6.jpg') }}"
                                            data-lightbox="gallery-timeline" title="Our Vacations"><span
                                                class="btn btn-light btn-sm">+</span></a>
                                        <img src="{{ asset('images/timeline-slider-img6.jpg') }}" alt=""
                                            width="620" height="431" />
                                    </div>
                                    <div class="item">
                                        <a class="hover-img" href="{{ asset('images/timeline-slider-img7.jpg') }}"
                                            data-lightbox="gallery-timeline" title="Our Vacations"><span
                                                class="btn btn-light btn-sm">+</span></a>
                                        <img src="{{ asset('images/timeline-slider-img7.jpg') }}" alt=""
                                            width="620" height="431" />
                                    </div>
                                    <div class="item">
                                        <a class="hover-img" href="{{ asset('images/timeline-slider-img8.jpg') }}"
                                            data-lightbox="gallery-timeline" title="Our Vacations"><span
                                                class="btn btn-light btn-sm">+</span></a>
                                        <img src="{{ asset('images/timeline-slider-img8.jpg') }}" alt=""
                                            width="620" height="431" />
                                    </div>
                                </div>
                            </div>

                            <div class="description-wrapper" data-animation-direction="from-bottom"
                                data-animation-delay="250">
                                <div class="description">
                                    <div class="neela-style">
                                        <h4>Some of our most memorable moments</h4>
                                        <p>They had taken overnight trips before, but this was their first huge
                                            vacations outside the USA. Isabella and Andrew travelled to the Baltic
                                            region and visited a number of countries including Iceland, Finland,
                                            Denmark, Russia, Poland and Germany.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="year" data-animation-direction="from-top" data-animation-delay="250">
                            <span class="neela-style">2021</span>
                        </div>

                        <div class="template-2">
                            <div class="date" data-parallax="3" data-animation-direction="fade"
                                data-animation-delay="250">
                                <span class="neela-style">15 July</span>
                            </div>

                            <div class="videoEmbed" data-parallax="6" data-animation-direction="from-top"
                                data-animation-delay="250">
                                <iframe src="https://player.vimeo.com/video/136240001" width="590" height="330"
                                    allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                            </div>

                            <div class="image-1" data-parallax="-2" data-animation-direction="from-left"
                                data-animation-delay="250">
                                <img src="{{ asset('images/timeline-proposal-img1.jpg') }}" alt=""
                                    width="600" height="818">
                            </div>

                            <div class="image-2" data-parallax="4" data-animation-direction="from-right"
                                data-animation-delay="250">
                                <img src="{{ asset('images/timeline-proposal-img2.jpg') }}" alt=""
                                    width="600" height="800">
                            </div>

                            <div class="description-wrapper" data-parallax="-5" data-animation-direction="from-bottom"
                                data-animation-delay="250">
                                <div class="description" data-parallax="-6" data-animation-direction="from-bottom"
                                    data-animation-delay="250">
                                    <div class="neela-style">
                                        <h4>She said Yes!</h4>
                                        <p>So how did Mark pop the question? On a Cruise ... off the shore ... of
                                            the Cayman Islands! (YES!) On their way down to dinner with the Ship's
                                            Captain, Mark's nerves got the best of him and he pulled Sarah back to
                                            the room and straight onto the balcony for the best proposal a girl
                                            could ask for!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline_footer">
                        <div data-animation-direction="from-top" data-animation-delay="250"><i
                                class="icon-diamond-ring"></i></div>
                        <div class="punchline" data-animation-direction="from-bottom" data-animation-delay="250">
                            <small>This is where our</small>forever<br>begins!
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END TIMELINE SECTION -->


    <!-- BEGIN THE WEDDING SECTION -->
    @include('components.invitation')
    <!-- END THE WEDDING SECTION -->


    <!-- BEGIN WEDDING LOCATION SECTION -->
    @include('components.location')
    <!-- END WEDDING LOCATION SECTION -->


    <!-- BEGIN BRIDESMAIDS SECTION -->
    <section id="bridesmaids" class="parallax-background bg-color-overlay">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title light">Bridesmaids</h2>
                </div>
            </div>

            <div class="row center">
                <div class="element bmaid-gmen col-sm-6 col-lg-4" data-animation-direction="from-top"
                    data-animation-delay="300">
                    <div class="image">
                        <img src="{{ asset('images/bridesmaids-img1.jpg') }}" alt="" width="434"
                            height="434" />
                        <div class="hover-info neela-style">
                            <div class="content center">
                                <h3>Emily Garcia<small>Maid of honour</small></h3>
                                <ul class="sn-icons">
                                    <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element bmaid-gmen col-sm-6 col-lg-4" data-animation-direction="from-top"
                    data-animation-delay="400">
                    <div class="image">
                        <img src="{{ asset('images/bridesmaids-img2.jpg') }}" alt="" width="434"
                            height="434" />
                        <div class="hover-info neela-style">
                            <div class="content center">
                                <h3>Rachel Harris<small>Bridesmaid</small></h3>
                                <ul class="sn-icons">
                                    <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element bmaid-gmen col-sm-6 col-lg-4" data-animation-direction="from-top"
                    data-animation-delay="500">
                    <div class="image">
                        <img src="{{ asset('images/bridesmaids-img3.jpg') }}" alt="" width="434"
                            height="434" />
                        <div class="hover-info neela-style">
                            <div class="content center">
                                <h3>Sarah Williams<small>Bridesmaid</small></h3>
                                <ul class="sn-icons">
                                    <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END BRIDESMAIDS SECTION -->


    <!-- BEGIN TESTIMONIALS SECTION -->
    <section id="testimonials" class="bg-color side-flowers-light">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-xl-10 offset-xl-1">
                    <div id="testimonials-slider" class="owl-carousel testimonials light"
                        data-animation-direction="from-bottom" data-animation-delay="300">
                        <div class="item">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius ante
                                libero, a sollicitudin elit malesuada et. Nulla facilisi. Pellentesque magna diam,
                                mattis a gravida eget, lobortis ut velit. Nam interdum hendrerit nisl et malesuada.
                                Nulla facilisis velit neque, sed ultrices nibh facilisis non.</blockquote>

                            <div class="author">
                                <h3>John Doe<small>Best Man</small></h3>
                            </div>
                        </div>

                        <div class="item">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius ante
                                libero, a sollicitudin elit malesuada et. Nulla facilisi. Pellentesque magna diam,
                                mattis a gravida eget, lobortis ut velit. Nam interdum hendrerit nisl et malesuada.
                                Nulla facilisis velit neque, sed ultrices nibh facilisis non.</blockquote>

                            <div class="author">
                                <h3>John Doe<small>Best Man</small></h3>
                            </div>
                        </div>

                        <div class="item">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius ante
                                libero, a sollicitudin elit malesuada et. Nulla facilisi. Pellentesque magna diam,
                                mattis a gravida eget, lobortis ut velit. Nam interdum hendrerit nisl et malesuada.
                                Nulla facilisis velit neque, sed ultrices nibh facilisis non.</blockquote>

                            <div class="author">
                                <h3>John Doe<small>Best Man</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TESTIMONIALS SECTION -->

    <!-- BEGIN GROOMSMEN SECTION -->
    <section id="groomsmen" class="parallax-background bg-color-overlay">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title light">Groomsmen</h2>
                </div>
            </div>

            <div class="row center">
                <div class="element bmaid-gmen col-sm-6 col-lg-4" data-animation-direction="from-top"
                    data-animation-delay="300">
                    <div class="image">
                        <img src="{{ asset('images/groomsmen-img1.jpg') }}" alt="" width="434"
                            height="434" />
                        <div class="hover-info neela-style">
                            <div class="content center">
                                <h3>Michael Scott<small>Best Man</small></h3>
                                <ul class="sn-icons">
                                    <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element bmaid-gmen col-sm-6 col-lg-4" data-animation-direction="from-top"
                    data-animation-delay="400">
                    <div class="image">
                        <img src="{{ asset('images/groomsmen-img2.jpg') }}" alt="" width="434"
                            height="434" />
                        <div class="hover-info neela-style">
                            <div class="content center">
                                <h3>Daniel Wright<small>Groomsman</small></h3>
                                <ul class="sn-icons">
                                    <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element bmaid-gmen col-sm-6 col-lg-4" data-animation-direction="from-top"
                    data-animation-delay="500">
                    <div class="image">
                        <img src="{{ asset('images/groomsmen-img3.jpg') }}" alt="" width="434"
                            height="434" />
                        <div class="hover-info neela-style">
                            <div class="content center">
                                <h3>Ryan Anderson<small>Groomsman</small></h3>
                                <ul class="sn-icons">
                                    <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END GROOMSMEN SECTION -->


    <!-- BEGIN WEDDING GIFTS SECTION -->
    <section id="giftregistry" class="section-bg-color parallax-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xl-6">
                    <h2 class="section-title-lg uppercase desc"><small>Gift</small><strong>Registry</strong></h2>
                    <div class="section-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius
                        ante libero, amet as sollicitudin elit malesuada et. Nulla facilisi. Pellentesque magna
                        diam, mattis gravida eget, lobortis ut velit. Nam interdum hendrerit nisl et malesuada.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-xl-6">
                    <ul class="wedding-gifts">

                        <li id="gift-list" data-animation-direction="from-bottom" data-animation-delay="300">
                            <div class="neela-style">
                                <i class="icon-wedding"></i>
                                <h3>Check our<br>wedding gift list</h3>

                                <div class="info">
                                    <a href="#" class="img"><img src="{{ asset('images/macys-logo.png') }}"
                                            alt="Macy's" /></a>
                                    <a href="#" class="img"><img
                                            src="{{ asset('images/bed-bath-beyond-logo.png') }}" alt="Target" /></a>
                                </div>
                            </div>
                        </li>

                        <li id="help-wedding" data-animation-direction="from-bottom" data-animation-delay="300">
                            <div class="neela-style">
                                <i class="icon-wedding-day"></i>
                                <h3>Help with the<br>wedding planning</h3>

                                <div class="info">
                                    <a href="#rsvp" class="btn btn-primary reverse scrollto"><i
                                            class="fa fa-envelope"></i>Contact us</a>
                                </div>
                            </div>
                        </li>

                        <li id="help-honeymoon" data-animation-direction="from-bottom" data-animation-delay="300">
                            <div class="neela-style">
                                <i class="icon-honeymoon"></i>
                                <h3>Contribute to our<br>dream honeymoon</h3>

                                <div class="info">
                                    <a href="#" class="btn btn-primary reverse">$50</a>
                                    <a href="#" class="btn btn-primary reverse">$100</a>
                                    <a href="#" class="btn btn-primary reverse">$200</a>
                                    <br>
                                    <a href="#" id="otheramount" class="btn btn-primary reverse">Other
                                        Amount</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END WEDDING GIFTS SECTION -->


    <!-- BEGIN GALLERY SECTION -->
    <section id="gallery" class="section-bg-color">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title">Wedding Gallery</h1>
                </div>
            </div>
        </div>

        <div class="gallery-wrapper">
            <div class="gallery-left"><i class="fas fa-chevron-left"></i></div>
            <div class="gallery-right"><i class="fas fa-chevron-right"></i></div>

            <div class="gallery-scroller">
                <ul>
                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img1.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb1.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img2.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb2.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img3.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb3.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img4.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb4.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img5.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb5.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img6.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb6.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img7.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb7.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img8.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb8.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img9.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb9.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img10.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb10.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>
                </ul>
                <ul>
                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img11.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb11.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img12.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb12.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img13.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb13.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img14.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb14.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img15.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb15.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img16.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb16.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img17.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb17.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img18.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb18.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img19.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb19.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>

                    <li>
                        <div class="hover-info">
                            <a class="btn btn-light btn-sm only-icon" href="{{ asset('images/gallery-img20.jpg') }}"
                                data-lightbox="WeddingPhotos" title="Wedding Photos">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/gallery-thumb20.jpg') }}" alt="" width="380"
                            height="380" />
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- END GALLERY SECTION -->


    <!-- BEGIN BLOG SECTION -->
    <section id="blog" class="section-bg-color divider-bottom-2 divider-pattern divider-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title">Wedding Blog</h1>
                </div>
            </div>

            <div class="row">

                <!-- BEGIN BLOG MAIN CONTENT -->
                <div class="col-sm-12">

                    <!-- BEGIN BLOG LISTING -->
                    <div class="blog-listing clearfix">
                        <div class="row gx-5">

                            <!-- BEGIN BLOG ITEM -->
                            <article class="item col-md-6">
                                <div class="image">
                                    <a href="blog-single-post.html">
                                        <span class="btn btn-light"><i class="fa fa-file-o"></i> Read More</span>
                                    </a>
                                    <img src="{{ asset('images/post1.jpg') }}" alt="" width="793"
                                        height="494" />
                                </div>

                                <div class="date">July 20, 2021</div>

                                <div class="info-blog">
                                    <h3 class="post-title"><a href="blog-single-post.html">Wedding trends to
                                            obsess over this year</a></h3>

                                    <p>If you've always dreamt of carrying a bouquet of old fashioned garden roses
                                        down the aisle, but your budget doesn't quite match up to the dream, try
                                        this!</p>

                                    <div class="bottom-info">
                                        <ul class="blog-meta">
                                            <li><a href="#">Wedding</a>, <a href="#">Ideas</a>, <a
                                                    href="#">Tips</a></li>
                                            <li>/ By <a href="#">WiselyThemes</a></li>
                                        </ul>

                                        <div class="blog-share">
                                            <a target="_blank"
                                                href="http://www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.wiselythemes.com%2Fhtml%2Fneela%2Fblog-single-post.html"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank"
                                                href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fwww.wiselythemes.com%2Fhtml%2Fneela%2Fblog-single-post.html%2F&amp;text=5%20ways%20to%20have%20a%20beautiful%20wedding"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank"
                                                href="../../../pinterest.com/pin/create/button/indexeb31.html?url=https%3A%2F%2Fwww.wiselythemes.com%2Fhtml%2Fneela%2Fblog-single-post.html%2F&amp;description=Wedding%20trends%20to%20obsess%20over%20this%20year&amp;media=https%3A%2F%2Fwww.wiselythemes.com%2Fhtml%2Fneela%2Fimages%2Fblog-img-detail.jpg"><i
                                                    class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- END BLOG ITEM -->

                            <!-- BEGIN BLOG ITEM -->
                            <article class="item col-md-6">
                                <div class="image">
                                    <a href="blog-single-post.html">
                                        <span class="btn btn-light"><i class="fa fa-file-o"></i> Read More</span>
                                    </a>
                                    <img src="{{ asset('images/post2.jpg') }}" alt="" width="793"
                                        height="494" />
                                </div>

                                <div class="date">August 2, 2021</div>

                                <div class="info-blog">
                                    <h3 class="post-title"><a href="blog-single-post.html">The ultimate guide to
                                            plan your wedding</a></h3>

                                    <p>When you consider that the average wedding costs over $20,000, you may be
                                        thinking that there’s no way you can afford the day of your dreams.</p>

                                    <div class="bottom-info">
                                        <ul class="blog-meta">
                                            <li><a href="#">Wedding</a>, <a href="#">Ideas</a>, <a
                                                    href="#">Tips</a></li>
                                            <li>/ By <a href="#">WiselyThemes</a></li>
                                        </ul>

                                        <div class="blog-share">
                                            <a target="_blank"
                                                href="http://www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.wiselythemes.com%2Fhtml%2Fneela%2Fblog-single-post.html"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank"
                                                href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fwww.wiselythemes.com%2Fhtml%2Fneela%2Fblog-single-post.html%2F&amp;text=DIY%3A%20A%20Garden%20Rose%20Bouquet"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank"
                                                href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fwww.wiselythemes.com%2Fhtml%2Fneela%2Fblog-single-post.html%2F&amp;description=DIY%3A%20A%20Garden%20Rose%20Bouquet&amp;media=http%3A%2F%2Fplacehold.it%2F750x580"><i
                                                    class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- END BLOG ITEM -->

                        </div>
                    </div>
                    <!-- END BLOG LISTING -->

                    <div class="center">
                        <a class="btn btn-primary" href="blog-listing-sidebar-right.html">View all blog posts</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END BLOG SECTION -->


    <!-- BEGIN CONTACTS SECTION -->
    <section id="rsvp" class="section-bg-color extra-padding-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2  col-xxl-6 offset-xxl-3">

                    <div class="form-wrapper flowers neela-style">
                        <h1 class="section-title">Will you Attend?</h1>

                        <form id="form-rsvp" method="post" action="#">

                            <div class="form-floating">
                                <input type="text" name="Name" id="name" placeholder="Your Name*"
                                    class="form-control required fromName">
                                <label for="name">Your Name*</label>
                            </div>

                            <div class="form-floating">
                                <input type="email" name="E-mail" id="email" placeholder="E-mail*"
                                    class="form-control required fromEmail">
                                <label for="email">E-mail*</label>
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
                                <select class="form-select" aria-label="Number of guests" name="Number of Guests"
                                    id="num_guests">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select>

                                <label for="num_guests">Number of guests</label>
                            </div>

                            <fieldset class="form-check-wrapper required" name="Meal Preferences" id="meal_pref">
                                <label>Meal Preferences:</label>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="meal_meat">
                                    <label for="meal_meat">
                                        Meat
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="meal_fish">
                                    <label for="meal_fish">
                                        Fish
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="meal_vegetarian">
                                    <label for="meal_vegetarian">
                                        Vegetarian
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="meal_gluten_free">
                                    <label for="meal_gluten_free">
                                        Gluten free
                                    </label>
                                </div>
                            </fieldset>

                            <div class="form-floating">
                                <textarea id="message" name="Message" placeholder="Message" class="form-control" rows="4"></textarea>
                                <label for="message">Message</label>
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
