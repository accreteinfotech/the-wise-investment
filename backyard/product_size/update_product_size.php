<?php
	include '../include/connect.php';
	
	$product_size_id=$_POST['product_size_id'];
	$product_id=$_POST['product_id'];
	$inventory_id=$_POST['inventory_id'];
	
	
		$link->where('product_size_id',$product_size_id);
	$c=$link->update('product_size',array("product_id"=>$product_id,"inventory_id"=>$inventory_id));
		if($c)
				{
					header('location:view_product_size.php?pid='.$product_id.'');
				}
				
		
?>