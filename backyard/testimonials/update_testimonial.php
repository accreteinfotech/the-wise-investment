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
		
		$img=$_FILES['testimonial_img']['name'];
		$img2=$_FILES['testimonial_img']['name'];
		if($img != null)
		{
			$check=$link->rawQueryone("select * from testimonial where testimonial_id=?",array($testimonial_id));
			if($link->count > 0)
			{
				unlink("../images/testimonial_img/".$check['testimonial_img']);
				 $ext=pathinfo($img,PATHINFO_EXTENSION);
				 $pimage="testimonial_img".$testimonial_id.'.'.$ext;	
				
				if(move_uploaded_file($_FILES['testimonial_img']['tmp_name'],"../images/testimonial_img/".$pimage))
					{
						$link->where('testimonial_id',$testimonial_id);
						$a1=$link->update("testimonial",array("testimonial_img"=>$pimage));
						if($a1)
						{
							header('location:View-Testimonial');
						}
						
					}
			}
		}
			
?>