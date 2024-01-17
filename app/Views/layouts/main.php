<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ultras - Clothing Store eCommerce Store HTML Website Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
  <link rel="stylesheet" type="text/css" media="all"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/vendor.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <!-- script
    ================================================== -->
  <script src="js/modernizr.js"></script>
</head>

<body>

  <?= $this->include('layouts/bagian/search') ?>
  <?= $this->include('layouts/bagian/header') ?>

  <section id="billboard" class="overflow-hidden">

    <button class="button-prev">
      <i class="icon icon-chevron-left"></i>
    </button>
    <button class="button-next">
      <i class="icon icon-chevron-right"></i>
    </button>
    <div class="swiper main-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"
          style="background-image: url('images/logo.jpeg');background-repeat: no-repeat;background-size: cover;background-position: center;">
          <div class="banner-content">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <h2 class="banner-title">TOKO MUKTIATI</h2>
                  <p>Toko sembako apa aja.</p>
                  <div class="btn-wrap">
                    <a href="<?php base_url(''); ?>" class="btn btn-light btn-medium d-flex align-items-center"
                      tabindex="0">Shop it now <i class="icon icon-arrow-io"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide"
          style="background-image: url('images/banner2.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
          <div class="banner-content">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <h2 class="banner-title">Casual Collection</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim
                    pharetra hac.</p>
                  <div class="btn-wrap">
                    <a href="shop.html" class="btn btn-light btn-light-arrow btn-medium d-flex align-items-center"
                      tabindex="0">Shop it now <i class="icon icon-arrow-io"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="featured-products" class="product-store padding-large">
    <div class="container">
      <?= $this->renderSection('content'); ?>
    </div>
  </section>

  <?= $this->include('layouts/bagian/footer') ?>

  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
</body>

</html>