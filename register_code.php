<?php
   include 'backyard/include/connect.php';
   
	$user_full_name=$_POST['user_full_name'];
	$user_email=$_POST['user_email'];
	$user_password=md5($_POST['user_password']);
	$user_dob = $_POST['user_dob'];
	
	$sql=$link->insert("user",array("user_full_name"=>$user_full_name,"user_email"=>$user_email,"user_password"=>$user_password,"user_dob"=>$user_dob));	
		if ($sql) 
		 {
			session_start();
			$_SESSION['user_id'] = $sql;
			$_SESSION['user_full_name'] = $user_full_name;
			header('location:Home');
	     } 
?>