<?php
include("connection.php");
$conn=$_GET['id'];
$del=mysqli_query($con,"DELETE FROM `reg` WHERE id=$conn");
if ($del) {
	header("location:admin.php");

	# code...
}
else{
	header("location:admin.php");

}
?>