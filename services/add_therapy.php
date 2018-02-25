<?php
include('../database/connection.php');

$cat  = mysqli_real_escape_string($conn,$_POST['cat_name']);
$sub  = mysqli_real_escape_string($conn,$_POST['sub_name']);
$th= mysqli_real_escape_string($conn,$_POST['therapy']);
$time= mysqli_real_escape_string($conn,$_POST['duration']);
$pri= mysqli_real_escape_string($conn,$_POST['price']);

$sql = "Insert into services(master_cat,service_cat,service_name,duration,price) values ('$cat','$sub','$th','$time','$pri')";
if ($result = mysqli_query($conn, $sql))
{
	echo "<script>alert('Therapy Added');location.href='index.php';</script>";
}
else
{
	echo "<script>alert('Error');</script>";
	echo mysqli_error($conn);
}

mysqli_close($conn);
?>