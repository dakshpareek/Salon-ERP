<?php
include('../database/connection.php');

$tm= $_GET['tm'];
$id= $_GET['id'];

#echo $dt;

$query="update attendance set outtime='$tm' where id='$id'";
#$result = mysqli_query($conn, $query);

if (!mysqli_query($conn,$query))
  {
  echo("Error description: " . mysqli_error($conn));
  }

mysqli_close($conn);


?>