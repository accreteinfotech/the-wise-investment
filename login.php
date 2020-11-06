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
	<base href="<?php echo $site_url; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $project_name; ?> | <?php echo $page_seo_title; ?></title>
    <meta name="description" content="<?php echo $page_seo_description; ?>">
    <meta name="keywords" content="<?php echo $page_seo_keywords; ?>" >
    <meta property="og:title" content="<?php echo $project_name; ?> | <?php echo $page_seo_og_title; ?>" />
    <meta property="og:url" content="<?php echo $page_seo_og_url; ?>" />
    <meta property="og:description" content="<?php echo $page_seo_og_description; ?>">

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
                :root {                
                --header-bg-color: #f5f5f5;
                --nav-item-color: #2f323a;
                --top-nav-item-color: #2f323a;
                --hero-bg-color: #f5f5f5;

                --section-1-bg-color: #eeeeee;
                --section-2-bg-color: #e5e5e5;
                --section-3-bg-color: #f5f5f5;
                --section-4-bg-color: #eeeeee;
                --section-5-bg-color: #e5e5e5;
                --section-6-bg-color: #f5f5f5;
                --section-7-bg-color: #eeeeee;
            
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
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text" style="font-size:50px;">Sign Up/Sign In</h1>
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Sign Up/Sign In</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     
      <section id="subscribe" class="section-6 subscribe">
            <div class="container smaller">
                <div class="row text-center intro">
                    <div class="col-6">
                        <h2>Login Now</h2>
                    </div>
                     <div class="col-6">
                        <h2>Register Now</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 p-0">
                        <form id="loginform" method="post" class="row m-auto items">
										<?php
                                            if(isset($_GET['pid']) && $_GET['pid']!=null)
                                            {
                                                ?>
                                                 <input type="hidden" name="pid" id="pid" value="<?php echo $_GET['pid'];?>">
                                                <?php
                                            }
                                        ?>

                            <div class="col-12 col-lg-12 m-lg-0 input-group align-self-center item">
                                <input type="text" name="username" id="username" value="" class="form-control field-name" placeholder="Email">
                            </div>
                            <div class="col-12 col-lg-12 m-lg-0 input-group align-self-center item">
                                <input type="password" name="password" id="password" value="" class="form-control field-email" placeholder="Password" style="margin-top:20px;">
                            </div>
                            <span id="rerror"></span>
                            <div class="col-12 col-lg-12 m-lg-0 input-group align-self-center item">
                                <input type="submit" name="login" value="Log in" class="btn primary-button w-100 effect-motion-bg" style="margin-top:20px;color:#fff"></input>
                            </div>
                            
                        </form>
                    </div>
                    
                     <div class="col-6 p-0">
                        <form action="register_code.php" method="post" id="formsubmit" class="row m-auto items">
                            <div class="col-12 col-lg-12 m-lg-0 input-group align-self-center item">
                                <input type="text" name="user_full_name" id="user_full_name" class="form-control field-name" placeholder="Full Name">
                            </div>
                            <div class="col-12 col-lg-12 m-lg-0 input-group align-self-center item">
                                <input type="email" onkeyup="mailcheck(this.value);" onchange="mailcheck(this.value);" name="user_email" id="user_email" class="form-control field-name" placeholder="Email" style="margin-top:20px;">
								<span id="ererror" style="width: 100%;
								margin-top: .25rem;
								font-size: 80%;
								color: #dc3545;"></span>
							</div>
                            <div class="col-12 col-lg-12 m-lg-0 input-group align-self-center item">
                                <input type="password" name="user_password" id="user_password" value="" class="form-control field-email" placeholder="Password" style="margin-top:20px;">
                            </div>
                            
                            <div class="col-12 col-lg-12 m-lg-0 input-group align-self-center item">
                                <input type="date" name="user_dob" id="user_dob" class="form-control field-email" placeholder="Date Of Birth" style="margin-top:20px;">
                            </div>
                            
                            <div class="col-12 col-lg-12 m-lg-0 input-group align-self-center item">
                                <input id="reg" type="submit" name="register" value="Register" class="btn primary-button w-100 effect-motion-bg" style="margin-top:20px;;color:#fff"></input>
                            </div>
                            
                        </form>
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
        <!--<script src="assets/js/vendor/jquery.easing.min.js"></script>-->
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
        
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.validate.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>

        <script>
    //Form Validation
        $( document ).ready( function () {
            $( "#formsubmit" ).validate( {
                rules: {
                    user_full_name: "required",
                    user_dob: "required",
                    user_company: "required",
                    user_email:
                    {
                      required: true,
                      email: true
                    },
                    user_phone:
                    {
                      required: true,
                      digits: true,
                      minlength: 10,
                      maxlength: 10
                    },
                    user_pincode:
                    {
                      required: true,
                      digits: true,
                      minlength: 6,
                      maxlength: 6
                    },
                    user_country: "required",
                    user_state: "required",
                    user_city: "required",
                    user_address: "required",
                    user_company: "required",
                    user_add1: "required",
                    user_add2: "required",
                    privacy1: "required",
                    privacy2: 
                    {
                      equalTo: "#privacy1"
                    },
                    user_password: "required",
                    user_cpassword:
                    {
                      required: true,
                      equalTo: "#user_password"
                    },
                },
                messages: {
                    
                    user_full_name: "Please Enter Username*",
                    user_dob: "Please Select DOB",
                    user_company: "Please Enter Company*",
                    user_email:
                    {
                      required: "Please Enter E-mail *",
                      email: "Please Enter Valid E-mail *",
                    },
                    user_phone:
                    {
                      required: "Please Enter Phone No. *",
                      digits: "Please Enter Only Digits *",
                      minlength: "Please Enter Only 10 Digits *",
                      maxlength: "Please Enter Only 10 Digits *"
                    },
                    user_pincode:
                    {
                      required: "Please Enter Pincode *",
                      digits: "Please Enter Only Digits *",
                      minlength: "Please Enter Only 6 Digits *",
                      maxlength: "Please Enter Only 6 Digits *"
                    },
                    user_country: "Please Select Country *",
                    user_state: "Please Select State *",
                    user_city: "Please Select City *",
                    user_address: "Please Enter Address *",
                    user_add1: "Please Enter Address Line 1 *",
                    user_add2: "Please Enter Address Line 2 *",
                    privacy1: "Please Accept Privacy Policy *",
                    privacy2:
                    {
                      equalTo: "Please Accept Privacy Policy *"
                    },
                    user_password: "Please Enter Password *",
                    user_cpassword:
                    {
                      required: "Please Enter Confirm Password *",
                      equalTo: "Both Password Not Match*"
                    },
                    
                },
                errorElement: "em",
                errorPlacement: function ( error, element ) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass( "invalid-feedback" );

                    if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.next("br") );
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

$("#loginform").submit(function(e) {
        var ppid = $("#pid").val();
       /* var pgid = $("#pgid").val();
        var cid = $("#cid").val();*/
        $.ajax({
             type: "POST",
           url: "login_code.php",
           data: $("#loginform").serialize(),
                
                // serializes the form's elements.
           success: function(data)
           {
                //alert (data);
                 if(data == 'success')
                {
                    window.location.href='Home';
                }
                else if(data == 'success1' || data == '1')
                {
                    window.location.href=ppid;
                }
                /*else if(data == 'checkout' || data == 'checkoutcheckout')
                {
                    window.location.href='Checkout';
                }*/
                else if(data == '')
                {
                    window.location.href='Home';
                }
                else
                {
                    $("#rerror").html(data);
                    $("#rerror").css("color","red");
                }
           }
        });
        e.preventDefault(); // avoid to execute the actual submit of the form.
    });

    function mailcheck(val)
        {
            $.ajax({
             type: "POST",
               url: "mail_check.php",
               data: "user_email="+val,
                    
                    // serializes the form's elements.
               success: function(data)
               {
                    //alert(data);
                    if(data == 'already')
                    {
                        $("#ererror").html("Existing Mail");
                        $("#ererror").css("color","red");
                        $("#reg").prop('disabled', true);
                        //mailcheck.preventDefault();
                        //swal("Good job!", "You clicked the button!", "warning");
                    }
                    else
                    {
                        $("#ererror").html("");
                        $("#reg").prop('disabled', false);
                    }
               }
            });
            
        }

</script>


        <!-- #endregion Global ========================= -->

    </body>
</html>