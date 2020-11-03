<?php
	include '../include/connect.php';
	
	$product_id=$_POST['product_id'];
	if(isset($_REQUEST['color_id']) && $_REQUEST['color_id']!="")
	{
		$color_id=$_REQUEST['color_id'];
	}
	else
	{
		$color_id=0;
	}
	
		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
		{
			
			
			$x=$link->insert('product_gallery',array('product_id'=>$product_id,'color_id'=>$color_id));
			if($x)
			{
				$iname = $_FILES["files"]["name"][$key];
				$ext = pathinfo($iname, PATHINFO_EXTENSION);
				$y="product_gallery_thumb_image".$x.".".$ext;
			 
				 
				if(move_uploaded_file($_FILES["files"]["tmp_name"][$key],"../images/product_gallery_thumb_image/".$y))
				{
					
					$link->where('product_gallery_id',$x);
					$z=$link->update('product_gallery',array('product_gallery_thumb_image'=>$y));
					if($z)
					{
						header('location:View-Product-Gallery/'.$product_id);
        			}
				}
			}	
		}
	
?>