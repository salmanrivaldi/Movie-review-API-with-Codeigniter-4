<?= $this->extend('template/main') ?>

<?= $this->section('content') ?>
<?= $this->include('partials/detail/_header') ?>
<!-- main-area -->
<main>

  <!-- breadcrumb-area -->
  <section class="breadcrumb-area breadcrumb-bg" data-background="<?= base_url('assets/img/bg/watching.jpg'); ?>">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcrumb-content">
            <h2 class="title">Tv <span>Show</span></h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">TV SHOW</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb-area-end -->

  <!-- movie-area -->
  <section class="movie-area movie-bg" data-background="<?= base_url('assets/img/bg/movie_bg.jpg'); ?>">
    <div class="container">
      <div class="row align-items-end mb-60">
        <div class="col-lg-6">
          <div class="section-title text-center text-lg-left">
            <span class="sub-title">TV SHOW</span>
            <h2 class="title">New Tv Show</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="movie-page-meta">
            <div class="tr-movie-menu-active text-center">
              <button class="active" data-filter="*">All</button>
              <button class="" data-filter=".Action">Action</button>
              <button class="" data-filter=".Comedy">Comedy</button>
              <button class="" data-filter=".Drama">Drama</button>
              <button class="" data-filter=".Thriller">Thriller</button>
            </div>
          </div>
        </div>
      </div>

      <div class="row tr-movie-active">
        <?php foreach ($tv_new as $movie) : ?>
          <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer <?php foreach ($movie->genre_ids as $genre) : ?><?= $tv_genre[$genre] . ''; ?> <?php endforeach; ?>">
            <div class="movie-item movie-item-three mb-50">
              <div class="movie-poster">
                <img src="http://image.tmdb.org/t/p/w500<?= $movie->poster_path; ?>" alt="">
                <ul class="overlay-btn">
                  <li class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </li>
                  <li><a href="https://www.youtube.com/watch?v=<?= getTvTrailer($movie->id); ?>" class="popup-video btn">Watch Trailer</a></li>
                  <li><a href="<?= base_url("movie-details/$movie->id"); ?>" class="btn">Details</a></li>
                </ul>
              </div>
              <div class="movie-content">
                <div class="top">
                  <h5 class="title"><a href="<?= base_url("movie-details/$movie->id"); ?>"><?= $movie->original_name; ?></a></h5>
                  <span class="date"><?= date('Y', strtotime($movie->first_air_date)); ?></span>
                </div>
                <div class="bottom">
                  <ul>
                    <li><span class="quality"><?= round($movie->vote_average, 1); ?></span></li>
                    <li>
                      <!-- <span class="duration"><i class="far fa-clock"></i> 128 min</span> -->
                      <span class="rating">
                        <?php foreach ($movie->genre_ids as $genre) : ?>
                          <?= $tv_genre[$genre]; ?>,
                        <?php endforeach; ?>
                      </span></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>


      <div class="row">
        <div class="col-12">
          <div class="pagination-wrap mt-30">
            <nav>
              <ul>
                <?php for ($i = 1; $i < 5; $i++) : ?>
                  <li class="<?= uri_string() == "tv-show/$i" ? 'active' : ''; ?>">
                    <a href="<?= base_url("/tv-show/$i"); ?>"><?= $i; ?></a>
                  </li>
                <?php endfor ?>
                <li><a href="<?= base_url("/tv-show/$i"); ?>">Last</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- movie-area-end -->

</main>
<!-- main-area-end -->
<?= $this->endSection() ?>