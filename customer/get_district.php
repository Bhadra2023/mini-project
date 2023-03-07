<?php
	include 'config.php';
	$s_id=$_POST["state_id"];
	//echo "$category_id"; exit;
	$result = mysqli_query($conn,"SELECT * FROM district where state_id=$s_id");
?>
<option value="">Select District</option>
<?php
while($row1=mysqli_fetch_array($result)) {
?>
	<option value="<?php echo $row1["districtid"];?>"><?php echo $row1["district_title"];?></option>
<?php
}
?>