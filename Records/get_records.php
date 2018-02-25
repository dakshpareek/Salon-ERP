<?php 
include('../database/connection.php');

$sdetail=array();
$sql11 = "SELECT * from services";
$result11 = mysqli_query($conn, $sql11);
while($row11 = mysqli_fetch_assoc($result11)) {
 		$dm1=$row11['service_name'];
 		array_push($sdetail, $dm1);
	 }


$dt=mysqli_real_escape_string($conn,$_GET['dt']);
$sql2 = "select * from records where dt='$dt'";
$result2 = mysqli_query($conn, $sql2);
while($row2 = mysqli_fetch_assoc($result2)) {
?>
<tr>
<td><?php echo $row2['ename'];?></td>
<td><?php echo $row2['phone'];?></td>
<td><?php
$tth=$row2['therapy'];
$tth=explode(',', $tth);
foreach ($tth as $key) {
echo $sdetail[$key-1].",";
}
?></td>
<td><?php echo $row2['price'];?></td>
<td><?php echo $row2['discount'];?></td>
</tr>
<?php }

mysqli_error($conn); ?>