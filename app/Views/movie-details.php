<?= $this->extend('template/main') ?>

<?= $this->section('content') ?>
<!-- header-area -->
<?= $this->include('partials/detail/_header') ?>
<!-- header-area-end -->


<!-- main-area -->
<main>

  <!-- movie-details-area -->
  <?= $this->include('partials/detail/_movie-details-area') ?>
  <!-- movie-details-area-end -->

  <!-- tv-series-area -->
  <?= $this->include('partials/detail/_similar-movies-area') ?>
  <!-- tv-series-area-end -->

</main>
<!-- main-area-end -->
<?= $this->endSection() ?>