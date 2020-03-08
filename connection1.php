<?php

$servername="localhost";
$username="root";
$password="";
$dbname="userlogin";

$con=mysqli_connect($servername,$username,$password,$dbname);

if($con)
{
	//echo "coneection okk";

}
    else 

    die("connection faild because".mysqli_connect_error());



?>