
<?php
include("connection.php");

$id=(isset($_GET['id']))?$_GET['id']:"";
$rr=mysqli_query($con,"SELECT * FROM `reg` where id=$id ");
$row=mysqli_fetch_assoc($rr);

?>
<!DOCTYPE html>


<html>
<head>
	<title>insertphp</title>
</head>
<body>
	<form action="" method="post">
		<center>
			<h1>information</h1>
		first name<input type="text" name="fn" value="<?php echo $row['first name'];?>"><br><br>
		last name<input type="text" name="ln" value="<?php echo $row['last name'];?>"><br><br>
		
		email id<input type="email" name="em" value="<?php echo $row['email id'];?>"><br><br>
		password<input type="text" name="pwd" value="<?php echo $row['password'];?>"><br><br>

		<input type="submit" name="submit" value="update"></center>
		



	</form>
	

</body>
</html>
<?php
if (isset($_POST['submit'])) {

     $fnn=$_POST['fn'];
    $lnn=$_POST['ln'];
    $emm=$_POST['em'];
	$pwdd=$_POST['pwd'];
$upp=mysqli_query($con,"UPDATE `reg` SET `id`=$id,`first name`='$fnn',`last name`='$lnn',`email id`='$emm',`password`='$pwdd' WHERE id=$id");
if ($upp) {
	header("location:admin.php");
	# code...
}
else{
	echo "data";
	header("location:update.php");

}

}
?>