
<?php
include "../config.php";
$tokenerr=false;
 
session_start();

   $mailmsg =$_SESSION['mailsend'];
   $name= $_SESSION['name'];
   $phone= $_SESSION['phone'];
  
  $email= $_SESSION['email'];
   $password=$_SESSION['password'];
   $cnfm_pswd=$_SESSION['cnfm_pswd'];
  

 
            
   
if(isset($_POST['btn']))
{
  
 
 $type=2;
  $tokenfrom=$_POST['otp'];
  $user= $_SESSION['email'];
  $tok="select token from temp where email='$user'";
  $tokres=mysqli_query($conn,$tok);
  $row=mysqli_fetch_array($tokres);
  $cnt=$row['token'];
  if($tokenfrom==$cnt)
  {

  
      
        
         $sql1= "INSERT INTO `tbl_customer`(`name`,`phone`, `email`, `password`,`cnfm_pswd`) VALUES ('$name','$phone','$email','$password','$cnfm_pswd')";
         $sql = "INSERT INTO `tbl_login`(`email`, `password`,`type`) VALUES ('$email','$password','$type')";
    $s="SELECT * FROM `tbl_customer` WHERE email='$email'";
         $res= mysqli_query($conn,$sql1);
         $res1=mysqli_query($conn,$sql);
       //  $users_id = mysqli_insert_id($conn);
        if($res){

         echo'<script> alert ("Account created");window.location.href="../login/login.php";</script>';  
         exit;
     }         

   }
  else{
    $tokenerr=true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>otp validation</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body class="bg-gradient-primary" bgcolor="pink">

    <div class="container">
<center>
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-password-image"></div> -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Enter Your OTP?</h1>
                                        <!-- <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                            and we'll send you a link to reset your password!</p> -->
                                    </div>
                                    <form class="user" method="post" action="validateemail.php">

                                    <script>
                                        function showerr()
                                            {
                                                document.getElementById("time").style.visibility="visible";

                                            }
                                            setTimeout("showerr()",0);

                                            function hideerr()
                                            {
                                                document.getElementById("time").style.visibility="hidden";

                                            }
                                            setTimeout("hideerr()",3000);
                                    </script>
                                    <?php 

                                    if($mailmsg) {
                                        
                                        echo ' <div class="alert alert-danger 
                                            alert-dismissible fade show" role="alert" id="time" style="visibility:hidden">'. $mailmsg.'

                                    
                                    </div> '; 
                                    
                                    }
                                    ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" style="color:blue;width:200px;height:50px;" name="otp"
                                                id="otp" aria-describedby="emailHelp"
                                                placeholder="Enter your otp...">
                                        </div><br>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" style="background-color:blue;color:blue;width:100px;height:50px;color:white;" name="btn" value="submit">
                                            
                                    </input></center>
                                    </form>
                                    
                                    <!-- <div class="text-center">
                                        <a class="small" href="login.php">Create an Account!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Already have an account? Login!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>