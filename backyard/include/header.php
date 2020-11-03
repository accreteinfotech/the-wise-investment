 <script src="../js/jquery.min.js"></script>
 <style>
 

* {
   font-family: 'Roboto', sans-serif;
}

.dropdown {
   display: inline-block;
}
ul.dropdown-menu {
  min-width: 500px;
   margin-top: 2px;
}
.dropdown-notify {
   display: block;
  padding: 10px 15px;
}
.dropdown-notify:hover {
   background: #eee;
}
.dropdown-notify-btn {
   border: 2px solid #000;
   border-radius: 5px;
   padding: 8px;
   background: white;
   text-transform: uppercase;
   font-weight: 500;
   color: #173e88;
}
.dropdown-notify-header {
   color: white;
   margin-top:-8px;
   border-top-left-radius: 5px;
   border-top-right-radius: 5px;
   background: #347ab8;
   font-weight: 700;
}
.dropdown-notify-header:hover {
   background: #347ab8;
   color: white;
   text-decoration: none;
}
.dropdown-menu a {
   color: #333;
}
.dropdown-menu a:hover {
   color: #333;
   text-decoration: none;
}
.badge {
   background: #F93943;
   color:#fff;
}
.fa-envelope-o {
   font-size: 18px;
   position: relative;
   top: 1px;
   left: -3px;
   margin-right: 2px;
   color: #173e88;
}
.notify-title {
   font-weight: 700;
}
.notify-message {
   margin-bottom: 5px;
}
.notify-date {
  margin-bottom: 0px;
  font-size: 12px;
  letter-spacing: 1px;
}
 </style>
 <header class="top-header-area d-flex align-items-center justify-content-between">
                <div class="left-side-content-area d-flex align-items-center">
                    <!-- Mobile Logo -->
                    <div class="mobile-logo mr-3 mr-sm-4">
                        <a href="../dashboard/dashboard.php"><img src="../img/core-img/logo.png" alt="Mobile Logo"></a>
                    </div>

                    <!-- Triggers -->
                    <div class="ecaps-triggers mr-1 mr-sm-3">
                        <div class="menu-collasped" id="menuCollasped">
                            <i class="zmdi zmdi-menu"></i>
                        </div>
                        <div class="mobile-menu-open" id="mobileMenuOpen">
                            <i class="zmdi zmdi-menu"></i>
                        </div>
                    </div>

                    <!-- Left Side Nav -->
                </div>

                <div class="right-side-navbar d-flex align-items-center justify-content-end">
                    <!-- Mobile Trigger -->
                    <div class="right-side-trigger" id="rightSideTrigger">
                        <i class="ti-align-left"></i>
						
                    </div>

                    <!-- Top Bar Nav -->
				
                    <ul class="right-side-content d-flex align-items-center">
					
						<a href="../logout.php" class="dropdown-item"><img style="height: 30px;width: 30px;"  src="../img/power.png"></a>
                    </ul>
                </div>
            </header>
		