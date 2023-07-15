@extends('layouts-front.master', ['title' => 'Home'])
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
                        <h2>Product</h2>
                        <p>The iPhone is a popular and innovative smartphone designed and marketed by Apple Inc., known for
                            its sleek design, powerful performance, and user-friendly interface.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-4 mb-3">
                    <form action="{{ route('search') }}" method="GET">
                        <div class="input-group">
                            <input type="text" name="query" class="form-control" placeholder="Cari Produk...">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Search</button>
                                @auth
                                <a href="{{ route('home') }}" class="btn btn-secondary">Show All</a>    
                                @endauth
                                @guest
                                <a href="/" class="btn btn-secondary">Show All</a>    
                                @endguest
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php $countData = $products->count(); ?>
                    @if ($countData < 1)
                        <h5 style="display: flex; justify-content: center; align-items: center;">Product Not Ready :)</h5>
                    @endif
                </div>
                @foreach ($products as $value)
                  @if ($value->stock > 0)
                    <style>
                        .product-image {
                            height: 200px;
                            /* You can adjust this value to your desired height */
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            overflow: hidden;
                        }

                        .product-image img {
                            width: 100%;
                            height: 100%;
                            object-fit: contain;
                        }
                    </style>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-product">
                            <div class="product-image">
                                <img src="{{ asset('storage/product/' . $value->gambar) }}" alt="Product Image">
                                <div class="button">
                                    @auth
                                        <a href="{{ route('ordersId', $value->id) }}" class="btn"><i
                                                class="lni lni-cart"></i>
                                            Add to Cart</a>
                                    @else
                                        <a href="/login" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                                    @endauth
                                </div>
                            </div>
                            <div class="product-info">
                                <span class="category">Phone</span>
                                <h4 class="title">
                                    <a href="product-grids.html">{{ $value->name }}</a>
                                </h4>
                                <ul class="review">
                                    <li><span>{{ $value->description }}</span></li>
                                </ul>
                                <div class="price">
                                    <span>Rp. {{ number_format($value->price) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    {{-- Tampilkan daftar produk disini --}}
                    @foreach ($products as $value)
                        <!-- Kode untuk menampilkan daftar produk -->
                    @endforeach
                </div>
            </div>

            <!-- Tampilkan tautan Previous dan Next -->
            <div class="row">
                <div class="col-12">
                    <div class="pagination right">
                        <ul class="pagination-list">
                            <li class="page-item @if (!$products->previousPageUrl()) disabled @endif">
                                @if ($products->previousPageUrl())
                                    <a class="page-link" href="{{ $products->previousPageUrl() }}"
                                        aria-label="Halaman Sebelumnya">Previous</a>
                                @else
                                    <span class="page-link" aria-hidden="true">Previous</span>
                                @endif
                            </li>
                            <li class="page-item @if (!$products->nextPageUrl()) disabled @endif">
                                @if ($products->nextPageUrl())
                                    <a class="page-link" href="{{ $products->nextPageUrl() }}"
                                        aria-label="Halaman Berikutnya">Next</a>
                                @else
                                    <span class="page-link" aria-hidden="true">Next</span>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('sweetalert::alert')
@endsection
