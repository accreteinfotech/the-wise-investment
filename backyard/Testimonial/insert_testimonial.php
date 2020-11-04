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
			$img2=$_FILES['client_image']['name'];
			$ext2=pathinfo($img2,PATHINFO_EXTENSION);
			$pimage2="client_image".$ad.'.'.$ext2;	
			if(move_uploaded_file($_FILES['client_image']['tmp_name'],"../images/client_image/".$pimage2))
			{
				$link->where('testimonial_id',$ad);
				$a2=$link->update("testimonial",array("client_image"=>$pimage2));
				
				if($a2)
				{
					header("location:View-Testimonial");
				}
			}
		}
	
?>