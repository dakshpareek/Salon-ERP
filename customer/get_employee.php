<?php
include('../database/connection.php');

$tm = $_GET['time'];
$ser = intval($_GET['ser']);

#$tm='10:45:00';
$qq="select * from services where id=$ser";
$rr=mysqli_query($conn,$qq);

$s_data=array();
while($roww = mysqli_fetch_assoc($rr)) {
array_push($s_data,$roww['price'],$roww['duration']);
}

$query="select * from attendance where dt=CURDATE()";
$result = mysqli_query($conn, $query);

$emp_today=array();

$emp_eli=array();

$e_data=array();

while($row = mysqli_fetch_assoc($result)) {
$myObb = new \stdClass();
$myObb->name=$row['ename'];
$myObb->status=$row['status'];
$myObb->ft=$row['ft'];

array_push($emp_today, $row['ename']);
array_push($e_data, $myObb);
}
//print_r($emp_today);

#echo ($e_data[0]->status);
$q1="select ename,experties from employee";
$r1 = mysqli_query($conn, $q1);

#print_r($e_data);

function get_time_difference($time1, $time2) {
    $time1 = strtotime("1980-01-01 $time1");
    $time2 = strtotime("1980-01-01 $time2");
    
    if ($time2 < $time1) {
        $time2 += 86400;
    }
    
    return date("H:i:s", strtotime("1980-01-01 00:00:00") + ($time2 - $time1));
}

#echo get_time_difference("10:25:30", "22:40:59");



function check($name,$e_data,$tm)
{
	$st="";
	$ft="";
	$f=0;
	foreach ($e_data as $key) {
		if($key->name == $name)
		{
			$st=$key->status;
			$ft=$key->ft;
			if($st==1)
			{
				$f=1;
				break;
			}
			else
			{
				$x=get_time_difference($ft,$tm);
				$ff=explode(':',$x);
				$fff=$ff[1]/60;
				$fff=$fff+$ff[0];
				if($fff < 10)
				{
					$f=1;
					break;
				}
				else
				{
					break;
				}

			}

			
		}

	}
	return $f;
};

#echo check('e1',$e_data,$tm);


while($row1 = mysqli_fetch_assoc($r1)) {
//echo $row1['ename'];
if(in_array($row1['ename'], $emp_today))
{
$exx=$row1['experties'];
$ex=explode(',', $exx);

if(in_array($ser,$ex))
{

	#array_push($emp_eli,$row1['ename']);
	$fine=check($row1['ename'],$e_data,$tm);

	if($fine==1)
	{
		array_push($emp_eli,$row1['ename']);
	}

}

}

#array_push($emp_today, $row11['ename']);
}


//$ser= array();
$myObj = new \stdClass();
/*
while($row11 = mysqli_fetch_assoc($result1)) {
array_push($ser, $row11['service_name']);
}

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

$myObj->arr=$emp_eli;
$myObj->data=$s_data;
$myJSON = json_encode($myObj);
echo $myJSON;
mysqli_close($conn);

?>