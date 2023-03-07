<?php

include "config.php";

session_start();
$email=$_SESSION['email'];
$sql1="select * from `tbl_employee` where email='$email'";
$res=$conn->query($sql1);
$row1=$res->fetch_assoc();
$rid=$row1['emp_id'];

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
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
     

<br><br><br><br>
<!-- partial:index.partial.html -->
<?php
include("config.php");
if(isset($_GET["rid"]))
{
	$rid=$_GET["rid"];
	$sql=mysqli_query($conn,"SELECT * FROM employee  WHERE emp_id='$rid'");
	$row1=mysqli_fetch_array($sql);
}
?>


<section>
<div class="wrapper">
    <div class="title">
    <div class="wrapper">
    <div class="title">
    </div>
    <form class="form" action="" method="post"  autocomplete="off" onsubmit="return Validate() && ValidateEmail() && Validphone() && Validatepassword() && Confirmpass()  && ValidateAddress()">
        
    <div class="form">
       <div class="inputfield">
       <label>Name</label>
       <input type="text" class="input" value="<?php echo $row1['name'];?>" id="name" name="name" title="Name must be alphabets" required onkeyup="return Validate()" onblur="return Validate()" required />
       </div>  
       <span id="fn" style="color: red;"></span>
       <select  style="width:150px;height:25px;" name="gender">
	<option value="none" selected><?php echo $row1['gender'];?></option>
	<option value="male">Male</option>
	<option value="female">Female</option>
	<option value="female">Others</option>
</select>
      
        <div class="inputfield">
        <label>Address</label>
          <input type="text" class="input" value="<?php echo $row1['address'];?>"name="address" id="address" autocomplete="nope" required onkeyup="return ValidateAddress()" onblur="return ValidateAddress()"><br>
          <span id="ad" style="color: red;"></span>
       </div> 
       <div class="inputfield">
        <label>Phone</label>
          <input type="number" class="input" value="<?php echo $row1['phone'];?>" name="phone" id="phone" autocomplete="nope" title="Please enter a valid phone number" required onkeyup="return Validphone()" onblur="return ValidePhone()">
            <span id="msg2" style="color: red;"></span><br>
       </div> 
       

      
                <script type="text/javascript">
function Validate() 
                            {
                            var val = document.getElementById('name').value;
                            if (!val.match(/^[A-Z].*$/)) 
                            {
                              document.getElementById('fn').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                                    document.getElementById('name').value = val;
                                    document.getElementById('name').style.color = "red";
                                      return false;
                                     flag=1;
                            }
                            if(val.length<3||val.length>30){
                              document.getElementById('fn').innerHTML="Between 3 to 10 characters";
                                    document.getElementById('name').value = val;
    
    
                                document.getElementById('name').style.color = "red";
                                      return false;
                                      
                            }
                            else{
    
                            
                             document.getElementById('fn').innerHTML=" ";
                              document.getElementById('name').style.color = "green";
                             return true;
                            }
                          }
                        
                          function Validphone() 
                        {
                        var val = document.getElementById('phone').value;
                          if (!val.match(/^[6789][0-9]{9}$/))
                           {
                            document.getElementById('msg2').innerHTML="Only Numbers started with 6,7,8,9 are allowed and must contain 10 number";
                                  document.getElementById('phone').value = val;
                                    return false;
                           }else{
                            document.getElementById('msg2').innerHTML="";
                        //   return true;
                        }
                    }
                       
                          
function ValidateAddress(){
  var address = document.getElementById('address').value;
                            if (!address.match(/^[a-zA-Z ]*$/)) 
                            {
                              document.getElementById('ad').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                                    document.getElementById('address').value = address;
                                    document.getElementById('address').style.color = "red";
                                      return false;
                                     flag=1;
                            }
                            if(address.length<3||address.length>30){
                               document.getElementById('ad').innerHTML="Between 3 to 10 characters";
                                    document.getElementById('address').value = address;
    
    
                                document.getElementById('address').style.color = "red";
                                      return false;
                                      
                            }
                            else{
    
                            
                              document.getElementById('ad').innerHTML=" ";
                              document.getElementById('address').style.color = "green";
                             return true;
                            }
                          }

function Val()
                            {
                              if(Validate()===false ||  Validphone()===false)
                              {
                                return false;
                              }
                            }
             </script>



<?php
include("config.php");

if(isset($_POST["btnsubmit"]))
{

    $Name=$_POST['name'];
    $gender=$_POST['gender'];
  
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    
  
    
    $sql=mysqli_query($conn,"UPDATE tbl_employee SET name='$Name',gender='$gender',address='$address',phone='$phone' WHERE emp_id='$rid'");
	if($sql)
	{
		
		$_SESSION['vstatus'] = "Updated Successfully";
  
        echo "<script>;window.location='profile.php'</script>";
	}
}
?>
       
                                <button type="submit" name="btnsubmit"class="btn btn-info">Submit</button>

                            </form>
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
