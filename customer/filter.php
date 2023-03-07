<?php
include("config.php");
session_start();
$email=$_SESSION['email'];
$sql1="select * from `tbl_customer` where email='$email'";
$res=$conn->query($sql1);
$row1=$res->fetch_assoc();
$id=$row1['cust_id'];

// $sql5="select * from `tbl_cart` where reg_id='$id'";
// $res5=$con->query($sql5);
// $row5=$res5->fetch_assoc();
// echo $status=$row5['status'];exit;
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

      <link rel="stylesheet" href="Filter/css/bootstrap.min.css">
    <link href = "Filter/css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="Filter/css/style.css" rel="stylesheet">
    <link href="Filter/css/style1.css" rel="stylesheet">
    

    <script src="Filter/js/jquery-1.10.2.min.js"></script>
    <script src="Filter/js/jquery-ui.js"></script>
    <script src="Filter/js/bootstrap.min.js"></script>
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
                     <a href="index.php">Home</a>
                     
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
</form>
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
                     <h1 class="fashion_taital">Jewellery Accessories</h1>
                     <form action="" style="padding-top: 7%;" method="post">
                     <div class="fashion_section_2">
                        <div class="row"> <div class="col-md-3">                				
				<div class="list-group">
					<h3>Price</h3>
					<input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="10000" />
                    <p id="price_show">100 - 10000</p>
                    <div id="price_range"></div>
                </div>		
                		
                
            <div class="col-md-9">
            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>

    <style>
#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        // var brand = get_filter('brand');
        // var ram = get_filter('ram');
       
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:100,
        max:10000,
        values:[100, 10000],
        step:100,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>





                        
                           
                            
                       
            <!-- //                 <div class="col-lg-4 col-sm-4">
            //                   <div class="box_main">
            //                      <h4 class="shirt_text">Necklaces</h4>
            //                      <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
            //                      <div class="jewellery_img"><img src="images/neklesh-img.png"></div>
            //                      <div class="btn_main">
            //                         <div class="buy_bt"><a href="#">Buy Now</a></div>
            //                         <div class="seemore_bt"><a href="#">See More</a></div>
            //                      </div>
            //                   </div>
            //                </div>
            //                <div class="col-lg-4 col-sm-4">
            //                   <div class="box_main">
            //                      <h4 class="shirt_text">Kangans</h4>
            //                      <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
            //                      <div class="jewellery_img"><img src="images/kangan-img.png"></div>
            //                      <div class="btn_main">
            //                         <div class="buy_bt"><a href="#">Buy Now</a></div>
            //                         <div class="seemore_bt"><a href="#">See More</a></div>
            //                      </div>
            //                   </div>
            //                </div>
            //             </div>
            //          </div>
            //       </div>
            //    </div>
            //    <div class="carousel-item">
            //       <div class="container">
            //          <h1 class="fashion_taital">Jewellery Accessories</h1>
            //          <div class="fashion_section_2">
            //             <div class="row">
            //                <div class="col-lg-4 col-sm-4">
            //                   <div class="box_main">
            //                      <h4 class="shirt_text">Jumkas</h4>
            //                      <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
            //                      <div class="jewellery_img"><img src="images/jhumka-img.png"></div>
            //                      <div class="btn_main">
            //                         <div class="buy_bt"><a href="#">Buy Now</a></div>
            //                         <div class="seemore_bt"><a href="#">See More</a></div>
            //                      </div>
            //                   </div>
            //                </div>
            //                <div class="col-lg-4 col-sm-4">
            //                   <div class="box_main">
            //                      <h4 class="shirt_text">Necklaces</h4>
            //                      <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
            //                      <div class="jewellery_img"><img src="images/neklesh-img.png"></div>
            //                      <div class="btn_main">
            //                         <div class="buy_bt"><a href="#">Buy Now</a></div>
            //                         <div class="seemore_bt"><a href="#">See More</a></div>
            //                      </div>
            //                   </div>
            //                </div>
            //                <div class="col-lg-4 col-sm-4">
            //                   <div class="box_main">
            //                      <h4 class="shirt_text">Kangans</h4>
            //                      <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
            //                      <div class="jewellery_img"><img src="images/kangan-img.png"></div>
            //                      <div class="btn_main">
            //                         <div class="buy_bt"><a href="#">Buy Now</a></div>
            //                         <div class="seemore_bt"><a href="#">See More</a></div>
            //                      </div>
            //                   </div>
            //                </div>
            //             </div>
            //          </div>
            //       </div>
            //    </div>
            //    <div class="carousel-item">
            //       <div class="container">
            //          <h1 class="fashion_taital">Jewellery Accessories</h1>
            //          <div class="fashion_section_2">
            //             <div class="row">
            //                <div class="col-lg-4 col-sm-4">
            //                   <div class="box_main">
            //                      <h4 class="shirt_text">Jumkas</h4>
            //                      <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
            //                      <div class="jewellery_img"><img src="images/jhumka-img.png"></div>
            //                      <div class="btn_main">
            //                         <div class="buy_bt"><a href="#">Buy Now</a></div>
            //                         <div class="seemore_bt"><a href="#">See More</a></div>
            //                      </div>
            //                   </div>
            //                </div>
            //                <div class="col-lg-4 col-sm-4">
            //                   <div class="box_main">
            //                      <h4 class="shirt_text">Necklaces</h4>
            //                      <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
            //                      <div class="jewellery_img"><img src="images/neklesh-img.png"></div>
            //                      <div class="btn_main">
            //                         <div class="buy_bt"><a href="#">Buy Now</a></div>
            //                         <div class="seemore_bt"><a href="#">See More</a></div>
            //                      </div>
            //                   </div>
            //                </div>
            //                <div class="col-lg-4 col-sm-4">
            //                   <div class="box_main">
            //                      <h4 class="shirt_text">Kangans</h4>
            //                      <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
            //                      <div class="jewellery_img"><img src="images/kangan-img.png"></div>
            //                      <div class="btn_main">
            //                         <div class="buy_bt"><a href="#">Buy Now</a></div>
            //                         <div class="seemore_bt"><a href="#">See More</a></div>
            //                      </div>
            //                   </div>
            //                </div>
            //             </div>
            //          </div>
            //       </div>
            //    </div>
            // </div> --> 
          
    
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
      </script>
   </body>
</html>