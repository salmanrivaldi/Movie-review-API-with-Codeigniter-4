<header class="header-style-two">
  <div id="sticky-header" class="menu-area">
    <div class="container custom-container">
      <div class="row">
        <div class="col-12">
          <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
          <div class="menu-wrap">
            <nav class="menu-nav show">
              <div class="logo">
                <a href="index.html">
                  <img src="<?= base_url('assets/img/logo/logo.png'); ?>" alt="Logo">
                </a>
              </div>
              <div class="navbar-wrap main-menu d-none d-lg-flex">
                <ul class="navigation">
                  <li class="active menu-item-has-children"><a href="/">Home</a></li>
                  <li class="menu-item-has-children"><a href="/movie">Movie</a></li>
                  <li><a href="/tv-show">tv show</a></li>
                </ul>
              </div>
              <div class="header-action d-none d-md-block">
                <ul>
                  <li class="d-none d-xl-block">
                    <div class="footer-search">
                      <form action="#">
                        <input type="text" placeholder="Find Favorite Movie">
                        <button><i class="fas fa-search"></i></button>
                      </form>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
          </div>

          <!-- Mobile Menu  -->
          <div class="mobile-menu">
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
              <div class="nav-logo"><a href="index.html"><img src="<?= base_url('asstes/img/logo/logo.png'); ?>" alt="" title=""></a>
              </div>
              <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
              </div>
              <div class="social-links">
                <ul class="clearfix">
                  <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                  <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                  <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                  <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                  <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
              </div>
            </nav>
          </div>
          <div class="menu-backdrop"></div>
          <!-- End Mobile Menu -->

        </div>
      </div>
    </div>
  </div>
</header>