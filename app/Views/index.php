<?= $this->extend('template/main') ?>

<?= $this->section('content') ?>

<!-- header-area -->
<?= $this->include('partials/index/_header') ?>
<!-- header-area-end -->


<!-- main-area -->
<main>
	<!-- slider-area -->
	<?= $this->include('partials/index/_slider-area') ?>
	<!-- slider-area-end -->

	<!-- up-coming-movie-area -->
	<?= $this->include('partials/index/_up-coming-movie') ?>
	<!-- up-coming-movie-area-end -->

	<!-- gallery-area -->
	<?= $this->include('partials/index/_gallery-area') ?>
	<!-- gallery-area-end -->

	<!-- top-rated-movie -->
	<?= $this->include('partials/index/_top-rated-movie') ?>
	<!-- top-rated-movie-end -->
</main>
<!-- main-area-end -->

<?= $this->endSection() ?>