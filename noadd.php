<?php
$sum="";
extract($_POST);
if (isset($sub)) {
	$sum=$n1+$n2;
	echo $sum;
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>add no</title>
</head>
<body>
	<form method="POST">
		num1<input type="text" name="n1" required="">
		<br><br>
		num2<input type="text" name="n2" required="">
		<br><br>
		<input type="submit" name="sub" value="Add">
		<br><br>
		Result<input type="text" name="" value="<?php echo$sum?>" readonly>
		


	</form>

</body>
</html>