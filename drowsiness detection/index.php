<?php
	session_start();
	include('db_connect/db.php');
	unset($_SESSION['SESS_ADMIN_ID']);
	unset($_SESSION['SESS_OWNER_ID']);
	unset($_SESSION['SESS_DRIVER_ID']);
?>	
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Driver Monitoring</title>
  <link rel="shortcut icon" href="images/logo.png"/>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="webcraft/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="webcraft/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="webcraft/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="webcraft/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="style/css/AdminLTE.min.css">
  <link rel="stylesheet" href="style/css/skins/_all-skins.min.css">
  
</head>
<body style="background-image:url(breadcrumbs/a.jpg); background-size:cover;">
<br><br>
<section class="content">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        	<br><br><br><br> 
            <br>          
        </div>       
        <section>
            <div class="login-box">
    			<h1 class="text-center">&nbsp;</h1>
                <div class="login-box-body" style="background-color:transparent">
                    <br><br>
                    <form action="login.php" method="post" autocomplete="off">
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" name="username" placeholder="Email" required>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">                                                              
                             <div class="col-xs-4 pull-right">
                                <br>
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                            </div>                    
                        </div>
                    </form>  
                </div>
			</div> 	
        </section> 
    </div>
</section>
</body>
</html>

