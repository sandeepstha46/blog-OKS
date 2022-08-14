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

    <section class="all-product">
        <div class="container">
            <h3>
                All Parts
                </h1>
                <hr />

        </div>
    </section>

    <section class="data-all">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="card" style="width: 13rem;">
                        <img class="card-img-top"
                            src="https://cdn.pixabay.com/photo/2022/05/12/19/11/flowers-7192179__480.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Rs. 500</p>
                            <a href="#" class="btn btn-primary">Book</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="footer-area">
        <footer class="footer-10">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-md-3 col-sm-1">
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