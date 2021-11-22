<section class="tv-series-area tv-series-bg" data-background="<?= base_url('assets/img/bg/tv_series_bg02.jpg'); ?>">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center mb-50">
          <span class="sub-title">Similar Movies</span>
          <h2 class="title">World Best Similar Movies</h2>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <?php foreach (array_slice($similar_movie->results, 0, 4) as $movie) : ?>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="movie-item mb-50">
            <div class="movie-poster">
              <a href="<?= base_url("movie-details/$movie->id"); ?>"><img src="http://image.tmdb.org/t/p/w500<?= $movie->poster_path; ?>" alt=""></a>
            </div>
            <div class="movie-content">
              <div class="top">
                <h5 class="title"><a href="<?= base_url("movie-details/$movie->id"); ?>"><?= $movie->original_title; ?></a></h5>
                <span class="date"><?= date('Y', strtotime($movie->release_date)); ?></span>
              </div>
              <div class="bottom">
                <ul>
                  <li><span class="quality"><?= round($movie->vote_average, 1); ?></span></li>
                  <li>
                    <span class="rating">
                      <?php foreach ($movie->genre_ids as $genre) : ?>
                        <?= $movie_genre[$genre]; ?>,
                      <?php endforeach; ?>
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>