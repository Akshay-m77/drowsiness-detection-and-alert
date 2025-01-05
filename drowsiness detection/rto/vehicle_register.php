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
 									<h6 class="panel-title txt-dark">New Vehicle Register</h6>
 								</div>
 								<div class="clearfix"></div>
 							</div>
 							<div class="panel-wrapper collapse in">
 								<div class="panel-body"> 									
 									<form action="action/vehicle_register.php" method="post" enctype="multipart/form-data" autocomplete="off">
 										<div class="row">
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Vehicle No</label>
 													<input type="text" class="form-control" placeholder="Vehicle No" name="vno" required>
 												</div>
 											</div>
                                             <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Vehicle Type</label>
 													<select class="form-control" name="vtype" required>
                                                    	<option value="">Select</option>
                                                        <option>Two</option>
                                                        <option>Three</option>
                                                        <option>Four</option>
                                                        <option>Heavy</option>
                                                    </select>
 												</div>
 											</div>
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Engine Chase No</label>
 													<input type="text" class="form-control" placeholder="Engine Chase No" name="engno" required>
 												</div>
 											</div>
                                           
                                             <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Vehicle Model</label>
 													<input type="text" class="form-control" placeholder="Vehicle Model" name="vmdl" required>
 												</div>
 											</div>                                           
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Vehicle Color</label>
 													<input type="text" class="form-control" placeholder="Vehicle Color" name="vcolor" required>
 												</div>
 											</div> 											
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Company</label>
 													<input type="text" class="form-control" placeholder="Company" name="cmpny" required>
 												</div>
 											</div>
                                            <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Test Date</label>
 													<input class="form-control" type="date" placeholder="Test Date" name="tdate" required min="<?php echo date("Y-m-d");?>">
 												</div>
 											</div>
                                             <div class="col-md-6">
 												<div class="form-group">
                                                    <label class="control-label mb-10">Owner Name</label>
 													<select class="form-control" name="oname" id="oname" required>
                                                    	<option value="">Select</option>
                                                        <?php
															$result = $db->prepare("SELECT distinct(name) FROM users where user_type='Owner'");
															$result->execute();
															$row_count =  $result->rowcount();
															for($i=0; $rows = $result->fetch(); $i++)
															{
															echo '<option>'.$rows['name'].'</option>';
															}
														?>	 
                                                    </select>
 												</div>
 											</div>
                                            <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Owner Gender</label>
                                                    <input type="hidden"  name="Log_Id" class="form-control" id="Log_Id" readonly>
 													<input class="form-control" type="text" name="osex" readonly id="osex" required>  
 												</div>
 											</div>
                                            <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Owner Age</label>
 													<input class="form-control" type="text" name="oage" readonly id="oage" required> 
 												</div>
 											</div>
                                            <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Owner Address</label>
 													<input class="form-control" type="text" name="oaddrs" readonly id="oaddrs" required> 
 												</div>
 											</div>
                                            <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Owner Location</label>
 													<input class="form-control" type="text" name="ulocation" readonly id="ulocation" required> 
 												</div>
 											</div>
                                             <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Owner Contact No</label>
 													<input class="form-control" type="text" name="ocntno" readonly id="ocntno" required>
 												</div>
 											</div>
                                             <div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Registration Date</label>
 													<input class="form-control" type="date" placeholder="Registration Date" name="rdate" required max="<?php echo date("Y-m-d");?>"> 
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
<script src="vendors/js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$('#oname').change(function()
	{
		var oname = $("#oname").val();
		$.ajax({				
			type:'POST',
			url:'owner_select.php',
			data:'oname='+oname,	
			dataType:"JSON",			
			success:function(data)
			{
				
			   $('#Log_Id').val(data.Log_Id);  
			   $('#osex').val(data.osex); 
			   $('#oage').val(data.oage);
			   $('#oaddrs').val(data.oaddrs);   
			   $('#ocntno').val(data.ocntno);
			   $('#ulocation').val(data.ulocation);
			}				
		}); 						
	});			
});
</script>
 </html>