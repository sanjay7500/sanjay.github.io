
<?php
include("connection.php");
error_reporting(0);

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
		rollno<input type="text" name="rollno" value=""/><br><br>
		name<input type="text" name="studentname" value=""/><br><br>
		class<input type="text" name="class" value=""/><br><br>
		<input type="submit" name="submit" value="submit"></center>
		



	</form>
	

	<?php
	$rn=$_POST['rollno'];
	$sn=$_POST['studentname'];
	$cl=$_POST['class'];

	$query="INSERT INTO STUDENT(rollno,name,class) VALUES('$rn', '$sn', '$cl')";
$data=mysqli_query ($con,$query);
if($data)
{
	echo "data inserted into database";
}

?>


</body>
</html>