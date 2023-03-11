<?php

include "config.php";

session_start();
$email=$_SESSION['email'];
$sql1="select * from `tbl_customer` where email='$email'";
$res=$conn->query($sql1);
$row1=$res->fetch_assoc();
$rid=$row1['cust_id'];

$price=0;
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
            <center><h1 style="font-family:algerian;color:800080;"><i>Welcome <?php echo$row['name'];?></i></h1></center>
            <?php
        }
      
    }
}





?>
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
></script>
<title>Cart</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap'); * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Mulish', sans-serif; } :root { --text-clr: #4f4f4f; } p { color: #6c757d; } a { text-decoration: none; color: var(--text-clr); } a:hover { text-decoration: none; color: var(--text-clr); } h2 { color: var(--text-clr); font-size: 1.5rem; } .main_cart { background: #fff; } .card { border: none; } .product_img img { min-width: 200px; max-height: 200px; } .product_name { color: black; font-size: 1.4rem; text-transform: capitalize; font-weight: 500; } .card-title p { font-size: 0.9rem; font-weight: 500; } .remove-and-wish p { font-size: 0.8rem; margin-bottom: 0; } .price-money h3 { font-size: 1rem; font-weight: 600; } .set_quantity { position: relative; } .set_quantity::after { content: "(Note, 1 piece)"; width: auto; height: auto; text-align: center; position: absolute; bottom: -20px; right: 1.5rem; font-size: 0.8rem; } .page-link { line-height: 16px; width: 45px; font-size: 1rem; display: flex; justify-content: center; align-items: center; color: #495057; } .page-item input { line-height: 22px; padding: 3px; font-size: 15px; display: flex; justify-content: center; align-items: center; text-align: center; } .page-link:hover { text-decoration: none; color: #495057; outline: none !important; } .page-link:focus { box-shadow: none; } .price_indiv p { font-size: 1.1rem; } .fa-heart:hover { color: red; }
</style>
<!-- <style>
    #navb{
         color:white;
    }
</style> -->

<body class="bg-light">
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
                     <a href="index.php">Home</a>
                     
                     <a href="profile.php">Profile</a>
                     <a href="address.php">  Address</a>
                     <a href="addressview.php">View address</a>
                     <a href="cart.php">My Cart</a>
                     <a href="Order.php">My Orders</a>
                     <a href="../login/updatepass.php">change password</a>

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
                     <form action="phpSearch.php" method="post"> 
                     <div class="input-group">
                    
                        <input type="text" class="form-control" name="search" placeholder="Search">
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
               
            

<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-11 mx-auto">
<div class="row mt-5 gx-3">
<!-- left side div -->

<div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5 shadow">
<?php 
$s="select * from tbl_cart where cust_id='$rid' && `status` = '1'";
$t=0;
$run=mysqli_query($conn,$s);

// $run2=mysqli_fetch_array($run);
// if($run2<=0){
//    echo '<script>document.getElementById("totalpricebody").innerHTML="Empty Cart"</script>';
// }

while($ru=mysqli_fetch_assoc($run)){
  $id=$ru['cart_id'];
  //$pid=$ru['pid'];
  $image=$ru['image'];
  $pname=$ru['prod_name'];
  $price=$ru['price'];
  $originalprice=$ru['originalprice'];
  $qty=$ru['quantity'];
  $stk=$ru['org_stock'];


?>
    
 
<form action="" method="post">

 <div class="card p-4">


 <h2 class="py-4 font-weight-bold"></h2>
 <div class="row">
     <!-- cart images div -->

     <div class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
     <img src="../Admin/photo/<?php echo "$image";?>" class="img-fluid" alt="cart img">
     </div>


 

     <!-- cart product details -->
     <div class="col-md-7 col-11 mx-auto px-4 mt-2">
     <div class="row">
     <!-- product name  -->
     <div class="col-6 card-title">
     <h1 class="mb-4 product_name"><?php  echo "$pname"?></h1>
    
     </div>
     <!-- quantity inc dec -->
     <div class="col-2">
    Quantity<input type="number"  name="quantity" style="width:70px" id="qty-<?php echo $id; ?>" value="<?php echo $qty; ?>" onchange="func(<?php echo $id;?>)" min="1",max="300" >
    <input type="hidden" id="price-<?php echo $id; ?>" value="<?php echo $originalprice; ?>" name="pname">
    <input type="hidden" id="originalstock-<?php echo $id; ?>" value="<?php echo $stk; ?>" name="originalstock">
    <input type="hidden" id="total-<?php echo $id; ?>" name="total" value="">
    
     </div>
 </div>


 <!-- //remover move and price -->
 <div class="row">
 <div class="col-8 d-flex justify-content-between remove_wish">
 <p><a href="removecart.php?val=<?php echo $id; ?>" class="fas fa-trash-alt" style="color:red"></a> REMOVE ITEM</p>
 <!-- Default switch -->

 
 </div>
 <div class="col-4 d-flex justify-content-end price_money">
 <h3>&#x20b9<span id="itemprice-<?php echo $id; ?>"><?php echo "$price";?> </span></h3>
   <!-- <?php
   //$tPrice = $tPrice+ $price;
   ?> -->
 </div>
 </div>

    </div>
    </div>
    </div>
    <?php
}

    ?>

    <hr/>
    <!-- 2nd cart product -->

 </div>


