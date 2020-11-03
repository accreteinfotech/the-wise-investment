<?php
 include 'backyard/include/connect.php';


 $lets_talk_email=$_POST['lets_talk_email'];
 $lets_talk_name=$_POST['lets_talk_name'];
 $lets_talk_phono=$_POST['lets_talk_phono'];
 $sql=$link->insert("lets_talk",array("lets_talk_email"=>$lets_talk_email,"lets_talk_name"=>$lets_talk_name,"lets_talk_phono"=>$lets_talk_phono));	
 if($sql)
 {
 	header('location:index.php');
 }
?>