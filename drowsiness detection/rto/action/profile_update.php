<?php
	include("../auth.php");
	include('../../db_connect/db.php');
	
	$Log_Id=$_SESSION['SESS_ADMIN_ID'];

	$name=$_POST["name"];
	$cntno=$_POST["cntno"];
	$addrs=$_POST["addrs"];
	$password=$_POST["password"];

	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../photos/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	
	
	
	if($photo=="")
	{
		$sql = "update users set name='$name',cntno='$cntno',addrs='$addrs',password='$password' where Log_Id='$Log_Id'";
		$q1 = $db->prepare($sql);
		$q1->execute();	
	}
	else
	{
		$sql = "update users set  name='$name',cntno='$cntno',addrs='$addrs',photo='$photo',password='$password' where Log_Id='$Log_Id'";
		$q1 = $db->prepare($sql);
		$q1->execute();		
	}

	header("location:../index.php");
?>
