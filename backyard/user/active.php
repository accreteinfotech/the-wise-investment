<?php
	include '../include/connect.php';
	$cid=$_GET['pid'];
	
	$link->where("user_id",$cid);
	$a=$link->update("user",array("is_active"=>1));
	
	if($a)
	{
		header("location:../user/Users");
	}
?>