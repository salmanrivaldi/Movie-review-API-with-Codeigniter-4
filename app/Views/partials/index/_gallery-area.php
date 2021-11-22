<div class="gallery-area position-relative">
  <div class="gallery-bg"></div>
  <div class="container-fluid p-0 fix">
    <div class="row gallery-active">
      <?php foreach (array_slice($movie_upcoming->results, 0, 4) as $uc) : ?>
        <div class="col-12">
          <div class="gallery-item">
            <img src="https://image.tmdb.org/t/p/original<?= $uc->backdrop_path; ?>" alt="">
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
  <div class="slider-nav"></div>
</div>