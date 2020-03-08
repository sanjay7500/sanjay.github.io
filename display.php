<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	td{
		padding: 10px;
	}

</style>
</head>
<body>
	<?php
include("connection.php");
error_reporting(0);
$query="SELECT * FROM STUDENT";
$data=mysqli_query($con, $query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);



if($total !=0)

{
	?>
	<h1  align="center" colspan="2">Display data from database</h1>
	<table bgcoor="lightblue" align="center" border="1px">

		<tr>
			
			<th>rollno</th>
			<th>name</th>  
			<th>class</th>
			<th colspan="2">opration</th>
		</tr>
	
 

	<?php

	while($result=mysqli_fetch_assoc($data))
	{

		echo "<tr>
			<td>".$result['rollno']."</td>
			<td>".$result['name']."</td>

			<td>".$result['class']."</td>
			 <td><a href='update.php?rn=$result[rollno]&sn=$result[name]&cl=$result[class]'>Edit</a></td>
			

		</tr>";
	
	}
}
else 
{
	echo "no record found";
}

?>
</table>

</body>
</html>

