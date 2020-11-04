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
    <base href="<?php echo $site_url; ?>">
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


          <link href="assets/css/new/slick.css" rel="stylesheet">
        <link href="assets/css/new/style.css" rel="stylesheet">
        <!-- ==============================================
        Vendor Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/slider.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/vendor/icons.min.css">
        <link rel="stylesheet" href="assets/css/vendor/animation.min.css">
        <link rel="stylesheet" href="assets/css/vendor/gallery.min.css">
        
        <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/theme-orange.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        	<link href="assets/css/new/icons/style.css" rel="stylesheet">
	
      
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
			
			.card span {
    margin-top: 0;
    white-space: pre-wrap;
	color:#fc5130;
}

.card:not(.no-hover):hover h3, .card:not(.no-hover):hover h4, .card:not(.no-hover):hover span {
    color: #f5f5f5;
}
        </style>
        
    </head>

    <body class="theme-mode-dark">

        <!-- Header -->
        <?php 
		include('header.php');
		?>
      <!-- Hero -->
        <section id="slider" class="hero p-0 odd">
            <div class="swiper-container full-slider featured animation slider-h-100">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="assets/images/banner1.jpg" class="hero-image" alt="Hero Image">
                        <div class="slide-content row" data-mask-768="50">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text" style="font-size:40px;">Your Money, Our Mind!</h1>
                                    <p data-aos="zoom-out-up" data-aos-delay="800" class="description">Money isn’t multiplied in the locker. Invest with us and see your money grow!</p>
                                    <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto ml-md-0 mt-4 btn dark-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="swiper-slide slide-center">
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="assets/images/hero-5.jpg" class="hero-image" alt="Hero Image">
                        <div class="slide-content row" data-mask-768="50">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h2 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text" style="font-size:40px;">Investment brews in <br/>the cup of patience</h2>
                                    <p data-aos="zoom-out-up" data-aos-delay="800" class="description">Patience is the key to invest in the stock market. Let experts handle your portfolio to fetch you fruitful results.</p>
                                    <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto ml-md-0 mt-4 btn dark-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="swiper-slide slide-center">
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="assets/images/banner3.jpg" class="hero-image" alt="Hero Image">
                        <div class="slide-content row" data-mask-768="50">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h2 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text" style="font-size:40px;">It’s never too late <br/>to earn!</h2>
                                    <p data-aos="zoom-out-up" data-aos-delay="800" class="description">Earning and earning is not the concept of happy living. Earning with investing is the perfect combination for a wealthy life.</p>
                                    <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto ml-md-0 mt-4 btn dark-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

<script>
   if (typeof(stockdio_events) == "undefined") {
      stockdio_events = true;
      var stockdio_eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
      var stockdio_eventer = window[stockdio_eventMethod];
      var stockdio_messageEvent = stockdio_eventMethod == "attachEvent" ? "onmessage" : "message";
      stockdio_eventer(stockdio_messageEvent, function (e) {
         if (typeof(e.data) != "undefined" && typeof(e.data.method) != "undefined") {
            eval(e.data.method);
         }
      },false);
   }
</script>
<iframe id='st_9d2b767a48974ee5af3300a820c59f13' frameBorder='0' scrolling='no' width='100%' height='100%' src='https://api.stockdio.com/visualization/financial/charts/v1/Ticker?app-key=22984F059760436B8FD319EA584C7302&symbols=AAPL;MSFT;GOOG;FB;ORCL&palette=Financial-Light&onload=st_9d2b767a48974ee5af3300a820c59f13'></iframe>
  
        <!-- About [image] -->
        <section id="about" class="section-1 odd highlights image-right">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="featured alt">About Us</h2>
                                <p style="text-align:justify;">Wise Investing is a well diversified financial service company that alerts you to pick on the best assets for portfolio creation, based on exhaustive research and extensive market driven data. </p>
