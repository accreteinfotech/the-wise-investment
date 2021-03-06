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
			
		
		</style>
		<style>
body { background-color: #30303d; color: #fff; }
#chartdiv {
  width: 100%;
  height: 450px;
}
input, select {
    width: 80%;
    height: 44px;
    background: no-repeat;
    box-shadow: none;
    padding: 0.7rem 1rem;
    border-style: solid;
    border-color: var(--primary-l-color);
    border-width: 1px;
    border-radius: 2px;
}
</style>
<!-- Chart code -->

	<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/dark.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

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
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text" style="font-size:50px;">How is investing different from saving?</h1>
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="Home">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Why Invest</li>
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
                                <h2 class="featured alt" style="color:#ffffff;">Saving</h2>
                                <p style="text-align:justify;">While a lot of similarities can be brought between Investing and Saving, the stark difference between the two is earnings. Yes, you heard it right.</p>
								<p style="text-align:justify;">Saving is just setting aside money you don’t spend now for emergencies or for a future purchase. The reason can be anything ranging from a cruise-trip around Europe to buying a new car. There is no risk involved as you just hand over money periodically to a secured financial institution and earn little returns in the form of interests.</p>
							</div>
                        </div>
                       
                    </div>
                    <div class="col-12 col-md-6">
                            <img src="assets/images/money.jpg" class="fit-image" alt="About Us">
                    </div>
                </div>
            </div>
        </section>

		 <!-- About [video] -->
        <section class="section-2 odd highlights image-left">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        
                            <img src="assets/images/invest.jpg" class="fit-image" alt="Institutional">
                        
                    </div>
                    <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="featured alt">Investing</h2>
                                <p style="text-align:justify;">Investing, particularly in stocks can help you earn more compared to your money staying in a bank. When done right, Investing can help you grow your money by up to 10% compared to less than 4% what you get via interests while saving.</p>
								<p style="text-align:justify;">Investment is risky, no doubt. But the risk? Just keeps going on.</p>
								<p style="text-align:justify;">When you have decided to step in to investing, all you have to do is to plan and keep continuing it for a long-term.</p>
								<p style="text-align:justify;">Of course, there are short-term investments, which can help you earn more than savings. But long-term investments can get you close to 10 times if you periodically keep investing.</p>
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
       
 
         <section id="get" class="section-3 hero odd p-0">
            <div class="swiper-container no-slider animation slider-h-75">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <!-- 
                            Suggestion: Add a video to your assets folder and configure it here.

                            <video type="video/mp4" class="full-image" data-mask="70" src="assets/videos/yourvideo.mp4" autoplay muted loop></video> 
                        -->

                        <div class="slide-content row">
                            <div class="col-12 d-flex inner">
                                <div class="center align-self-center text-center">
                                    <h2 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">ARE YOU READY?</h2>
                                    <p data-aos="zoom-out-up" data-aos-delay="800" class="description ml-auto mr-auto">Here’s something for you to better understand the differences between Investing and Saving.</p>
                                    <a href="#" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto mt-5 btn primary-button"><i class="icon-rocket"></i>Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
		<section id="services" class="section-2 odd offers featured custom">
            <div class="container">
				<div class="row text-center intro">
                    <div class="col-12">
                        <h2>“If you don’t find a way to make money while you sleep, you will work until you die” – Warren Buffet</h2>
                    </div>
                </div>
                <div class="row intro">
                    <div class="col-12 col-md-12 align-self-center text-center text-md-left">
                        <h2 class="super effect-static-text">Calculate your investment!</h2>
                        <p>Choose your initial investment and calculate your expected returns!</p>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-6 item" style="padding:30px;">
                        <span style="text-align:left;padding-top:10px">Initial Value</span>
							<div class="range-slider" id="range-slider1">
							  <input class="range-slider__range" type="range" value="100" min="1" max="5000">
							  <span class="range-slider__value" id="initial_value">0</span>
							</div>
						<span style="text-align:left;padding-top:10px">How many years ?</span>
							<div class="range-slider" id="range-slider2">
							  <input class="range-slider__range" type="range" value="1" min="1" max="20" step="1">
							  <span class="range-slider__value" id="years">0</span>
							</div>
						<span style="text-align:left;padding-top:10px">Every Years Contribution ?</span>
							<div class="range-slider" id="range-slider3">
							  <input class="range-slider__range" type="range" value="250" min="1" max="5000" step="50">
							  <span class="range-slider__value" id="month" >0</span>
							</div>
						<span style="text-align:left;padding-top:10px">Average Return ?</span>
							<div class="range-slider" id="range-slider4">
							  <input class="range-slider__range" type="range" value="18" min="5" max="25" step="1">
							  <span class="range-slider__value" id="return">0</span>
							</div>
						  <input type="hidden" name="amt" id="amt">
                      <p style="font-size:26px;" id="total">Your Estimated Portfolio Value: $1411855</p>
                    </div>
					<div class="col-6 col-md-6 col-lg-6 item">
						<div id="chartdiv"></div>
                    </div>
                </div>
				
            </div>
        </section>
        <!-- About [video] -->
       <!--<section id="pricing" class="section-3 odd plans featured" style="padding-top:70px;">
            <div class="container">
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-12 col-lg-12 align-self-center text-center item">
					<p style="font-size:22px;">Here’s a chart comparing Investing and Saving, to help you make your choice better.</p>
                     
                    </div>
                </div>
            </div>
        </section>-->
	  
	  <section id="contact" class="section-6 form" style="padding-bottom:75px;">
            <div class="container smaller">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2 style="color:#fff;">What are you waiting for?</h2>
                        <p>Research can be a tiresome process! Leave it for the experts. Our strategies are based on focus driven research and data analysis to serve the investing platter with higher returns with nominal fee!</p>
						<p>Earn more , Pay less!  Choose the Wise Investing for great returns, blue chip assets and ordinary pricing.</p>
						<p style="font-size:24px;color:#fff;">Start early, save steadily, and invest intelligently, to grow your money in amazing ways over time.</p>
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
		<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_dark);
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart);
chart.scrollbarX = new am4core.Scrollbar();

