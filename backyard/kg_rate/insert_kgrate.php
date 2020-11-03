<?php
include "../include/connect.php";

	
	$country_id=$_POST['country_id'];
	$rate = $_POST['rate'];
	
	$ad=$link->insert("kg_rate",array("country_id"=>$country_id,"rate"=>$rate));
	
	if($ad)
	{
		header('location:view_kgrates.php');
	}
?>