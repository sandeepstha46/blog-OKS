@auth
@if(Auth::user()->utype === 'ADM')
<div class="header">
    <div class="header-left">
        <a href="{{ route('dashboard') }}" class="logo">
            <img src="{{ asset('images/hotel_logo.png') }}" width="50" height="70" alt="logo">
            <span class="logoclass">ADMIN PANEL</span>
        </a>
        <a href="{{ route('dashboard') }}" class="logo logo-small">
            <img src="{{ asset('images/hotel_logo.png') }}" alt="Logo" width="30" height="30">
        </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fe fe-text-align-left"></i>
    </a>
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>
    <ul class="nav user-menu">
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img">
                    <img class="rounded-circle" alt="User Image" src="{{ (!empty(Auth::user()->profile_photo_path))? url('images/upload_images/user_images/'.Auth::user()->profile_photo_path): url('images/upload_images/no_avatar.png') }}" width="40">
                </span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('/') }}">Home</a>
                <a class="dropdown-item" href="{{ route('user.profile') }}">My Profile</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</div>
@else
<div class="header">
    <div class="header-left">
        <a href="{{ route('dashboard') }}" class="logo">
            <img src="{{ asset('images/hotel_logo.png') }}" width="50" height="70" alt="logo">
            <span class="logoclass">USER PANEL</span>
        </a>
        <a href="{{ route('dashboard') }}" class="logo logo-small">
            <img src="{{ asset('images/hotel_logo.png') }}" alt="Logo" width="30" height="30">
        </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fe fe-text-align-left"></i>
    </a>
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>
    <ul class="nav user-menu">
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img">
                    <img class="rounded-circle" alt="User Image" src="{{ (!empty(Auth::user()->profile_photo_path))? url('images/upload_images/user_images/'.Auth::user()->profile_photo_path): url('images/upload_images/no_avatar.png') }}" width="40">
                </span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('/') }}">Home</a>
                <a class="dropdown-item" href="{{ route('user.profile') }}">My Profile</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</div>
@endif
@endauth