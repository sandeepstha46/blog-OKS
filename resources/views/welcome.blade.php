<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <title>Home</title>
</head>

<body>
    @csrf
    <header>
        <div class="container">
            <div class="row top-head">
                <ul class="top-head-row">
                    <li>Available: 10 am - 5 pm</li>
                    <li>+977 980 0052623</li>
                    @if(Route::has('login'))
                    @auth
                    @if(Auth::user()->utype === 'ADM')
                    <li class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}}</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    @else
                    <li class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}}</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    @endif
                    @else
                    <li><a href="{{route('login')}}">Login</a> / <a href="{{route('register')}}">Register</a></li>
                    @endif
                    @endif
            </div>
        </div>
        <hr />

        <div class="container">
            <div class="row second-head">
                <div class="col-md-6 logo-image">
                    <img class="logo" src="{{ asset('images/logo.png') }}" alt="logo" />
                </div>
                <div class="col-md-6">
                    <ul class="top-head-second-row">
                        <li class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="/">Home</a></li>
                                <li><a class="dropdown-item" href="">About Us</a></li>
                                <li><a class="dropdown-item" href="">Contact Us</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">Spare Parts</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('request.add') }}">Request Spare Parts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('booking.add') }}">Car / Bike Servicing</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('booking.add') }}">General Repair</a></li>
                                <li><a class="dropdown-item" href="{{ route('booking.add') }}">Cleaning / Detailing</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('product.list') }}">View Products</a>
                                </li>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <section class="carousel-row">
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="{{ asset('images/1.png') }}" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/2.png') }}" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/3.png') }}" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item active">
                        <img src="{{ asset('images/4.png') }}" class="d-block w-100" alt="..." />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="our-services">
        <div class="container">
            <div class="row third-row">
                <h2>OUR SERVICES</h2>
            </div>
            <div class="cont-2-div">
                <img src="{{ asset('images/line.png') }}" height="24" />
            </div>
            <div class="row fourth-row">
                <div class="col-md-6">
                    <div class="row inner-fouth">
                        <div class="col-md-7">
                            <h5>Car / Bike Servicing</h5>
                            <p>An unserviced vehicle is likely to have a shorter life expectancy and higher fuel costs.
                                Getting your car regularly serviced could save you money in the long run.</p>
                            <button class="btn btn-primary book-now"><a href="{{ route('booking.add') }}">Book
                                    Now</a></button>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('images/car_servicing.png') }}" class="rounded float-end img-fluid"
                                alt="..." />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row inner-fouth">
                        <div class="col-md-7">
                            <h5>General Repair</h5>
                            <p>We have the time to explain every job, and always provide you with an estimate in
                                advance. You can be rest assured that our technicians have been trained.</p>
                            <button class="btn btn-primary book-now"><a href="{{ route('booking.add') }}">Book
                                    Now</a></button>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('images/general_services.png') }}" class="rounded float-end img-fluid"
                                alt="..." />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row fourth-row">
                <div class="col-md-6">
                    <div class="row inner-fouth">
                        <div class="col-md-7">
                            <h5>Denting Painting</h5>
                            <p>An auto painting job requires a certain level of expertise and experience. By having your
                                car painted by a professional, you are assured of best results.</p>
                            <button class="btn btn-primary book-now"><a href="{{ route('booking.add') }}">Book
                                    Now</a></button>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('images/denting_painting.png') }}" class="rounded float-end img-fluid"
                                alt="..." />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row inner-fouth">
                        <div class="col-md-7">
                            <h5>Cleaning, Detailing</h5>
                            <p>Proper detailing improves and maintains the health of your car. While detailing takes a
                                bit of effort, the benefits to reliability, safety and beauty are all worthwhile.</p>
                            <button class="btn btn-primary book-now"><a href="{{ route('booking.add') }}">Book
                                    Now</a></button>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('images/cleaning_detailing.png') }}" class="rounded float-end img-fluid"
                                alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-available">
        <div class="container">
            <div class="row fifth-row">
                <h2>AVAILABLE AT</h2>
            </div>
            <div class="cont-2-div">
                <img src="{{ asset('images/line.png') }}" height="24" />
            </div>
            <div class="image-list">
                <ul class="inner-fifth">
                    <li class="img-text">
                        <img src="{{ asset('images/kathmandu.png') }}" class="img-fluid rounded" alt="..." />
                        <div class="overlay">
                            <div class="text text-center">kathmandu</div>
                        </div>
                    </li>
                    <li class="img-text">
                        <img src="{{ asset('images/chitwan.png') }}" class="img-fluid rounded" alt="..." />
                        <div class="overlay">
                            <div class="text text-center">Chitwan</div>
                        </div>
                    </li>
                    <li class="img-text">
                        <img src="{{ asset('images/pokhara.png') }}" class="img-fluid rounded" alt="..." />
                        <div class="overlay">
                            <div class="text text-center">Pokhara</div>
                        </div>
                    </li>
                    <li class="img-text">
                        <img src="{{ asset('images/hetauda.png') }}" class="img-fluid rounded" alt="..." />
                        <div class="overlay">
                            <div class="text text-center">Hetauda</div>
                        </div>
                    </li>
                    <li class="img-text">
                        <img src="{{ asset('images/itahari.png') }}" class="img-fluid rounded" alt="..." />
                        <div class="overlay">
                            <div class="text text-center">Ithari</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="why-us">
        <div class="container">
            <div class="row fifth-row">
                <h2>Why Us?</h2>
            </div>
            <div class="cont-2-div">
                <img src="{{ asset('images/line.png') }}" height="24" />
            </div>
            <div class="container">
                <div class="row rs-count" style="padding-top: 60px">
                    <!-- COUNTER-LIST START -->
                    <div class="col-md-2 col-sm-6 wow fadeInUp" style="text-align: center">
                        <div class="rs-counter-list">
                            <i class="fa fa-car fa-4x" aria-hidden="true"></i>
                            <h6 class="rs-counter" id="count-er">Free</h6>
                            <h6>Pick &amp; Drop</h6>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 wow fadeInUp" style="text-align: center">
                        <div class="rs-counter-list">
                            <i class="fa fa-certificate fa-4x" aria-hidden="true"></i>
                            <h6 class="rs-counter">1500+</h6>
                            <h6>Certified Technicians</h6>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 wow fadeInUp" style="text-align: center">
                        <div class="rs-counter-list">
                            <i class="fa fa-cogs fa-4x" aria-hidden="true"></i>
                            <h6 class="rs-counter">200+</h6>
                            <h6>Garages</h6>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 wow fadeInUp" style="text-align: center">
                        <div class="rs-counter-list">
                            <i class="fa fa-user fa-4x" aria-hidden="true"></i>
                            <h6 class="rs-counter">Expert</h6>
                            <h6>Assistance on Call</h6>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 wow fadeInUp" style="text-align: center">
                        <div class="rs-counter-list">
                            <i class="fa fa-money fa-4x" aria-hidden="true"></i>
                            <h6 class="rs-counter">Cashless</h6>
                            <h6>Claims Support</h6>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 wow fadeInUp" style="text-align: center">
                        <div class="rs-counter-list">
                            <i class="fa fa-handshake-o fa-4x" aria-hidden="true"></i>
                            <h6 class="rs-counter">Door Step</h6>
                            <h6>Services</h6>
                        </div>
                    </div>

                    <!-- COUNTER-LIST END -->
                </div>
            </div>
        </div>
    </section>

    <section class="testimonal-carousel">
        <div class="container">
            <div class="row sixth-row">
                <h2>TESTIMONALS</h2>
            </div>
            <div class="cont-2-div">
                <img src="{{ asset('images/line.png') }}" height="24" />
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active text-center">
                        <img class="img-fluid rounded" src="{{ asset('images/i.jpg') }}" alt="image" />
                        <div class="user-name">
                            <h5>Lorem Ipsum</h5>
                        </div>
                        <div>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half" aria-hidden="true"></i>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 ms-3"><i>"This is some content from a media component. You can
                                    replace this with any content and adjust it as needed."</i></div>
                        </div>
                    </div>
                    <div class="carousel-item text-center">
                        <img class="img-fluid rounded" src="{{ asset('images/ii.jpg') }}" alt="image" />
                        <div class="user-name">
                            <h5>Lorem Ipsum</h5>
                        </div>
                        <div>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half" aria-hidden="true"></i>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 ms-3"><i>"This is some content from a media component. You can
                                    replace this with any content and adjust it as needed."</i></div>
                        </div>
                    </div>
                    <div class="carousel-item text-center">
                        <img class="img-fluid rounded" src="{{ asset('images/iii.jpg') }}" alt="image" />
                        <div class="user-name">
                            <h5>Lorem Ipsum</h5>
                        </div>
                        <div>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half" aria-hidden="true"></i>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 ms-3"><i>"This is some content from a media component. You can
                                    replace this with any content and adjust it as needed."</i></div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="footer-area">
        <footer class="footer-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <h5 class="footer-heading">Cities</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="d-block">Kathmandu</a></li>
                                    <li><a href="#" class="d-block">Chitwan</a></li>
                                    <li><a href="#" class="d-block">Pokhara</a></li>
                                    <li><a href="#" class="d-block">Hetauda</a></li>
                                    <li><a href="#" class="d-block">Itahari</a></li>
                                    <li><a href="#" class="d-block">More Coming</a></li>
                                    <li><a href="#" class="d-block">More Coming</a></li>
                                    <li><a href="#" class="d-block">More Coming</a></li>
                                    <li><a href="#" class="d-block">More Coming</a></li>
                                    <li><a href="#" class="d-block">More Coming</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h5 class="footer-heading">Company</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="d-block">Complete Car / Bike Services</a></li>
                                    <li><a href="#" class="d-block">Periodic Car / Bike Services</a></li>
                                    <li><a href="#" class="d-block">Car / Bike Denting And Painting</a></li>
                                    <li><a href="#" class="d-block">Car / Bike Cleaning And Detailing</a></li>
                                    <li><a href="#" class="d-block">Car / Bike Mechanical Repair</a></li>
                                    <li><a href="#" class="d-block">Car / Bike Bettery Check / Replacement</a></li>
                                    <li><a href="#" class="d-block">Car / Bike Tyre Replacement</a></li>
                                    <li><a href="#" class="d-block">Wheel Alignment / Balancing</a></li>
                                    <li><a href="#" class="d-block">Car Ac Service</a></li>
                                    <li><a href="#" class="d-block">Car Power Window Service</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h5 class="footer-heading">Garages Near You</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="d-block">Garages Near Kathmandu</a></li>
                                    <li><a href="#" class="d-block">Garages Near Chitwan</a></li>
                                    <li><a href="#" class="d-block">Garages Near Pokhara</a></li>
                                    <li><a href="#" class="d-block">Garages Near Hetauda</a></li>
                                    <li><a href="#" class="d-block">Garages Near Itahari</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h5 class="footer-heading">Subscribe</h5>
                                <label for="exampleInputEmail1" class="form-label">To ours Newsletter</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" />
                                <div id="emailHelp" class="form-text">Get up-to-date information and about new offers.
                                    Always be on top to get updates and offers.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <p class="copyright">
                        Copyright &#169; All rights reserved to
                        <a href="/">e-garage</a>
                        2022
                    </p>
                </div>
            </div>
        </footer>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>