@extends('components.main')

@section('content')
    <section id="hero" class="hero">
        <div class="container">
            <!-- Carousel -->
            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <!-- Slides -->
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <a href="#!">
                            <img src="{{ asset('storage/images/anh_1.jpg') }}" alt="Fashion-img 1"
                                class="d-block w-100 hero-img" />
                        </a>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <a href="#!">
                            <img src="{{ asset('storage/images/anh_2.jpg') }}" alt="Fashion-img 2"
                                class="d-block w-100 hero-img" />
                        </a>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <a href="#!">
                            <img src="{{ asset('storage/images/anh_3.jpg') }}" alt="Fashion-img 3"
                                class="d-block w-100 hero-img" />
                        </a>
                    </div>
                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <section class="products">
        <div class="container">
            <div class="products-highlighted">
                <h2 class="heading product__heading">
                    <a href="#!">Sản phẩm nổi bật</a>
                </h2>
                <div class="product-list">
                    <div class="product-item">
                        <img src="{{ asset('storage/images/product_1.jpg') }}" alt="product-image" class="product-image" />
                        <h3 class="heading line-clamp product__title">
                            Bộ Quần Áo Thu Đông Nam Áo Khoác Nhẹ Khoá Kéo Phối Màu Thanh
                            Lịch Kèm Quần Jogger Bo Gấu
                        </h3>
                        <p class="product__price">129.000</p>
                        <div class="product__details">
                            <p class="product__rating">
                                <i class="fa-solid fa-star"></i> 4.8
                            </p>
                            <p class="product__sales">Đã bán 12,4k</p>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="{{ asset('storage/images/product_2.jpg') }}" alt="product-image" class="product-image" />
                        <h3 class="heading line-clamp product__title">
                            Bộ Quần Áo Thu Đông Nam Áo Khoác Nhẹ Khoá Kéo Phối Màu Thanh
                            Lịch Kèm Quần Jogger Bo Gấu
                        </h3>
                        <p class="product__price">129.000</p>
                        <div class="product__details">
                            <p class="product__rating">
                                <i class="fa-solid fa-star"></i> 4.8
                            </p>
                            <p class="product__sales">Đã bán 12,4k</p>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="{{ asset('storage/images/product_3.jpg') }}" alt="product-image" class="product-image" />
                        <h3 class="heading line-clamp product__title">
                            Bộ Quần Áo Thu Đông Nam Áo Khoác Nhẹ Khoá Kéo Phối Màu Thanh
                            Lịch Kèm Quần Jogger Bo Gấu
                        </h3>
                        <p class="product__price">129.000</p>
                        <div class="product__details">
                            <p class="product__rating">
                                <i class="fa-solid fa-star"></i> 4.8
                            </p>
                            <p class="product__sales">Đã bán 12,4k</p>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="{{ asset('storage/images/product_4.jpg') }}" alt="product-image" class="product-image" />
                        <h3 class="heading line-clamp product__title">
                            Bộ Quần Áo Thu Đông Nam Áo Khoác Nhẹ Khoá Kéo Phối Màu Thanh
                            Lịch Kèm Quần Jogger Bo Gấu
                        </h3>
                        <p class="product__price">129.000</p>
                        <div class="product__details">
                            <p class="product__rating">
                                <i class="fa-solid fa-star"></i> 4.8
                            </p>
                            <p class="product__sales">Đã bán 12,4k</p>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="{{ asset('storage/images/product_5.jpg') }}" alt="product-image"
                            class="product-image" />
                        <h3 class="heading line-clamp product__title">
                            Bộ Quần Áo Thu Đông Nam Áo Khoác Nhẹ Khoá Kéo Phối Màu Thanh
                            Lịch Kèm Quần Jogger Bo Gấu
                        </h3>
                        <p class="product__price">129.000</p>
                        <div class="product__details">
                            <p class="product__rating">
                                <i class="fa-solid fa-star"></i> 4.8
                            </p>
                            <p class="product__sales">Đã bán 12,4k</p>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="{{ asset('storage/images/product_6.jpg') }}" alt="product-image"
                            class="product-image" />
                        <h3 class="heading line-clamp product__title">
                            Bộ Quần Áo Thu Đông Nam Áo Khoác Nhẹ Khoá Kéo Phối Màu Thanh
                            Lịch Kèm Quần Jogger Bo Gấu
                        </h3>
                        <p class="product__price">129.000</p>
                        <div class="product__details">
                            <p class="product__rating">
                                <i class="fa-solid fa-star"></i> 4.8
                            </p>
                            <p class="product__sales">Đã bán 12,4k</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
