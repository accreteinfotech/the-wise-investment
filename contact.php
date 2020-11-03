<?php
    ob_start();
?>  
<?php
    include 'backyard/include/connect.php';
    session_start();
    $seo=$link->rawQueryone("select * from page_seo where page_seo_url=?",array($page_name));
    if($link->count > 0)
    {
        $page_seo_title=$seo['page_seo_title'];
        $page_seo_description=$seo['page_seo_description'];
        $page_seo_keywords=$seo['page_seo_keywords'];
        $page_seo_author=$seo['page_seo_author'];
        
        $page_seo_og_title=$seo['page_seo_og_title'];
        $page_seo_og_description=$seo['page_seo_og_description'];
        $page_seo_og_url=$seo['page_seo_og_url'];
    }
    if(isset($_GET['app']) && $_GET['app']!=null)
    {
        $wid=1;
    }
    else
    {
        $wid=0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $project_name; ?> | <?php echo $page_seo_title; ?></title>
    <meta name="description" content="<?php echo $page_seo_description; ?>">
    <meta name="keywords" content="<?php echo $page_seo_keywords; ?>" >
    <meta content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densitydpi=device-dpi" name="viewport">
    <meta property="og:title" content="<?php echo $project_name; ?> | <?php echo $page_seo_og_title; ?>" />
    <meta property="og:url" content="<?php echo $page_seo_og_url; ?>" />
    <meta property="og:description" content="<?php echo $page_seo_og_description; ?>">
    <base href="<?php echo $site_url; ?>">
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
        <meta name="author" content="Codings">

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
                --section-2-bg-color: #111111;
                --section-3-bg-color: #f5f5f5;
            
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
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text" style="font-size:50px;">Contact Us</h1>
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contacts -->
        <section id="contacts" class="section-1 offers">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-12 align-self-center text-center text-md-left">
                        <h2 class="featured">Ready to start investing in your future?</h2>
                        <p>The future is today. As experts would say, the best time to start investing is today. Think ahead, keep your long-term goals in mind and start with the investment option that best suits you. Still have doubts on where to start?</p>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card featured">
                            <i class="icon icon-phone"></i>
                            <h4 style="font-size:1.0rem;">+1 (276)-582-0019</h4>
                            <p class="mb-1">We answer by phone and messages from Monday to Saturday from 10 am until 6 pm.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card" style="padding-bottom:60px;">
                            <i class="icon icon-envelope"></i>
                            <h4 style="font-size:1.0rem;">support@thewiseinvesting.com</h4>
                            <p class="mb-1">We will respond to your email within 8 hours on business days.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card featured">
                            <i class="icon icon-question"></i>
                            <h4 style="font-size:1.0rem;">FAQs</h4>
                            <p class="mb-1">If you have any questions regarding investment so you can browse our faq page.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Custom -->
     

      <section id="contact" class="section-6 form">
            <div class="container smaller">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2>Let's Talk?</h2>
                        <p class="text-max-800">Please drop in your details and we’ll respond back in less than a day!</p>
                    </div>
                </div>
                <form action="#" id="leverage-simple-form" class="leverage-simple-form">
                    <input type="hidden" name="section" value="leverage_form">

                  
                    <div class="row form-group-margin">
                        <div class="col-12 col-md-12 m-0 p-2 input-group">
                            <input type="text" name="name" class="form-control field-name" placeholder="Name">
                        </div>
                        <div class="col-12 col-md-12 m-0 p-2 input-group">
                            <input type="email" name="email" class="form-control field-email" placeholder="Email">
                        </div>
                        <div class="col-12 col-md-12 m-0 p-2 input-group">
                            <input type="text" name="phone" class="form-control field-phone" placeholder="Phone">
                        </div>
                       
                        <div class="col-12 m-0 p-2 input-group">
                            <textarea name="message" class="form-control field-message" placeholder="Message"></textarea>
                        </div>
                        
                        <div class="col-12 input-group m-0 p-2">
                            <a class="btn primary-button">SEND</a>
                        </div>
                    </div>
                </form>
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