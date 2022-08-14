<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            @auth
            @if(Auth::user()->utype === 'ADM')
            <ul>
                @if (request()->is('dashboard'))
                <li class="active">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @else
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @endif
                <li class="list-divider"></li>
                @if (request()->is('booking/view'))
                <li class="submenu">
                    <a class="subrop-booking" href="#">
                        <i class="fas fa-suitcase"></i>
                        <span> Booking </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li>
                            <a href="{{ route('booking.view') }}"> All Booking </a>
                        </li>
                        <li>
                            <a href="{{ route('booking.add') }}"> Add Booking </a>
                        </li>
                    </ul>
                </li>
                @elseif (request()->is('booking/add-booking'))
                <li class="submenu">
                    <a class="subrop-booking" href="#">
                        <i class="fas fa-suitcase"></i>
                        <span> Booking </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li>
                            <a href="{{ route('booking.view') }}"> All Booking </a>
                        </li>
                        <li>
                            <a href="{{ route('booking.add') }}"> Add Booking </a>
                        </li>
                    </ul>
                </li>
                @elseif (request()->is('booking/edit-booking'))
                <li class="submenu">
                    <a class="subrop-booking" href="#">
                        <i class="fas fa-suitcase"></i>
                        <span> Booking </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li>
                            <a href="{{ route('booking.view') }}"> All Booking </a>
                        </li>
                        <li>
                            <a href="{{ route('booking.add') }}"> Add Booking </a>
                        </li>
                    </ul>
                </li>
                @else
                <li class="submenu">
                    <a href="#">
                        <i class="fas fa-suitcase"></i>
                        <span> Booking </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li>
                            <a href="{{ route('booking.view') }}"> All Booking </a>
                        </li>
                        <li>
                            <a href="{{ route('booking.add') }}"> Add Booking </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if (request()->is('customers/view'))
                <li class="submenu active"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('customers.view') }}"> All customers </a></li>
                    </ul>
                </li>
                @else
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('customers.view') }}"> All customers </a></li>
                    </ul>
                </li>
                @endif
                @if (request()->is('product/view'))
                <li class="submenu"> <a class="subrop-booking"><i class="fab fa-product-hunt"></i> <span> Products
                        </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('product.view') }}">All Products </a></li>
                        <li><a href="{{ route('product.add') }}"> Add Products </a></li>
                        <li><a href="{{ route('request.view') }}"> Requested Products </a></li>
                    </ul>
                </li>
                @elseif (request()->is('product/add-product'))
                <li class="submenu"> <a class="subrop-booking"><i class="fab fa-product-hunt"></i> <span>
                            Products
                        </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('product.view') }}">All Products </a></li>
                        <li><a href="{{ route('product.add') }}"> Add Products </a></li>
                        <li><a href="{{ route('request.view') }}"> Requested Products </a></li>
                    </ul>
                </li>
                @else
                <li class="submenu"> <a href=""><i class="fab fa-product-hunt"></i> <span> Products </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('product.view') }}">All Products </a></li>
                        <li><a href="{{ route('product.add') }}"> Add Products </a></li>
                        <li><a href="{{ route('request.view') }}"> Requested Products </a></li>
                    </ul>
                </li>
                @endif
            </ul>
            @else
            <ul>
                @if (request()->is('dashboard'))
                <li class="active">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @else
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @endif
                <li class="list-divider"></li>
                @if (request()->is('booking/view'))
                <li class="submenu">
                    <a class="subrop-booking" href="#">
                        <i class="fas fa-suitcase"></i>
                        <span> Booking </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li>
                            <a href="{{ route('booking.view') }}"> All Booking </a>
                        </li>
                        <li>
                            <a href="{{ route('booking.add') }}"> Add Booking </a>
                        </li>
                    </ul>
                </li>
                @elseif (request()->is('booking/add-booking'))
                <li class="submenu">
                    <a class="subrop-booking" href="#">
                        <i class="fas fa-suitcase"></i>
                        <span> Booking </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li>
                            <a href="{{ route('booking.view') }}"> All Booking </a>
                        </li>
                        <li>
                            <a href="{{ route('booking.add') }}"> Add Booking </a>
                        </li>
                    </ul>
                </li>
                @elseif (request()->is('booking/edit-booking'))
                <li class="submenu">
                    <a class="subrop-booking" href="#">
                        <i class="fas fa-suitcase"></i>
                        <span> Booking </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li>
                            <a href="{{ route('booking.view') }}"> All Booking </a>
                        </li>
                        <li>
                            <a href="{{ route('booking.add') }}"> Add Booking </a>
                        </li>
                    </ul>
                </li>
                @else
                <li class="submenu">
                    <a href="#">
                        <i class="fas fa-suitcase"></i>
                        <span> Booking </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li>
                            <a href="{{ route('booking.view') }}"> All Booking </a>
                        </li>
                        <li>
                            <a href="{{ route('booking.add') }}"> Add Booking </a>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="submenu"> <a href="#"><i class="fab fa-product-hunt"></i> <span> Products </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('request.view') }}">Request Products</a></li>
                    </ul>
                </li>
            </ul>
            @endif
            @endauth
        </div>
    </div>
</div>