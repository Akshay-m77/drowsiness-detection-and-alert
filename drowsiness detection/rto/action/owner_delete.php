<?php
	include('../../db_connect/db.php');
	
	$user_id=$_GET['user_id'];

	$sql = "delete from users where user_id='$user_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();		
	

	header("location:../owner_search.php");
?>
