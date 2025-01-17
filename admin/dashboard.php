<?php
	session_start();
	error_reporting(0); // Turn off all error reporting
	include('includes/config.php'); // Include the config file
	if(strlen($_SESSION['alogin'])==0) // If the session is empty
		{	
	header('location:index.php'); // Redirect to the login page
	}
	else{ // If the session is not empty
?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Admin Dashboard</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include('includes/header.php');?> // Include the header file

	<div class="ts-main-content"> 
<?php include('includes/leftbar.php');?> // Include the leftbar file
		<div class="content-wrapper" >
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Dashboard</h2>
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light" style="background-color: #7f53ac; background-image: linear-gradient(315deg, #7f53ac 0%, #647dee 74%);">
												<div class="stat-panel text-center">
													<?php  // PHP code to display the number of registered users
														$sql ="SELECT id from tblusers "; // Select the id from the tblusers table
														$query = $dbh -> prepare($sql); // Prepare the query
														$query->execute(); // Execute the query
														$results=$query->fetchAll(PDO::FETCH_OBJ); // Fetch the results
														$regusers=$query->rowCount(); // Count the number of rows
													?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($regusers);?></div>
													<div class="stat-panel-title text-uppercase">Registred Users</div>
												</div>
											</div>
											<a href="reg-users.php" class="block-anchor panel-footer text-center">Full Detail &nbsp;<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>

									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light" style="background-color: #d5adc8; background-image: linear-gradient(315deg, #d5adc8 0%, #ff8489 74%);">
												<div class="stat-panel text-center">
													<?php  // PHP code to display the number of listed vehicles
														$sql1 ="SELECT id from tblvehicles "; // Select the id from the tblvehicles table
														$query1 = $dbh -> prepare($sql1);; // Prepare the query
														$query1->execute(); // Execute the query
														$results1=$query1->fetchAll(PDO::FETCH_OBJ); // Fetch the results
														$totalvehicle=$query1->rowCount(); // Count the number of rows
													?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($totalvehicle);?></div>
													<div class="stat-panel-title text-uppercase">Listed Vehicles</div>
												</div>
											</div>
											<a href="manage-vehicles.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>

									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light" style="background-color: #6b0f1a; background-image: linear-gradient(315deg, #6b0f1a 0%, #b91372 74%);">
												<div class="stat-panel text-center">
													<?php 
													$sql2 ="SELECT id from tblbooking ";
													$query2= $dbh -> prepare($sql2);
													$query2->execute();
													$results2=$query2->fetchAll(PDO::FETCH_OBJ);
													$bookings=$query2->rowCount();
													?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($bookings);?></div>
													<div class="stat-panel-title text-uppercase">Total Bookings</div>
												</div>
											</div>
											<a href="manage-bookings.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>

									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light" style="background-color: #1fd1f9;background-image: linear-gradient(315deg, #1fd1f9 0%, #b621fe 74%);">
												<div class="stat-panel text-center">
													<?php 
													$sql3 ="SELECT id from tblbrands ";
													$query3= $dbh -> prepare($sql3);
													$query3->execute();
													$results3=$query3->fetchAll(PDO::FETCH_OBJ);
													$brands=$query3->rowCount();
													?>												
													<div class="stat-panel-number h1 "><?php echo htmlentities($brands);?></div>
													<div class="stat-panel-title text-uppercase">Listed Brands</div>
												</div>
											</div>
											<a href="manage-brands.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="row">

									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light" style="background-color: #6a93cb; background-image: linear-gradient(315deg, #6a93cb 0%, #a4bfef 74%);">
												<div class="stat-panel text-center">
													<?php 
													$sql4 ="SELECT id from tblsubscribers ";
													$query4 = $dbh -> prepare($sql4);
													$query4->execute();
													$results4=$query4->fetchAll(PDO::FETCH_OBJ);
													$subscribers=$query4->rowCount();
													?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($subscribers);?></div>
													<div class="stat-panel-title text-uppercase">Subscibers</div>
												</div>
											</div>
											<a href="manage-subscribers.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>

									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light" style="background-color: #fbb034; background-image: linear-gradient(315deg, #fbb034 0%, #ffdd00 74%);">
												<div class="stat-panel text-center">
													<?php 
													$sql6 ="SELECT id from tblcontactusquery ";
													$query6 = $dbh -> prepare($sql6);;
													$query6->execute();
													$results6=$query6->fetchAll(PDO::FETCH_OBJ);
													$query=$query6->rowCount();
													?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($query);?></div>
													<div class="stat-panel-title text-uppercase">Queries</div>
												</div>
											</div>
											<a href="manage-conactusquery.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>

									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light" style="background-color: #fce043; background-image: linear-gradient(315deg, #fce043 0%, #fb7ba2 74%);">
												<div class="stat-panel text-center">
													<?php 
													$sql5 ="SELECT id from tbltestimonial ";
													$query5= $dbh -> prepare($sql5);
													$query5->execute();
													$results5=$query5->fetchAll(PDO::FETCH_OBJ);
													$testimonials=$query5->rowCount();
													?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($testimonials);?></div>
													<div class="stat-panel-title text-uppercase">Testimonials</div>
												</div>
											</div>
											<a href="testimonials.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d"); // Get the context of the canvas element we want to select
		window.myLine = new Chart(ctx).Line(swirlData, { // Create a new line chart
			responsive: true, // Make the chart responsive
			scaleShowVerticalLines: false, // Hide the vertical lines
			scaleBeginAtZero : true, // Begin the scale at zero
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>", // Set the tooltip template
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d"); // Get the context of the canvas element we want to select
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true}); // Create a new pie chart

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d"); // Get the context of the canvas element we want to select
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true}); // Create a new doughnut chart

	}
	</script>
</body>
</html>
<?php } ?>