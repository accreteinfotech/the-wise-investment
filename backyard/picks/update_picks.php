<?php
	ob_start();
?>
<?php
	include '../include/connect.php';
	
	$picks_id=$_POST['picks_id'];
	$picks_name=$_POST['picks_name'];
	$picks_description=$_POST['picks_description'];
	$picks_website=$_POST['picks_website'];
	$picks_image=$_POST['picks_image'];
	//$meta_title=$_POST['meta_title'];
	//$meta_description=$_POST['meta_description'];
	//$meta_keyword=$_POST['meta_keyword'];
	//$blog_short_desc=$_POST['blog_short_desc'];
	
			$link->where('picks_id',$picks_id);
			$c=$link->update('picks',array("picks_name"=>$picks_name,"picks_description"=>$picks_description,"picks_website"=>$picks_website));
			
		$img=$_FILES['picks_image']['name'];
		//$img2=$_FILES['blog_big_image']['name'];
		if($img != null)
		{
			$check=$link->rawQueryone("select * from picks where picks_id=?",array($picks_id));
			if($link->count > 0)
			{
				unlink("../images/picks_image/".$check['picks_image']);
				 $ext=pathinfo($img,PATHINFO_EXTENSION);
				 $pimage="picks_image".$picks_id.'.'.$ext;	
				
				if(move_uploaded_file($_FILES['picks_image']['tmp_name'],"../images/picks_image/".$pimage))
					{
						$link->where('picks_id',$picks_id);
						$a1=$link->update("picks",array("picks_image"=>$pimage));
						if($a1)
						{
							//header('location:view_picks.php');
						}
						
					}
			}
		}
		
			header('location:view_picks.php');
?>