<?php
	include("auth.php");
	include('../db_connect/db.php');
	
	$user_id=$_GET['user_id'];
	 			
	$result = $db->prepare("SELECT * FROM users WHERE user_id = '$user_id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row['name'];
		$cntno=$row['cntno'];	
		$email=$row['email'];	
		$photo=$row['photo'];
		$addrs=$row['addrs'];	
		$age=$row['age'];
		$sex=$row['sex'];	
		$password=$row['password'];	
	}
?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
 	<meta charset="UTF-8" />
 	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
 	<title>Driver Monitoring</title>
 	<meta name="description" content="" />
 	<meta name="author" content="hencework" />
 	<!-- Favicon -->
 	<link rel="shortcut icon" href="favicon.ico">
 	<link rel="icon" href="favicon.ico" type="image/x-icon">
 	<?php include("include\css.php"); ?>
 </head>

 <body>
 	<!-- Preloader -->
 	<div class="preloader-it">
 		<div class="la-anim-1"></div>
 	</div>
 	<!-- /Preloader -->
 	<div class="wrapper theme-1-active pimary-color-red">

 		<!-- Top Menu Items -->
 		<?php include("include\menu.php"); ?>
 		<!-- /Top Menu Items -->

 		<!-- Left Sidebar Menu -->
 		<?php include("include\leftmenu.php"); ?>
 		<!-- /Left Sidebar Menu -->

 		<!-- Main Content -->
 		<div class="page-wrapper">
 			<div class="container-fluid pt-25">

 				<!-- Row -->
 				<div class="row">
 					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
 						<div class="panel panel-default card-view">
 							<div class="panel-heading">
 								<div class="pull-left">
 									<h6 class="panel-title txt-dark">Police Station Update</h6>
 								</div>
 								<div class="clearfix"></div>
 							</div>
 							<div class="panel-wrapper collapse in">
 								<div class="panel-body"> 									
 									<form action="action/police_update.php" method="post" enctype="multipart/form-data" autocomplete="off">
 										<div class="row">
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Station Name</label>
 													<input type="text" class="form-control" value="<?php echo $name;?>" name="name" required pattern="[a-zA-Z1 _]{3,50}">
                                                    <input type="hidden" value="<?php echo $user_id;?>" name="user_id">
 												</div>
 											</div>
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Officer Name</label>
 													<input type="text" class="form-control" value="<?php echo $age;?>" name="age" required pattern="[a-zA-Z1 _]{3,50}">
 												</div>
 											</div>
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Phone Number</label>
 													<input type="text" class="form-control" value="<?php echo $cntno;?>" name="cntno" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
 												</div>
 											</div>
                                            <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Phone Number</label>
 													<input type="text" class="form-control" value="<?php echo $sex;?>" name="sex" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
 												</div>
 											</div>                                          
                                             <div class="col-md-12">
 												<div class="form-group">
 													<label class="control-label mb-10">Address</label>
 													<textarea class="form-control" name="addrs"><?php echo $addrs;?></textarea>
 												</div>
 											</div>                                           
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Email</label>
 													<input type="email" class="form-control" value="<?php echo $email;?>"name="email" required>
 												</div>
 											</div> 											
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Password</label>
 													<input type="password" class="form-control" value="<?php echo $password;?>" name="password" required minlength="4" maxlength="15">
 												</div>
 											</div>
                                            <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Photo</label>
 													<input class="form-control" name="photo" type="file" required/>
 												</div>
 											</div>
 											<div class="clearfix"></div>
 											<div class="col-md-12 text-center">
 												<input type="submit" value="Update" class="btn btn-primary pull-right">
 											</div>
 										</div>
 									</form>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 				<!-- /Row -->
 			</div>

 			<!-- Footer -->
 			<footer class="footer container-fluid pl-30 pr-30">
 				<div class="row">
 					<div class="col-sm-12">
 						<p>2023 &copy; Driver Monitoring. All Right Reserved</p>
 					</div>
 				</div>
 			</footer>
 			<!-- /Footer -->

 		</div>
 		<!-- /Main Content -->

 	</div>
 	<!-- /#wrapper -->

 	<?php include("include\js.php"); ?>
 </body>

 </html>