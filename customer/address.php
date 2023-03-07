<?php
include "../login/config.php";
session_start();
$email=$_SESSION['email'];
if(!isset($email)){
    session_destroy();
    header('location:../login/login.php');
}

$sql="SELECT * FROM `tbl_customer` WHERE email='$email'";
$gotresult=mysqli_query($conn,$sql);
if($gotresult)
{
if(mysqli_num_rows($gotresult) > 0)
{
while($row=mysqli_fetch_array($gotresult))
{
// print_r($row['email']);
?>
<center><h2 style="font-family:algerian;color:800080;"><i>Welcome <?php echo$row['name'];?></i></h1></center>
<?php
}

}
}
?>




<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Jewel</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.php"><b><h1 style="font-family:algerian;color:#ffffff;fontsize: 5spx;">JeWel</h1></b></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="index.html">Home</a>
                     
                     <a href="jewellery.html">Jewellery</a>
                     <a href="address.php">  Address</a>
                     <a href="addressview.php">View address</a>
                     <a href="cart.php">My Cart</a>
                     <a href="Orderview.php">My Orders</a>
                     <a href="../login/updatePass.php">change password</a>

                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                     <div class="search">
<form action="phpSearch.php" method="post">
Search <input type="text" name="search">
<input type ="submit">
</form></div> 
                        <!-- <input type="text" class="form-control" placeholder="Search this blog"> -->
                        <div class="input-group-append">
                           <!-- <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 "> -->
                           <!-- <i class="fa fa-search"></i> -->
                           <!-- </button> -->
                        </div> 
                      
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="images/flag-france.png" class="mr-2" alt="flag">
                           French
                           </a>
                        </div>
                     </div>
                     <div class="login_menu">
                        <ul>
                           <li><a href="cart.php">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10">Cart</span></a>
                           </li>
                          
                           <li><a href="../login/login.php">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="padding_10">Logout</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favourite shopping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favourite shopping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favourite shopping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->
      
      <!-- electronic section end -->
      <!-- jewellery  section start -->
      <div class="jewellery_section">
         <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Add Address</h1>
                     <div class="fashion_section_2">
                        <div class="row">

                        <form role="form" action="" method="post">
                                    <div class="form-group">
                                    <?php
$conn=mysqli_connect("localhost","root","","jewel");


$sql=mysqli_query($conn,"select * from tbl_customer"); 
?>
<label> Name</label><br>

     
<select   name="cust_id" onchange="showResult(this.value)" class="form-control m-bot15" required >
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
                                    <!-- <span id="msg1" style="color:red;"></span>
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
                   </script> -->
<div class="form-group">
<?php
$conn=mysqli_connect("localhost","root","","jewel");


$sql=mysqli_query($conn,"select * from state"); 
?>
<label>State Name</label><br>

     
<select   name="state_id" id="state_id" onchange="showResult(this.value)" class="form-control m-bot15" required >
<option value="">--select--</option>
<?php
while($row=mysqli_fetch_array($sql))
{

?>
<option value="<?php echo $row[0] ?>" ><?php echo $row[1] ?></option>

<?php
    
}
?>

</select></div>
<div class="form-group">
<?php
$conn=mysqli_connect("localhost","root","","jewel");


$sql=mysqli_query($conn,"select * from district"); 
?>
<label>District Name</label><br>

     
<select   name="districtid" id="districtid" onchange="showResult(this.value)" class="form-control m-bot15" required >



