<?php
	ob_start();
?>
<?php
include "../include/connect.php";


	$picks_name=$_POST['picks_name'];
	$picks_description=$_POST['picks_description'];
	$picks_website=$_POST['picks_website'];
	//$meta_title=$_POST['meta_title'];
	//$meta_description=$_POST['meta_description'];
	//$meta_keyword=$_POST['meta_keyword'];
	//$blog_short_desc=$_POST['blog_short_desc'];
	
	$ad=$link->insert("picks",array("picks_name"=>$picks_name,"picks_description"=>$picks_description,"picks_website"=>$picks_website));
	
	if($ad)
		{
		
			$img=$_FILES['picks_image']['name'];
			$ext=pathinfo($img,PATHINFO_EXTENSION);
			$pimage="picks_image".$ad.'.'.$ext;	
			
				if(move_uploaded_file($_FILES['picks_image']['tmp_name'],"../images/picks_image/".$pimage))
					{
						$link->where('picks_id',$ad);
						$a1=$link->update("picks",array("picks_image"=>$pimage));
						if($a1)
						{
							header('location:View-Picks');
						}
						
					}
				}
				header("location:View-Picks");
	
?>