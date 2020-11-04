<?php
	ob_start();
?>
<?php
include "../include/connect.php";

	$featured_name=$_POST['featured_name'];
	
	$ad=$link->insert("featured",array("featured_name"=>$featured_name));
	
	if($ad)
		{
		
			$img=$_FILES['featured_logo']['name'];
			$ext=pathinfo($img,PATHINFO_EXTENSION);
			$pimage="featured_logo".$ad.'.'.$ext;	
			
				if(move_uploaded_file($_FILES['featured_logo']['tmp_name'],"../images/featured_logo/".$pimage))
				{
					$link->where('featured_id',$ad);
					$a1=$link->update("featured",array("featured_logo"=>$pimage));

					header("location:view_featured.php");
					
				}
			
		}
	
?>