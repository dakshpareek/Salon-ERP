<?php
include('../database/connection.php');

$id  = mysqli_real_escape_string($conn,$_GET['id']);
$num= mysqli_real_escape_string($conn,$_GET['num']);
$cat  = mysqli_real_escape_string($conn,$_GET['cat']);
$nm= mysqli_real_escape_string($conn,$_GET['nm']);
$nam= mysqli_real_escape_string($conn,$_GET['nam']);



$sql = "update stock set quant=quant - '$num' where id='$id'";
if ($result = mysqli_query($conn, $sql))
{

$sql2="insert into stock_record(ename,pname,quant,edate) values ('$nm','$nam','$num',CURDATE())";
 mysqli_query($conn, $sql2);

	echo "<script>alert('Updated');location.href='index.php';</script>";
}
else
{
	echo "<script>alert('Error');</script>";
}
mysqli_error($conn);
mysqli_close($conn);
?>