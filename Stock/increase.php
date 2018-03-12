<?php
include('../database/connection.php');

$id  = mysqli_real_escape_string($conn,$_GET['id']);
$num= mysqli_real_escape_string($conn,$_GET['num']);



$sql = "update stock set quant=quant +'$num' where id='$id'";
if ($result = mysqli_query($conn, $sql))
{
	echo "<script>alert('Updated');location.href='index.php';</script>";
}
else
{
	echo "<script>alert('Error');</script>";
}
mysqli_error($conn);
mysqli_close($conn);
?>