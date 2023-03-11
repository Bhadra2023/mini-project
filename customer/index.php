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
      <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="Filter/css/bootstrap.min.css">
    <link href = "Filter/css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="Filter/css/style.css" rel="stylesheet">
    <link href="Filter/css/style1.css" rel="stylesheet">
    

    <script src="Filter/js/jquery-1.10.2.min.js"></script>
    <script src="Filter/js/jquery-ui.js"></script>
    <script src="Filter/js/bootstrap.min.js"></script>
    <script type="text/javascript">


   
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"3ffcdd20e3ef1debd75c15855ede032d8","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>
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
                     
                     
                     <a href="address.php">Add address</a>
                    
                     <a href="addressview.php">View address</a>
                     <a href="addressview.php">View address</a>
                     <a href="cart.php">My Cart</a>
                     <a href="Order.php">My Orders</a>
                     <a href="../login/updatePass.php">change password</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                  <div class="dropdown">
                  <form method="post" action="filter.php">
        
        <button type="submit" name="submit" class="btn btn-success" id="viewbtn">
          FILTER
        </button>
        </form>
                     <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter
                     </button> -->
                     
                     <!-- <a herf="Filter/sindex.php" class="btn btn-secondary dropdown-toggle">Filter</a> -->
                     <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                     </div> -->
                     
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
                        <a href="" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom">English<i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
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
                        <li>  
                           </li>
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
                     <div class="fashion_section_2">
                        <div class="row">
                      <?php 
                              include("config.php");
                              $query= "SELECT * FROM tbl_cat where cstatus='0'";
                              $query_run = mysqli_query($conn, $query);
                              $check_tbl_cat = mysqli_num_rows($query_run) > 0;
                              
                              
                          if($check_tbl_cat)
                          {
                             while($row = mysqli_fetch_assoc($query_run))
                             {
                                 
                                  ?> 
                            <div class="col-lg-4 col-sm-4">
                           
                              <div class="box_main"> 
                             
                                  <!-- <div class="col-lg-4 col-sm-4"> -->
                          
                          
                             <!-- <div class="box_main"> -->
                               <h4 class="shirt_text"><?php echo $row['c_name'];?> </h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;"> 100</span></p>
                                 <div class="jewellery_img"><img src="../Admin/photo/<?php echo $row['photo'];?>" height="500px" width="500px"> </div>
                                 <div class="btn_main">
                                    <!-- <div class="buy_bt"><a href="">Buy Now</a></div> -->
                                    
                        
                                    <div class="seemore_bt"><a style='color:#090' href='cust_view.php?cid="<?php echo $row['cid'];?>"'>see More</a></div>
                                 </div>
                              </div>
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
                             
                              
                              <?php
	  }
}
				else
				{
					echo "No  Found";
				}
            ?>
				</div>
         </div>
              
        

      <!-- <div class="jewellery_section">
    //      <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
    //         <div class="carousel-inner">
    //            <div class="carousel-item active">
    //               <div class="container">
    //                  <h1 class="fashion_taital">Jewellery Accessories</h1>
    //                  <div class="fashion_section_2">
    //                     <div class="row">
    //                        <div class="col-lg-4 col-sm-4">
    //                           <div class="box_main">
    //                              <h4 class="shirt_text">Jumkas</h4>
    //                              <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
    //                              <div class="jewellery_img"><img src="images/jhumka-img.png"></div>
    //                              <div class="btn_main">
    //                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
    //                                 <div class="seemore_bt"><a href="#">See More</a></div>
    //                              </div>
    //                           </div>
    //                        </div>
    //                        <div class="col-lg-4 col-sm-4">
    //                           <div class="box_main">
    //                              <h4 class="shirt_text">Necklaces</h4>
    //                              <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
    //                              <div class="jewellery_img"><img src="images/neklesh-img.png"></div>
    //                              <div class="btn_main">
    //                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
    //                                 <div class="seemore_bt"><a href="#">See More</a></div>
    //                              </div>
    //                           </div>
    //                        </div>
    //                        <div class="col-lg-4 col-sm-4">
    //                           <div class="box_main">
    //                              <h4 class="shirt_text">Kangans</h4>
    //                              <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
    //                              <div class="jewellery_img"><img src="images/kangan-img.png"></div>
    //                              <div class="btn_main">
    //                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
    //                                 <div class="seemore_bt"><a href="#">See More</a></div>
    //                              </div>
    //                           </div>
    //                        </div>
    //                     </div>
    //                  </div>
    //               </div>
    //            </div>
    //            <div class="carousel-item">
    //               <div class="container">
    //                  <h1 class="fashion_taital">Jewellery Accessories</h1>
    //                  <div class="fashion_section_2">
    //                     <div class="row">
    //                        <div class="col-lg-4 col-sm-4">
    //                           <div class="box_main">
    //                              <h4 class="shirt_text">Jumkas</h4>
    //                              <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
    //                              <div class="jewellery_img"><img src="images/jhumka-img.png"></div>
    //                              <div class="btn_main">
    //                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
    //                                 <div class="seemore_bt"><a href="#">See More</a></div>
    //                              </div>
    //                           </div>
    //                        </div>
    //                        <div class="col-lg-4 col-sm-4">
    //                           <div class="box_main">
    //                              <h4 class="shirt_text">Necklaces</h4>
    //                              <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
    //                              <div class="jewellery_img"><img src="images/neklesh-img.png"></div>
    //                              <div class="btn_main">
    //                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
    //                                 <div class="seemore_bt"><a href="#">See More</a></div>
    //                              </div>
    //                           </div>
    //                        </div>
    //                        <div class="col-lg-4 col-sm-4">
    //                           <div class="box_main">
    //                              <h4 class="shirt_text">Kangans</h4>
    //                              <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
    //                              <div class="jewellery_img"><img src="images/kangan-img.png"></div>
    //                              <div class="btn_main">
    //                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
    //                                 <div class="seemore_bt"><a href="#">See More</a></div>
    //                              </div>
    //                           </div>
    //                        </div>
    //                     </div>
    //                  </div>
    //               </div>
    //            </div>
    //            <div class="carousel-item">
    //               <div class="container">
    //                  <h1 class="fashion_taital">Jewellery Accessories</h1>
    //                  <div class="fashion_section_2">
    //                     <div class="row">
    //                        <div class="col-lg-4 col-sm-4">
    //                           <div class="box_main">
    //                              <h4 class="shirt_text">Jumkas</h4>
    //                              <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
    //                              <div class="jewellery_img"><img src="images/jhumka-img.png"></div>
    //                              <div class="btn_main">
    //                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
    //                                 <div class="seemore_bt"><a href="#">See More</a></div>
    //                              </div>
    //                           </div>
    //                        </div>
    //                        <div class="col-lg-4 col-sm-4">
    //                           <div class="box_main">
    //                              <h4 class="shirt_text">Necklaces</h4>
    //                              <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
    //                              <div class="jewellery_img"><img src="images/neklesh-img.png"></div>
    //                              <div class="btn_main">
    //                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
    //                                 <div class="seemore_bt"><a href="#">See More</a></div>
    //                              </div>
    //                           </div>
    //                        </div>
    //                        <div class="col-lg-4 col-sm-4">
    //                           <div class="box_main">
    //                              <h4 class="shirt_text">Kangans</h4>
    //                              <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
    //                              <div class="jewellery_img"><img src="images/kangan-img.png"></div>
    //                              <div class="btn_main">
    //                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
    //                                 <div class="seemore_bt"><a href="#">See More</a></div>
    //                              </div>
    //                           </div>
    //                        </div>
    //                     </div>
    //                  </div>
    //               </div>
    //            </div>
    //         </div> -->
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
      </script>
<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
       
       
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


   </body>
</html>