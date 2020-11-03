<?php
	include '../include/connect.php';
	
	$kg_rate_id=$_POST['kg_rate_id'];
	$country_id=$_POST['country_id'];
	$rate = $_POST['rate'];
	
		$link->where('kg_rate_id',$kg_rate_id);
	$c=$link->update('kg_rate',array("country_id"=>$country_id,"rate"=>$rate));
		if($c)
				{
					header('location:view_kgrates.php');
				}
				
		
?>