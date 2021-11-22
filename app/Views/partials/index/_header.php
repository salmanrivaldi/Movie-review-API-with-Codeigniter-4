<header class="header-style-two">
  <!-- <div class="header-top-wrap">
    <div class="container custom-container">
      <div class="row align-items-center">
        <div class="col-md-6 d-none d-md-block">
          <div class="header-top-subs">
            <p>Movflx One Month Free <span>Subscription !</span></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="header-top-link">
            <ul class="quick-link">
              <li><a href="#">About Us</a></li>
              <li><a href="#">FAQS</a></li>
            </ul>
            <ul class="header-social">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
              <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> -->
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
                  <li class="menu-item-has-children"><a href="#">Movie</a></li>
                  <li><a href="tv-show.html">tv show</a></li>
                  <li class="menu-item-has-children"><a href="#">blog</a>
                    <ul class="submenu">
                      <li><a href="blog.html">Our Blog</a></li>
                      <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.html">contacts</a></li>
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
                  <li class="header-lang">
                    <form action="#">
                      <div class="icon"><i class="flaticon-globe"></i></div>
                      <select id="lang-dropdown">
                        <option value="">En</option>
                        <option value="">Au</option>
                        <option value="">AR</option>
                        <option value="">TU</option>
                      </select>
                    </form>
                  </li>
                  <li class="header-btn"><a href="#" class="btn">Sign In</a></li>
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