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
		
			$img2=$_FILES['client_image']['name'];
			$ext2=pathinfo($img2,PATHINFO_EXTENSION);
			$idimage="client_image".$review_id.'.'.$ext2;	
			
			if(move_uploaded_file($_FILES['client_image']['tmp_name'],"../images/client_image/".$idimage))
			{
				$link->where('testimonial_id',$testimonial_id);
				$v=$link->update("testimonial",array("client_image"=>$idimage));
				
				if($v)
				{
					header('location:View-Testimonial');
				}
			}
			
			header('location:View-Testimonial');
			
?>