<?php
include('../database/connection.php');

$exp  = $_POST['experties'];
$ename= mysqli_real_escape_string($conn,$_POST['ename']);
$email= mysqli_real_escape_string($conn,$_POST['email']);
$phone= mysqli_real_escape_string($conn,$_POST['phone']);
$address= mysqli_real_escape_string($conn,$_POST['address']);
#$del= mysqli_real_escape_string($conn,$_POST['del']);
$des= mysqli_real_escape_string($conn,$_POST['des']);



$final=implode(",",$exp);

if (!empty($_FILES["file"]["name"])) 
{
$name = $_FILES['file']['name'];


$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

 // Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif");

if( in_array($imageFileType,$extensions_arr) ){
 
  $insert = $conn->query("INSERT into employee (ename,email,phone,address,image,experties,status) VALUES ('$ename','$email','$phone','$address','$name','$final','$des')");
        if($insert){
            echo "<script>alert('Employee Added');location.href='index.php';</script>";
        }else{
            echo "Failed, please try again.";
        } 

  }


 move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

}
else
{
	$name=NULL;
 
  $insert = $conn->query("INSERT into employee (ename,email,phone,address,image,experties,status) VALUES ('$ename','$email','$phone','$address','$name','$final','$des')");
        if($insert){
            echo "<script>alert('Employee Added');location.href='index.php';</script>";
        }else{
            echo "Failed, please try again.";
        } 
}
 // Check extension
 

mysqli_error($conn);
mysqli_close($conn);
?>