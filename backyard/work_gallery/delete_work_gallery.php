<?php
	ob_start();
?>
<?php
	
		include '../include/connect.php';
		
		$id=$_REQUEST['cid'];
		$pid=$_REQUEST['aid'];
		$check=$link->rawQueryone("select * from work_gallery where work_gallery_id=?",array($id));
		if($check)
		{
			unlink("../images/work_gallery_image/".$check['work_gallery_image']);
			$link->where('work_gallery_id',$id);
			$a=$link->delete("work_gallery");
			header("location:view_work_gallery.php?pid=".$pid."");
		}

?>