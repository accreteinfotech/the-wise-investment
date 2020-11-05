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
                 --header-bg-color: #040402;
                --nav-item-color: #f5f5f5;
                --top-nav-item-color: #f5f5f5;
                --hero-bg-color: #040402;

                --section-1-bg-color: #111111;
                --section-2-bg-color: #191919;
                --section-3-bg-color: #040402;
                --section-4-bg-color: #111111;
                --section-5-bg-color: #191919;
                --section-6-bg-color: #040402;
                --section-7-bg-color: #111111;
            
                --footer-bg-color: #191919;
            }
			span:after {
  content: "%";
  display: inline-block;
  
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
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text" style="font-size:50px;">About Us</h1>
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="Home">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About [image] -->
        <section id="about" class="section-1 highlights image-right">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="featured alt" style="color:#ffffff;">About Us</h2>
                                <p style="text-align:justify;">At Wise, our prime focus is to alert you on the best possible assets for your portfolio via safe investments based on exhaustive research and extensive market-driven data. </p>
								<p style="text-align:justify;">Wise was founded by young, ingenious minds with over 14 years of professional investing experience, who are committed to picking precise and propitious assets that ensure a steady growth of your portfolio.</p>
								<p style="text-align:justify;">We recommend investments with a goal of offering the best opportunity for people wanting to grow their portfolio. </p>
							</div>
                        </div>
                       
                    </div>
                    <div class="col-12 col-md-6">
                            <img src="assets/images/home-about.jpg" class="fit-image" alt="About Us">
                    </div>
                </div>
            </div>
        </section>

		 <!-- About [video] -->
        <section class="section-2 odd highlights image-left">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        
                            <img src="assets/images/why-us.jpg" class="fit-image" alt="Institutional">
                        
                    </div>
                    <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="featured alt">Why Us</h2>
                                <p style="text-align:justify;">We don’t just offer you safe investments, we do it the optimal way. </p>
								<p style="text-align:justify;">Looking for the right investment opportunity by yourself can be a tiresome process. That’s why it’s best you leave it to the experts. Our machine-learning tools analyses and picks out the best investments for you. This way, we do all the research so you can focus on what’s most important to you. </p>
								<p style="text-align:justify;"> We offer 10% – 15% return on average, making us a better option than our competitors to start your investing journey.</p>
								<p style="text-align:justify;">What’s in it for us? We just want to level the playing field by making investing easy for both rookies and professionals. </p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <!--<i class="icon icon-trophy"></i>-->
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                       <!-- <h4>Tradition</h4>
                                        <p>We are excellence in developing web solutions for companies.</p>-->
                                    </div>  
                                </div>
                                <div class="row item">
                                    <!--<div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>-->
                                    <div class="col-12 col-md-9 align-self-center">
                                        <!--<h4>Innovation</h4>
                                        <p>We seek to build something that changes people's lives.</p>-->
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
       
  <!-- Fun Facts -->
        <section id="funfacts" class="section-4 odd counter funfacts" style="padding-top:50px;">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2>Fun Facts</h2>
                        <p class="text-max-800">Over the years we have done many things that we are proud of. This motivates us to continue looking for new challenges in order to improve our services.</p>
                    </div>
                </div>
                <div data-aos-id="counter" data-aos="fade-up" data-aos-delay="200" class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div data-percent="14" class="radial">
                            <label style="font-size: 2.5rem;
    background-image: -webkit-linear-gradient(45deg, var(--secondary-color) 15%, var(--primary-color) 65%);
    background-image: linear-gradient(45deg, var(--secondary-color) 15%, var(--primary-color) 65%);
    -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
	position: absolute;
    top: 40px;
    left: 0;
    width: 100%;
    text-align: center;
    line-height: 40px;
    font-family: 'Gilroy', sans-serif;
    font-weight: 700;">14</label>
                        </div>
                        <h4 style="font-size:1.0rem;">YEARS OF EXPERIENCE</h4>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div data-percent="95" class="radial">
                            <span></span>
                        </div>
                        <h4 style="font-size:1.0rem;">ACCURACY RATE</h4>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div data-percent="18" class="radial">
                            <span></span>
                        </div>
                        <h4 style="font-size:1.0rem;">AVERAGE RETURN ON AN ASSET</h4>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div data-percent="378" class="radial">
                            <span></span>
                        </div>
                        <h4 style="font-size:1.0rem;">Total PORTFOLIO RETURN</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- About [video] -->
      
  <!-- Contact -->
        <section id="contact" class="section-7 odd form featured">
            <div class="container">
                <form method="post" action="insert_letstalk.php?lt=About" id="formsubmit" class="multi-step-form">
                    <input type="hidden" name="section" value="leverage_form">

                    <!--<input type="hidden" name="reCAPTCHA">-->
                    <!-- Remove this field if you want to disable recaptcha -->

                    <div class="row">
                        <div class="col-12 col-md-6 align-self-start text-center text-md-left">

                            <!-- Success Message -->
                           
                            <!-- Steps Message -->
                            <div class="row intro form-content">
                                <div class="col-12 p-0">

                                    <!-- Step Title -->
                                    <div class="step-title">
                                        <h2 class="featured alt">Let's Talk?</h2>
                                        <p>Don't wait until tomorrow. Talk to one of our consultants today and learn how to start leveraging your business.</p>
                                    </div>

                                    <!-- Step Title -->
                                    <div class="step-title">
                                        <h2 class="featured alt">Almost There</h2>
                                        <p>We need some more important information to better understand how we can help you in the best possible way.</p>
                                    </div>

                                    <!-- Step Title -->
                                    <div class="step-title">
                                        <h2 class="featured alt">Are you Ready?</h2>
                                        <p>Tell us a little about the project you need to create. This is valuable so that we can direct you to the ideal team.</p>
                                    </div>

                                </div>
                            </div>

                            <!-- Steps Group -->
                            <div class="row text-center form-content">
                                <div class="col-12 p-0">
                                    
                                    <!-- Group 1 -->
                                    <fieldset class="step-group">
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="email" name="lets_talk_email" id="lets_talk_email" data-minlength="3" class="form-control field-email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="lets_talk_name" id="lets_talk_name" data-minlength="3" class="form-control field-name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="lets_talk_phono" id="lets_talk_phono" data-minlength="3" class="form-control field-phone" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-12 input-group p-0">
                                            <button type="submit" id="reg" class="step-next btn primary-button">NEXT<i class="icon-arrow-right-circle left"></i></button>
                                            
                                        </div>
                                    </fieldset>
                                    

                                </div>
                            </div>
                        </div>

                        <div class="content-images col-12 col-md-6 pl-md-5 d-none d-md-block">

                            <!-- Step 1 -->
                            <div class="gallery">
                                
                                    <img src="assets/images/contact.jpg" class="fit-image" alt="Contact Us">
                                
                            </div>

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

        <!-- Modal [search] -->
      

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
        <script src="assets/js/custom.js"></script>
        <!-- #endregion Global ========================= -->
    <script src="assets/js/vendor/slick.min.js"></script>
    <!-- Custom Scripts -->
    <script src="assets/js/vendor/app.js"></script>
    
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery.validate.js"></script>

        <!-- #endregion Global ========================= -->
        <script>
        //Form Validation
        $( document ).ready( function () {
            $( "#formsubmit" ).validate( {
                rules: {
                    
                    lets_talk_email: "required",
                    lets_talk_name: "required",
                    lets_talk_phono: "required",
                    
                    
                },
                messages: {
                    
                    lets_talk_email: 
                    {
                      required: "Please Enter E-mail *",
                      email: "Please Enter Valid E-mail *"
                    },
                    lets_talk_name: "Please enter Product name",
                    lets_talk_phono:
                    {
                      required: "Please Enter Phone No. *",
                      digits: "Please Enter Only Digits *",
                      minlength: "Please Enter Only 10 Digits *",
                      maxlength: "Please Enter Only 10 Digits *"
                    },
                    
                    
                },
                errorElement: "em",
                errorPlacement: function ( error, element ) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass( "invalid-feedback" );

                    if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.next( "label" ) );
                    } else {
                        error.insertAfter( element );
                    }
                },
                highlight: function ( element, errorClass, validClass ) {
                    $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
                },
                unhighlight: function (element, errorClass, validClass) {
                    $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
                }
            } );

        } );
    </script>

    </body>
</html>