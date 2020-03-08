<?php
session_start();
include("connection.php");
if (isset($_SESSION['ur'])) {
	session_destroy();
	header("location:adminlogin.php");
	# code...
}
if (isset($_POST['submit'])) {

	 $var=$_POST['un'];
	$pas=$_POST['pass'];
	$match=mysqli_query($con, "SELECT * FROM `admin` WHERE name='$var' AND password='$pas'");
	if ($match) {
		echo "valid";
		$_SESSION['ur']=$var;
		header("location:admin.php");
	}
	else
		echo "not valid";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>
	<link rel="stylesheet" type="text/css" href="adlogin.css">
</head>
<body>
	

<div class="login-box">
		<img src="img/avtar.png" id="pic">
		<br>
		<h2>Admin login</h2>
		<form method="POST" action="">
			<div>
			
				<input type="text" name="un" class="inputbox" placeholder="username">
			</div>
			<br>
			<div>

				<input type="password" name="pass" class="inputbox" placeholder="password">
			</div>
			<br>
			<div>
				<button type="submit" name="submit" >Login</button id="button">
			</div>
		
</form>
</body>
</html>