<?php
	include("auth.php");
	include('../db_connect/db.php');
	$user_id=$_SESSION['SESS_POLICE_ID'];
	$vno=$_POST["vno"];		
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
				<h2>Vehicle Details</h2>
					<hr>
       			<?php
                        $result = $db->prepare("select * from vehicle  where  vno like'%".$vno."%'");
                        $result->execute();
                        for($i=0; $rows = $result->fetch(); $i++)
                        {							
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
												Engine No <?php echo $rows['engno'];?>
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
												Gender <?php echo $rows['osex'];?>
											</div>
											<hr>
                                            <div class="product-rating inline-block">
												Age <?php echo $rows['oage'];?>
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
												Register Date <?php echo $rows['rdate'];?>
											</div>
											<hr>
                                            <div class="row">
                                            	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <a href="vehicle_edit.php?vh_id=<?php echo $rows['vh_id'];?>" class="btn btn-block btn-primary">EDIT</a>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                               <a href="action/vehicle_delete.php?vh_id=<?php echo $rows['vh_id'];?>" class="btn btn-block btn-danger">REMOVE</a>
                                                </div>
                                            </div>
                                            <br>										
											<input type="submit" class="btn btn-block btn-info" value="Print" onclick="window.print();">
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
