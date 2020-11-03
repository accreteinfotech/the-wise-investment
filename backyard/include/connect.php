<?php
	include 'MysqliDb.php';
 	$link=new MysqliDb("localhost","root","","wise");
 	$con = mysqli_connect('localhost','root','','wise');
	
	ini_set('POST_MAX_SIZE','64M');
	ini_set('UPLOAD_MAX_FILESIZE','64M');
	$project_name="Miva";
	
	
	//$site_url="http://localhost:8088/miva-fashion/";
//	$site_url="http://localhost:8088/miva-fashion/";
	$site_url="http://localhost/the-wise-investment/";
	
	/*$project_logo="assets/images/logo.png";
	
	$control=$link->rawQueryOne("select * from inventory_control");
	$warning=$control['inventory_control_warning'];
	$danger=$control['inventory_control_danger'];
	$page_name= basename($_SERVER['PHP_SELF']);
	$per_page =30;*/
	//define how many products for a page
	
	//Email Config
	$host_name="";
	$port="";
	$email_username="";
	$email_password="";
	$team_name="";
	$send_address="";
	//$send_address2="accreteit@gmail.com";
	
	//Payment Getway API 
	//Live Api
	//$payment_getway_api="";
	//Test APi
	$payment_getway_api="";
	
	$company_name="";
	$company_description="";
?>