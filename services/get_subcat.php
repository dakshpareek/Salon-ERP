<?php
include('../database/connection.php');

$id= mysqli_real_escape_string($conn,$_GET['id']);

#echo $dt;

$query="select DISTINCT service_cat from services where master_cat='$id'";
$result = mysqli_query($conn, $query);

$ser=array();

while($row11 = mysqli_fetch_assoc($result)) {
#	echo  $row11['service_cat'];
array_push($ser, $row11['service_cat']);
}
$myObj = new \stdClass();
$myObj->data=$ser;
$myJSON = json_encode($myObj);
echo $myJSON;

mysqli_close($conn);

?>