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
<html lang="en">
   <head>
  
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
      <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
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
                     <div class="logo"><a href="index.php"><h1 style="font-family:algerian;color:#ffffff;fontsize: 5spx;">JeWel</h1></a></div>
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
                     
                     <a href="address.php">  Address</a>
                     <a href="addressview.php">View address</a>
                     <a href="cart.php"> My Cart</a>
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
                        <input type="text" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
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
         <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favourite shopping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
<?php 
                              
                              $pid=$_GET['pid'];
                              $query= "SELECT * FROM tbl_product where pid=$pid";
                              $query_run = mysqli_query($conn, $query);
                              $check_tbl_product = mysqli_num_rows($query_run) > 0;
                              
                              
                          if($check_tbl_product)
                          {
                             while($row = mysqli_fetch_assoc($query_run))
                             {
                                 
                                  ?> 
<form action="order.php" style="padding-top: 30%;" method="post">
<input type="hidden" value="<?php echo $row['pid']?>" name="hiddenpid" id="hiddenpid"/>
  <div class="container" style="margin-left:70px; margin-bottom:5%;padding-left:-25px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;padding-top:5%;background-image:url(images/)">

    <h2 style="text-align: center;margin-left: 1%;margin-bottom: -8%;margin-top: -5%;font-family: fantasy;"><?php echo $row['prod_name'] ?></h2>
    <br><br><br>
    <div class="row" style="    background-color: #efefef;">
      <div class="col-md-9" style="margin-top: 14%;
    margin-left: 6%;"> <img src="../Admin/photo/<?php echo $row['photo'] ?>" width="400px" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:  44%;" width="150px" height="400px"/> </div>
      <div class="col-md-6" style="    margin-top: -49%;
    margin-left: 51%;">
      <input type="hidden" value="<?php echo $row['prod_name']?>" name="hiddenpname" id="hiddenpname"/>

     <input type="hidden" value="<?php echo $row['photo']?>" name="hiddenimg" id="img"/>
     <input type="hidden" class="form-control"  name="old" value="<?php echo $row['photo'];?>" >
        <p style="color:black;font-size: larger;">Product Name:</p>
        <p style="color:green"><b>
        <input type="hidden" class="form-control"  name="old1" value="<?php  echo $row['prod_name']?>" >
          <?php  echo $row['prod_name']?>
          </b> </p>
           
        <p style="color:black;font-size: larger;">Price:</p>

        <p style="color:green"><b>
          <?php  echo $row['price']?>
           <input type="hidden" value=" <?php  echo $row['price']?>"  name="txtprice" id="txtprice" class="form-control" />

          </b> </p>
           <p style="color:black;font-size: larger;">Description:</p>
        <p style="color:green"><b>
          <?php  echo $row['des']?>
          </b> </p>
        <p style="color:black">Enter Your Quantity:</p>
        <p style="color:green">
          <input type="text" name="txtqty" id="txtqty" value="" min="1" max="3" class="form-control" style="width: 201px;" autofocus onchange="funcation1()" required/>
        </p>
        <script>
		function funcation1(){		
		var qty=document.getElementById("txtqty").value;
		var price=document.getElementById("txtprice").value;
		var total=qty*price;
		document.getElementById("totamt").value=total;
      var amt1 = total;
      document.getElementById("myValue").value=amt1;

		}
		</script>



         <p style="color:black">Total amt:</p>
        <p style="color:green">
          <input type="text" name="totamt" id="totamt" value="" readonly  class="form-control" style="width: 201px;" autofocus required/>
          <?php echo "<input type='hidden' id='myValue' value=''>";?> 
        </p>
        <br />
        <input type="button" name="pay" id ="rzp-button1" value="checkout" onclick="pay_now()" class="btn btn-success">
      </div>
    </div>
    <br />
  </div>
  </div>
</form>
</body>
<script>

// var val= document.getElementById("totamt").value=total;
    function pay_now(){

    var name=jQuery('#name').val();
    var amt=jQuery('#myValue').val();
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
            url:'payment.php',
            data:"payment_id="+response.razorpay_payment_id+"&amt="+amt+"&name="+name,
            success:function(result){
                window.location.href="thankyou.php";
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
</html>

<?php
                             }
                             }
?>



