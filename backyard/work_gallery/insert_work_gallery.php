<?php
	ob_start();
?>
<?php
	include '../include/connect.php';
	
	$work_id=$_POST['work_id'];
	
		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
		{
			
			
			$x=$link->insert('work_gallery',array('work_id'=>$work_id));
			if($x)
			{
				$iname = $_FILES["files"]["name"][$key];
				$ext = pathinfo($iname, PATHINFO_EXTENSION);
				$y="work_gallery_image".$x.".".$ext;
			 
				 
				if(move_uploaded_file($_FILES["files"]["tmp_name"][$key],"../images/work_gallery_image/".$y))
				{
					
					$link->where('work_gallery_id',$x);
					$z=$link->update('work_gallery',array('work_gallery_image'=>$y));
					if($z)
					{
					    header('location:view_work_gallery.php?pid='.$work_id."");
					}
					
				}
			}	
		}
	
?>