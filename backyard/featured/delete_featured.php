<?php
	ob_start();
?>
<?php
		include '../include/connect.php';
		
		$id=$_REQUEST['cid'];
		$link->where('featured_id',$id);
		$a=$link->delete("featured");
		if($a)
		{
			header("location:../View-Featured");
		}
		
?>