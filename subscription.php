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
		.loader{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%; 
  height: 100%;
  z-index: 99999;
  transition: 1s;
}
.span{
  position: absolute;
  transform: translate(-50%, 50%);
  width: 120px; 
  height: 120px;
  top: 35%;
  border: 5px solid #dd1e4b;
  z-index: 1;
  animation: animar 2.5s linear infinite;
}
.span:before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #dd1e4b;
  animation: animarbg 2.5s linear infinite;
}

@keyframes animar {
    0% {
        transform: translate(-50%, 50%) rotate(0deg);
    }
    25% {
        transform: translate(-50%, 50%) rotate(180deg);
    }
    50% {
        transform: translate(-50%, 50%) rotate(180deg);
    }
    75% {
        transform: translate(-50%, 50%) rotate(360deg);
    }
    100% {
        transform: translate(-50%, 50%) rotate(360deg);
    }
}
@keyframes animarbg {
    0% {
        height: 0;
    }
    25% {
        height: 0;
    }
    50% {
        height: 100%;
    }
    75% {
        height: 100%;
    }
    100% {
        height: 0;
    }
}
        </style>
        <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
		<script src="https://js.stripe.com/v3/"></script>
    </head>

    <body>
		<div style="display:none;" class="loader text-center">
			<span class="span"></span>
		</div>
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
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text" style="font-size:50px;">Our Plans</h1>
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="Home">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Subscription</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About [image] -->
         <section id="pricing" class="section-3 odd plans featured">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2>Plans and Pricing</h2>
                        <p class="text-max-800">Choose the ideal plan for what you need. We work with affordable prices for all types of pocket.</p>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    
                    <div class="col-12 col-md-6 col-lg-6 align-self-center text-center item">

                        <div class="card">
                            <i class="icon icon-handbag"></i>
                            <h4>Monthly</h4>
                            <span class="price"><i>$</i>39.99</span>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Alerts of Swing Trading stocks via text </span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Alerts of Value Investment Long Term stocks via text</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Target Entry/Exit Price with Stop Loss Limit</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Weekly Report on the overall market performance and analysis of market indices </span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Technical and Fundamental Analysis of any stock (*on special request)</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								
                            </ul>
                            <?php
                                    if($sflag == 1)
                                    {
                          ?>
                            <a href="#" id="checkout-button" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>CHOSE PLAN</a>
                            <?php
                        }
                        else                                                       
                            {
                        ?>
                        <a href="Login-Register/Subscription" id="checkout-button" class="btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>CHOSE PLAN</a>
                        <?php
                            }
                        ?>
                        </div>
                    </div>
                    

                    <div class="col-12 col-md-6 col-lg-6 align-self-center text-center item">
                        <div class="card">
                            <i class="icon icon-fire"></i>
                            <h4>Quarterly</h4>
                            <span class="price"><i>$</i>34.99</span>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Alerts of Swing Trading stocks via text </span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Alerts of Value Investment Long Term stocks via text</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Target Entry/Exit Price with Stop Loss Limit</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Weekly Report on the overall market performance and analysis of market indices </span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Technical and Fundamental Analysis of any stock (*on special request)</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								
                            </ul>
                            <?php
                                    if($sflag == 1)
                                    {
                          ?>
                            <a href="#" id="checkout-button2" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>CHOSE PLAN</a>
                            <?php
                        }
                        else if($sflag==0)                                                       
                            {
                        ?>
                        <a href="Login-Register/Subscription" id="checkout-button" class="btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>CHOSE PLAN</a>
                        <?php
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


		 <!-- About [video] -->
        <section id="features" class="section-2 odd offers" style="padding-bottom:0px;">
            <div class="container">
			 
                <div class="row justify-content-center text-center items">
                	<div class="col-12 col-md-12 col-lg-12 item">
					<h6 style="text-align:left;">**DISCLAIMER**</h6>
					<ul>
					<li style="text-align:left;padding-bottom:20px;text-align:justify;">STOCK ALERTS ARE NOT FDIC-INSURED, ARE NOT GUARANTEED BY THE WISE INVESTING CO. AND MAY LOSE VALUE.</li>
					<li style="text-align:left;padding-bottom:20px;text-align:justify;">ALL INFORMATION PROVIDED IS THE PROPERTY OF THE WISE INVESTING CO. AND SHOULD NOT BE REPRODUCED, COPIED, REDISTRIBUTED, TRANSFERRED, OR SOLD WITHOUT THE PRIOR WRITTEN CONSENT OF THE WISE INVESTING CO., BY ACCESSING THIS SITE, YOU ACCEPT THAT YOU HAVE READ AND UNDERSTOOD THIS DISCLAIMER.</li>
					<li style="text-align:left;padding-bottom:20px;text-align:justify;">ANY VIEWS OR STRATEGIES TALKED ABOUT ON THIS WEBSITE OR IN ALERTS SENT VIA EMAIL OR TEXT MAY NOT BE SUITABLE FOR ALL INDIVIDUALS AND ARE SUSCEPTIBLE TO RISKS, INVESTORS MAY GET BACK LESS THAN THEY INVESTED, AND PAST PERFORMANCES IS NOT A DEPENDABLE GAUGE OF FUTURE RESULTS. YOU MUST ALSO EXAMINE THE OBJECTIVES, RISKS, CHARGES AND EXPENSES CONNECTED WITH AN ALERT SERVICE OR STRATEGY BEFORE MAKING THE DECISION TO INVEST ON YOUR OWN.</li>
					<li style="text-align:left;padding-bottom:20px;text-align:justify;">ALL THE INFORMATION RECEIVED BY SUBSCRIBERS IS FOR PERSONAL USE ONLY. INVESTING HAS RISKS, INCLUDING THE LOSS OF A PORTION OR ALL YOUR INVESTMENT, AS WELL AS EMOTIONAL DISTRESS. NOTHING PROVIDED BY THE WISE INVESTING CO. SHOULD BE CONSIDERED AS A WARRANTY OF INVESTMENT RESULTS. ALL RISKS, LOSSES AND COSTS ASSOCIATED WITH INVESTING, INCLUDING TOTAL LOSS OF PRINCIPAL, ARE YOUR RESPONSIBILITY. THE WISE INVESTING CO. MAY HAVE A POSITION IN STOCKS OR FUNDS DISCUSSED IN THE ALERT SYSTEM AND OR CORRESPONDENCE SENT TO CLIENTS.</li>
					<li style="text-align:left;padding-bottom:20px;text-align:justify;">NO REFUNDS.</li>
					<li style="text-align:left;padding-bottom:20px;text-align:justify;">ALL LOGOS USED ON THE SITE ARE TRADEMARKED LOGOS AND THEY BELONG TO THEIR RIGHTFUL OWNERS. THE WISE INVESTING CO. DOES NOT CLAIM OWNERSHIP OF ANY OF THE LOGOS USED ON THIS WEBSITE EXCEPT FOR THE WISE INVESTING CO. LOGOS.</li>
					<li style="text-align:left;padding-bottom:20px;text-align:justify;">BY MAKING A PAYMENT TO THE WISE INVESTING CO., YOU ARE AGREEING TO THE FOLLOWING TERMS. YOUR ACCOUNT WILL BE CHARGED ACCORDING TO THE PLAN YOU CHOOSE FOR YOUR MEMBERSHIP, NO REFUNDS WILL BE PROVIDED FOR SERVICE CANCELED PRIOR TO ITS AUTOMATIC RENEWAL. WHEN YOU PAY FOR YOUR MEMBERSHIP YOU ARE AGREEING TO YOUR DEBIT/CREDIT CARD BEING DRAFTED AUTOMATICALLY VIA PAYPAL ACCORDING TO WHICH MEMBERSHIP PLAN YOU CHOOSE. ALL MEMBERSHIPS ARE SET ON AUTOMATIC RENEWAL. PAYMENTS ARE SET FOR AUTOMATIC RENEWAL AND THIS MUST BE CANCELED IN ORDER TO NO LONGER BE CHARGED. PAYMENTS ARE SET FOR AUTOMATIC RENEWAL AT THE END OF THE BILLING CYCLE. IN ORDER TO CANCEL AUTOMATIC RENEWAL ON YOUR ACCOUNT YOU MUST EMAIL PRIOR TO THE RENEWAL DATE TO REQUEST TO CANCEL OR YOU MAY CANCEL AUTOMATIC PAYMENTS DIRECTLY THROUGH PAYPAL. TEXTING STOP TO THE TEXT ALERTS WILL ONLY OPT YOUR PHONE NUMBER OUT THE SYSTEM. TEXTING STOP DOES NOT CANCEL THE AUTOMATIC RENEWAL ON YOUR ACCOUNT. AFTER PURCHASING A MEMBERSHIP, THERE IS NO TRIAL PERIOD AND NO REFUNDS WILL BE PROVIDED. ALL SALES FINAL. TO REVOKE YOUR MEMBERSHIP, YOU MUST EMAIL SPECIFYING THAT YOU WISH TO PERMANENTLY VOID YOUR MEMBERSHIP.</li>
					<ul>
					</div>
                </div>
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
		 <script type="text/javascript">
		 $("document").ready(function(){
			$(".loader").css("display","none"); 
		 });
		// Create an instance of the Stripe object with your publishable API key
		var stripe = Stripe("pk_live_51HKUuPBJHkDxSTq4xGWohVwBOTDtiNGfIP5hls0dKxUPftxkVVPYYb3CPwWNggQ89ajrKUiyv7rMxVCu7VnlCamG00eJAtqVmj");
		var checkoutButton = document.getElementById("checkout-button");
		checkoutButton.addEventListener("click", function () {
			$(".loader").css("display","block");
			//$("body").css("opacity","0");
		  fetch("<?php echo $site_url; ?>/create-session.php", {
			method: "POST",
		  })
			.then(function (response) {
			  return response.json();
			})
			.then(function (session) {
			  return stripe.redirectToCheckout({ sessionId: session.id });
			})
			.then(function (result) {
			  // If redirectToCheckout fails due to a browser or network
			  // error, you should display the localized error message to your
			  // customer using error.message.
			  if (result.error) {
				alert(result.error.message);
			  }
			})
			.catch(function (error) {
			  console.error("Error:", error);
			});
		});
	  </script>
	  <script type="text/javascript">
		// Create an instance of the Stripe object with your publishable API key
		var stripe = Stripe("pk_live_51HKUuPBJHkDxSTq4xGWohVwBOTDtiNGfIP5hls0dKxUPftxkVVPYYb3CPwWNggQ89ajrKUiyv7rMxVCu7VnlCamG00eJAtqVmj");
		var checkoutButton = document.getElementById("checkout-button2");
		checkoutButton.addEventListener("click", function () {
			$(".loader").css("display","block");
		  fetch("<?php echo $site_url; ?>/create-session2.php", {
			method: "POST",
		  })
			.then(function (response) {
			  return response.json();
			})
			.then(function (session) {
			  return stripe.redirectToCheckout({ sessionId: session.id });
			})
			.then(function (result) {
			  // If redirectToCheckout fails due to a browser or network
			  // error, you should display the localized error message to your
			  // customer using error.message.
			  if (result.error) {
				alert(result.error.message);
			  }
			})
			.catch(function (error) {
			  console.error("Error:", error);
			});
		});
	  </script>
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