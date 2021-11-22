<section class="movie-details-area" data-background="<?= base_url('assets/img/bg/movie_details_bg.jpg'); ?>">
  <div class="container">
    <div class="row align-items-center position-relative">
      <div class="col-xl-3 col-lg-4">
        <div class="movie-details-img">
          <img src="http://image.tmdb.org/t/p/w500<?= $detail->poster_path; ?>" alt="" style="width: 303px;height: 430px;">
          <a href="https://www.youtube.com/watch?v=<?= $trailer; ?>" class="popup-video"><img src="<?= base_url('assets/img/images/play_icon.png'); ?>" alt=""></a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-8">
        <div class="movie-details-content">
          <h5>Detail Movie</h5>
          <h2><?= $detail->original_title; ?></h2>
          <div class="banner-meta">
            <ul>
              <li class="quality">
                <span>Pg 18</span>
              </li>
              <li class="category">
                <?php foreach ($detail->genres as $genre) : ?>
                  <a href="#"><?= $genre->name; ?></a>,
                <?php endforeach; ?>
              </li>
              <li class="release-time">
                <span><i class="far fa-calendar-alt"></i> <?= date('Y', strtotime($detail->release_date)); ?></span>
                <span><i class="far fa-clock"></i> <?= $detail->runtime; ?> min</span>
              </li>
            </ul>
          </div>
          <p><?= $detail->overview; ?>.</p>
          <div class="movie-details-prime">
            <ul>
              <li class="share"><a href="#"><i class="fas fa-share-alt"></i> Share</a></li>
              <li class="streaming">
                <h6>Trailer Video</h6>
              </li>
              <li class="watch"><a href="https://www.youtube.com/watch?v=<?= $trailer; ?>" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="movie-details-btn">
        <a href="http://image.tmdb.org/t/p/original<?= $detail->poster_path; ?>" target="_blank" class="download-btn" download="">Download <img src="<?= base_url('assets/fonts/download.svg'); ?>" alt=""></a>
      </div>
    </div>
  </div>
</section>