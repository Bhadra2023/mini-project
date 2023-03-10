<?php
include "../login/config.php";
session_start();
$email=$_SESSION['email'];
if(!isset($email)){
    session_destroy();
    header('location:../login/login.php');
}

$conn=mysqli_connect("localhost","root","","jewel");
// $sql=mysqli_query($conn,"select * from tbl_employee"); 
// $ru=mysqli_fetch_array($sql);
// $id=$ru['emp_id'];
// echo $id;
// exit;
 if($_GET['emp_id']){
     $id=$_GET['emp_id'];
  
 } 
if(isset($_POST['buttonsubmit']))
{
    $empid=$_POST['emp_id'];
    $job=$_POST['job'];
    $sal=$_POST['payment'];
    $sql1="INSERT INTO `tbl_employeejob`(`emp_id`,`job`, `salary`) VALUES ('$id','$job','$sal') ";
    $res=mysqli_query($conn,$sql1);
   if($res)
    {
//  echo "Job assigned successfully";
 echo "<script>alert('Job assigned Successfully!!');
 window.location='empjob.php'</script>";

 }

 }
?>
<!DOCTYPE html>
<head>
<title>Jewel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.php" class="logo">
      Jewel
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
   
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">Admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
            <li><a href="../login/login.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <!-- <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Registration</span>
                    </a>
                    <ul class="sub">

                    <li><a href="request.php">employee leave Request</a></li>
						<li><a href="Category.php">Category</a></li>
                        <li><a href="subcatg.php">SubCategory</a></li>
						<li><a href="product.php">Product</a></li>
                    </ul>
                </li> -->
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Views</span>
                    </a>
                    <ul class="sub">
                    <li><a href="employeeview.php">Employee</a></li>
                    <li><a href="request.php">employee leave Request</a></li>
                    
						<li><a href="categoryview.php">Category</a></li>
                        <li><a href="subcategoryview.php">SubCategory</a></li>
						<li><a href="productvieww.php">Product</a></li>
                    </ul>
                </li>
              
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Reports</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">Sales</a></li>
                        
                    </ul>
                </li>
                
               
                
            </ul>          </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->

      
<!--sidebar end-->
<!--main content start-->
<!-- <section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
        <!-- <form action="empjob.php" method="post">
        <input type="submit" name="btnsubmit" value="Assign Job" class="btn btn-primary" style="margin-left:2%; background-color:blue; " /> -->
        <section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
        <!-- <form action="employeeview.php" method="post"> -->
        <input type="submit" name="btnsubmit" value="Back" class="btn btn-primary" style="margin-left:2%; background-color:#70c8fd; " />

         





                    
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                          Assign Job
                        </header>
                       
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post">
                                    <div class="form-group">
                                        <label for="name">Job</label>
                                        <input type="text" class="form-control" name="job" id="job"  required  onkeyup="Validstr();">
                                        </div>  <span id="msg1" style="color:red;"></span>
                                        <label for="name">Payment</label>
                                        <input type="number" class="form-control" name="payment" id="payment"  required min="500" max="5000">
                    <script>
                        function Validstr() 
                        {
                        var val = document.getElementById('job').value;
                        if (!val.match(/^[a-zA-Z ]*$/)) 
                        {
                          document.getElementById('msg1').innerHTML=" Only alphabets are allowed";
                                document.getElementById('job').value = "";
                                  return false;
                        }
                          document.getElementById('msg1').innerHTML=" ";
                         return true;
                        }
                   </script>
              
              <div class="form-group">
                           

<input type="hidden" name="emp_id" id="name <?php echo $ru['emp_id'];?>">

<button type="submit" name="buttonsubmit" class="btn btn-info">Submit</button>
                            </form>
                               
                                
                                    
                              

                        </div>
                    </section>

         

<!--main content end-->
</section>
</body>
      
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
