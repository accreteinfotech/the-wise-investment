<?php
    if(isset($_SESSION['user_id']) && $_SESSION['user_id']!=null)
    {
        $uid=$_SESSION['user_id'];
        $sflag=1;
    }
    else
    {
        $uid=session_id();  
        $sflag=0;
    }
?>
<style>
.dropbtn {

  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
<header id="header">

            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">

                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="Home">
                            <img src="assets/images/logo-1.png" alt="The Wise Investing">
                    </a>

                    <!-- Nav holder -->
                    <div class="ml-auto"></div>

                    <!-- Navbar Items -->
                    <ul class="navbar-nav items" style="padding-top:16px;">
                        <!--<li class="nav-item dropdown">
                            <a href="#" class="nav-link">Home <i class="icon-arrow-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">Multi-Page <i class="icon-arrow-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="#">Agency <i class="icon-arrow-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="demo-1.html" class="nav-link">Demo 1</a></li>
                                                <li class="nav-item"><a href="demo-2.html" class="nav-link">Demo 2</a></li>
                                                <li class="nav-item"><a href="demo-3.html" class="nav-link">Demo 3</a></li>
                                                <li class="nav-item"><a href="demo-4.html" class="nav-link">Demo 4</a></li>
                                                <li class="nav-item"><a href="demo-5.html" class="nav-link">Demo 5</a></li>
                                                <li class="nav-item"><a href="demo-6.html" class="nav-link">Demo 6</a></li>
                                                <li class="nav-item"><a href="demo-7.html" class="nav-link">Demo 7</a></li>
                                                <li class="nav-item"><a href="demo-8.html" class="nav-link">Demo 8</a></li>
                                                <li class="nav-item"><a href="demo-9.html" class="nav-link">Demo 9</a></li>
                                                <li class="nav-item"><a href="demo-10.html" class="nav-link">Demo 10</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="#">Portfolio <i class="icon-arrow-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="demo-11.html" class="nav-link">Demo 11</a></li>
                                                <li class="nav-item"><a href="demo-12.html" class="nav-link">Demo 12</a></li>
                                                <li class="nav-item"><a href="demo-13.html" class="nav-link">Demo 13</a></li>
                                                <li class="nav-item"><a href="demo-14.html" class="nav-link">Demo 14</a></li>
                                                <li class="nav-item"><a href="demo-15.html" class="nav-link">Demo 15</a></li>
                                                <li class="nav-item"><a href="demo-16.html" class="nav-link">Demo 16</a></li>
                                                <li class="nav-item"><a href="demo-17.html" class="nav-link">Demo 17</a></li>
                                                <li class="nav-item"><a href="demo-18.html" class="nav-link">Demo 18</a></li>
                                                <li class="nav-item"><a href="demo-19.html" class="nav-link">Demo 19</a></li>
                                                <li class="nav-item"><a href="demo-20.html" class="nav-link">Demo 20</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">One-Page <i class="icon-arrow-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="#">Agency <i class="icon-arrow-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="demo-1-one-page.html" class="nav-link">Demo 1</a></li>
                                                <li class="nav-item"><a href="demo-2-one-page.html" class="nav-link">Demo 2</a></li>
                                                <li class="nav-item"><a href="demo-3-one-page.html" class="nav-link">Demo 3</a></li>
                                                <li class="nav-item"><a href="demo-4-one-page.html" class="nav-link">Demo 4</a></li>
                                                <li class="nav-item"><a href="demo-5-one-page.html" class="nav-link">Demo 5</a></li>
                                                <li class="nav-item"><a href="demo-6-one-page.html" class="nav-link">Demo 6</a></li>
                                                <li class="nav-item"><a href="demo-7-one-page.html" class="nav-link">Demo 7</a></li>
                                                <li class="nav-item"><a href="demo-8-one-page.html" class="nav-link">Demo 8</a></li>
                                                <li class="nav-item"><a href="demo-9-one-page.html" class="nav-link">Demo 9</a></li>
                                                <li class="nav-item"><a href="demo-10-one-page.html" class="nav-link">Demo 10</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="#">Portfolio <i class="icon-arrow-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="demo-11-one-page.html" class="nav-link">Demo 11</a></li>
                                                <li class="nav-item"><a href="demo-12-one-page.html" class="nav-link">Demo 12</a></li>
                                                <li class="nav-item"><a href="demo-13-one-page.html" class="nav-link">Demo 13</a></li>
                                                <li class="nav-item"><a href="demo-14-one-page.html" class="nav-link">Demo 14</a></li>
                                                <li class="nav-item"><a href="demo-15-one-page.html" class="nav-link">Demo 15</a></li>
                                                <li class="nav-item"><a href="demo-16-one-page.html" class="nav-link">Demo 16</a></li>
                                                <li class="nav-item"><a href="demo-17-one-page.html" class="nav-link">Demo 17</a></li>
                                                <li class="nav-item"><a href="demo-18-one-page.html" class="nav-link">Demo 18</a></li>
                                                <li class="nav-item"><a href="demo-19-one-page.html" class="nav-link">Demo 19</a></li>
                                                <li class="nav-item"><a href="demo-20-one-page.html" class="nav-link">Demo 20</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                       
                        <li class="nav-item">
                            <a href="Home" class="nav-link">Home</a>
                        </li>
						
						<li class="nav-item">
                            <a href="About" class="nav-link">About Us</a>
                        </li>
						
						<li class="nav-item">
                            <a href="Why-Invest" class="nav-link">Why Invest</a>
                        </li>
						
						<li class="nav-item">
                            <a href="Subscription" class="nav-link">Subscription</a>
                        </li>
						
						<li class="nav-item">
                            <a href="Blog" class="nav-link">Blogs</a>
                        </li>
						
						<li class="nav-item">
                            <a href="Faq" class="nav-link">FAQs</a>
                        </li>
						
						<li class="nav-item">
                            <a href="Contact-us" class="nav-link">Contact Us</a>
                        </li>
                        <!--<?php
                                        //if($sflag==1)
                                        {
                                            ?>
                                            <span><i style="color:#4cda4c;padding-right: 5px;" class="fa fa-circle" aria-hidden="true"></i><?php //echo $_SESSION['user_full_name']; ?></span>
                                            <?php
                                        }
                                        //else
                                        {
                                            ?>
                                            <a class="block-link">
                                                <span class="pe-7s-user"></span>
                                            </a>
                                            <?php
                                        }
                                        ?>-->
                                        <?php
                                    if($sflag == 1)
                                    {
                                        ?>			
										
                        <!--<li class="nav-item"  style="width:10%;">
									<a>
									<span><i style="color:#4cda4c;" class="fa fa-circle" aria-hidden="true"></i> Welcome, <?php echo $_SESSION['user_full_name'];?></span>
									</a>
									<ul class="sub-menu" style="width: 220px;">
										<li><a href="Change-Password.php" class="nav-link">Change Password</a></li>
										<li><a href="My-Account.php" class="nav-link">My Account</a></li>
										<li><a href="Logout.php" class="nav-link">Logout</a></li>
										
									</ul>
                           <!-- <a href="logout.php" class="nav-link">Logout</a>
                        </li>-->
					
															 
		<a class="dropbtn" onclick="myFunction()"><span>Welcome, <?php echo $_SESSION['user_full_name'];?></span></a>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">Change Password</a>
    <a href="#about">My Account</a>
    <a href="#contact">Logout</a>
  </div>


						
                        <?php
                                    }
                                    else if($sflag == 0)
                                    {
                                        ?>
						<li class="nav-item">
                            <a href="Login-Register" class="nav-link">Login / Register</a>
                        </li>
                       <?php
                                    }
                                ?>
                    </ul>

                    <!-- Navbar Icons -->
                    

                    <!-- Navbar Toggle -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="icon-menu m-0"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Action -->
                   
                </div>
            </nav>

        </header>
		
		