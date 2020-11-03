<?php
		include '../include/connect.php';
		
		$id=$_REQUEST['cid'];
		$pid=$_REQUEST['pid'];
		$link->where('product_size_id',$id);
		$a=$link->delete("product_size");
		if($a)
		{
			header("location:view_product_size.php?pid=".$pid."");
		}
		
?>