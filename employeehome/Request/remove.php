<?php
include("config.php");
session_start();
if(isset($_GET["leave_id"]))
{
$cid=$_GET["leave_id"];

$email=$_SESSION['email'];
$sql1="select * from `tbl_leave` where leave_id='$cid'";
$res=$conn->query($sql1);
$row1=$res->fetch_assoc();
$leavestatus=$row1['leavestatus'];
if($leavestatus==2 || $leavestatus==0 )
{
mysqli_query($conn,"Delete from tbl_leave where leave_id='$cid' and leavestatus='$leavestatus'");
echo"<script>alert('Leave request removed');
window.location='index.php'</script>";
}
elseif($leavestatus==1)
{
    echo"<script>alert('Leave request cannot be  remove,because leave approved');
window.location='index.php'</script>";

}
  
}
?>