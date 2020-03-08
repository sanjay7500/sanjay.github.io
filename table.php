<?php
if (isset($_POST['sub'])) {
	for ($i=1; $i <=10 ; $i++) { 
		$t=$no*$i;
		echo $t;
		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>tablephp</title>
</head>
<body>
table<input type="tex" name="t">
<input type="submit" name="sub">
</body>
</html>