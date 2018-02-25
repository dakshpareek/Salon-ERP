<?php
include('../database/connection.php');

$id = intval($_GET['id']);
$query="select * from employee where id=".$id;
$result1 = mysqli_query($conn, $query);


$q1="select DISTINCT master_cat from services";
$r1=mysqli_query($conn,$q1);

$ser= array();


$farr=array();

while($row11 = mysqli_fetch_assoc($r1)) {
array_push($ser, $row11['master_cat']);
}

$final=implode(",",$ser);

$myObj = new \stdClass();




while($row1 = mysqli_fetch_assoc($result1)) {
$exp=$row1['experties'];
$myObj->expertise=$exp;
$myObj->id=$row1['id'];
$myObj->name=$row1['ename'];
$myObj->email=$row1['email'];
$myObj->phone=$row1['phone'];
$myObj->address=$row1['address'];
$myObj->image="upload/".$row1['image'];
$myObj->ser=$final;
}
$myJSON = json_encode($myObj);
echo $myJSON;
mysqli_close($conn);

?>