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
                        $result = $db->prepare("SELECT vno, COUNT(*) as alert_count, dname FROM alert WHERE OLog_Id='$Log_Id' GROUP BY vno, dname");
                        $result->execute();
                        while($rows = $result->fetch(PDO::FETCH_ASSOC))
                        {   
                            $vno = $rows['vno'];
                            $alert_count = $rows['alert_count'];
                            $driver_name = $rows['dname'];                              
                            ?>  
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 well">
                                <div class="panel panel-default card-view pa-0">
                                    <div class="panel-wrapper collapse in">
                                        <div class="panel-body pa-0">
                                            <article class="col-item">
                                                <div class="info">
                                                    <hr>
                                                    <h6>Vehicle No <?php echo $vno;?></h6>
                                                    <hr>
                                                    <div class="product-rating inline-block">
                                                        Number of Alerts: <?php echo $alert_count;?>
                                                    </div>                                           
                                                    <hr>
                                                    <div class="product-rating inline-block">
                                                        Driver Name: <?php echo $driver_name;?>
                                                    </div>                                           
                                                    <hr>
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
