<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section id="featured-products" class="product-store padding-large">
    <div class="container">
        <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
            <h2 class="section-title">Featured Products</h2>
            <div class="btn-wrap">
                <a href="#" class="d-flex align-items-center">View all products <i
                        class="icon icon icon-arrow-io"></i></a>
            </div>
        </div>
        <div class="swiper product-swiper overflow-hidden">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="product-item">
                        <div class="image-holder">
                            <img src="images/gula.jpeg" alt="Books" class="product-image">
                        </div>
                        <div class="cart-concern">
                            <div class="cart-button d-flex justify-content-between align-items-center">
                                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart
                                    <i class="icon icon-arrow-io"></i>
                                </button>
                                <button type="button" class="view-btn tooltip
                        d-flex">
                                    <i class="icon icon-screen-full"></i>
                                    <span class="tooltip-text">Quick view</span>
                                </button>
                                <button type="button" class="wishlist-btn">
                                    <i class="icon icon-heart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h3 class="product-title">
                                <a href="single-product.html">Gula</a>
                            </h3>
                            <span class="item-price text-primary">Rp50.000</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item">
                        <div class="image-holder">
                            <img src="images/beras.jpeg" alt="Books" class="product-image">
                        </div>
                        <div class="cart-concern">
                            <div class="cart-button d-flex justify-content-between align-items-center">
                                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart
                                    <i class="icon icon-arrow-io"></i>
                                </button>
                                <button type="button" class="view-btn tooltip
                        d-flex">
                                    <i class="icon icon-screen-full"></i>
                                    <span class="tooltip-text">Quick view</span>
                                </button>
                                <button type="button" class="wishlist-btn">
                                    <i class="icon icon-heart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h3 class="product-title">
                                <a href="single-product.html">Beras</a>
                            </h3>
                            <span class="item-price text-primary">Rp100.000</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item">
                        <div class="image-holder">
                            <img src="images/minyak.jpeg" alt="Books" class="product-image">
                        </div>
                        <div class="cart-concern">
                            <div class="cart-button d-flex justify-content-between align-items-center">
                                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart
                                    <i class="icon icon-arrow-io"></i>
                                </button>
                                <button type="button" class="view-btn tooltip
                        d-flex">
                                    <i class="icon icon-screen-full"></i>
                                    <span class="tooltip-text">Quick view</span>
                                </button>
                                <button type="button" class="wishlist-btn">
                                    <i class="icon icon-heart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h3 class="product-title">
                                <a href="single-product.html">Minyak</a>
                            </h3>
                            <span class="item-price text-primary">Rp20.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<?= $this->endSection() ?>