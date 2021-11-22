<section class="top-rated-movie tr-movie-bg2" data-background="<?= base_url('assets/img/bg/tr_movies_bg.jpg'); ?>">
  <div class="container">

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title title-style-three text-center mb-70">
          <span class="sub-title">top rated movies</span>
          <h2 class="title">Top Online Shows Watch</h2>
        </div>
      </div>
    </div>
    
    <div class="row movie-item-row">
      <?php foreach (array_slice($movie_top_rated->results, 0, 10) as $tr) : ?>
        <div class="custom-col-">
          <div class="movie-item movie-item-two">
            <div class="movie-poster">
              <img src="http://image.tmdb.org/t/p/w500<?= $tr->poster_path; ?>" alt="">
              <ul class="overlay-btn">
                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                <li><a href="movie-details/<?= $tr->id; ?>" class="btn">Details</a></li>
              </ul>
            </div>
            <div class="movie-content">
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="title"><a href="movie-details/<?= $tr->id; ?>"><?= $tr->original_title; ?></a></h5>
              <span class="rel">
                <?php foreach ($tr->genre_ids as $genre) : ?>
                  <?= $movie_genre[$genre]; ?>,
                <?php endforeach; ?></span>
              <div class="movie-content-bottom">
                <ul>
                  <li class="tag">
                    <a href="#"><?= $lang[$tr->original_language]; ?></a>
                  </li>
                  <li>
                    <span class="like"><i class="fas fa-thumbs-up"></i> <?= $tr->vote_average; ?></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>


    <div class="tr-movie-btn text-center mt-25">
      <a href="#" class="btn">BROWSE ALL MOVIES</a>
    </div>
  </div>
</section>