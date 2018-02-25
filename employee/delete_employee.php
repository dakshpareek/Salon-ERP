<?php
include('../database/connection.php');

$id = intval($_GET['id']);
$query="delete from employee where id=".$id;
$result1 = mysqli_query($conn, $query);

mysqli_close($conn);

?>