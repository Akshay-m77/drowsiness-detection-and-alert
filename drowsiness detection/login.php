<?php
	//Start session
	session_start();
	
	include('db_connect/db.php');
		
	//Sanitize the POST values
	$username = $_POST['username'];
	$password = $_POST['password'];
	//Create query
	$qryad = $db->prepare("SELECT * FROM users WHERE email='$username' AND password='$password' AND user_type='Admin'");
	$qryad->execute();
	$countad = $qryad->rowcount();
	//Check whether the query was successful or not
	$qryow = $db->prepare("SELECT * FROM users WHERE email='$username' AND password='$password' AND user_type='Owner'");
	$qryow->execute();
	$countow = $qryow->rowcount();
	//Check whether the query was successful or not
	$qrydr = $db->prepare("SELECT * FROM users WHERE email='$username' AND password='$password' AND user_type='Driver'");
	$qrydr->execute();
	$countdr = $qrydr->rowcount();
	
	//Check whether the query was successful or not
	$qrypol = $db->prepare("SELECT * FROM users WHERE email='$username' AND password='$password' AND user_type='Police'");
	$qrypol->execute();
	$countpol = $qrypol->rowcount();
	
	//Check whether the query was successful or not
	$qryhosp = $db->prepare("SELECT * FROM users WHERE email='$username' AND password='$password' AND user_type='Hospital'");
	$qryhosp->execute();
	$counthosp = $qryhosp->rowcount();
	
	//Check whether the query was successful or not
	if($countad > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsad = $qryad->fetch();
		$_SESSION['SESS_ADMIN_ID'] = $rowsad['Log_Id'];
		session_write_close();
		header("location: rto/index.php");
		exit();
	}	
	if($countow > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsow = $qryow->fetch();
		$_SESSION['SESS_OWNER_ID'] = $rowsow['Log_Id'];
		session_write_close();
		header("location: owner/index.php");
		exit();
	}	
	if($countdr > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsdr = $qrydr->fetch();
		$_SESSION['SESS_DRIVER_ID'] = $rowsdr['Log_Id'];
		session_write_close();
		header("location: driver/index.php");
		exit();
	}	
	if($countpol > 0) {
		//Login Successful
		session_regenerate_id();
		$rowspol = $qrypol->fetch();
		$_SESSION['SESS_POLICE_ID'] = $rowspol['Log_Id'];
		session_write_close();
		header("location: police/index.php");
		exit();
	}	
	if($counthosp > 0) {
		//Login Successful
		session_regenerate_id();
		$rowshosp = $qryhosp->fetch();
		$_SESSION['SESS_HOSPITAL_ID'] = $rowshosp['Log_Id'];
		session_write_close();
		header("location: hospital/index.php");
		exit();
	}	
	else 
	{
		//Login failed
		echo "<script>alert('Check Username And Password Try Again'); window.location='index.php'</script>";
		exit();
	}
?>
