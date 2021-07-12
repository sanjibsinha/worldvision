<!DOCTYPE html>
<html lang="<?php language_attributes( 'en' ); ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php bloginfo( 'name' ); ?></title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="<?php bloginfo( 'template_url' ); ?>/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/vendors/aos/dist/aos.css/aos.css" />
    <link
      rel="stylesheet"
      href="<?php bloginfo( 'template_url' ); ?>/vendors/owl.carousel/dist/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="<?php bloginfo( 'template_url' ); ?>/vendors/owl.carousel/dist/assets/owl.theme.default.min.css"
    />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.png" />
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css">
    <!-- endinject -->
    <?php wp_head(  ); ?>
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <header id="header">
          <div class="container">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="d-flex justify-content-between align-items-center navbar-top">
                <ul class="navbar-left">
                  <li><?php echo get_the_date( ); ?></li>
                  <li>30°C,London</li>
                </ul>
                <div>
                  <a class="navbar-brand" href="#"
                    ><img src="<?php bloginfo( 'template_url' ); ?>/images/logo.svg" alt=""
                  /></a>
                </div>
                <div class="d-flex">
                  <ul class="navbar-right">
                    <li>
                      <a href="#">ENGLISH</a>
                    </li>
                    <li>
                      <a href="#">ESPAÑOL</a>
                    </li>
                  </ul>
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="navbar-bottom-menu">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div
                  class="navbar-collapse justify-content-center collapse"
                  id="navbarSupportedContent"
                >
                  <ul
                    class="navbar-nav d-lg-flex justify-content-between align-items-center"
                  >
                    <li>
                      <button class="navbar-close">
                        <i class="mdi mdi-close"></i>
                      </button>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/world.html">World</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/author.html">Magazine</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/news-post.html">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/business.html">Business</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/sports.html">Sports</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/art.html">Art</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/politics.html">Politics</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/real-estate.html">Real estate</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/travel.html">Travel</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

            <!-- partial -->
          </div>
        </header>
        <div class="container">
          <div class="banner-top-thumb-wrap">
            <div class="d-lg-flex justify-content-between align-items-center">
              <div class="d-flex justify-content-between  mb-3 mb-lg-0">
                <div>
                  <img
                    src="<?php bloginfo( 'template_url' ); ?>/images/dashboard/star-magazine-1.jpg"
                    alt="thumb"
                    class="banner-top-thumb"
                  />
                </div>
                <h5 class="m-0 font-weight-bold">
                  The morning after: What people
                </h5>
              </div>
              <div class="d-flex justify-content-between mb-3 mb-lg-0">
                <div>
                  <img
                    src="<?php bloginfo( 'template_url' ); ?>/images/dashboard/star-magazine-2.jpg"
                    alt="thumb"
                    class="banner-top-thumb"
                  />
                </div>
                <h5 class="m-0 font-weight-bold">How Hungary produced the</h5>
              </div>
              <div class="d-flex justify-content-between mb-3 mb-lg-0">
                <div>
                  <img
                    src="<?php bloginfo( 'template_url' ); ?>/images/dashboard/star-magazine-3.jpg"
                    alt="thumb"
                    class="banner-top-thumb"
                  />
                </div>
                <h5 class="m-0 font-weight-bold">
                  A sleepy island paradise's most
                </h5>
              </div>
              <div class="d-flex justify-content-between mb-3 mb-lg-0">
                <div>
                  <img
                    src="<?php bloginfo( 'template_url' ); ?>/images/dashboard/star-magazine-4.jpg"
                    alt="thumb"
                    class="banner-top-thumb"
                  />
                </div>
                <h5 class="m-0 font-weight-bold">
                  America's most popular national
                </h5>
              </div>
            </div>
          </div>


                    <div class="row">
            <div class="col-lg-8">
              <div class="owl-carousel owl-theme" id="main-banner-carousel">
                <div class="item">
                  <div class="carousel-content-wrapper mb-2">
                    <div class="carousel-content">
                      <h1 class="font-weight-bold">
                        If you wanted to get rich, how would you do it?
                      </h1>
                      <h5 class="font-weight-normal  m-0">
                        Lorem Ipsum has been the industry's standard
                      </h5>
                      <p class="text-color m-0 pt-2 d-flex align-items-center">
                        <span class="fs-10 mr-1">2 hours ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1">126</span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                    <div class="carousel-image">
                      <img src="<?php bloginfo( 'template_url' ); ?>/images/dashboard/banner.jpg" alt="" />
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="carousel-content-wrapper mb-2">
                    <div class="carousel-content">
                      <h1 class="font-weight-bold">
                        If you wanted to get rich, how would you do it?
                      </h1>
                      <h5 class="font-weight-normal  m-0">
                        Lorem Ipsum has been the industry's standard
                      </h5>
                      <p class="text-color m-0 pt-2 d-flex align-items-center">
                        <span class="fs-10 mr-1">2 hours ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1">126</span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                    <div class="carousel-image">
                      <img src="<?php bloginfo( 'template_url' ); ?>/images/dashboard/banner_1.jpg" alt="" />
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="carousel-content-wrapper mb-2">
                    <div class="carousel-content">
                      <h1 class="font-weight-bold">
                        If you wanted to get rich, how would you do it?
                      </h1>
                      <h5 class="font-weight-normal  m-0">
                        Lorem Ipsum has been the industry's standard
                      </h5>
                      <p class="text-color m-0 pt-2 d-flex align-items-center">
                        <span class="fs-10 mr-1">2 hours ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1">126</span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                    <div class="carousel-image">
                      <img src="<?php bloginfo( 'template_url' ); ?>/images/dashboard/banner_2.jpg" alt="" />
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="carousel-content-wrapper mb-2">
                    <div class="carousel-content">
                      <h1 class="font-weight-bold">
                        If you wanted to get rich, how would you do it?
                      </h1>
                      <h5 class="font-weight-normal  m-0">
                        Lorem Ipsum has been the industry's standard
                      </h5>
                      <p class="text-color m-0 pt-2 d-flex align-items-center">
                        <span class="fs-10 mr-1">2 hours ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1">126</span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                    <div class="carousel-image">
                      <img src="<?php bloginfo( 'template_url' ); ?>/images/dashboard/banner_3.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4">
              <div class="row">
                <div class="col-sm-6">
                  <div class="py-3 border-bottom">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="<?php bloginfo( 'template_url' ); ?>/images/dashboard/Profile_1.jpg"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Henry Itondo</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      The Most And Least Visited Countries In The World
                    </p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="py-3 border-bottom">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="<?php bloginfo( 'template_url' ); ?>/images/dashboard/Profile_2.jpg"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Oka Tomoaki</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      The Best Places to Travel in month August
                    </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="pt-4 pb-4 border-bottom">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="<?php bloginfo( 'template_url' ); ?>/images/dashboard/Profile_2.jpg"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Joana Leite</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      Focus On Fun And Challenging Lifetime Activities
                    </p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="pt-3 pb-4 border-bottom">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="<?php bloginfo( 'template_url' ); ?>/images/dashboard/Profile_4.jpg"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Rita Leite</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      Bread Is The Most Widely Consumed Food In The World
                    </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="pt-4 pb-4">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="<?php bloginfo( 'template_url' ); ?>/images/dashboard/Profile_5.jpg"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Jurrien Oldhof</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      What Is Music, And What Does It Mean To Us
                    </p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="pt-3 pb-4">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="<?php bloginfo( 'template_url' ); ?>/images/dashboard/Profile_6.jpg"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Yamaha Toshinobu</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      Is Breakfast The Most Important Meal Of The Day
                    </p>
                  </div>
                </div>
              </div>
            </div>