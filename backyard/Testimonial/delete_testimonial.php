<?php
	ob_start();
?>
<?php
		include '../include/connect.php';
		
		$id=$_REQUEST['cid'];
		$link->where('testimonial_id',$id);
		$a=$link->update("testimonial",array("testimonial_delete"=>1));
		if($a)
		{
			header("location:../View-Testimonial");
		}
		
?>