<?php

extract($_POST);

if(isset($login))
{
	if(is_dir("users/$em"))
	{
		$fo = fopen("users/$em/details.txt","r");
		$fpass = trim(fgets($fo));

		if($pass == $fpass)
		{
			header("location:dashboard.php");
		}
		else
		{
			echo "Enter Correct Password";
		}
	}
	else
	{
		echo "Enter Correct Email";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Panel</title>
</head>
<body>
	<form method="post">

	<table border="1" align="center" bgcolor="skyblue">
		<tr>
			<th colspan="2">Login Panel</th>
		</tr>

		<tr>
			<th>Email</th>
			<th><input type="email" name="em" required></th>
		</tr>

		<tr>
			<th>Password</th>
			<th><input type="password" name="pass" required></th>
		</tr>

		<tr>
			<th colspan="2"><input type="submit" name="login" value="Login">
			 <a href="register.php"><input type="button" name="btn" value="SignUP"></a></th>
		</tr>
	</table>

	</form>
</body>
</html>