<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Jewel</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" type="text/css" href="./customer/css/style.css">
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
         <div class="header-top">
            <div class="header">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                           <div class="limit-box">
                              <nav class="main-menu">
                                 <ul class="menu-area-main">
                                    <li class="active"> <a href="index.php">Home</a> </li>
                                    <li> <a href="#jewellery">jewellery</a> </li>
                                    <li> <a href="#contact">Contact</a> </li>
                                    

 <li> <a href="./login/login.php">Signin</a> </li>
 


                                 
                                 <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">signup</a>
                                    <ul class="dropdown-menu">
                                       <li class="nav-item"><a class="nav-link" href="./cust_reg/add_cust.php">Customer</a></li>
                                       <li class="nav-item"><a class="nav-link" href="./employee/emp_reg.php">Employee</a></li>
                                    </ul>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <section class="slider_section">
               <div class="banner_main">
                  <div class="container">
                     <div class="row d_flex">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
                           <div class="text-bg">
                              <h1>MODEL ME JEWELLERY SHOPPING</h1>
                              
                              <a href="#">Contact Us</a>
                           </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                           <div class="text-img">
                              <figure><img src="images/img.png" /></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
         </section>
         
         </div>
      </header>
      <!-- Best  -->
      <div class="jewellery_section">
         <div id="jewellery" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Jewellery Accessories</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                        <?php 
                              include("config.php");
                              $query= "SELECT * FROM tbl_product  where status='0'";
                              $query_run = mysqli_query($conn, $query);
                              $check_tbl_product = mysqli_num_rows($query_run) > 0;
                              
                              
                          if($check_tbl_product)
                          {
                             while($row = mysqli_fetch_assoc($query_run))
                             {
                                 
                                 ?> 
                           <div class="col-lg-4 col-sm-4">
                           
                              <div class="box_main"> 
                             
                                  <!-- <div class="col-lg-4 col-sm-4"> -->
                          
                          
                             <!-- <div class="box_main"> -->
                               <h4 class="shirt_text"><?php echo $row['prod_name'];?> </h4>
                                 <p class="price_text">Price  <span style="color: #262626;"><?php echo $row['price'];?></span></p>
                                 <div class="jewellery_img"><img src="./Admin/photo/<?php echo $row['photo'];?>" height="500px" width="500px"> </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="./login/login.php">Buy Now</a></div>
                                    <div class="seemore_bt"><a style='color:#090' href='cust_view.php?cid=".$display['subcat_id']."'>View More</a></div>
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
              

      <!-- <div id="jewellery" class="Best">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Best jewellery</h2>
                     <p> a reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="best_main">
                     <div class="row d_flex">
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                           <div class="best_text">
                              <p>A reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                              <a href="#">See More</a>
                           </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                           <div class="best_img">
                              <h4>Best Design Of Ring</h4>
                              <figure><img src="images/beimg.png"></figure>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="best_main">
                     <div class="row d_flex">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                           <div class="best_img croos_rt">
                              <h4>Best Design Of Ring</h4>
                              <figure><img src="images/beimg2.png"></figure>
                           </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                           <div class="best_text flot_left">
                              <p>A reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                              <a href="#">See More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="best_main pa_bot">
                     <div class="row d_flex">
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                           <div class="best_text">
                              <p>A reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                              <a href="#">See More</a>
                           </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                           <div class="best_img d_none">
                              <h4>Best Design Of Ring</h4>
                              <figure><img src="images/beimg3.png"></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- end Best -->
      <!-- contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Request a  call back</h2>
                     <p> A reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a long established fact that a reader will be distracted by the readable content </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                  <div class="contact">
                     <form>
                        <div class="row">
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Name" type="text" name="Name">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Phone Number" type="text" name="Phone Number">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Email" type="text" name="Email">
                           </div>
                           <div class="col-sm-12">
                              <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                           </div>
                           <div class="col-sm-12">
                              <button class="send">Send</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                  <div class="rable-box">
                     <figure>
                     <img src="images/cac.png" alt="#" />
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
                 
                                  
                                    
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="call_now2">
                        <h3>Free Multipurpose Responsive </h3>
                        <span>Landing Page 2019</span>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="call_now">
                        <h3>Call Now</h3>
                        <span>(+1)1234567890</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <p>© 2019 All Rights Reserved. <a href="https://html.design/">Free html Templates</a></p>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    
   </body>
</html>