<!-- right side div -->
<div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5" id="totalpricebody">
<div class="right_side p-3 shadow bg-white">
<h2 class="product_name mb-5">The Total Amount Of</h2>
<div class="price_indiv d-flex justify-content-between">
<p>Product amount</p>

<p><span id="total"><?php echo "$price";?></span></p>
<input type="hidden" id="totalprice" name="total1" value="<?php echo "$price"; ?>">
</div>

<!-- <div class="price_indiv d-flex justify-content-between">
<p>Shipping Charge</p>
<p><span id="shipping_charge">50.0</span></p>
</div> -->
<hr />
<div class="total-amt d-flex justify-content-between font-weight-bold">
<p>The total amount of (including VAT)</p>
<p><span id="itemprice1"><?php echo "$price";?></span></p>
<!-- <input type="hidden" id="itemprice11" name="total11" value="<?php echo "$price"; ?>"> -->
</div>
<input type="hidden" value="<?php echo $rid;?>" id="hidden_txt">
<input type="button" name="pay" id ="rzp-button1" value="Checkout" onclick="pay_now()" class="btn btn-success">
</div>
<!-- discount code part -->



</div>
</div>
</div>
</div>


<!-- discount code ends -->

</div>
</div>
</div>
</div>
</div>
</div>
</div>



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
      </script>


<!-- Optional JavaScript -->
<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<script>
function func(cart) {

var input = $("#qty-" + cart);
var input2 = $("#price-" + cart);
var qty = parseInt($(input).val());
var price = parseInt($(input2).val());
 var ostock = $("#originalstock-"+cart);

  ostock = parseInt($(ostock).val());
if(qty<1){
  alert("no negative value ");
  $("#qty-" + cart).html(1);
  $("#qty-" + cart).val(1);
  $("#itemprice-"+cart).html(price);
  $("#itemprice1").html(price);
  $("#totalprice").val(price);


}
else{


if(qty<ostock)
{
  var total=qty*price;
$("#total-"+cart).val(total);
$("#itemprice-"+cart).html(total);
$("#total").html(total);
$("#totalprice").val(total);
$("#total").html(total);
$("#itemprice1").html(total);
// $("#total").html(total);
// $("#itemprice11").html(total);
savecart(cart, qty, total);
 add(cart);
}
else{
   // $n ="hi";
  alert("Maximum Quantity reached");
  $("#qty-" + cart).val(ostock);
  var total=ostock*price;
$("#total-"+cart).val(total);
$("#itemprice-"+cart).html(total);
$("#total").html(total);
$("#totalprice").val(total);
$("#total").html(total);
$("#itemprice1").html(total);
savecart(cart, ostock, total);

}
}
// alert(total);
  };



  function savecart(cart,qty,total){
    // var input = $("#stock-"+cart);
    $.ajax({

url: "cartupdate.php",
type: "POST",
data: {
  cart: cart,
  quantity: qty,
  price: total
},
success: function (response) {
  // $(input).val(quantity);
  console.log(response);
  // alert(response);
}
});


  }

 </script>

 <script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<script>

// var val= document.getElementById("totamt").value=total;
    function pay_now(){

   var usrId=jQuery('#hidden_txt').val();

   console.log(usrId);
    var amt=$("#totalprice").val();
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
</body>
</html>