@extends('layouts-front.master')
@section('content')
    {{-- Fitur Slider  --}}
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 custom-padding-right">
                    <div class="slider-head">

                        <div class="hero-slider">

                            <div class="single-slider"
                                style="background-image:url({{ asset('front/assets/images/hero/xslider-bg1.jpg.pagespeed.ic.QB-k7UuPjB.jpg') }})">
                                <div class="content">
                                    <h2><span>No restocking fee ($35 savings)</span>
                                        M75 Sport Watch
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labore dolore magna aliqua.</p>
                                    <h3><span>Now Only</span> $320.99</h3>
                                    <div class="button">
                                        <a href="product-grids.html" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>


                            <div class="single-slider"
                                style="background-image:url({{ asset('front/assets/images/hero/xslider-bg2.jpg.pagespeed.ic.nEcfNovovG.jpg') }})">
                                <div class="content">
                                    <h2><span>Big Sale Offer</span>
                                        Get the Best Deal on CCTV Camera
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labore dolore magna aliqua.</p>
                                    <h3><span>Combo Only:</span> $590.00</h3>
                                    <div class="button">
                                        <a href="product-grids.html" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12 md-custom-padding">

                            <div class="hero-small-banner"
                                style="background-image: url('{{ asset('front/assets/images/hero/slider-bnr.jpg') }}');">
                                <div class="content">
                                    <h2>
                                        <span>New line required</span>
                                        iPhone 12 Pro Max
                                    </h2>
                                    <h3>$259.99</h3>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12 col-md-6 col-12">

                            <div class="hero-small-banner style2">
                                <div class="content">
                                    <h2>Weekly Sale!</h2>
                                    <p>Saving up to 50% off all online store items this week.</p>
                                    <div class="button">
                                        <a class="btn" href="product-grids.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- fitur trending produk -->
    <section class="trending-product section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Product</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-product">
                        <div class="product-image">
                            <img src="{{ asset('front/assets/images/products/product.jpg') }}" alt="#"
                                src="{{ asset('front/pagespeed_static/1.JiBnMqyl6S.gif') }}"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                    Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Watches</span>
                            <h4 class="title">
                                <a href="product-grids.html">Xiaomi Mi Band 5</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><span>4.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>$199.00</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-product">
                        <div class="product-image">
                            <img src="{{ asset('front/assets/images/products/xproduct-2.jpg.pagespeed.ic.zECdy8GFdP.jpg') }}"
                                alt="#" src="{{ asset('front/pagespeed_static/1.JiBnMqyl6S.gif') }}"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            <span class="sale-tag">-25%</span>
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                    Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Speaker</span>
                            <h4 class="title">
                                <a href="product-grids.html">Big Power Sound Speaker</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>$275.00</span>
                                <span class="discount-price">$300.00</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-product">
                        <div class="product-image">
                            <img src="{{ asset('front/assets/images/products/xproduct-3.jpg.pagespeed.ic.vRmHjPpu2i.jpg') }}"
                                alt="#" src="{{ asset('front/pagespeed_static/1.JiBnMqyl6S.gif') }}"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                    Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Camera</span>
                            <h4 class="title">
                                <a href="product-grids.html">WiFi Security Camera</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>$399.00</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-product">
                        <div class="product-image">
                            <img src="{{ asset('front/assets/images/products/xproduct-4.jpg.pagespeed.ic.mT1a0Z15AC.jpg') }}"
                                alt="#" src="{{ asset('front/pagespeed_static/1.JiBnMqyl6S.gif') }}"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            <span class="new-tag">New</span>
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                    Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Phones</span>
                            <h4 class="title">
                                <a href="product-grids.html">iphone 6x plus</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>$400.00</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-product">
                        <div class="product-image">
                            <img src="{{ asset('front/assets/images/products/xproduct-5.jpg.pagespeed.ic.tQ8W_M9oN1.jpg') }}"
                                alt="#" src="{{ asset('front/pagespeed_static/1.JiBnMqyl6S.gif') }}"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                    Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Headphones</span>
                            <h4 class="title">
                                <a href="product-grids.html">Wireless Headphones</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>$350.00</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-product">
                        <div class="product-image">
                            <img src="{{ asset('front/assets/images/products/xproduct-6.jpg.pagespeed.ic.GGb3AeLttK.jpg') }}" alt="#"
                                src="{{ asset('front/pagespeed_static/1.JiBnMqyl6S.gif') }}"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                    Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Speaker</span>
                            <h4 class="title">
                                <a href="product-grids.html">Mini Bluetooth Speaker</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><span>4.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>$70.00</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-product">
                        <div class="product-image">
                            <img src="{{ asset('front/assets/images/products/xproduct-7.jpg.pagespeed.ic.rRlKB_-37i.jpg') }}"
                                alt="#" src="{{ asset('front/pagespeed_static/1.JiBnMqyl6S.gif') }}"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            <span class="sale-tag">-50%</span>
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                    Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Headphones</span>
                            <h4 class="title">
                                <a href="product-grids.html">PX7 Wireless Headphones</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><span>4.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>$100.00</span>
                                <span class="discount-price">$200.00</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-product">
                        <div class="product-image">
                            <img src="{{ asset('front/assets/images/products/xproduct-8.jpg.pagespeed.ic.DLVHLzRhsg.jpg') }}"
                                alt="#" src="{{ asset('front/pagespeed_static/1.JiBnMqyl6S.gif') }}"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                    Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Laptop</span>
                            <h4 class="title">
                                <a href="product-grids.html">Apple MacBook Air</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>$899.00</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- fitur baner  -->
    <section class="banner section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner"
                        style="background-image:url('{{ asset('front/assets/images/banner/xbanner-1-bg.jpg.pagespeed.ic.o5kkJh_gbP.jpg') }}')">
                        <div class="content">
                            <h2>Smart Watch 2.0</h2>
                            <p>Space Gray Aluminum Case with <br>Black/Volt Real Sport Band </p>
                            <div class="button">
                                <a href="product-grids.html" class="btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner custom-responsive-margin"
                        style="background-image:url({{ asset('front/assets/images/banner/xbanner-2-bg.jpg.pagespeed.ic.VbAquGFVe0.jpg') }})">
                        <div class="content">
                            <h2>Smart Headphone</h2>
                            <p>Lorem ipsum dolor sit amet, <br>eiusmod tempor
                                incididunt ut labore.</p>
                            <div class="button">
                                <a href="product-grids.html" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Fitur bestseller  --}}
    {{-- <section class="home-product-list section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                    <h4 class="list-title">Best Sellers</h4>

                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{asset('front/assets/images/home-product-list/x01.jpg.pagespeed.ic.aFGrpkZ-YS.jpg')}}"
                                    alt="#" src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">GoPro Hero4 Silver</a>
                            </h3>
                            <span>$287.99</span>
                        </div>
                    </div>


                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{asset('front/assets/images/home-product-list/02.jpg')}}" alt="#"
                                    src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Puro Sound Labs BT2200</a>
                            </h3>
                            <span>$95.00</span>
                        </div>
                    </div>


                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{asset('front/assets/images/home-product-list/x03.jpg.pagespeed.ic.9cMfTBVtlQ.jpg')}}"
                                    alt="#" src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">HP OfficeJet Pro 8710</a>
                            </h3>
                            <span>$120.00</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                    <h4 class="list-title">New Arrivals</h4>

                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{asset('front/assets/images/home-product-list/x04.jpg.pagespeed.ic.F7KQPplcrb.jpg')}}"
                                    alt="#" src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">iPhone X 256 GB Space Gray</a>
                            </h3>
                            <span>$1150.00</span>
                        </div>
                    </div>


                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{asset('front/assets/images/home-product-list/05.jpg')}}" alt="#"
                                    src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Canon EOS M50 Mirrorless Camera</a>
                            </h3>
                            <span>$950.00</span>
                        </div>
                    </div>


                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{asset('front/assets/images/home-product-list/x06.jpg.pagespeed.ic.V0fUUC8Z5C.jpg')}}"
                                    alt="#" src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Microsoft Xbox One S</a>
                            </h3>
                            <span>$298.00</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <h4 class="list-title">Top Rated</h4>

                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{asset('front/assets/images/home-product-list/x07.jpg.pagespeed.ic.LRQsjgfm_s.jpg')}}"
                                    alt="#" src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Samsung Gear 360 VR Camera</a>
                            </h3>
                            <span>$68.00</span>
                        </div>
                    </div>


                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{asset('front/assets/images/home-product-list/x08.jpg.pagespeed.ic.HuloKYFnZS.jpg')}}"
                                    alt="#" src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Samsung Galaxy S9+ 64 GB</a>
                            </h3>
                            <span>$840.00</span>
                        </div>
                    </div>


                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{asset('front/assets/images/home-product-list/x09.jpg.pagespeed.ic.wWVNAXGYMB.jpg')}}"
                                    alt="#" src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Zeus Bluetooth Headphones</a>
                            </h3>
                            <span>$28.00</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}

    {{-- Fitur Trend Brand  --}}
    {{-- <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <h2 class="title">Popular Brands</h2>
                </div>
            </div>
            <div class="brands-logo-wrapper">
                <div class="brands-logo-carousel d-flex align-items-center justify-content-between">
                    <div class="brand-logo">
                        <img src="{{ asset('front/assets/images/brands/01.png') }}" alt="#"
                            src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('front/assets/images/brands/02.png') }}" alt="#"
                            src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('front/assets/images/brands/03.png') }}" alt="#"
                            src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('front/assets/images/brands/04.png') }}" alt="#"
                            src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('front/assets/images/brands/05.png') }}" alt="#"
                            src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('front/assets/images/brands/06.png') }}" alt="#"
                            src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </div>
                    <div class="brand-logo">
                        <img src="{{asset('front/assets/images/brands/03.png')}}" alt="#"
                            src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </div>
                    <div class="brand-logo">
                        <img src="{{asset('front/assets/images/brands/04.png')}}" alt="#"
                            src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- Fitur Blog  --}}
    {{-- <section class="blog-section section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Our Latest News</h2>
                        <p>There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-single-sidebar.html">
                                <img src="{{asset('front/assets/images/blog/xblog-1.jpg.pagespeed.ic.24jdCeAtgl.jpg')}}"
                                    alt="#" src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a class="category" href="javascript:void(0)">eCommerce</a>
                            <h4>
                                <a href="blog-single-sidebar.html">What information is needed for shipping?</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-single-sidebar.html">
                                <img src="{{asset('front/assets/images/blog/xblog-2.jpg.pagespeed.ic.6L6xzKu5Ob.jpg')}}"
                                    alt="#" src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a class="category" href="javascript:void(0)">Gaming</a>
                            <h4>
                                <a href="blog-single-sidebar.html">Interesting fact about gaming consoles</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-single-sidebar.html">
                                <img src="{{asset('front/assets/images/blog/blog-3.jpg')}}" alt="#"
                                    src="{{asset('front/pagespeed_static/1.JiBnMqyl6S.gif')}}"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a class="category" href="javascript:void(0)">Electronic</a>
                            <h4>
                                <a href="blog-single-sidebar.html">Electronics, instrumentation & control engineering
                                </a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}

    {{-- Fitur Shipping  --}}
    <section class="shipping-info">
        <div class="container">
            <ul>
                <li>
                    <div class="media-icon">
                        <i class="lni lni-delivery"></i>
                    </div>
                    <div class="media-body">
                        <h5>Free Shipping</h5>
                        <span>On order over $99</span>
                    </div>
                </li>
                <li>
                    <div class="media-icon">
                        <i class="lni lni-support"></i>
                    </div>
                    <div class="media-body">
                        <h5>24/7 Support.</h5>
                        <span>Live Chat Or Call.</span>
                    </div>
                </li>
                <li>
                    <div class="media-icon">
                        <i class="lni lni-credit-cards"></i>
                    </div>
                    <div class="media-body">
                        <h5>Online Payment.</h5>
                        <span>Secure Payment Services.</span>
                    </div>
                </li>
                <li>
                    <div class="media-icon">
                        <i class="lni lni-reload"></i>
                    </div>
                    <div class="media-body">
                        <h5>Easy Return.</h5>
                        <span>Hassle Free Shopping.</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
