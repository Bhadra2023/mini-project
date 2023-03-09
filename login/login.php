<?php
include "config.php";
session_start();
session_unset();
if(isset($_POST['submit'])){

$email = mysqli_real_escape_string($conn,$_POST["email"]);
$password = mysqli_real_escape_string($conn,$_POST["password"]);




$sql ="SELECT * FROM `tbl_login` WHERE `email`='$email' and `password`='$password'";
$sq ="SELECT * FROM `tbl_employee` WHERE `email`='$email' and `password`='$password'";


$sq ="SELECT * FROM `tbl_customer` WHERE `email`='$email' and `password`='$password'";
$sql3="SELECT * FROM `tbl_courier` WHERE `email`='$email' and `password`='$password'";
$row =$conn->query($sql);
$res=mysqli_fetch_array($row);
$val=$res['type'];
$row1 =$conn->query($sq);
$res1=mysqli_fetch_array($row1);
$st=$res1['status'];

$row22 =$conn->query($sql3);
$res22=mysqli_fetch_array($row22);
$s=$res22['status'];



// echo $val;
// echo $n; exit;
if( $res > 0){
	if($val==3){
	    $_SESSION['email']= $email;
		$_SESSION['login_id']= $res["login_id"];
		if($st==1)
		{
			
echo "<script>alert('Blocked By Admin!');</script>";
		}
		else
	
		header('location:../employeehome/index.php');
	}
	if($val==2){
        $_SESSION['email']= $email;
		$_SESSION['login_id']= $res["login_id"];
		
	header('location:../customer/index.php');

}
	if($val==1){
	
	$_SESSION['email']= $email;
		$_SESSION['login_id']= $res["login_id"];
	
	header('location:../Admin/index.php');
}
}
if($val==4){
	if($s==1){
		$_SESSION['email']= $email;
		$_SESSION['login_id']= $res["login_id"];
		header('location:../agency/agencyhome.php');
	}elseif($s==0){
		echo "<script>alert('Yet to be verified By Admin!');</script>";
	}else{
		echo "<script>alert('Blocked By Admin!');</script>";
	}
	
}

	else{
		
	?><script>
		if(window.confirm('Your username or password is error!!!! Try again'))
		{
			window.location.href='login.php';	
		};</script>
	
	<?php
	}
}
?>



<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	
	<body style="background-image:url(images/banner2.jpg)">

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<button style="margin-left:2%; background-color:#70c8fd;"><a href="../index.php">HOME</a></button>
					
					
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/g.jpg);"></div>
		      	<h3 class="text-center mb-0">Welcome</h3>
		      	<p class="text-center">Sign in by entering the information below</p>
						<form method="post" action="" class="login-form">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" class="form-control" name="email" placeholder="email" autocomplete="nope" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>
	            </div>
	            <div class="form-group d-md-flex">
								<div class="w-100 text-md-right">
									<a href="forgot.php">Forgot Password</a>
								</div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="submit" id="submit" class="btn form-control btn-primary rounded submit px-3">Login</button>
	            </div>
	          </form>
	          <div class="w-100 text-center mt-4 text">
	          	<p class="mb-0">Don't have an account?</p>
		          <!-- <a href="../cust_reg/add_cust.php">Sign Up</a> -->
				  <!-- <li class="nav-item submenu dropdown"> -->
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">signup</a>
                                    <ul class="dropdown-menu">
                                       <li class="nav-item"><a class="nav-link" href="../cust_reg/add_cust.php">Customer</a></li>
                                       <li class="nav-item"><a class="nav-link" href="../employee/emp_reg.php">Employee</a></li>
									   <li class="nav-item"><a class="nav-link" href="../agency/agencyreg.php">Courier</a></li>

                                    </ul>
	          </div>
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





