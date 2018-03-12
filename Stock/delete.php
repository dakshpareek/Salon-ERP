<?php
include('../database/connection.php');

$id  = mysqli_real_escape_string($conn,$_GET['id']);
$num= mysqli_real_escape_string($conn,$_GET['num']);

$sql = "delete from stock where id='$id'";
if ($result = mysqli_query($conn, $sql))
{
	echo "<script>alert('Deleted');location.href='index.php';</script>";
}
else
{
	echo "<script>alert('Error');</script>";
}

mysqli_close($conn);
?>