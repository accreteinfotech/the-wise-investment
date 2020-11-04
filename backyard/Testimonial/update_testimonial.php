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
		
		$img=$_FILES['client_image']['name'];
		//$img2=$_FILES['testimonial_img']['name'];
		if($img != null)
		{
			$check=$link->rawQueryone("select * from testimonial where testimonial_id=?",array($testimonial_id));
			if($link->count > 0)
			{
				unlink("../images/client_image/".$check['client_image']);
				 $ext=pathinfo($img,PATHINFO_EXTENSION);
				 $pimage="client_image".$testimonial_id.'.'.$ext;	
				
				if(move_uploaded_file($_FILES['client_image']['tmp_name'],"../images/client_image/".$pimage))
					{
						$link->where('testimonial_id',$testimonial_id);
						$a1=$link->update("testimonial",array("client_image"=>$pimage));
						if($a1)
						{
							header('location:View-Testimonial');
						}
						
					}
			}
		}
			
?>