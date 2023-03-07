> <?php
include("config.php");
	$email=$_SESSION["email"];
	$sql=mysqli_query($conn,"SELECT * FROM `tbl_login` where email='$email'");
	$display=mysqli_fetch_array($sql);
	$curentpwd=$display["Password"];

?>
<?php
if(isset($_POST["btnsubmit"]))
{
	$enterpassword=$_POST['password'];
echo $curentpwd;
	if($curentpwd==$enterpassword)
	{
		
		
	
			$password=$_POST['npd'];
			$sql=mysqli_query($conn,"UPDATE tbl_login SET Password='$password' WHERE email='$email'");
			if($sql)
			{
					echo "<script>alert('Password Updated Succesfully!!Plase login again!!');window.location='index.php'</script>";
			}
	}
	else
		echo "<script>alert('Please enter current password correctlty!!');window.location='changepd.php'</script>";
}
?>