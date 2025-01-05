<?php
include('../db_connect/db.php');
							
	$oname=$_POST["oname"];	
	$result = $db->prepare("select * from users where name='$oname' and user_type='Owner'");
	$result->execute();
		for($i=0; $rows = $result->fetch(); $i++)
		{
			
			$data["Log_Id"] = $rows["Log_Id"];	
			$data["osex"] = $rows["sex"];	
			$data["oage"] = $rows["age"];	
			$data["oaddrs"] = $rows["addrs"];	
			$data["ocntno"] = $rows["cntno"];
			$data["ulocation"] = $rows["ulocation"];
				
				
		}
		echo json_encode($data);
?>


                  		
                  								
                  							