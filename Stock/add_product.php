<?php
include('../database/connection.php');

$cat  = mysqli_real_escape_string($conn,$_POST['cat_name']);
$th= mysqli_real_escape_string($conn,$_POST['pname']);
$time= mysqli_real_escape_string($conn,$_POST['quantity']);


$sql = "Insert into stock(category,name,quant) values ('$cat','$th','$time')";
if ($result = mysqli_query($conn, $sql))
{
	echo "<script>alert('Product Added');location.href='index.php';</script>";
}
else
{
	echo "<script>alert('Error');</script>";
	echo mysqli_error($conn);
}

mysqli_close($conn);
?>