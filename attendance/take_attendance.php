<?php
include('../database/connection.php');

$dt= $_GET['dt'];
$tm= $_GET['tm'];
$id= $_GET['id'];
$st= $_GET['st'];

echo $dt;

$query="insert into attendance(ename,dt,intime,status) values ('$id','$dt','$tm','$st')";
#$result = mysqli_query($conn, $query);

if (!mysqli_query($conn,$query))
  {
  echo("Error description: " . mysqli_error($conn));
  }

mysqli_close($conn);


?>