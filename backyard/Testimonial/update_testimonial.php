<?php
	ob_start();
?>
<?php
	include '../include/connect.php';
	
	$client_name=$_POST['client_name'];
	$testimonial_id=$_POST['testimonial_id'];
	$testimonial_msg=$_POST['testimonial_msg'];
	
			$link->where('testimonial_id',$testimonial_id);
			$c=$link->update('testimonial',array("client_name"=>$client_name,"testimonial_msg"=>$testimonial_msg));
		
				if($c)
				{
					header('location:View-Testimonial');
				}
			
?>