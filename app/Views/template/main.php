<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/fontawesome-all.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/flaticon.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/odometer.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/aos.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/slick.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/default.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css'); ?>">
</head>

<body>

  <!-- preloader -->
  <div id="preloader">
    <div id="loading-center">
      <div id="loading-center-absolute">
        <img src="<?= base_url('assets/img/preloader.svg'); ?>" alt="">
      </div>
    </div>
  </div>
  <!-- preloader-end -->

  <!-- Scroll-top -->
  <button class="scroll-top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
  </button>
  <!-- Scroll-top-end-->

  <?= $this->renderSection('content') ?>


  <!-- footer-area -->
  <?= $this->include('partials/_footer') ?>
  <!-- footer-area-end -->

  <!-- JS here -->
  <script src="<?= base_url('assets/js/vendor/jquery-3.6.0.min.js'); ?>"></script>
  <script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
  <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <script src="<?= base_url('assets/js/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?= base_url('assets/js/imagesloaded.pkgd.min.js'); ?>"></script>
  <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
  <script src="<?= base_url('assets/js/owl.carousel.min.js'); ?>"></script>
  <script src="<?= base_url('assets/js/jquery.odometer.min.js'); ?>"></script>
  <script src="<?= base_url('assets/js/jquery.appear.js'); ?>"></script>
  <script src="<?= base_url('assets/js/slick.min.js'); ?>"></script>
  <script src="<?= base_url('assets/js/ajax-form.js'); ?>"></script>
  <script src="<?= base_url('assets/js/wow.min.js'); ?>"></script>
  <script src="<?= base_url('assets/js/aos.js'); ?>"></script>
  <script src="<?= base_url('assets/js/plugins.js'); ?>"></script>
  <script src="<?= base_url('assets/js/main.js'); ?>"></script>
</body>

</html>