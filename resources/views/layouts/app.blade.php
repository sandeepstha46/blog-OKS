<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    @if (request()->is('dashboard'))
    <title>Dashboard</title>
    @elseif(request()->is('profile'))
    <title>Profile</title>
    @elseif(request()->is('profile/edit'))
    <title>Profile Edit</title>
    @elseif(request()->is('user/profile'))
    <title>User Profile</title>
    @elseif(request()->is('user/profile/edit'))
    <title>Edit Profile</title>
    @elseif(request()->is('user/password/view'))
    <title>Edit Password</title>
    @elseif(request()->is('booking/view'))
    <title>View booking</title>
    @elseif(request()->is('booking/add-booking'))
    <title>Add booking</title>
    @elseif(request()->is('customers/view'))
    <title>View Customers</title>
    @else
    <title>Home</title>
    @endif
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/feathericon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesLogin.css') }}">
</head>

<body onload="dateGreet()">
    @auth
    <div class="main-wrapper">
        @include('layouts.header')
        @include('layouts.sidebar')
        <div class="page-wrapper">
            @yield('body')
        </div>
    </div>
    @endauth

    <script type="text/javascript">
        function dateGreet() {
            var day = new Date();
            var hr = day.getHours();
            if (hr >= 0 && hr < 12) {
                document.getElementById("greetings").innerHTML = "Good Morning";
            } else if (hr == 12) {
                document.getElementById("greetings").innerHTML = "Good Afternoon";
            } else if (hr >= 12 && hr <= 17) {
                document.getElementById("greetings").innerHTML = "Good Afternoon";
            } else {
                document.getElementById("greetings").innerHTML = "Good Evening";
            }
        }
    </script>

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('js/chart.morris.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>