// Add data
chart.data = [{
  "Years": 1,
  "visits": 3025
}, {
  "Years": 2,
  "visits": 1882
}, {
  "Years": 4,
  "visits": 1809
}, {
  "Years": 6,
  "visits": 1322
}, {
  "Years": 8,
  "visits": 1122
}, {
  "Years": 10,
  "visits": 1114
}, {
  "Years": 12,
  "visits": 984
}, {
  "Years": 14,
  "visits": 711
}, {
  "Years": 16,
  "visits": 10000
}];

prepareParetoData();

function prepareParetoData(){
    var total = 0;

    for(var i = 0; i < chart.data.length; i++){
        var value = chart.data[i].visits;
        total += value;
    }

    var sum = 0;
    for(var i = 0; i < chart.data.length; i++){
        var value = chart.data[i].visits;
        sum += value;   
        //chart.data[i].pareto = sum / total * 100;
    }    
}

// Create axes
var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "Years";
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.minGridDistance = 60;
categoryAxis.tooltip.disabled = true;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.renderer.minWidth = 50;
valueAxis.min = 0;
valueAxis.cursorTooltipEnabled = false;

// Create series
var series = chart.series.push(new am4charts.ColumnSeries());
series.sequencedInterpolation = true;
series.dataFields.valueY = "visits";
series.dataFields.categoryX = "Years";
series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
series.columns.template.strokeWidth = 0;

series.tooltip.pointerOrientation = "vertical";

series.columns.template.column.cornerRadiusTopLeft = 10;
series.columns.template.column.cornerRadiusTopRight = 10;
series.columns.template.column.fillOpacity = 0.8;

// on hover, make corner radiuses bigger
var hoverState = series.columns.template.column.states.create("hover");
hoverState.properties.cornerRadiusTopLeft = 0;
hoverState.properties.cornerRadiusTopRight = 0;
hoverState.properties.fillOpacity = 1;

series.columns.template.adapter.add("fill", function(fill, target) {
  return chart.colors.getIndex(target.dataItem.index);
})


/*var paretoValueAxis = chart.yAxes.push(new am4charts.ValueAxis());
paretoValueAxis.renderer.opposite = true;
paretoValueAxis.min = 0;
paretoValueAxis.max = 100;
paretoValueAxis.strictMinMax = true;
paretoValueAxis.renderer.grid.template.disabled = true;
paretoValueAxis.numberFormatter = new am4core.NumberFormatter();
paretoValueAxis.numberFormatter.numberFormat = "#'%'"
paretoValueAxis.cursorTooltipEnabled = false;*/

var paretoSeries = chart.series.push(new am4charts.LineSeries())
paretoSeries.dataFields.valueY = "pareto";
paretoSeries.dataFields.categoryX = "Years";
//paretoSeries.yAxis = paretoValueAxis;
paretoSeries.tooltipText = "pareto: {valueY.formatNumber('#.0')}%[/]";
paretoSeries.bullets.push(new am4charts.CircleBullet());
paretoSeries.strokeWidth = 2;
paretoSeries.stroke = new am4core.InterfaceColorSet().getFor("alternativeBackground");
paretoSeries.strokeOpacity = 0.5;

// Cursor
chart.cursor = new am4charts.XYCursor();
chart.cursor.behavior = "panX";

}); // end am4core.ready()
</script>
		<script>
		var rangeSlider = function(){
  var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
	  //alert("value");
	 });

    range.on('input', function(){
      $(this).next(value).html(this.value);
	
    });
  });
};
$( "#range-slider1" ).change(function() {
	 calculation();
});
$( "#range-slider2" ).change(function() {
	calculation();
});
$( "#range-slider3" ).change(function() {
	calculation();
});
$( "#range-slider4" ).change(function() {
	calculation();
});
$( document ).ready(function(){
	rangeSlider();
	calculation();
});
function calculation()
{
	 var ini= $("#initial_value").html();
	 var years= $("#years").html();
	 var month= $("#month").html();
	 var ret= $("#return").html();
	 var ret_int=ret/100;
	 
	  var a=ini*(1+ret_int)**years;
	  var b=month/ret_int;
	  var c=((1+ret_int)**years)-1;
	  var d=c*b;
	//Final	 
	 var e=d+a;
	  //alert(e);
	 var amt=parseFloat(e).toFixed(2) ;
	 //var amt=(ini*(1+ret)**years)+((month/ret)*((1+ret)**years-1));
	//alert(amt);
	$("#total").html("Your Estimated Portfolio Value: $"+amt);
	$("#amt").val(amt);
	
	prepareParetoData();
}
</script>

        <!-- #endregion Global ========================= -->

    </body>
</html>