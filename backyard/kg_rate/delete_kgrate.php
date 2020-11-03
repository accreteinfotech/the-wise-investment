<?php
		include '../include/connect.php';
		
		$id=$_REQUEST['cid'];
		$pid=$_REQUEST['pid'];
		$link->where('kg_rate_id',$id);
		$a=$link->delete("kg_rate");
		if($a)
		{
			header("location:view_kgrates.php");
		}
		
?>