<?php
include("connection.php");
if (isset($_POST['submit'])) {

	$fnn=$_POST['fn'];
	$lnn=$_POST['ln'];
	$emm=$_POST['em'];
	$pwdd=$_POST['pwd'];
	$cpwdd=$_POST['cpwd'];
	if ($pwdd!=$cpwdd) {
		echo "not match";
		header("location:reg.php");
		# code...
	}
	else{




	$match=mysqli_query($con, "INSERT INTO `reg`( `first name`, `last name`, `email id`, `password`) VALUES ('".$fnn."','".$lnn."','".$emm."','".$pwdd."')");
	if ($match) {
		echo "data inserted";

		header("location:login.php");
	}
	else{
		echo "not inserted";
		header("loction:reg.php");
	}

}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>reg</title>

<link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
	
	<div class="reg-box">
		<h1 style="text-align: center">REGISTER</h1>
		<form id="form" method="POST" action="">
    
			<div>
				<input type="text" name="fn" class="input-box" placeholder="First name">
				<br>
				<input type="text" name="ln" class="input-box"    placeholder="Last name">

			</div>
			<br>
			<div>
				<input type="text" name="em"  class="input-box"  placeholder="Email">
			</div>
			<br>
			<div>
				<input type="text" name="pwd"   class="input-box" placeholder="Password">
			</div>
			<br>
			<div>
				<input type="text" name="cpwd"   class="input-box" placeholder="Conform password">
			</div>
			<br>
<div>
	<input type="file" name="">
</div>

			<div>
				<h6><input type="checkbox" name="checkbox">i accept the term of use & privacy policy </h6>
			</div>
			<div>
				<button type="submit" name="submit"><font color="white">Register Now</font></button>
			</div>



		</form>



	</div>



</body>
</html>