</select></div>
                     <div class="form-group">
                                        <label for="des">City</label>
                                        <input type="text" class="form-control" name="des" id="des" autocomplete="nope" required onkeyup="Validstr5();">
                                    </div>
                                    <span id="msg5" style="color:red;"></span>
                 <script>
                function Validstr5() 
                {
                var val = document.getElementById('des').value;
                if (!val.match(/^[a-zA-Z ]*$/)) 
                {
                  document.getElementById('msg5').innerHTML="Only alphabets are allowed";
                        document.getElementById('des').value = "";
                          return false;
                }
                  document.getElementById('msg5').innerHTML=" ";
                 return true;
                }
           </script>
                                      <div class="form-group">           
                                        <label for="image">Pincode</label>
                                        <input type="text" class="form-control" name="pincode" id="pincode" autocomplete="nope" required onkeyup="validatePincode()";>
                                    </div>
                                    <span id="pincode-error" style="color:red;"></span>
                            <script>
                                var pincodeError=document.getElementById('pincode-error');
                           function validatePincode(){
                             var pincode = document.getElementById('pincode').value;
                             if(!pincode.match( /^(\d{4}|\d{6})$/)){
                             pincodeError.innerHTML = 'Enter valid pincode';
                                return false;
                                 }
                             pincodeError.innerHTML=" ";
                            return true;
                            }
                           </script>
                                   
                                    <div class="panel-body">

                                   <div class="row">
                                     
                                    <div class="col-md-4 form-group">
                                    <label for="qua">Phone</label>
                                    <input type="number"  class="form-control" name="phone" id="phone" required onkeyup="validatePhone()"; autocomplete="nope" required/>
                                
                            </div>
                            <span id="phone-error" style="color:red;"></span>
                            <script>
                                var phoneError = document.getElementById('phone-error');
                           function validatePhone(){
                           var phone = document.getElementById('phone').value;
                           if(!phone.match(/^[6789][0-9]{9}$/)){
                           phoneError.innerHTML = '10 digits starting with 6 7 8 or 9';
                            return false;
                              }
                             phoneError.innerHTML=" ";
                            return true;
                            }
                           </script>
                            
                            <div class="col-md-4 form-group">
                                    <label for="price">House Name</label>
                                    <input type="text" class="form-control" name="house" id="house" autocomplete="nope" required  onkeyup="Validstr2();">
                                
                            </div>
                            <span id="msg3" style="color:red;"></span>
                 <script>
                function Validstr2() 
                {
                var val = document.getElementById('house').value;
                if (!val.match(/^[a-zA-Z ]*$/)) 
                {
                  document.getElementById('msg3').innerHTML="Only alphabets are allowed";
                        document.getElementById('house').value = "";
                          return false;
                }
                  document.getElementById('msg3').innerHTML=" ";
                 return true;
                }
           </script>
                            <div class="col-md-4 form-group">
                                    <label for="price">Road Name</label>
                                    <input type="text" class="form-control" name="road" id="road" autocomplete="nope" required onkeyup="Validstr3();">
                                
                            </div>
                            <span id="msg4" style="color:red;"></span>
                 <script>
                function Validstr3() 
                {
                var val = document.getElementById('road').value;
                if (!val.match(/^[a-zA-Z ]*$/)) 
                {
                  document.getElementById('msg4').innerHTML="Only alphabets are allowed";
                        document.getElementById('road').value = "";
                          return false;
                }
                  document.getElementById('road').innerHTML=" ";
                 return true;
                }
           </script>
                            
</div>
</div>
                                <button type="submit" name="btnsubmit"class="btn btn-info">Submit</button>

                            </form>
                            </div>
                        
                           
                              <!-- </div> 
                              </div> -->
                           <!-- </div>  -->
                             <!-- </div>
                              </div>
                             </div>
                             </div>
                             </div> -->
                             <!-- </div>
                           </div>
                              </div>
                             </div>
                             </div> -->
                              <!-- </div>
                             </div> -->
                             
                    

      
            <a class="carousel-control-prev" href="#jewellery_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#jewellery_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
            <div class="loader_main">
               <div class="loader"></div>
            </div>
         </div>
      </div>
      <!-- jewellery  section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.php"><h1 style="font-family:algerian;color:#ffffff;fontsize: 5spx;">JeWel</h1></a></div>
            <div class="input_bt">
               <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
               <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_menu">
               <ul>
                  <li><a href="#">Best Sellers</a></li>
                  <li><a href="#">Gift Ideas</a></li>
                  <li><a href="#">New Releases</a></li>
                  <li><a href="#">Today's Deals</a></li>
                  <li><a href="#">Customer Service</a></li>
               </ul>
            </div>
            <div class="location_main">Help Line  Number : <a href="#">+1 1800 1200 1200</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }

$(document).ready(function() {
	$('#state_id').on('change', function() {
			var state_id = this.value;
			$.ajax({
				url: "get_district.php",
				type: "POST",
				data: {
					state_id: state_id
				},
				cache: false,
				success: function(dataResult){
					$("#districtid").html(dataResult);
				}
			});
		
		
	});
});
</script>
   </body>
</html>
<?php
include("config.php");
if(isset($_POST["btnsubmit"]))
{

    $Name=$_POST['name'];
    $cust_id=$_POST['cust_id'];
   $districtid=$_POST['districtid'];
    $des=$_POST['des'];
  
    $Q=$_POST['pincode'];
    $phone=$_POST['phone'];
    $house=$_POST['house'];
    $road=$_POST['road'];
  
    
    $sql=mysqli_query($conn,"INSERT INTO address(cust_id,districtid,city,pincode,phone,housename,roadname,status) VALUES('$cust_id','$districtid','$des','$Q','$phone','$house','$road','0')");

    
    
    
    if($sql)
      {
       
    echo "<script>alert('Product Details Registered Successfully!!');window.location='addressview.php'</script>";
      }
    else
      {
    echo "<script>alert('Error');window.location='address.php'</script>";
      }
    }
    ?>
