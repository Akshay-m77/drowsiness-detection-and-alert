<?php
	include('../../db_connect/db.php');
	
	$vh_id=$_GET['vh_id'];

	$sql = "delete from vehicle where vh_id='$vh_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();		
	

	header("location:../vehicle_search.php");
?>
