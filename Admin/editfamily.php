<?php
include "../login/config.php";
session_start();
$email=$_SESSION['email'];
if(!isset($email)){
    session_destroy();
    header('location:../login/login.php');
}
?>
<?php
include("config.php");

if(isset($_POST["update"]))
{

    $name=$_POST['name'];
    $cid=$_POST['cid'];
$pid=$_POST['pid'];
    $des=$_POST['des'];
$photo=$_POST['photo'];
    $quantity=$_POST['quantity'];
$price=$_POST['price'];
    

    $s="UPDATE tbl_product SET `name`= '$name' `cid`= '$cid' `des`= '$des' `photo`= '$photo' `quantity`= '$quantity' `price`= '$price' where `pid`='$pid'";
  		$display=$conn->query($s);
  		if($display==TRUE)
		{
?>

            <script>
            if(window.confirm('Data Updated succesfully '))
            {
               window.location.href='productvieww.php';
            };</script>
            <?php
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }
		if(isset($_GET['pid'])) {

    $cid= $_GET['pid']; 

    $s = "SELECT * FROM tbl_product WHERE `pid`='$pid'";

    $display = $conn->query($s); 

    if ($display->num_rows > 0) {        

        while ($row = $display->fetch_assoc()) {

        //$pid = $_POST['pid'];

        $c_name = $row['c_name'];
 $name=$row['name'];
    $cid=$row['cid'];

    $des=$row['des'];
$photo=$row['photo'];
    $quantity=$row['quantity'];
$price=$row['price'];
 
        
        
       // echo "c_name:".$c_name;

        } 

    ?> 
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
                <img alt="" src="images/2.jpg">
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
						
						<li><a href="Category.php">Category</a></li>
                      
						<li><a href="product.php">Product</a></li>
                    </ul>
                </li>
                 -->
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Views</span>
                    </a>
                    <ul class="sub">
						    <li><a href="employeeview.php">Employee</a></li>
                    <li><a href="request.php">Employee leave request</a></li>

						<li><a href="categoryview.php">Category</a></li>
						<li><a href="subcategoryview.php">SubCategory</a></li>
						<li><a href="productvieww.php">Product</a></li>s
                     
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
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Product
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="name">Product Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required onchange="Validstr();" value="<?php echo $name; ?>/>
                                    </div>
                                    <span id="msg1" style="color:red;"></span>
                    <script>
                        function Validstr() 
                        {
                        var val = document.getElementById('name').value;
                        if (!val.match(/^[a-zA-Z ]*$/)) 
                        {
                          document.getElementById('msg1').innerHTML="Only alphabets are allowed";
                                document.getElementById('name').value = "";
                                  return false;
                        }
                          document.getElementById('msg1').innerHTML=" ";
                         return true;
                        }
                   </script>
                               
                                    <div class="form-group">
                            <?php
$con=mysqli_connect("localhost","root","","jewel");


$sql=mysqli_query($conn,"select * from tbl_cat"); 
?>
<label>Category Name</label><br>

     
<select   name="cid" onchange="showResult(this.value)" class="form-control m-bot15" required value="<?php echo $cid; ?> >
<option value="">--select--</option>
<?php
while($row=mysqli_fetch_array($sql))
{

?>
<option value="<?php echo $row[0] ?>" ><?php echo $row[1] ?></option>

<?php
	
}
?>




</select></div>                       <div class="form-group">
                                        <label for="des">Product Description</label>
                                        <input type="text" class="form-control" name="des" id="des" required onchange="Validstr();" value="<?php echo $des; ?>/>
                                    </div>
                                    <span id="msg2" style="color:red;"></span>
                    <script>
                        function Validstr() 
                        {
                        var val = document.getElementById('des').value;
                        if (!val.match(/^[a-zA-Z ]*$/)) 
                        {
                          document.getElementById('msg2').innerHTML="Only alphabets are allowed";
                                document.getElementById('des').value = "";
                                  return false;
                        }
                          document.getElementById('msg2').innerHTML=" ";
                         return true;
                        }
                   </script>
                               
                                      <div class="form-group">           
                                        <label for="image">Product image</label>
                                        <input type="file" class="form-control" accept="image/gif, image/png, image/jpeg, image/jpg" name="photo"  id="image" value="<?php echo $photo; ?>>
                                    </div>
                                   
                                    <div class="panel-body">

                                   <div class="row">
                                     
                                    <div class="col-md-4 form-group">
                                    <label for="qua">Product Quantity</label>
                                <input type="number"  class="form-control" name="quantity" min="1" oninput="validity.valid||(value=''); value="<?php echo $quantity; ?>">
                                
                            </div>
                            
                            <div class="col-md-4 form-group">
                                    <label for="price">Price</label>
                                <input type="number"  class="form-control" name="price" min="1" oninput="validity.valid||(value=''); value="<?php echo $price; ?>">
                                
                            </div>
                            
</div>
</div>
                                <button type="submit" name="update"class="btn btn-info">Update</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            <div class="col-lg-12">
               
            </div>
        </div>
        <div class="row">
            
        </div>

        
 <!-- footer -->
		 
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
<?php

} else{ 

header('Location: productvieww.php');

} 

}

?> 
