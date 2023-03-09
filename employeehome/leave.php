<?php
include "config.php";
session_start();
$email=$_SESSION['email'];
if(!isset($email)){
   session_destroy();
   header('location:../login/login.php');
}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Jewel</title>

  <script src="js/jquery2.0.3.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>jewel</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="./style.css">

      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><b><h1 style="font-family:algerian;color:#ffffff;fontsize: 5spx;">JeWel</h1></b></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                             
                             
                              <li class="nav-item">
                                 <a class="nav-link" href="./Request/index.php">Leave Status</a>
                              </li>
                              
                              <!-- <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li> -->
                              <li class="nav-item">
                                 <a class="nav-link" href="profile.php">Profile</a>
                              </li>
                                                          <!-- <li class="nav-item submenu dropdown">
                                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Logout</a>
                                    
                                  <a class="nav-link" href="../login/login.php">Logout</a> -->
                                  <!--  <ul class="dropdown-menu">
                                       <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                                       <li class="nav-item"><a class="nav-link" href="changepsd.php">Change password</a></li>                                       
                                       <li class="nav-item"><a class="nav-link" href="../login/login.php">Logout</a></li>  -->
                                       <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/1.png">
                <span class="username"><?php
                $sql="SELECT * FROM `tbl_employee` WHERE email='$email'";
$gotresult=mysqli_query($conn,$sql);
if($gotresult)
{
    if(mysqli_num_rows($gotresult) > 0)
    {
        while($row=mysqli_fetch_array($gotresult))
        {
            // print_r($row['email']);
            ?>
            <center><h4 style="color:#Ffffff"><i><?php echo$row['name'];?></i></h4></center>
            <?php
        }
      
    }
}
?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
            <li><a href="updatePassword.php"><i class="fa fa-lock"></i> Change Password</a></li>
            <li><a href="../login/login.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>                                      


                                    </ul>
                             
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
     

<br><br><br><br>
<!-- partial:index.partial.html -->
<section>
<div class="wrapper">
    <div class="title">
    <div class="wrapper">
    <div class="title">
    </div>
    <form class="form" action="" method="post"  autocomplete="off">
    <div class="form">
       <div class="inputfield">
       <label>Reason</label>
       <input type="text" class="input" placeholder="enter valid reason" id="pid" name="description" required />
       </div>  
        <div class="inputfield">
        <label>Date</label>
          <input type="date" class="input" placeholder="date" name="date" required >
       </div> 
       <div class="inputfield">
                            <?php
$conn=mysqli_connect("localhost","root","","jewel");


$sql=mysqli_query($conn,"select * from tbl_employee"); 
?>
<label>Employee Name</label><br>

     
<select   name="emp_id" onchange="showResult(this.value)" class="input"  >
<!-- <option value="">--select--</option> -->
<?php
while($row=mysqli_fetch_array($sql))
{

?>
<option value="<?php echo $row[0] ?>" ><?php echo $row[1] ?></option>

<?php
	
}
?>

</select></div>
<div class="inputfield">
        <input type="submit" value="Request" name="submit" class="btn">

      </div>
</section>
      </form>
    </div>
</div>
</div>
</div>


    
<!-- partial -->
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->



</body>
</html>
<?php
include("config.php");

if(isset($_POST["submit"]))
{

   
    $emp_id=$_POST['emp_id'];
    $description=$_POST['description'];
    $date=$_POST['date'];
   
   

    
   
  
    
    $sql=mysqli_query($conn,"INSERT INTO tbl_leave(emp_id,description,date,leavestatus) VALUES('$emp_id','$description','$date','2')");

    
    
    
    if($sql)
      {
       
      echo "<script>alert('Leave Details Registered Successfully!!');window.location='index.php'</script>";
      }
     else
      {
     echo "<script>alert('Error');window.location='leave.php'</script>";
      }
  
    
    } 
  	
?>
