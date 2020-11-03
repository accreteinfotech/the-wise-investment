<?php
	include '../include/connect.php';
	$cid=$_GET['cid'];
	
	$link->where("picks_id",$cid);
	$a=$link->update("picks",array("is_active"=>1));
	
	if($a)
	{
		header("location:View-Picks");
	}
?>