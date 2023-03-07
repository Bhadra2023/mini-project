<?php
include("config.php");



if(isset($_POST["btnsubmit"]))
{

    $Name=$_POST['c_name'];
    //$photoo=$_FILES["photoo"]["name"];
    $photo=$_FILES["photo"]["name"];
    move_uploaded_file($_FILES["photo"]["tmp_name"],"photo/".$_FILES["photo"]["name"]);
    //move_uploaded_file($_FILES["photoo"]["tmp_name"],"photoo/".$_FILES["photoo"]["name"]);
    $s=mysqli_query($conn,"SELECT count(*) as count FROM tbl_cat WHERE c_name='$Name'");
  		$display=mysqli_fetch_array($s);
  		if($display['count']>0)
		{
		echo "<script>alert('This category name is already exist');window.location='Category.php'</script>";	
		}
		
		else
    {
    
    $sql=mysqli_query($conn,"INSERT INTO tbl_cat(`c_name`,`photo`) VALUES('$Name','$photo')");

    }
    
    
    if($sql)
      {
       
echo "<script>alert('Category Details Registered Successfully!!');window.location='Category.php'</script>";
      }
    else
      {
    echo "<script>alert('Error');window.location='index.php'</script>";
      }
    }
    
    
  	
?>

