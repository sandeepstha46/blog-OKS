<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/feathericon.min.css') }}" />
    <!-- <link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/stylesLogin.css') }}" />
</head>

<body>
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left"><a href="{{ url('/') }}"><img class="img-fluid" src="{{ asset('images/hotel_logow.png') }}" alt="Logo"></a></div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Login</h1>
                            <p class="account-subtitle">Access to our dashboard</p>
                            @if (count($errors) > 0)
                            <div class="alert alert-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                <p class="mb-0">{{ $error }}
                                    @endforeach
                            </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" name="email" placeholder="Email" required autofocus />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="password" type="password" name="password" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                                </div>
                            </form>
                            <div class="text-center forgotpass">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                                @endif
                            </div>
                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">or</span>
                            </div>
                            <div class="text-center dont-have">
                                Don’t have an account?
                                <a href="{{ route('register') }}">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>