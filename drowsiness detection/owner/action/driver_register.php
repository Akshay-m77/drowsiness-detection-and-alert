<?php
	include("../auth.php");
	include('../../db_connect/db.php');
	
	$OLog_Id=$_SESSION['SESS_OWNER_ID'];
	$Log_Id="BDRV".rand(987456321789,0);

	$name=$_POST["name"];
	$age=$_POST["age"];
	$sex=$_POST["sex"];
	$addrs=$_POST["addrs"];
	$cntno=$_POST["cntno"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	
	
	$lno=$_POST["lno"];
	$ldate=$_POST["ldate"];
	$vno=$_POST["vno"];
	
	$ulocation=$_POST["ulocation"];
	
	
	$user_type="Driver";

	$date=date("Y-m-d");
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../photos/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	
	$sql = "insert into users(OLog_Id,Log_Id,name,age,sex,addrs,cntno,email,password,photo,date,user_type,lno,ldate,vno,ulocation)values('$OLog_Id','$Log_Id','$name','$age','$sex','$addrs','$cntno','$email','$password','$photo','$date','$user_type','$lno','$ldate','$vno','$ulocation')";
	$q1 = $db->prepare($sql);
	$q1->execute();		

	header("location:../driver_search.php");
?>
