<?php
	ob_start();
?>
<?php
		include '../include/connect.php';
		
		$id=$_REQUEST['cid'];
		$link->where('work_id',$id);
		$a=$link->delete("work");
		if($a)
		{
			header("location:../View-Work");
		}
		
?>