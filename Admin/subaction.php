<?php
include("config.php");
session_start();
if(isset($_POST["btnsubmit"]))
{
     $CId=$_POST['cid'];
    
	$Name=$_POST['name'];
  
    
    
  $s=mysqli_query($conn,"SELECT count(*) as count FROM tbl_subcategory WHERE subcat_name='$Name'");
  $display=mysqli_fetch_array($s);
  if($display['count']>0)
{
echo "<script>alert('This Subcategory name is already exist');window.location='index.php'</script>";	
}

else
{
		
$sql=mysqli_query($conn,"INSERT INTO tbl_subcategory(cid,subcat_name,sstatus)VALUES('$CId','$Name','0')");
}
if($sql)
  {
	 
echo "<script>alert('Subcategory Details Registered Successfully!!');window.location='product.php'</script>";
  }
else
  {
echo "<script>alert('Error');window.location='subcategory.php'</script>";
  }
}

?>
