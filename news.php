<?php
include("connectionuk.php");


?>

<!DOCTYPE html>
<html>
<head>
	<title>news</title>
</head>
<body>
	<h1 align="center" style="background-color:green"><font color="red" size="20px">ADMIN PANEL<marquee scrollamount="5">yatri booking information</marquee></font></h1>
	<table border="10px" align="center">
		
		    <th>id</th>
			<th>yatri Email</th>
			<th> yatri name</th>
			<th> yatri contact</th>
			<th> yarti Age</th>
			<th>yatra name</th>
			<th>yatra Date</th>
			<th>yatri gender</th>
			<th>update</th>
			<th>Delete</th>
			<tbody>
				

				<?php
                $data=mysqli_query($con,"SELECT * FROM `bookyatra`");
                while ($row=mysqli_fetch_assoc($data)) {
                 
                  

				?>


				<tr>
				<td><?php echo $row['id']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['password']?></td>
				<td><?php echo $row['contact']?></td>
				<td><?php echo $row['age']?></td>
				<td><?php echo $row['yatra']?></td>
				<td><?php echo $row['date']?></td>
				<td><?php echo $row['gender']?></td>
				<td><a href="update.php?id=<?php echo $row['id']?>">Update</a></td>
				<td><a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
			</tr>

<?php

}

?>

			</tbody>

		


	</table>

<div class="container">
	<div class="row">
		<div class="col-lg-12">

	<table border="10px" align="center">
		
<table border="10px" align="center" height=10%>
		
		    <th>id</th>
			<th>First name</th>
			<th> Last name</thead>
			<th> Country</th>
			<th> subject</th>
		
						<tbody>
				

				<?php
                $data=mysqli_query($con,"SELECT * FROM `contacts`");
                while ($row=mysqli_fetch_assoc($data)) {
                 
                  

				?>


				<tr>
				<td><?php echo $row['id']?></td>
				<td><?php echo $row['firstname']?></td>
				<td><?php echo $row['lastname']?></td>
				<td><?php echo $row['country']?></td>
				<td><?php echo $row['subject']?></td>
				<td><a href="update.php?id=<?php echo $row['id']?>">Update</a></td>
				<td><a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
			</tr>

<?php

}

?>

			</tbody>
		


				




		</div></div></div></th></table>

<div class="footer">
 <p style="text-align: center;background-color:black; height:50px;padding-top: 17px;"  ><font color="white">Copyright ©2020 All rights reserved | Designed & Developed  by S.J</font></p>

  </div>


</body>
</html>