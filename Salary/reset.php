<?php
include('../database/connection.php');

$id= $_GET['id'];
$sal= $_GET['sal'];

#echo $dt;

$query="update employee set rsalary='$sal' where id='$id'";
#$result = mysqli_query($conn, $query);

if (!mysqli_query($conn,$query))
  {
  echo("Error description: " . mysqli_error($conn));
  }

mysqli_close($conn);


?>