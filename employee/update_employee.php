<?php
include('../database/connection.php');

$exp  = $_POST['experties1'];
$ename= mysqli_real_escape_string($conn,$_POST['uename']);
$email= mysqli_real_escape_string($conn,$_POST['uemail']);
$phone= mysqli_real_escape_string($conn,$_POST['uphone']);
$address= mysqli_real_escape_string($conn,$_POST['uaddress']);
$sal= mysqli_real_escape_string($conn,$_POST['usalary']);
$uid= mysqli_real_escape_string($conn,$_POST['uid']);


$final=implode(",",$exp);

$query="update employee set experties='$final',ename='$ename',email='$email',phone='$phone',address='$address',salary='$sal',rsalary='$sal' where id='$uid'";

if ($result = mysqli_query($conn, $query))
{
	echo "<script>alert('Updated');location.href='index.php';</script>";
}
else
{
	echo "<script>alert('Error');</script>";
}
mysqli_close($conn);
?>