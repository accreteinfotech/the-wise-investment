<?php
	ob_start();
?>
<?php
	include '../include/connect.php';
	
	$work_name=$_POST['work_name'];
	$work_id=$_POST['work_id'];
	$work_alias= str_replace(' ', '-',$_POST['work_alias']);
	
			$link->where('work_id',$work_id);
			$c=$link->update("work",array("work_alias"=>$work_alias,"work_name"=>$work_name));
				
			$img2=$_FILES['work_image']['name'];
			$ext2=pathinfo($img2,PATHINFO_EXTENSION);
			$idimage="work_image".$work_id.'.'.$ext2;	
			
			if(move_uploaded_file($_FILES['work_image']['tmp_name'],"../images/work_image/".$idimage))
			{
				//unlink('idimage');
				$link->where('work_id',$work_id);
				$v=$link->update("work",array("work_image"=>$idimage));
				
				if($v)
				{
					header('location:View-Work');
				}
			}
			header('location:View-Work');
?>