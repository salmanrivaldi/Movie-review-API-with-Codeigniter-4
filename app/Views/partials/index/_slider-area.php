<section class="slider-area slider-bg" data-background="<?= base_url('assets/img/banner/bg_home.jpg'); ?>">
  <div class="slider-active">
    <?php foreach (array_slice($movie_popular->results, 0, 3) as $uc) : ?>
      <div class="slider-item">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 order-0 order-lg-2">
              <div class="slider-img text-center text-lg-right" data-animation="fadeInRight" data-delay="1s">
                <img src="http://image.tmdb.org/t/p/original<?= $uc->backdrop_path; ?>" alt="" style="width: 609px;height: 472px;object-fit: cover; border: 15px solid #C2C23C;">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="banner-content">
                <h6 class="sub-title" data-animation="fadeInUp" data-delay=".2s">Movflx</h6>
                <h2 class="title" data-animation="fadeInUp" data-delay=".4s">Unlimited <span>Movie</span>, TV Shows, & More.</h2>
                <div class="banner-meta" data-animation="fadeInUp" data-delay=".6s">
                  <ul>
                    <li class="quality">
                      <span>Pg 18</span>
                      <span>hd</span>
                    </li>
                    <li class="category">
                      <?php foreach ($uc->genre_ids as $genre) : ?>
                        <a href="#"><?= $movie_genre[$genre]; ?>,</a>
                      <?php endforeach; ?>
                    </li>
                    <li class="release-time">
                      <span><i class="far fa-calendar-alt"></i> <?= date('Y', strtotime($uc->release_date)); ?></span>
                    </li>
                  </ul>
                </div>
                <a href="https://www.youtube.com/watch?v=<?= getTrailerSliderArea($uc->id); ?>" class="banner-btn btn popup-video" data-animation="fadeInUp" data-delay=".8s"><i class="fas fa-play"></i> Watch Trailer</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</section>