<?php
	include("auth.php");
	include('../db_connect/db.php');
	$user_id=$_SESSION['SESS_ADMIN_ID'];	
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Alert</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid pt-25">
    <h2>All Alert</h2>
    <hr>

    <!-- Date Filter Form -->
    <div class="date-filter mb-3">
        <form method="POST" action="">
            <div class="form-row">
                <div class="col-md-5">
                    <label for="start_date">Start Date:</label>
                    <input type="date" id="start_date" name="start_date" class="form-control" required>
                </div>
                <div class="col-md-5">
                    <label for="end_date">End Date:</label>
                    <input type="date" id="end_date" name="end_date" class="form-control" required>
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" name="filter" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>
    </div>

    <!-- PHP Code -->
    <?php
    // Establish database connection
    // try {
    //     $db = new PDO('mysql:host=localhost;dbname=your_database', 'your_username', 'your_password');
    // } catch (PDOException $e) {
    //     die("Error: " . $e->getMessage());
    // }

    // Check if the filter form has been submitted
    if (isset($_POST['filter'])) {
        // Get the start and end dates from the form
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];

        // Prepare the SQL query with date range filter and order by date
        $query = $db->prepare("SELECT * FROM alert WHERE date BETWEEN :start_date AND :end_date ORDER BY date ASC");
        $query->bindParam(':start_date', $start_date);
        $query->bindParam(':end_date', $end_date);
    } else {
        // If no date filter is provided, fetch all alerts sorted by date
        $query = $db->prepare("SELECT * FROM alert ORDER BY date ASC");
    }

    // Execute the query
    $query->execute();

    // Fetch the results
    $alerts = $query->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <!-- Displaying Alerts -->
    <div class="row">
        <?php foreach ($alerts as $rows) { ?>
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 well">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <article class="col-item">
                                <div class="photo">
                                    <a href="javascript:void(0);"> 
                                        <img src="../photos/<?php echo $rows['photo']; ?>" class="img-responsive" style="width:400px; height:250px;" alt="Photo" />
                                    </a>
                                </div>
                                <div class="info">
                                    <hr>
                                    <h6>Vehicle No <?php echo $rows['vno']; ?></h6>
                                    <hr>
                                    <div class="product-rating inline-block">
                                        Type <?php echo $rows['vtype']; ?>
                                    </div>
                                    <hr>
                                    <div class="product-rating inline-block">
                                        Color <?php echo $rows['vcolor']; ?>
                                    </div>
                                    <hr>
                                    <div class="product-rating inline-block">
                                        Model <?php echo $rows['vmdl']; ?>
                                    </div>
                                    <hr>
                                    <div class="product-rating inline-block">
                                        Company <?php echo $rows['cmpny']; ?>
                                    </div>
                                    <hr>
                                    <div class="product-rating inline-block">
                                        Test Date <?php echo $rows['tdate']; ?>
                                    </div>
                                    <hr>
                                    <div class="product-rating inline-block">
                                        Owner <?php echo $rows['oname']; ?>
                                    </div>
                                    <hr>
                                    <div class="product-rating inline-block">
                                        Address <?php echo $rows['oaddrs']; ?>
                                    </div>
                                    <hr>
                                    <div class="product-rating inline-block">
                                        Contact <?php echo $rows['ocntno']; ?>
                                    </div>
                                    <hr>
                                    <div class="product-rating inline-block">
                                        Driver <?php echo $rows['dname']; ?>
                                    </div>
                                    <hr>
                                    <div class="product-rating inline-block">
                                        Age <?php echo $rows['dage']; ?>
                                    </div>
                                    <hr>
                                    <div class="product-rating inline-block">
                                        Date <?php echo $rows['date']; ?>
                                    </div>
                                    <hr>
                                    <div class="product-rating inline-block">
                                        Time <?php echo $rows['atime']; ?>
                                    </div>
                                    <hr>
                                    <div class="product-rating inline-block">
                                        Location <?php echo $rows['location']; ?>
                                    </div>
                                    <hr>
                                    <a href="emergency_alert.php?alt_id=<?php echo $rows['alt_id']; ?>" class="btn btn-block btn-danger">Route</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<!-- Including Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
