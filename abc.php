<!DOCTYPE html>
<html>
<head>
	<title>data</title>
</head>
<body>
	<?php
	$data="Ducat";
	$enc=convert_uuencode($data);
	echo $enc;

$dec=convert_uudecode($enc);
echo $dec;
echo "<br>";

	?>

</body>
</html>