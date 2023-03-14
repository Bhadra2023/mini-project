<?php
include "config.php";
session_start();
$email= $_SESSION['email'];
if(!isset($email)){
  session_destroy();
  header('location:../login/login.php');
}
?>
<!DOCTYPE html>
<head>
<title>jewel</title>
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

    <a href="index.html" class="logo">
        Admin Panel
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
                
             
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Views</span>
                    </a>
                    <ul class="sub">
                    li><a href="employeeview.php">Employee</a></li>
                        <li><a href="request.php">employee leave request</a></li>
						<li><a href="categoryview.php">Category</a></li>
                        <li><a href="subcategoryview.php">subCategory</a></li>
						<li><a href="productvieww.php">Product</a></li>
                    </ul>
                </li>
              
                
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Reports</span>
                    </a>
                    <ul class="sub">
                        <li><a href="orderview.php">Sales</a></li>
                        
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
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
        <!-- <form action="product.php" method="post">
        <input type="submit" name="btnsubmit" value="Add New" class="btn btn-primary" style="margin-left:2%; background-color:#126e08; " /> -->
 <div class="panel panel-default">
    <div class="panel-heading">
    Product Orders
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">SLNO</th>
            <th>Customer Name</th>
            <th>Product Name</th>
            <th>Image</th>
            <th>Date</th>
            <th>Total Price</th>
            <th>Quantity</th>
            
   <!-- <th style="color:#F00">Status</th>-->
            
          </tr>
        </thead>
        <tbody>
          <tr data-expanded="true">
         
<?php
$s=1;

$sql1 = mysqli_query($conn,"SELECT a.*,b.*,c.* FROM `tbl_order` as a INNER JOIN `tbl_product` as b INNER JOIN `tbl_customer` as c ON a.pid=b.pid and a.cust_id=c.cust_id");



if($sql1->num_rows>0){
    while($row1 = mysqli_fetch_array($sql1)){?>
        <tr>
        <td><?php echo $s++ ?></td>
        <td><?php echo $row1["name"];?></td>
        <td><?php echo $row1["prod_name"];?></td>
        <td><img src="photo/<?php echo $row1['photo'];?>" width='100' height='50'></td>
        <td><?php echo $row1["date"];?></td>
        <td><?php echo $row1["totalamount"];?></td>
        <td><?php echo $row1["quantity"];?></td>
        </tr>

<?php	
  }

}

?>

        </tbody>
      </table>
    </div>
  </div>
</form>
</div>
</section>
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
