<?php
include("connection.php");
if (isset($_POST['submit'])) {

$name=$_FILES['file']['name'];
$temp=$_FILES['file']['tmp_name'];
move_uploaded_file($temp,"img/".$name);
$var=mysqli_query($con,"INSERT INTO `images`( `image`) VALUES ('$name')");

if ($var) {
	header("location:admin.php");

	
}
else 
header("location:admin.php");


}

?>