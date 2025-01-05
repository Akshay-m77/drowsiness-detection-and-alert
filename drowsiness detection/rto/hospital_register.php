<?php
	include("auth.php");
	include('../db_connect/db.php');
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
 									<h6 class="panel-title txt-dark">New Hospital Register</h6>
 								</div>
 								<div class="clearfix"></div>
 							</div>
 							<div class="panel-wrapper collapse in">
 								<div class="panel-body"> 									
 									<form action="action/hospital_register.php" method="post" enctype="multipart/form-data" autocomplete="off">
 										<div class="row">
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Hospital Name</label>
 													<input type="text" class="form-control" placeholder="Name" name="name" required>
 												</div>
 											</div>
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Type (Govt Or Private)</label>
 													<input type="text" class="form-control" placeholder="Type (Govt Or Private)" name="age" required>
 												</div>
 											</div>
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Phone Number</label>
 													<input type="text" class="form-control" placeholder="Phone Number" name="cntno" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
 												</div>
 											</div>
                                            <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Phone Number</label>
 													<input type="text" class="form-control" placeholder="Phone Number" name="sex" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
 												</div>
 											</div>                                           
                                             <div class="col-md-12">
 												<div class="form-group">
 													<label class="control-label mb-10">Address</label>
 													<textarea class="form-control" placeholder="Address" name="addrs" required></textarea>
 												</div>
 											</div>                                           
 											
                                            <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Location</label>
 													<input type="text" class="form-control" placeholder="Location" name="ulocation" required>
 												</div>
 											</div> 		
                                            <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Email</label>
 													<input type="email" class="form-control" placeholder="Email" name="email" required>
 												</div>
 											</div>									
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Password</label>
 													<input type="password" class="form-control" placeholder="Password" name="password" required minlength="4" maxlength="15">
 												</div>
 											</div>
                                            <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Photo</label>
 													<input class="form-control" name="photo" type="file" required />
 												</div>
 											</div>
 											<div class="clearfix"></div>
 											<div class="col-md-12 text-center">
 												<input type="submit" value="Register" class="btn btn-primary pull-right">
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