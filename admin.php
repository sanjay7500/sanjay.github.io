<?php
session_start();
include("connection.php");
if (!isset($_SESSION['ur'])) {
	header("location:adminlogin.php");

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>admin panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" type="text/css" href="admin.css">
  <style type="text/css">
	th{font-size:25px; background-color:white;}
	ul{font-size: 20px;}
	table{background-color: yellow; font-size:20px;}
</style>
</head>
<body>
	<h1 align="center" style="background-color:green"><font color="red" size="20px">ADMIN PANEL<marquee scrollamount="5">Welcome Admin</marquee></font></h1>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="news.php">yatari details</a>
  <a href="confinal.php">Contact</a>
  <a href="#about">About</a>
  <a href="">upload img</a>
  <a href="logout.php" class="ml-auto">Log out</a>
</div>



<div class="card">
  <div class="card-header">ADMIN</div>
  <div class="card-body">
  	

<div class="container">
	<div class="row">

<div class="col-lg-3 bg-danger">
	<h2 align="center"><font color="blue"><b>ADMIN</b></font></h2>
	<img src="img/admin.jpg" class="rounded-circle" height="100px" width="100px" alt="error">
	<div class="navbar">
		<ul>
			<a href=""><li>Admin Profile</li></a>
			<a href=""><li>About</li></a>
			<a href=""><li>contact</li></a>
			<a href=""><li>manage Profile</li></a>
		</ul>

	</div>
	</div>

		<div class="col-lg-9 bg-info">
<br>

<table align="center" border="2px" bgcolor="lightgreen">
	<tr>
		<th>id</th>
		<th>First name</th>
		<th>Last name</th>
		<th>Email id</th>
		<th>Password</th>
		<th>udate</th>
		<th>Delete</th>

	</tr>
	<tbody>
		<tr>
		<?php
		$conn=mysqli_query($con,"SELECT * FROM `reg`");
		
		while ($row=mysqli_fetch_assoc($conn)) {
			?>
			
				<td><?php echo $row['id']?></td>
				<td><?php echo $row['first name']?></td>
				<td><?php echo $row['last name']?></td>
				<td><?php echo $row['email id']?></td>
				<td><?php echo $row['password']?></td>
				<td><a href="update.php?id=<?php echo $row['id']?>">Update</a></td>
				<td><a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
		
</tr>

			<?php

		}



		?>
			
		

	</tbody>




</table></div>
<div class="container-fluid bg-primary">
	<div class="row">
<div class="col-lg-4">
</div>

		<div class="col-lg-8">

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" />
    <button type="submit" name="submit">Upload</button>
</form>
<table>
	<thead><th>image</th></thead>
	<tbody>
<tr>	
<?php

$row=mysqli_query($con,"SELECT * FROM `images`");
while($result=mysqli_fetch_assoc($row))
{



?>
<form method="POST" action="">
		<td><img src="img/<?php echo $result['image']?>" height="80px" width="80px;"></td>
		
	
</form>
<?php

}
#{
	#$row=mysqli_query($con,"SELECT * FROM `images`");
#$result=mysqli_fetch_assoc($row);
#header("Content-type: img/"); 
        #echo $result['image'];
        # }

?>
</tr>

</tbody>
	</table>
</div>






  </div>
  <div class="card-footer bg-dark"><font color="white">Copyright ©2020 All rights reserved | Designed & Developed  by S.J</font></div>
</div>
	








</body>
</html>
