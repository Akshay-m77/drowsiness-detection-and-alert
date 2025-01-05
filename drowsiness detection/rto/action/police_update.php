<?php
	include("../auth.php");
	include('../../db_connect/db.php');
	
	$user_id=$_POST['user_id'];

	$name=$_POST["name"];
	$cntno=$_POST["cntno"];
	$addrs=$_POST["addrs"];
	$password=$_POST["password"];
	$age=$_POST["age"];
	$sex=$_POST["sex"];

	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../photos/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	
	
	
	
	if($photo=="")
	{
		$sql = "update users set name='$name',cntno='$cntno',addrs='$addrs',age='$age',sex='$sex',password='$password' where user_id='$user_id'";
		$q1 = $db->prepare($sql);
		$q1->execute();	
	}
	else
	{
		$sql = "update users set  name='$name',cntno='$cntno',addrs='$addrs',photo='$photo',age='$age',sex='$sex',password='$password' where user_id='$user_id'";
		$q1 = $db->prepare($sql);
		$q1->execute();		
	}

	header("location:../police_search.php");
?>
