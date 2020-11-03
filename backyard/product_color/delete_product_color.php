<?php
		include '../include/connect.php';
		
		$id=$_REQUEST['cid'];
		$pid=$_REQUEST['pid'];
		$link->where('product_color_id',$id);
		$a=$link->delete("product_color");
		if($a)
		{
			header("location:view_product_color.php?pid=".$pid."");
		}
		
?>