<?php
session_start();
include("connection1.php");
if (isset($_SESSION['ur'])) {
	session_destroy();
	header("location:login.php");
	# code...
}
if (isset($_POST['submit'])) {

	$var=$_POST['un'];
	$pas=$_POST['pass'];
	$match=mysqli_query($con, "SELECT * FROM `user` WHERE username='$var' AND password=$pas");
	if ($match) {
		//echo "valid user";
		$_SESSION['ur']=$var;
		header("location:index.php");
	}
	else
		echo "not valid";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>


 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>

	<div id="myModal" class="modal form-control-feedback" role="dialog">


	  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content bg-success">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><font color="red">Set new password</font></h4>
      </div>
      <div
<!-- class="model body" Modal -->

       
 <table align="center">
 	<form action="" method="POST">
 <tr>
 		<td><input type="password" placeholder="enter new password"></td></tr>
 		<tr><td><input type="password" name="" placeholder="confirm password"></td></tr>
 		<tr><td><input type="submit" value="submit" name=""></td></tr>
 	</form>
 </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	<div class="login-box">
		<img src="img/avtar.png" id="pic">
		<br>
		<h2>user login</h2>
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
				<button type="submit" name="submit">LOGIN</button id="button">
			</div>
		</form>
		<br>
		<div class="su">
			<button type="button" class="btn btn-toolbar btn-md"><a href="reg.php">Sign UP</a></button>
			
		</div>
		<br>

			<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Forgate password</button>
			<br><br>
			
</div>
		
	</div>
</html>