<section class="ucm-area ucm-bg2" data-background="<?= base_url('assets/img/bg/ucm_bg02.jpg'); ?>">
  <div class="container">
    <div class="row align-items-end mb-55">
      <div class="col-lg-6">
        <div class="section-title title-style-three text-center text-lg-left">
          <span class="sub-title">ONLINE STREAMING</span>
          <h2 class="title">New Release Movies</h2>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="ucm-nav-wrap">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="movies-tab" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="false">Movies</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="tvShow-tab" data-toggle="tab" href="#tvShow" role="tab" aria-controls="tvShow" aria-selected="true">TV Shows</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="anime-tab" data-toggle="tab" href="#anime" role="tab" aria-controls="anime" aria-selected="false">Anime</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="tab-content" id="myTabContent">
      <!-- movie -->
      <div class="tab-pane fade show active" id="movies" role="tabpanel" aria-labelledby="movies-tab">
        <div class="ucm-active-two owl-carousel">
          <?php foreach (array_slice($movie_upcoming->results, 0, 7) as $uc) : ?>
            <div class="movie-item movie-item-two mb-30">
              <div class="movie-poster">
                <a href="movie-details/<?= $uc->id; ?>"><img src="http://image.tmdb.org/t/p/w500<?= $uc->poster_path; ?>" alt=""></a>
              </div>
              <div class="movie-content">
                <div class="rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h5 class="title"><a href="movie-details/<?= $uc->id; ?>"><?= $uc->original_title; ?></a></h5>
                <span class="rel">
                  <?php foreach ($uc->genre_ids as $genre) : ?>
                    <?= $movie_genre[$genre]; ?>,
                  <?php endforeach; ?>
                </span>
                <div class="movie-content-bottom">
                  <ul>
                    <li class="tag">
                      <a href="#"><?= $lang[$uc->original_language]; ?></a>
                    </li>
                    <li>
                      <span class="like"><i class="fas fa-thumbs-up"></i> <?= $uc->vote_average; ?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
      <!-- tv show -->
      <div class="tab-pane fade" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
        <div class="ucm-active-two owl-carousel">
          <?php foreach ($tv_new_releases->results as $tv_new) : ?>
            <div class="movie-item movie-item-two mb-30">
              <div class="movie-poster">
                <a href="movie-details.html"><img src="http://image.tmdb.org/t/p/w500<?= $tv_new->poster_path; ?>" alt=""></a>
              </div>
              <div class="movie-content">
                <div class="rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h5 class="title"><a href="movie-details.html"><?= $tv_new->original_name; ?></a></h5>
                <span class="rel">
                  <?php foreach ($tv_new->genre_ids as $genre) : ?>
                    <?= $tv_genre[$genre]; ?>,
                  <?php endforeach; ?>
                </span>
                <div class="movie-content-bottom">
                  <ul>
                    <li class="tag">
                      <a href="#"><?= $lang[$tv_new->original_language]; ?></a>
                    </li>
                    <li>
                      <span class="like"><i class="fas fa-thumbs-up"></i> <?= $tv_new->vote_average; ?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
      <!-- anime -->
      <div class="tab-pane fade" id="anime" role="tabpanel" aria-labelledby="anime-tab">
        <div class="ucm-active-two owl-carousel">
          <div class="movie-item movie-item-two mb-30">
            <div class="movie-poster">
              <a href="movie-details.html"><img src="img/poster/s_ucm_poster01.jpg" alt=""></a>
            </div>
            <div class="movie-content">
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
              <span class="rel">Adventure</span>
              <div class="movie-content-bottom">
                <ul>
                  <li class="tag">
                    <a href="#">HD</a>
                    <a href="#">English</a>
                  </li>
                  <li>
                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="movie-item movie-item-two mb-30">
            <div class="movie-poster">
              <a href="movie-details.html"><img src="img/poster/s_ucm_poster02.jpg" alt=""></a>
            </div>
            <div class="movie-content">
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="title"><a href="movie-details.html">The Parkar Legend</a></h5>
              <span class="rel">Adventure</span>
              <div class="movie-content-bottom">
                <ul>
                  <li class="tag">
                    <a href="#">HD</a>
                    <a href="#">English</a>
                  </li>
                  <li>
                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="movie-item movie-item-two mb-30">
            <div class="movie-poster">
              <a href="movie-details.html"><img src="img/poster/s_ucm_poster03.jpg" alt=""></a>
            </div>
            <div class="movie-content">
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="title"><a href="movie-details.html">The Tonoy 88 Bottle</a></h5>
              <span class="rel">Adventure</span>
              <div class="movie-content-bottom">
                <ul>
                  <li class="tag">
                    <a href="#">HD</a>
                    <a href="#">English</a>
                  </li>
                  <li>
                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="movie-item movie-item-two mb-30">
            <div class="movie-poster">
              <a href="movie-details.html"><img src="img/poster/s_ucm_poster04.jpg" alt=""></a>
            </div>
            <div class="movie-content">
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="title"><a href="movie-details.html">The Ackle Bottle</a></h5>
              <span class="rel">Adventure</span>
              <div class="movie-content-bottom">
                <ul>
                  <li class="tag">
                    <a href="#">HD</a>
                    <a href="#">English</a>
                  </li>
                  <li>
                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="movie-item movie-item-two mb-30">
            <div class="movie-poster">
              <a href="movie-details.html"><img src="img/poster/s_ucm_poster05.jpg" alt=""></a>
            </div>
            <div class="movie-content">
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
              <span class="rel">Adventure</span>
              <div class="movie-content-bottom">
                <ul>
                  <li class="tag">
                    <a href="#">HD</a>
                    <a href="#">English</a>
                  </li>
                  <li>
                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="movie-item movie-item-two mb-30">
            <div class="movie-poster">
              <a href="movie-details.html"><img src="img/poster/s_ucm_poster06.jpg" alt=""></a>
            </div>
            <div class="movie-content">
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
              <span class="rel">Adventure</span>
              <div class="movie-content-bottom">
                <ul>
                  <li class="tag">
                    <a href="#">HD</a>
                    <a href="#">English</a>
                  </li>
                  <li>
                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>