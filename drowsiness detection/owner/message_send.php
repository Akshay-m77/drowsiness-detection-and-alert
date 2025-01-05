<?php
	include("auth.php");
	include('../db_connect/db.php');
	$Log_Id=$_SESSION['SESS_OWNER_ID'];
	$qry_user = $db->prepare("SELECT * FROM users WHERE Log_Id = '$Log_Id'");
	$qry_user->execute();
	$rows_user = $qry_user->fetch();
	$name = $rows_user['name'];
	$phone = $rows_user['cntno'];	
	$email = $rows_user['email'];	
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

 					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 						<div class="panel panel-default card-view panel-refresh">
 							<div class="refresh-container">
 								<div class="la-anim-1"></div>
 							</div>
 							<div class="panel-heading">
 								<div class="pull-left">
 									<h6 class="panel-title txt-dark">Send Complaint</h6>
 									<hr class="light-grey-hr row mt-10 mb-15" />
 								</div>
 							</div>
 							<div class="panel-wrapper collapse in">
 								<div class="panel-body">

 									<form action="action/message_send.php" method="post" autocomplete="off">
 										<hr class="light-grey-hr" />
 										<div class="row">
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Name</label>
 													<input type="text" class="form-control" name="name" value="<?php echo $name;?>" readonly>
 												</div>
 											</div>
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Contact No</label>
 													<input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>" readonly>
 												</div>
 											</div>
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Email</label>
 													<input type="text" class="form-control" name="email" value="<?php echo $email;?>" readonly>
 												</div>
 											</div>
                                            <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Date</label>
 													<input type="text" class="form-control" name="dated" value="<?php echo date("Y-m-d");?>" readonly>
 												</div>
 											</div>
 											<div class="col-md-12">
 												<div class="form-group">
 													<label class="control-label mb-10">Subject</label>
 													<textarea class="form-control" rows="5" name="subject" required></textarea>
 												</div>
 											</div>
 											<div class="col-md-6">
 											</div>
 											<div class="col-md-6">
 												<div class="form-group">
 													<input type="submit" value="Submit" class="btn btn-block btn-danger">
 												</div>
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