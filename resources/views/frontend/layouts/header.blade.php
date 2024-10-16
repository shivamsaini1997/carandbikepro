

    <header class="b-topBar wow slideInDown" data-wow-delay="0.7s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <div class="b-topBar__addr">
                        <span class="fa fa-map-marker"></span>
                        202 W 7TH ST, LOS ANGELES, CA 90014
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="b-topBar__tel">
                        <span class="fa fa-phone"></span>
                        1-800- 624-5462
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <nav class="b-topBar__nav">
                        <ul>
                            {{-- <li><a href="#">Cart</a></li> --}}
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Sign in</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="b-topBar__lang">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle='dropdown'>Language</a>
                            <a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="b-topBar__lang-flag m-en"></span>EN<span class="fa fa-caret-down"></span></a>
                            <ul class="dropdown-menu h-lang">
                                <li><a class="m-langLink dropdown-toggle" href="home-2.html"><span class="b-topBar__lang-flag m-en"></span>EN</a></li>
                                <li><a class="m-langLink dropdown-toggle" href="home-2.html"><span class="b-topBar__lang-flag m-es"></span>ES</a></li>
                                <li><a class="m-langLink dropdown-toggle" href="home-2.html"><span class="b-topBar__lang-flag m-de"></span>DE</a></li>
                                <li><a class="m-langLink dropdown-toggle" href="home-2.html"><span class="b-topBar__lang-flag m-fr"></span>FR</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--b-topBar-->

    <nav class="b-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="b-nav__logo wow slideInLeft" data-wow-delay="0.3s">
                            <h3><a href="{{url('/')}}">CAR<span>Bike</span></a></h3>
                            <h2><a href="{{url('/')}}">CAR AND BIKE PRO</a></h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="b-nav__list wow slideInRight" data-wow-delay="0.3s">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse navbar-main-slide" id="nav">
                            <ul class="navbar-nav-menu">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle='dropdown' href="home.html">Cars <span class="fa fa-caret-down"></span></a>
                                    <ul class="dropdown-menu h-nav">
                                        <li><a href="{{route('newcars')}}">New Cars </a></li>
                                        <li><a href="{{route('popular-cars')}}">Popular Cars </a></li>
                                        <li><a href="{{route('upcoming-cars')}}">Upcoming Cars </a></li>
                                        <li><a href="{{route('latest-cars')}}">Newly Launched Cars </a></li>
                                        <li><a href="{{route('electric-cars')}}">Electric Cars </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle='dropdown' href="home.html">Bikes <span class="fa fa-caret-down"></span></a>
                                    <ul class="dropdown-menu h-nav">
                                        <li><a href="{{route('newbikes')}}">New Bikes </a></li>
                                        <li><a href="{{route('popular-bikes')}}">Popular Bikes </a></li>
                                        <li><a href="{{route('upcoming-bikes')}}">Upcoming Bikes </a></li>
                                        <li><a href="{{route('latest-bikes')}}">Newly Launched Bikes </a></li>
                                        <li><a href="{{route('electric-bikes')}}">Electric Bikes </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle='dropdown' href="home.html">Scooters <span class="fa fa-caret-down"></span></a>
                                    <ul class="dropdown-menu h-nav">
                                        <li><a href="{{route('newScooters')}}">New Scooters </a></li>
                                        <li><a href="{{route('popular-scooters')}}">Popular Scooters </a></li>
                                        <li><a href="{{route('upcoming-scooters')}}">Upcoming Scooters </a></li>
                                        <li><a href="{{route('latest-scooters')}}">Newly Launched Scooters </a></li>
                                        <li><a href="{{route('electric-scooters')}}">Electric Scooters </a></li>
                                    </ul>

                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle='dropdown' href="home.html">Electric <span class="fa fa-caret-down"></span></a>
                                    <ul class="dropdown-menu h-nav">
                                        <li><a href="{{route('electric-cars')}}">Electric Car </a></li>
                                        <li><a href="{{route('electric-bikes')}}">Electric bike </a></li>
                                        <li><a href="{{route('electric-scooters')}}">Electric Scooters </a></li>
                                  </ul>
                                </li>

                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle='dropdown' href="#">News & Reviews <span class="fa fa-caret-down"></span></a>
                                    <ul class="dropdown-menu h-nav">
                                        <li><a href="{{route('latest-news')}}">Latest News </a></li>
                                        <li><a href="{{route('articals')}}">Articals </a></li>
                                        <li><a href="{{route('expert-review')}}">Expert Review </a></li>
                                        <li><a href="{{route('videos')}}">Video </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--b-nav-->
