<?php
include('../database/connection.php');


$dt= $_GET['dt'];
$id= mysqli_real_escape_string($conn,$_GET['id']);
$st= mysqli_real_escape_string($conn,$_GET['st']);

$q2="UPDATE employee SET rsalary = rsalary - '$st' where ename='$id' ";

#echo $q2;

if (!mysqli_query($conn,$q2))
  {
  echo("Error description: " . mysqli_error($conn));
  }

$query="insert into salary(ename,edate,emoney) values ('$id','$dt','$st')";

if (!mysqli_query($conn,$query))
  {
  echo("Error description: " . mysqli_error($conn));
  }

mysqli_error($conn);
mysqli_close($conn);



?>