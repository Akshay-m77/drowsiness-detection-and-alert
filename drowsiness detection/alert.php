<?php
	include('db_connect/db.php');
		
	$vno=$_GET["vno"];
	
	
	
	$resultv = $db->prepare("SELECT * FROM vehicle WHERE vno = '$vno'");
	$resultv->execute();
	for($i=0; $rowv = $resultv->fetch(); $i++)
	{
		$OLog_Id=$rowv['Log_Id'];
		$vtype=$rowv['vtype'];	
		$vmdl=$rowv['vmdl'];	
		$vcolor=$rowv['vcolor'];
		$cmpny=$rowv['cmpny'];	
		$tdate=$rowv['tdate'];
		
		$oname=$rowv['oname'];	
		$oaddrs=$rowv['oaddrs'];	
		$ocntno=$rowv['ocntno'];
		$ulocation =$rowv['ulocation'];	
	}
	$resultd= $db->prepare("SELECT * FROM users WHERE OLog_Id = '$OLog_Id' and user_type='Driver'");
	$resultd->execute();
	for($i=0; $rowd = $resultd->fetch(); $i++)
	{
		$DLog_Id=$rowd['Log_Id'];
		$dname=$rowd['name'];	
		$dage=$rowd['age'];	
		$photo=$rowd['photo'];
	}

$omail="j";
	$resulto= $db->prepare("SELECT * FROM users WHERE vno = '$vno' and user_type='Owner'");
	$resulto->execute();
	for($i=0; $rowo = $resulto->fetch(); $i++)
	{
		$omail=$rowo['email'];	
		
	
	}

echo $ulocation;
echo"hello";
	date_default_timezone_set('Asia/Kolkata');

	$date=date("Y-m-d");
	
	$atime=date("H-m-s");
	
	
	$location="kalamassery";
			
			
	$sql = "insert into alert(OLog_Id,DLog_Id,vno,vtype,vmdl,vcolor,cmpny,tdate,oname,oaddrs,ocntno,dname,dage,date,atime,photo,location,ulocation)values('$OLog_Id','$DLog_Id','$vno','$vtype','$vmdl','$vcolor','$cmpny','$tdate','$oname','$oaddrs','$ocntno','$dname','$dage','$date','$atime','$photo','$location','$ulocation')";
	$q1 = $db->prepare($sql);
	$q1->execute();	

	// Assuming $vno is already defined
	if (!is_null($vno)) {
	?>
	<html lang="en">
	<head>
	</head>
	<body>
		<form id="contactForm" action="send_email.php" method="POST">
			<input type="text" id="vno" name="vno" value="<?php echo $vno; ?>">
			<input type="text" id="email" name="email" value="<?php echo $omail; ?>">
			<input type="text" id="ulocation" name="ulocation" value="<?php echo $ulocation; ?>">
			<!-- You can also use hidden fields to pass the values -->
	
		</form>
	
		<script>
		// Automatically submit the form when the page loads
		document.addEventListener("DOMContentLoaded", function() {
			document.getElementById("contactForm").submit();
		});
		</script>
	</body>
	</html>
	<?php
	}
	
	
//	 header("location:index.php");
?>
