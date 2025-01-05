<?php
	include("auth.php");
	include('../db_connect/db.php');
	$Log_Id=$_SESSION['SESS_DRIVER_ID'];
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Driver Monitoring</title>
	<meta name="description" content="" />
	<meta name="author" content="hencework"/>
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<?php include("include\css.php");?>
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-1-active pimary-color-red">
		
        <!-- Top Menu Items -->
			<?php include("include\menu.php");?>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
			<?php include("include\leftmenu.php");?>
		<!-- /Left Sidebar Menu -->
				
        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
				
				<!-- Row -->
				<div class="row">
				<h2>All Alert</h2>
					<hr>
       			<?php
                        $result = $db->prepare("select * from alert where DLog_Id='$Log_Id'");
                        $result->execute();
                        for($i=0; $rows = $result->fetch(); $i++)
                        {	
						$alt_id = $rows['alt_id'];							
						?>	
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 well">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<article class="col-item">
										<div class="photo">											
											<a href="javascript:void(0);"> <img src="../photos/<?php echo $rows['photo'] ?>" class="img-responsive" style="width:400px; height:250px;" /> </a>
										</div>
										<div class="info">
                                        	<hr>
											<h6>Vehicle No <?php echo $rows['vno'];?></h6>
                                            <hr>
											<div class="product-rating inline-block">
												Type <?php echo $rows['vtype'];?>
											</div>                                           		
											<hr>
                                            <div class="product-rating inline-block">
												Color <?php echo $rows['vcolor'];?>
											</div>	
											<hr>
                                             <div class="product-rating inline-block">
												Model <?php echo $rows['vmdl'];?>
											</div>	
											<hr>
											<div class="product-rating inline-block">
												Company <?php echo $rows['cmpny'];?>
											</div>
											<hr>
											<div class="product-rating inline-block">
												Test Date <?php echo $rows['tdate'];?>
											</div>											
                                            <hr>
											<div class="product-rating inline-block">
												Owner <?php echo $rows['oname'];?>
											</div>
											<hr>	                                           
                                            <div class="product-rating inline-block">
												Address <?php echo $rows['oaddrs'];?>
											</div>
											<hr>
                                            <div class="product-rating inline-block">
												Contact <?php echo $rows['ocntno'];?>
											</div>
											<hr>
                                             <div class="product-rating inline-block">
												Driver <?php echo $rows['dname'];?>
											</div>
											<hr>
                                            <div class="product-rating inline-block">
												Age <?php echo $rows['dage'];?>
											</div>
											<hr>
                                            <div class="product-rating inline-block">
												Date <?php echo $rows['date'];?>
											</div>
											<hr>
                                             <div class="product-rating inline-block">
												Time <?php echo $rows['atime'];?>
											</div>
                                            <hr>	
                                            <div class="product-rating inline-block">
												Location <?php echo $rows['location'];?>
											</div>
											<hr>							
											<a href="emergency_alert.php<?php echo '?alt_id='.$alt_id; ?>" class="btn btn-block btn-danger">Route</a>
										</div>
									</article>
								</div>
							</div>	
						</div>	
					</div>	
						<?php }?>
										
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
	
	<?php include("include\js.php");?>
</body>

</html>
