<?php
include("connectionuk.php");
if (isset($_POST['submit'])) {


   $fnn=$_POST['fn'];
   $lnn=$_POST['ln'];
   $conn=$_POST['con'];
   $subb=$_POST['sub'];



// $data=mysqli_query($con,"INSERT INTO `bookyatra`( `email`, `password`, `contact`, `age`, `yatra`, `date`, `gender`) VALUES ('".$email."','".$pass."','".$conn."','".$agee."','".$yatra."','".$date."','".$gen."')");



 $sql="INSERT INTO `contacts` (`firstname`,`lastname`,`country`,`subject`) VALUES ('".$fnn."','".$lnn."','".$conn."','".$subb."')";

  $data=mysqli_query($con,$sql);
  
  if ($data) {
      echo '<script>alert("your message has been send we will contact soon....")</script>'; 
    //echo "message send ";
    //header("location:index.php");
  }
else {
  echo "not done";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="index.css">
<style type="text/css">
  .table{
    width:100%;
    height:100px;
  }
  /* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>>

</head>
<body>

 div class="page-header" style=" margin-top:-text-indent:24px; border-radius:2%;" >
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 bg-info">
      <a href=""><img src="img/logo.png"class="" height="120" width="150" style="margin:14px 0 3px 0" alt="error"></a>
      </div>
      <div class="col-lg-6 bg-info">
        <h1 style="margin-top:10px; letter-spacing:20px;"><font color="white"><b>UTTARAKHAND</b></font></h1>
        <p style="letter-spacing:10px;"><font color="white">&nbsp;&nbsp;<i>Tourism Development Board</i></font></p>


</div>      

      <div class="col-lg-3 bg-info">
        <p style="margin-top:10px"><font color="white"><b></i>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#9993;Email: sj105764@gmail.com<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i>Contact +7500706385</b></font></p><p id="demo"><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date/time</p></font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me..</button>
 <a><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Book Now</button></a>
<!--<button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me.</button>

<p id="demo">date/time</p>
      </div>-->
</div></div></div>
  



<div class="topnav bg-info">
  <a href="index.php">Home</a>
  <a href="newsupdate.php">News</a>
  <a class="active" href="contact.php">Contact</a>
  <a href="about.php">About</a>
  <a href="adminlogin.php">Admin Login</a>
</div>
<div class="container">
<div class="row">
<div class="col-lg-12">
<form method="post" action="contact.php">
  <table align="center">
    <tr>
  <th>First name<input type="text" name="fn" placeholder="Enter First Name"></th><tr>
<tr>
  <th>Last name<input type="text" name="ln" placeholder="Enter Last Name"></th><tr>

<tr>
  <th>country
<select name="con">
  <option value="india">india</option>
  <option value="usa">usa</option>
  <option value="maya nagri">mumbai</option>
</select>
  </th><tr>

<tr>
  <th>
    <textarea rows="5" cols="50" placeholder="Enter your message here......" name="sub"></textarea>
  </th>
</tr>

<tr>
  <th><button type="submit" class="btn btn-success" name="submit">send</th>
</tr>



</form>

</div>



</div></div>
</body></html>



