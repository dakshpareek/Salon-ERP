<?php
include('../database/connection.php');

$id = $_GET['id'];
$query="select * from services where service_cat='".$id."'";
$result1 = mysqli_query($conn, $query);

$ser= array();
$myObj = new \stdClass();

while($row11 = mysqli_fetch_assoc($result1)) {
	$myObj1 = new \stdClass();
	$myObj1->id= $row11['id'];
	$myObj1->ser= $row11['service_name'];
	$myObj1->pri=$row11['price'];
	array_push($ser,$myObj1);
}

/*
if (sizeof($ser) > 1)
{
	$final=implode(",",$ser);
	$myObj->ser=$final;

}
else if(sizeof($ser) == 1)
{
	$final=$ser[0];
	$myObj->ser=$final;
}
else
{
$myObj->ser="No Data";
}
*/

#$myObj->arr=$ser;

$myJSON = json_encode($ser);
echo $myJSON;
mysqli_close($conn);

?>