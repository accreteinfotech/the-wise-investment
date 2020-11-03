<?php
	ob_start();
?>
<?php
include "../include/connect.php";

	$work_name=$_POST['work_name'];
	$work_alias= str_replace(' ', '-',$_POST['work_alias']);
	
	$ad=$link->insert("work",array("work_alias"=>$work_alias,"work_name"=>$work_name));
	
	if($ad)
		{
		$img=$_FILES['work_image']['name'];
		$ext=pathinfo($img,PATHINFO_EXTENSION);
		$pimage="work_image".$ad.'.'.$ext;	
		
			if(move_uploaded_file($_FILES['work_image']['tmp_name'],"../images/work_image/".$pimage))
			{
				$link->where('work_id',$ad);
				$a1=$link->update("work",array("work_image"=>$pimage));
				
				if($a1)
				{
					header("location:View-Work");
				}
			}
			header("location:View-Work");
		}
	
?>