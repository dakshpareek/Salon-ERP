<?php
include('../database/connection.php');

$id  = mysqli_real_escape_string($conn,$_POST['id']);
$th= mysqli_real_escape_string($conn,$_POST['therapy']);
$pri= mysqli_real_escape_string($conn,$_POST['price']);

$sql = "update services set service_name='$th',price='$pri' where id='$id'";
if ($result = mysqli_query($conn, $sql))
{
	echo "<script>alert('Therapy Updated');location.href='index.php';</script>";
}
else
{
	echo "<script>alert('Error');</script>";
}

mysqli_close($conn);
?>