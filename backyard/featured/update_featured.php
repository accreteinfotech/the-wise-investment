<?php
	ob_start();
?>
<?php
	include '../include/connect.php';
	
	$featured_name=$_POST['featured_name'];
	$featured_id=$_POST['featured_id'];
	
			$link->where('featured_id',$featured_id);
			$c=$link->update('featured',array("featured_name"=>$featured_name));
			
		$img=$_FILES['featured_logo']['name'];
		//$img2=$_FILES['blog_big_image']['name'];
		if($img != null)
		{
			$check=$link->rawQueryone("select * from featured where featured_id=?",array($featured_id));
			if($link->count > 0)
			{
				unlink("../images/featured_logo/".$check['featured_logo']);
				 $ext=pathinfo($img,PATHINFO_EXTENSION);
				 $pimage="featured_logo".$featured_id.'.'.$ext;	
				
				if(move_uploaded_file($_FILES['featured_logo']['tmp_name'],"../images/featured_logo/".$pimage))
					{
						$link->where('featured_id',$featured_id);
						$a1=$link->update("featured",array("featured_logo"=>$pimage));
						if($a1)
						{
							header('location:view_featured.php');
						}
						
					}
			}
		}
		
?>