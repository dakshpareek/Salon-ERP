<?php
include('../database/connection.php');

$id  = mysqli_real_escape_string($conn,$_POST['id']);

$sql = "delete from services where id='$id'";
if ($result = mysqli_query($conn, $sql))
{
	echo "<script>alert('Therapy Deleted');location.href='index.php';</script>";
}
else
{
	echo "<script>alert('Error');</script>";
}

mysqli_close($conn);
?>