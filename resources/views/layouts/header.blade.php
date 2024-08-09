<header id="header">
    <div class="nav-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a href="#hero" class="nav-logo"><img src="{{ asset('images/signature4.png') }}" alt="Neela" /></a>

                    <!-- BEGIN MAIN MENU -->
                    <nav class="navbar">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ Route::currentRouteName() == 'index' ? '#hero' : route('index')}}">The Wedding</a></li>

                            <li><a href="">About Us</a></li>

                            <li><a href="{{ route('gallery')}}">Gallery</a></li>

                            <li><a href="{{ route('rsvp.index')}}">RSVP</a></li>
                        </ul>

                        <button id="nav-mobile-btn"><i class="fas fa-bars"></i></button><!-- Mobile menu button -->
                    </nav>
                    <!-- END MAIN MENU -->

                </div>
            </div>
        </div>
    </div>
</header>
