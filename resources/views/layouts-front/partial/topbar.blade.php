
<div class="header-middle">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-3 col-7">

                <a class="navbar-brand" href="/">
                    <img src="{{ asset('front/assets/images/logo-landing.png') }}" alt="Logo">
                </a>

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
                            <a href="javascript:void(0)" class="main-btn">
                                <i class="lni lni-cart"></i>
                                <span class="total-items">2</span>
                            </a>

                            <div class="shopping-item">
                                <div class="dropdown-cart-header">
                                    <span>2 Items</span>
                                    <a href="/cart">View Cart</a>
                                </div>
                                <ul class="shopping-list">
                                    <li>
                                        <a href="javascript:void(0)" class="remove" title="Remove this item"><i
                                                class="lni lni-close"></i></a>
                                        <div class="cart-img-head">
                                            <a class="cart-img" href="product-details.html"><img
                                                    src="{{ asset('front/assets/images/header/cart-items/item1.jpg') }}"
                                                    alt="#"></a>
                                        </div>
                                        <div class="content">
                                            <h4><a href="product-details.html">
                                                    Apple Watch Series 6</a></h4>
                                            <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="remove" title="Remove this item"><i
                                                class="lni lni-close"></i></a>
                                        <div class="cart-img-head">
                                            <a class="cart-img" href="product-details.html"><img
                                                    src="{{ asset('front/assets/images/header/cart-items/item2.jpg') }}"
                                                    alt="#"></a>
                                        </div>
                                        <div class="content">
                                            <h4><a href="product-details.html">Wi-Fi Smart Camera</a></h4>
                                            <p class="quantity">1x - <span class="amount">$35.00</span></p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="bottom">
                                    <div class="total">
                                        <span>Total</span>
                                        <span class="total-amount">$134.00</span>
                                    </div>
                                    <div class="button">
                                        <a href="/checkout" class="btn animate">Checkout</a>
                                    </div>
                                </div>
                            </div>
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
                                <a href="index.html" class="active" aria-label="Toggle navigation">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                    data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">Pages</a>
                                <ul class="sub-menu collapse" id="submenu-1-2">
                                    <li class="nav-item"><a href="about-us.html">About Us</a></li>
                                    <li class="nav-item"><a href="faq.html">Faq</a></li>
                                    <li class="nav-item"><a href="/login">Login</a></li>
                                    <li class="nav-item"><a href="register.html">Register</a></li>
                                    <li class="nav-item"><a href="mail-success.html">Mail Success</a></li>
                                    <li class="nav-item"><a href="404.html">404 Error</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                    data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">Shop</a>
                                <ul class="sub-menu collapse" id="submenu-1-3">
                                    <li class="nav-item"><a href="product-grids.html">Shop Grid</a></li>
                                    <li class="nav-item"><a href="product-list.html">Shop List</a></li>
                                    <li class="nav-item"><a href="product-details.html">shop Single</a></li>
                                    <li class="nav-item"><a href="cart.html">Cart</a></li>
                                    <li class="nav-item"><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
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
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">

            <div class="nav-social">
                <ul>
                    <li>
                        <a href="javascript:void(0)"><i class="lni lni-user"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>