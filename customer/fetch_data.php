<head>
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
<?php

//fetch_data.php

include('config.php');

// if(isset($_POST["action"]))
// {
// 	$query = "
// 		SELECT * FROM tbl_product WHERE status = '0'
// 	";

	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$n1 = $_POST["minimum_price"];
		$n2 =  $_POST["maximum_price"];
		$query = "SELECT * FROM tbl_product WHERE status = '0' AND price BETWEEN '$n1' AND '$n2'";
	    

	

	$result = $conn->query($query);
	
	?>
  
	
	
	<?php 
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			?>
 <div class="col-lg-4 col-sm-4">
                           
                           <div class="box_main"> 

	    <form action="" style="padding-top: 7%;" method="post">
			<div class="col-sm-4 col-lg-3 col-md-3">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:480px; width:300px">
        <h4 class="shirt_text"><?php echo $row['prod_name'];?> </h4><br>
        <p class="price_text">Price  <span style="color: #262626;"><b> ₹  </b><?php echo $row['price'];?></span></p><br>

        <img src="../Admin/photo/<?php echo $row['photo'];?>" height="250px" width="250px"> <br>
          <form method="post" action="">
     <center> <button type="submit" name="submit" class="btn btn-primary" id="viewbtn">
        Add to Cart
      </button>
      </form></center>
      </div>
      
      </div>
      </div>
     
<?php
		}
	}
	else
	{
		echo "No Data Found";
	}
}

?>	
    
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


