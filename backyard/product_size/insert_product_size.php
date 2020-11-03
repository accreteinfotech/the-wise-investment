<?php
include "../include/connect.php";

	
	$inventory_id=$_POST['inventory_id'];
	$product_id=$_POST['product_id'];
	
	$ad=$link->insert("product_size",array("inventory_id"=>$inventory_id,"product_id"=>$product_id));
	
	if($ad)
	{
		header('location:view_product_size.php?pid='.$product_id.'');
	}
?>