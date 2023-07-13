<div class="topbar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="top-left">
                    {{-- <ul class="menu-top-link">
                        <li>
                            <div class="select-position">
                                <select id="select4">
                                    <option value="0" selected="">$ USD</option>
                                    <option value="1">€ EURO</option>
                                    <option value="2">$ CAD</option>
                                    <option value="3">₹ INR</option>
                                    <option value="4">¥ CNY</option>
                                    <option value="5">৳ BDT</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="select-position">
                                <select id="select5">
                                    <option value="0" selected="">English</option>
                                    <option value="1">Español</option>
                                    <option value="2">Filipino</option>
                                    <option value="3">Français</option>
                                    <option value="4">العربية</option>
                                    <option value="5">हिन्दी</option>
                                    <option value="6">বাংলা</option>
                                </select>
                            </div>
                        </li>
                    </ul> --}}
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="top-middle">
                    {{-- <ul class="useful-links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul> --}}
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="top-end">
                    <div class="user">
                        <i class="lni lni-user"></i>
                        @auth
                            {{ auth()->user()->name }}
                        @endauth
                    </div>
                    <ul class="user-login">
                        @guest
                            <li>
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">Register</a>
                            </li>
                        @endguest
                        @auth
                            <li>
                                <a href="/logout">Logout</a>
                            </li>
                        @endauth
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="header-middle">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-3 col-7">
                <img src="{{ asset('front/assets/images/logo-landing.png') }}" alt="Logo">

            </div>
            <div class="col-lg-5 col-md-7 d-xs-none">

            </div>
            <div class="col-lg-4 col-md-2 col-5">
                <div class="middle-right-area">
                    <div class="nav-hotline">
                        <i class="lni lni-phone"></i>
                        <h3>Hotline:
                            <span>(+100) 123 456 7890</span>
                        </h3>
                    </div>
                    <div class="navbar-cart">
                        <div class="cart-items">
                            <a href="{{ Auth::check() ? '/cart' : '/login' }}" class="main-btn">
                                <?php
                                if (Auth::check()) {
                                    $customerId = Auth::user()->id;
                                    $orders = \App\Models\Orders::where('customers_id', $customerId)
                                        ->where('status', 0)
                                        ->first();
                                    if ($orders) {
                                        $notif = \App\Models\OrderItems::where('order_id', $orders->id)->count();
                                    } else {
                                        $notif = 0;
                                    }
                                } else {
                                    $notif = 0;
                                }
                                ?>
                                <i class="lni lni-cart"></i>
                                <span class="total-items">{{ $notif }}</span>
                            </a>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>

{{-- navbar  --}}
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-8 col-md-6 col-12">
            <div class="nav-inner">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul id="nav" class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="/" aria-label="Toggle navigation">Home</a>
                            </li>

                            {{-- <li class="nav-item">
                                <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                    data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                                <ul class="sub-menu collapse" id="submenu-1-4">
                                    <li class="nav-item"><a href="blog-grid-sidebar.html">Blog Grid
                                            Sidebar</a>
                                    </li>
                                    <li class="nav-item"><a href="blog-single.html">Blog Single</a></li>
                                    <li class="nav-item"><a href="blog-single-sidebar.html">Blog Single
                                            Sibebar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" aria-label="Toggle navigation">Contact Us</a>
                            </li> --}}
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
    </div>
</div>
