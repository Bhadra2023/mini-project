<?php
	include 'config.php';
	$category_id=$_POST["cid"];
	//echo "$category_id"; exit;
	$result = mysqli_query($conn,"SELECT * FROM tbl_subcategory where cid=$category_id");
?>
<option value="">Select SubCategory</option>
<?php
while($row1=mysqli_fetch_array($result)) {
?>
	<option value="<?php echo $row1["subcat_id"];?>"><?php echo $row1["subcat_name"];?></option>
<?php
}
?>