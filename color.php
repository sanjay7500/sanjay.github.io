<?php
$c="white";
if (isset($_POST['sub']))
 {
	$c=$_POST['col'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>color</title>
</head>
<body bgcolor="<?php echo $c?>">
	<form method="POST">
		<select name="col">
			<option disabled>select</option>
			<option>red</option>
			<option>blue</option>
			<option>green</option>
			<option>yellow</option>
			<option>black</option>
			<br>
			<input type="submit" name="sub" value="submit">
			

		</select>
</form>
	

</body>
</html>