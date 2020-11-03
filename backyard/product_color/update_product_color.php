<?php
	include '../include/connect.php';
	
	$product_color_id=$_POST['product_color_id'];
	$product_id=$_POST['product_id'];
	$color_id = $_POST['color_id'];
	
	
		$link->where('product_color_id',$product_color_id);
	$c=$link->update('product_color',array("product_id"=>$product_id,"color_id"=>$color_id));
		if($c)
				{
					header('location:view_product_color.php?pid='.$product_id.'');
				}
				
		
?>