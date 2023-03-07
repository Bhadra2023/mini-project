<?php
include "config.php";
session_start();
$email=$_SESSION['email'];
if(!isset($email)){
    session_destroy();
    header('location:.../login/login.php');
}

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>jewel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	
	<body style="background-image:url(images/banner.jpg)">
		
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Leave Status</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-striped">
						  <thead>
						    <tr>
								<th data-breakpoints="xs">SLNO</th>
								<th>Employee Name</th>
            <th>Reason</th>
            <th>Date</th>
           
						      <th>Status</th>
							  <th>Remove</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
								<?php
								include("config.php");
								
								$em=$_SESSION['email'];
								?>
								<?php
								$s=1;
								$sq = mysqli_query($conn,"SELECT * FROM `tbl_employee` where email = '$em';");
								$disp = mysqli_fetch_array($sq);
								$sell = $disp['emp_id'];
								
								$sql=mysqli_query($conn,"SELECT * FROM `tbl_leave` where emp_id = '$sell';");
								
								
								   while($display=mysqli_fetch_array($sql))
								   {
									
									echo "<td>".$s++."</td>";
									$sql3=mysqli_query($conn,"SELECT * FROM `tbl_employee` WHERE `emp_id` = ".$display['emp_id']);							
	$display3=mysqli_fetch_array($sql3);
    echo "<td>".$display3["name"]."</td>";
									
									
									echo "<td>".$display["description"]."</td>";
									echo "<td>".$display["date"]."</td>";
									//echo $display['status'];
									if($display['leavestatus'] ==1){
									  echo "<td>approved</td>";
									}
									else if($display['leavestatus'] ==0){
									  echo "<td>rejected</td>";
									}
									else if($display['leavestatus'] ==2){
									  echo "<td>pending</td>";
									}
									echo "<td><a style='color:#090' href='remove.php?leave_id=".$display['leave_id']."'>Remove</a> </td>";
									
									echo "</tr>";
									
								  }
								
								echo "</table>";
								
								?>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

