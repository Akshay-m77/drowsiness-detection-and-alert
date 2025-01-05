<?php
	include("auth.php");
	include('../db_connect/db.php');
	$Log_Id=$_SESSION['SESS_OWNER_ID'];
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
 									<h6 class="panel-title txt-dark">New Driver Register</h6>
 								</div>
 								<div class="clearfix"></div>
 							</div>
 							<div class="panel-wrapper collapse in">
 								<div class="panel-body"> 									
 									<form action="action/driver_register.php" method="post" enctype="multipart/form-data" autocomplete="off">
 										<div class="row">
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Name</label>
 													<input type="text" class="form-control" placeholder="Name" name="name" required pattern="[a-zA-Z1 _]{3,50}">
 												</div>
 											</div>
                                            <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Age</label>
 													<input type="number" class="form-control" placeholder="Age" name="age" min="18" max="55" required>
 												</div>
 											</div>
                                             <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Gender</label>
 													<select class="form-control" name="sex" required>
                                                    	<option value="">Select</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Other</option>
                                                    </select>
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
 													<label class="control-label mb-10">Address</label>
 													<input type="text" class="form-control" placeholder="Address" name="addrs" required>
 												</div>
 											</div>
                                           
                                             <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Contact No</label>
 													<input type="text" class="form-control" placeholder="Contact No" name="cntno" required pattern="[0-9]{10,10}" maxlength="10" minlength="10" >
 												</div>
 											</div>                                           
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">License No</label>
 													<input type="text" class="form-control" placeholder="License No" name="lno" required>
 												</div>
 											</div> 											
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">License Date</label>
 													<input type="date" class="form-control" placeholder="License Date" name="ldate" required max="<?php echo date("Y-m-d");?>">
 												</div>
 											</div>                                           
                                            <div class="col-md-6">
 												<div class="form-group">
                                                    <label class="control-label mb-10">Vehicle</label>
 													<select class="form-control" name="vno" required>
                                                    	<option value="">Select</option>
                                                        <?php
															$result = $db->prepare("SELECT distinct(vno) FROM vehicle where Log_Id='$Log_Id'");
															$result->execute();
															$row_count =  $result->rowcount();
															for($i=0; $rows = $result->fetch(); $i++)
															{
															echo '<option>'.$rows['vno'].'</option>';
															}
														?>	 
                                                    </select>
 												</div>
 											</div>
                                            <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Email</label>
 													<input class="form-control" type="email" name="email" required  placeholder="Email">  
 												</div>
 											</div>
                                            <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Password</label>
 													<input class="form-control" type="password" name="password" required maxlength="20" minlength="4"> 
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