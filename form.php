<?php

if (isset($_POST['sub']))
 {

$name=$_POST['un'];
$email=$_POST['em'];


}





?>

<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<form method="POST">
		name<input type="text" name="un">
		<br><br>
		email<input type="email" name="em">
		<br><br>
		<input type="submit" name="sub" value="ok">

	</form>
	<?php
	echo "user name:".$name,"<br>user email id:".$email;
	?>

</body>
</html>