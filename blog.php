<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
	<title>The Wise Investing | Blogs</title>
	<meta name="description"  content="" />
	<meta name="author" content="">
	<meta name="keywords"  content="" />
	<meta property="og:title" content="" />
	<meta property="og:type" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:width" content="470" />
	<meta property="og:image:height" content="246" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:card" content="" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:domain" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="" />

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>
    <!-- Theme style CSS --> 
	<?php 
	include('head_code.php');
	?>

        <!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">

        <!-- ==============================================
        Vendor Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/slider.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/vendor/icons.min.css">
        <link rel="stylesheet" href="assets/css/vendor/animation.min.css">
        <link rel="stylesheet" href="assets/css/vendor/gallery.min.css">
        <link rel="stylesheet" href="assets/css/vendor/cookie-notice.min.css">

        <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/theme-pink.css">

        <!-- ==============================================
        Theme Settings
        =============================================== -->
        <style>
            :root {                
                --header-bg-color: #111111;
                --nav-item-color: #f5f5f5;
                --top-nav-item-color: #f5f5f5;
                --hero-bg-color: #000000;

                --section-1-bg-color: #eeeeee;
                --section-2-bg-color: #f5f5f5;
            
                --footer-bg-color: #191919;
            }
        </style>
        
    </head>

    <body>

        <!-- Header -->
      <?php 
	  include('header.php');
	  ?>

        <!-- Hero -->
        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider slider-h-75">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        
                        <img src="assets/images/bg-5.jpg" class="full-image" data-mask="70">
                        
                         <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text" style="font-size:50px;">Our Blogs</h1>
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog -->
        <section id="blog" class="section-1 showcase blog-grid masonry news">
            <div data-aos="zoom-in" data-aos-delay="200" data-aos-anchor="body" class="container">
                <div class="row content blog-grid masonry">
                    <main class="col-12 p-0">
                        <div class="bricklayer items columns-3">
                            <div class="card p-0 text-center item">
                                <div class="image-over">
                                    <img src="assets/images/news-1-h.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="blog-detail.php">
                                            <h4>Tips for having a good relationship at work.</h4>
                                        </a>
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Doe</a>
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-clock"></i>3 Days Ago</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-0 text-center item">
                                <div class="image-over">
                                    <img src="assets/images/news-2-h.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="blog-detail.php">
                                            <h4>Data scientists are a booming profession.</h4>
                                        </a>
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Doe</a>
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-clock"></i>3 Days Ago</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="card p-0 text-center item">
                                <div class="image-over">
                                    <img src="assets/images/news-3-h.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="blog-detail.php">
                                            <h4>Successful creations using virtual reality.</h4>
                                        </a>
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Doe</a>
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-clock"></i>3 Days Ago</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="card p-0 text-center item">
                                <div class="image-over">
                                    <img src="assets/images/news-4-h.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="blog-detail.php">
                                            <h4>Is the trend these days working from home?</h4>
                                        </a>
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Doe</a>
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-clock"></i>3 Days Ago</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="card p-0 text-center item">
                                <div class="image-over">
                                    <img src="assets/images/news-5-h.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="blog-detail.php">
                                            <h4>How digital transformation has changed the world.</h4>
                                        </a>
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Doe</a>
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-clock"></i>3 Days Ago</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="card p-0 text-center item">
                                <div class="image-over">
                                    <img src="assets/images/news-6-h.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="blog-detail.php">
                                            <h4>Why project management increases performance.</h4>
                                        </a>
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Doe</a>
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-clock"></i>3 Days Ago</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-0 text-center item">
                                <div class="image-over">
                                    <img src="assets/images/news-1-h.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="blog-detail.php">
                                            <h4>Tips for having a good relationship at work.</h4>
                                        </a>
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Doe</a>
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-clock"></i>3 Days Ago</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-0 text-center item">
                                <div class="image-over">
                                    <img src="assets/images/news-2-h.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="blog-detail.php">
                                            <h4>Data scientists are a booming profession.</h4>
                                        </a>
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Doe</a>
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-clock"></i>3 Days Ago</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="card p-0 text-center item">
                                <div class="image-over">
                                    <img src="assets/images/news-3-h.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="blog-detail.php">
                                            <h4>Successful creations using virtual reality.</h4>
                                        </a>
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Doe</a>
                                        <a href="blog-detail.php" class="d-lg-flex align-items-center"><i class="icon-clock"></i>3 Days Ago</a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </main>
                </div>

                <!-- Pagination -->
                <div class="row">
                    <div class="col-12">
                        <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="icon-arrow-left"></i>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- Subscribe -->
      

        <!-- Footer -->
     <?php 
	 include('footer.php');
	 ?>

        <!-- #region Global ============================ -->

     


     

        <!-- Modal [responsive menu] -->
        <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        Menu <i class="icon-close"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                            <div class="contacts p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll [to top] -->
        <div id="scroll-to-top" class="scroll-to-top">
            <a href="#header" class="smooth-anchor">
                <i class="icon-arrow-up"></i>
            </a>
        </div>        
        
        <!-- ==============================================
        Google reCAPTCHA // Put your site key here
        =============================================== -->
        <script src="../www.google.com/recaptcha/api9516.js?render=6Lf-NwEVAAAAAPo_wwOYxFW18D9_EKvwxJxeyUx7"></script>

        <!-- ==============================================
        Vendor Scripts
        =============================================== -->
        <script src="assets/js/vendor/jquery.min.js"></script>
        <script src="assets/js/vendor/jquery.easing.min.js"></script>
        <script src="assets/js/vendor/jquery.inview.min.js"></script>
        <script src="assets/js/vendor/popper.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/ponyfill.min.js"></script>
        <script src="assets/js/vendor/slider.min.js"></script>
        <script src="assets/js/vendor/animation.min.js"></script>
        <script src="assets/js/vendor/progress-radial.min.js"></script>
        <script src="assets/js/vendor/bricklayer.min.js"></script>
        <script src="assets/js/vendor/gallery.min.js"></script>
        <script src="assets/js/vendor/shuffle.min.js"></script>
        <script src="assets/js/vendor/particles.min.js"></script>
        <script src="assets/js/main.js"></script>

        <!-- #endregion Global ========================= -->

    </body>
</html>