<p style="text-align:justify;">The Wise Investing is a result of two young and ingenious minds who hold 14 years of professional experience in picking precise and propitious assets that ensure steady growth of your portfolio.</p>
<p style="text-align:justify;">We believe in growing together, choose  Wise Investing for a secured future!
</p>
 <h2 class="featured alt" style="margin-top:60px;">Why Us</h2>
     <p style="text-align:justify;">We don’t just offer you safe investments, we do it the optimal way.</p>
								<p style="text-align:justify;">Looking for the right investment opportunity by yourself can be a tiresome process, leave it to us for wise return and investments. We as an expert ,research the assets and pick out the best investment opportunity with our machine learning tools.  The Wise Investing holds an edge towards competitors in terms of return, on an average our hand picked stocks offer 10-15% ROI. What’s in it for us? We just want to level the playing field by making investing easy for both rookies and professionals.
                            
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                       <!-- <i class="icon icon-badge"></i>-->
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <!--<h4>Quality</h4>
                                        <p>Everything we do has the commitment of a well trained and motivated team.</p>-->
                                    </div>  
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                       <!-- <i class="icon icon-briefcase"></i>-->
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                       <!-- <h4>Experience</h4>
                                        <p>Focused on results we seek to raise the level of our customers.</p>-->
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        
                            <img src="assets/images/home-about.jpg" class="fit-image" alt="About Us">
                       
                    </div>
                </div>
            </div>
        </section>

<section id="portfolio" class="section-4 offers secondary" style="padding-top:75px;">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-12 align-self-center text-center text-md-left">
                        <h2 class="featured" style="color:#fff;">Our Portfolio</h2>
                        <p>We have already built amazing things for our customers.</p>
                    </div>
                    
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card featured">
                            <h4>Investing</h4>
                            <p>Investing focuses on spending your money on buying assets with the expectation that your investment will give you higher returns.</p>
                            <div class="gallery">
                                <a href="assets/images/work-1.jpg">
                                    <img src="assets/images/work-1.jpg" alt="Investing">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card featured">
                            <h4>Savings</h4>
                            <p>Saving is just setting aside money you don’t spend now for emergencies, retirement or even for a future purchase.</p>
                            <div class="gallery">
                                <a href="assets/images/work-2.jpg">
                                    <img src="assets/images/work-2.jpg" alt="Savings" style="padding-top:24px;">
                                </a>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </section>
		
		<section id="services" class="section-4 odd offers featured">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-12 align-self-center text-center text-md-left">
                        <h2 class="featured">Our Strategies</h2>
                        <p>Focused on results we seek to raise the level of our customers.</p>
                    </div>
                   
                </div>
                <div class="row justify-content-center items">
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card featured" style="padding-bottom:59px;">
                            <h4>Long Holding Periods</h4>
							 <span>“Time in the market beats timing in the market” - Ken Fisher</span>
                            <p style="padding-top:10px;">Patience is necessary while waiting for a seed to grow into a bearing fruit. Likewise you must be forbearing while investing. Think ahead and choose the next best investment opportunity that fetches rewards in the long run, we help in providing long term investment and swing trade ideas.</p>
                           
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card">
                            <h4>Nominal Rates</h4>
							 <span>“The stock market is filled with individuals who know the price of everything, but the value of nothing” – Phillip Fisher</span>
                            <p style="padding-top:10px;">Would you prefer to buy an overvalued asset? Then why would you overpay for an investment insight service? Unlike our competitors, we provide the best recommendations for a fraction of the price. Invest with The Wise Investing with nominal rates to enjoy the better future! </p>
                           
                        </div>
                    </div>
                    
                   
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card" style="padding-bottom:59px;">
                            <h4>Valuable Insights</h4>
							<span>"Without data you’re just another person with an opinion” – W. Edwards Deming </span>
                            <p style="padding-top:10px;">We simply want the best for you. Get Updated every week with market reports and individual asset insight reports, which in turn serves as a base for making investment related decisions. Informed Investor is better than an impatient trader!</p>
                           
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card featured">
                            <h4>Market Analysis</h4>
							<span>“In investing, what is comfortable is rarely profitable.” - Robert Arnott</span>
                            <p style="padding-top:10px;">We have developed the best in class stock screener that helps us read and predict the market, to recommend you the  best stocks based on your portfolio. Our stock screener takes in multiple arguments and scans the entire stock market to analyse and forecast the movements, making us accurate and precise</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
