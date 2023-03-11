<?php
include "../login/config.php";
session_start();
$email=$_SESSION['email'];
if(!isset($email)){
    session_destroy();
    header('location:../login/login.php');
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
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>

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
                    
                    <li><a href="view_delivery.php">Courier Agency Request</a></li>
                    
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
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
          
 <div class="panel panel-default">
    <div class="panel-heading">
   Assigned Jobs View
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
            <th>Employee Id</th>
            <th>Job</th>
            <th>Monthly salary</th>
            
          
         
            <!-- <th style="color:#F00">Viewmore</th> -->
            
    <!-- <th style="color:#F00">Status</th> -->
    <!-- <th style="color:#F00">Job</th> -->
            
          </tr>
        </thead>
        <tbody>
          <tr data-expanded="true">
          <?php
include("config.php");
?>
<?php
$s=1;


$sql=mysqli_query($conn,"SELECT * FROM tbl_employeejob");


   while($display=mysqli_fetch_array($sql))
   {
    ?>
	<tr>
    <?php echo "<td>".$s++."</td>";?>
	
    <td><?php echo htmlentities($display['emp_id']);?></td>
    <td><?php echo htmlentities($display['job']);?></td>
    <td><?php echo htmlentities($display['salary']);?></td>
 <td>   <input type="button" name="pay" id ="rzp-button1" value="pay" onclick="pay_now()" class="btn btn-success"></td>

    <!-- <td><?php echo htmlentities($display['phone']);?></td>
    <td><?php echo htmlentities($display['email']);?></td> -->
	<!-- <td>
   <?php
                    if($display['status']==1){
                        echo '<p><a href="empinactivate.php?id='.$display['emp_id'].'$status=1">Blocked</a></p>';
                    }else{
                        echo '<p><a href="empactivate.php?id='.$display['emp_id'].'$status=0">Unblocked</a></p>';
                    }
                    ?> -->
               <!-- </td>
               <td>
<?php
              	echo "<a style='color:blue;' href='empjob.php?emp_id=".$display['emp_id']."'>ASSIGN JOB</a> </td>";
?>
</td> --> 
             </tr>
                </tbody>
              <?php $s=$s+1; } ?>
              
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
<script>
function pay_now(){

var usrId=jQuery('#hidden_txt').val();

console.log(usrId);
 var amt=<?php echo "$salary";?>;
 var options = {
    "key": "rzp_test_3VFsQeeHTjG3Kh",
    "amount": amt*100, 
    "currency": "INR",
    "name": "Jewellery Store",
    "description": "Test Transaction",
    "image": "https://drive.google.com/file/d/1FJCNPPMhML96z3s4IrR8-yGU4A6HLm2X/view?usp=share_link",
    "handler":function(response){
        console.log(response);
        jQuery.ajax({
            type:'POST',
            url:'payment_process.php',
            data:"payment_id="+response.razorpay_payment_id+"&amount="+amt+"&usrId="+usrId,
            success:function(result){
                window.location.href="thankyou.php?payment_id="+response.razorpay_payment_id;

               //  window.location.href="payment_process.php?payment_id="+response.razorpay_payment_id;
            }

        })
        // if(response){
        //     window.location.href="/adsol/index.php";
        // }
       

    }
};

var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}

}

</script>
      
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
