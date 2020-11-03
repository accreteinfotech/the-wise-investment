<?php
	ob_start();
?>
<?php
		include '../include/connect.php';
		
		$id=$_REQUEST['cid'];
		$link->where('picks_id',$id);
		$a=$link->delete("picks");
		if($a)
		{
			header("location:../View-Picks");
		}
		
?>