<section><div class="page-content">
	<!--section single service -->
		<div class="section" style="margin-top:0px;">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1">Our Recent Picks</h2>
					<div class="h-decor"></div>
				</div>
                
				<div class="single-service-carousel js-single-service-carousel">

                    <?php
                            $i=0;
                            $picks=$link->rawQuery("select * from picks");
                            if($picks)
                                                {
                                                    foreach($picks as $pick)
                                                    {
                                                        if($i%2==0){
                            ?>
					<div class="single-service">
						<div class="row">
                            
							<div class="col-md">
								<div class="text-right pl-0 pl-md-3 pl-lg-6">
									<h3><?php echo $pick['picks_name']; ?></h3>
									<p><?php echo $pick['picks_description']; ?></p>
									<div class="btn-wrap"><a href="<?php echo $pick['picks_website']; ?>" class="btn btn-hover-fill"><span>Read more</span></i></a>
                                    </div>
								</div>
							</div>
							<div class="col-md col-img">
								<img src="backyard/images/picks_image/<?php echo $pick['picks_image']; ?>" alt="<?php echo $pick['picks_name'];?>" class="img-fluid">
							</div>
						</div>
					</div>
                    <?php
                        }
                        else{
                    ?>
					<div class="single-service">
						<div class="row">
							<div class="col-md col-img text-right">
								<img src="assets/images/1.png" alt="" class="img-fluid">
							</div>
							<div class="col-md">
								<div class="text-left pr-0 pr-md-3 pr-lg-6">
									<h3><?php echo $pick['picks_name']; ?></h3>
									<p><?php echo $pick['picks_description']; ?></p>
									<div class="btn-wrap"><a href="<?php echo $pick['picks_website']; ?>" class="btn btn-hover-fill"></i><span>Read more</span></a></div>
								</div>
							</div>
						</div>
					</div>
                    <?php
                        }
                        $i++;
                    }
                    }
                    ?>
					<!--<div class="single-service">
						<div class="row">
							<div class="col-md">
								<div class="text-right pl-0 pl-md-3 pl-lg-6">
									<h3>PRPO</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
									<div class="btn-wrap"><a href="#" class="btn btn-hover-fill"><span>Read more</span></a></div>
								</div>
							</div>
							<div class="col-md col-img">
								<img src="assets/images/1.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="single-service">
						<div class="row">
							<div class="col-md col-img text-right">
								<img src="assets/images/1.png" alt="" class="img-fluid">
							</div>
							<div class="col-md">
								<div class="text-left pr-0 pr-md-3 pr-lg-6">
									<h3>PRPO</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
									<div class="btn-wrap"><a href="#" class="btn btn-hover-fill"><span>Read more</span></a></div>
								</div>
							</div>
						</div>-->
					</div>
				</div>
			</div>
		</div>
		<!--//section single service -->
	</div>
        </section>
		
