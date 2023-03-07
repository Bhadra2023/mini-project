<?php 
include "config.php";
include "session.php";

if (isset($_GET['leave_id'])) {
	$leave_id = $_GET['leave_id'];


$sql="UPDATE `tbl_leave` SET `leavestatus`=0 WHERE `leave_id`='$leave_id'";

	$result = $conn->query($sql);

	if ($result == TRUE) {
		?>
		<script>
		if(window.confirm('removed succesfully '))
		{
			window.location.href='request.php';
		};
		</script>
		<?php
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?> 