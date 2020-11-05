<?php
	ob_start();
?>	
<?php
	include 'backyard/include/connect.php';
	session_start();
	$blog_id=$_GET['bid'];
	$sqlb=$link->rawQueryOne("select * from blog where blog_alias LIKE ?",array($blog_id));
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="<?php echo $site_url; ?>">
	<title><?php echo $sqlb['blog_title']; ?></title>
	<meta name="title" content="<?php echo $sqlb['meta_title']; ?>">
	<meta name="description" content="<?php echo $sqlb['meta_description']; ?>">
	<meta name="keywords" content="<?php echo $sqlb['meta_keyword']; ?>">
	<meta property="og:url"           content="<?php echo $site_url;?>/Blog/<?php echo $blog_alias;?>" />
  <meta property="og:title"         content="<?php echo $sqlb['blog_title']; ?>" />
  <meta property="og:description"   content="<?php echo $sqlb['blog_short_desc']; ?>" />
  <meta property="og:image"         content="<?php echo $site_url;?>backyard/images/blog_big_image/<?php echo $sqlb['blog_big_image']; ?>" />
  <meta property="og:image:url"     content="<?php echo $site_url;?>backyard/images/blog_big_image/<?php echo $sqlb['blog_big_image']; ?>" />
  <meta property="og:image:type"    content="image/jpg" />

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
                --h1-size: 5rem;
                
                --header-bg-color: #111111;
                --nav-item-color: #f5f5f5;
                --top-nav-item-color: #f5f5f5;
                --hero-bg-color: #111111;

                --section-1-bg-color: #111111;
                --section-2-bg-color: #191919;
                --section-3-bg-color: #111111;
            
                --footer-bg-color: #191919;
            }
            p{
                color: #8e8e8e !important;
            }
            span{
                color: #8e8e8e !important;
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
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text" style="font-size:50px;"><?php echo $blog['blog_title']; ?></h1>
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="Home">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo $sqlb['blog_name']; ?></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content -->
        <section id="content" class="section-1 body-mode-dark single featured">
            <div class="container">
                <div class="row">

                    <!-- Main -->
                    <main class="col-12 p-0">
                        <div class="row">
                            <div class="col-12 align-self-center">
                                <h2 class="featured mt-0 ml-0">Content</h2>
                                <p>
                                    <blockquote><?php echo $sqlb['blog_name']; ?></blockquote>
                                </p>
                               
                                <!-- Image -->
                                <div>
                                  
                                  <img src="backyard/images/blog_big_image/<?php echo $sqlb['blog_big_image']; ?>" class="w-100">
                                        
                                    
                                </div>

                                <h4><?php echo $sqlb['blog_writer']; ?></h4>
                                <p><?php echo $sqlb['blog_description']; ?></p>
                                <ul class="mb-5 post-holder">
                                    <li class="post-meta-item">
                                        <time class="date"><span class="posted-on">Posted on <a rel="bookmark"><time class="entry-date published updated" datetime="2018-11-01T06:18:46+00:00"><?php echo $blog['blog_date']; ?></time></a></span></time>
                                    </li>
                                </ul>

                            </div>
                        </div>        
                    </main>
                </div>
            </div>
        </section>

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