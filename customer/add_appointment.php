<?php
include('../database/connection.php');

$a2 = "";

$services=array();
$employee=array();

foreach ($_POST as $key => $value)
{
	#echo $key,$value;
	
	if ($key[0]=='s')
	{
array_push($services, $value);
	}
	else if($key[0]=='e')
	{
		array_push($employee, $value);
	}
	

}



$ename=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['mail']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
print($phone);
$tm=$_POST['time'];
$gen=$_POST['gen'];



$the=implode(',', $employee);
$ser=implode(',', $services);
$now=date('Y-m-d');

/*
if($phone='')
{
$phone=0;
}
*/
$sql2 = "insert into active(ename,phone,therapy,therapist,dt,start,gender) values ('$ename','$phone','$ser','$the','$now','$tm','$gen')";
#echo $sql2;
$result2 = mysqli_query($conn, $sql2);
#echo "<script>alert('Appointment Added..!');location.href='index.php';</script>";
echo mysqli_error($conn);
 //echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
?>