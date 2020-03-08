<?php
include("connectionuk.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
	<style type="text/css">
		table{background-color:lightblue;}
		th{font-size:50px;}
	</style>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-lg-12">

	<h1 align="center" style="background-color:green"><font color="red" size="20px">ADMIN PANEL<marquee scrollamount="5">yatri contact information</marquee></font></h1>
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
		


				




		</div></div></div>

</body>
</html>