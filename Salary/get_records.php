<?php 
include('../database/connection.php');



$dt=mysqli_real_escape_string($conn,$_GET['dt']);
$sql2 = "select * from salary where edate='$dt'";
#echo $sql2;
$result2 = mysqli_query($conn, $sql2);
while($row2 = mysqli_fetch_assoc($result2)) {
?>
<tr>
<td><?php echo $row2['ename'];?></td>
<td><?php echo $row2['emoney'];?></td>
</tr>
<?php }

mysqli_error($conn); ?>