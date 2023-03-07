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
      <!-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div> -->
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
     
      <section>
         <br><br><br><br>
<div class="wrapper">
    <div class="title">
    
    
   
    
    </div>
    <form action="empedit.php" method="POST"><table>
   <?php 
                              
                              $query= "SELECT * FROM tbl_employee where email='$email'";
                              $query_run = mysqli_query($conn, $query);
                              $check_tbl_employee = mysqli_num_rows($query_run) > 0;
                              
                                    
                              
                          if($check_tbl_employee)
                          {
                             while($row = mysqli_fetch_assoc($query_run))
                             {
                               ?>  
  
  <center><tr><h4 style="color:black;font-size: ;">Name:<h4 style="color:green"><b>
          <?php  echo $row['name']?>
          </b> </h4></h4></tr>
     
       
        <p style="color:black;font-size: ;">Gender:</p>
        <p style="color:green"><b>
          <?php  echo $row['gender']?>
          </b> </p>
          <p style="color:black;font-size: ;">Address:</p>
        <p style="color:green"><b>
          <?php  echo $row['address']?>
          </b> </p>
          <p style="color:black;font-size: ;">Phone:</p>
        <p style="color:green"><b>
          <?php  echo $row['phone']?>
          </b> </p>
          <p style="color:black;font-size: ;">Email:</p>
        <p style="color:green"><b>
          <?php  echo $row['email']?>
          </b> </p>
          <br>
          <button type="submit" name="submit" class="btn btn-warning" id="viewbtn">
        EDIT
      </button>
          <?php  }} ?>

	
	



     
                            
                             </center>



   
                         </section>
</div>
</div>
</div> 

 
                             </form>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
</body></html>