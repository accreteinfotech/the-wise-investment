<?php
	ob_start();
?>
<?php
include "../include/connect.php";

	$client_name=$_POST['client_name'];
	$testimonial_msg=$_POST['testimonial_msg'];
	
	$ad=$link->insert("Testimonial",array("client_name"=>$client_name,"testimonial_msg"=>$testimonial_msg));
	
	if($ad)
		{
		
			header("location:View-Testimonial");
		}
	
?>