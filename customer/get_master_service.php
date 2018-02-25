<?php
include('../database/connection.php');

$id =mysqli_real_escape_string($conn,$_GET['id']);

$query="select DISTINCT service_cat from services where master_cat='$id'";

$a2 = "<option value='Select'>Select</option>";
$result2 = mysqli_query($conn, $query);
while($row2 = mysqli_fetch_assoc($result2)) {
 		$st1="<option value='".$row2['service_cat']."'>".$row2['service_cat']."</option>";
		$a2 .= $st1;
	 }

echo $a2;
mysqli_close($conn);

?>