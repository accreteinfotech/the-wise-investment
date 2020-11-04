<?php
	ob_start();
?>
<?php
include "../include/connect.php";

	$client_name=$_POST['client_name'];
	$testimonial_msg=$_POST['testimonial_msg'];
	//$testimonial_img=$_POST['testimonial_img'];
	
	$ad=$link->insert("testimonial",array("client_name"=>$client_name,"testimonial_msg"=>$testimonial_msg));
	
	if($ad)
		{
			$img2=$_FILES['testimonial_img']['name'];
			$ext2=pathinfo($img2,PATHINFO_EXTENSION);
			$pimage2="testimonial_img".$ad.'.'.$ext2;	
			if(move_uploaded_file($_FILES['testimonial_img']['tmp_name'],"../images/testimonial_img/".$pimage2))
			{
				$link->where('testimonial_id',$ad);
				$a2=$link->update("testimonial",array("testimonial_img"=>$pimage2));
				
				if($a2)
				{
					header("location:View-Testimonial");
				}
			}
		}
	
?>