<section id="partner" class="section-4 odd logos" style="padding:75px;">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row text-center intro">
                        
                        <div class="col-12">
                            <h2 class="super effect-static-text">Our Picks Have Been Featured</h2>
                           
                        </div>
                    </div>
				
                    <div class="swiper-container min-slider">
                        <div class="swiper-wrapper">
                            <?php
                               $picks=$link->rawQuery("select * from featured");
                            if($picks)
                                                {
                                                    foreach($picks as $featured)
                                                    {
                            ?>
                            <div class="swiper-slide slide-center item">
                                <img src="backyard/images/featured_logo/<?php echo $featured['featured_logo']; ?>" class="fit-image w-85" alt="Fit Image">
                            </div>
                             <?php
                    }
                }
                ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News -->
        <section id="news" class="section-5 odd carousel showcase news">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row intro">
                        <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                            <h2 class="featured">Latest Blogs</h2>
                            <p>Every week we publish exclusive content on various topics.</p>
                        </div>
                        <div class="col-12 col-md-3 align-self-end">
                            <a href="Blog" class="btn mx-auto mr-md-0 ml-md-auto primary-button"><i class="icon-grid"></i>VIEW ALL</a>
                        </div>
                    </div>


                     
                   <div class="swiper-container mid-slider items">
                       <div class="swiper-wrapper">
                        <?php
                            $sql=$link->rawQuery("select * from blog where is_active=1");
                                if($sql)
                                    {
                                        foreach($sql as $cat)
                                        {
                            ?>
                             <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="backyard/images/blog_thumb_image/<?php echo $cat['blog_thumb_image']; ?>" alt="<?php echo $cat['blog_name']; ?>">
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="Blog/<?php echo $cat['blog_alias']; ?>">
                                                <h4 class="m-0"><?php echo $cat['blog_title']; ?></h4>
                                            </a>
                                        </div>
                                        <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                            <a href="Blog/<?php echo $cat['blog_alias']; ?>" class="d-lg-flex align-items-center"><i class="icon-user"></i><?php echo $cat['blog_writer']; ?></a>
                                            <a href="Blog/<?php echo $cat['blog_alias']; ?>" class="d-lg-flex align-items-center"><i class="icon-clock"></i><?php echo $cat['blog_date']; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        }
                    ?>
                                <!--<div class="swiper-slide slide-center item">
                               <div class="row card p-0 text-center">
                                 <div class="image-over">
                                   <img src="assets/images/news-1-h.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                  <div class="card-body">
                                    <a href="#">
                                      <h4 class="m-0">Tips for having a good relationship at work.</h4>
                                    </a>
                                   </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                  <a href="#" class="d-lg-flex align-items-center">
                                    <i class="icon-user"></i>John Doe</a>
                                  <a href="#" class="d-lg-flex align-items-center">
                                    <i class="icon-clock"></i>3 Days Ago</a>
                                </div>
                                </div>
                                </div>
                                </div>

                                <div class="swiper-slide slide-center item">
                               <div class="row card p-0 text-center">
                                 <div class="image-over">
                                   <img src="assets/images/news-1-h.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                  <div class="card-body">
                                    <a href="#">
                                      <h4 class="m-0">Tips for having a good relationship at work.</h4>
                                    </a>
                                   </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                  <a href="#" class="d-lg-flex align-items-center">
                                    <i class="icon-user"></i>John Doe</a>
                                  <a href="#" class="d-lg-flex align-items-center">
                                    <i class="icon-clock"></i>3 Days Ago</a>
                                </div>
                                </div>
                                </div>
                                </div>-->
                        
                        <div class="swiper-pagination"></div>
                    </div>
                     
                </div>
            </div>
        </div>
        </section>
		
		   <!-- Testimonials -->
        <section id="testimonials" class="section-4 odd carousel featured all" style="padding-top:50px;">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row text-center intro">
                        <div class="col-12">
                            <h2>Customer Testimonials</h2>
                            <p class="text-max-800">Our customers are satisfied with the work we do. The greatest gratification is to receive recognition for what we have built. This motivates us to improve even more.</p>
                        </div>
                    </div>
                    <div class="swiper-container mid-slider items">
                        <div class="swiper-wrapper">
                            <?php
                            $sql=$link->rawQuery("select * from testimonial where testimonial_delete=0");
                                if($sql)
                                    {
                                        foreach($sql as $cat)
                                        {
                            ?>
                            <div class="swiper-slide slide-center text-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="backyard/images/client_image/<?php echo $cat['client_image']; ?>" alt="<?php echo $cat['client_name']; ?>" class="person" style="max-width:100px;border-radius:100%;">
                                        <h4><?php echo $cat['client_name'];?></h4>
                                        <p><?php echo $cat['testimonial_msg']; ?></p>
                                        <ul class="navbar-nav social share-list ml-auto">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            }
                            ?>
                            <!--<div class="swiper-slide slide-center text-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="assets/images/team-2.jpg" alt="Mary Evans" class="person" style="max-width:100px;border-radius:100%;">
                                        <h4>Mary Evans</h4>
                                        <p>This company created an exclusive form. Fantastic.</p>
                                        <ul class="navbar-nav social share-list ml-auto">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>-->
							<?php
								$r=$link->rawQuery("select * from review");
								if($link->count > 0)
								{
									foreach($r as $review)
									{
										?>
										<div class="swiper-slide slide-center text-center item">
											<div class="row card">
												<div class="col-12">
													<img src="backyard/images/review_image/<?php echo $review['review_image']; ?>" alt="<?php echo $review['review_name']; ?>" class="person" style="max-width:100px;border-radius:100%;">
													<h4><?php echo $review['review_name']; ?></h4>
													<p><?php echo $review['review_description']; ?>.</p>
												</div>
											</div>
										</div>
										<?php
									}
								}
							?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Contact -->
        <section id="contact" class="section-7 odd form featured">
            <div class="container">
                <form method="post" action="insert_letstalk.php" id="formsubmit" class="multi-step-form">
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

    </body>
</html>