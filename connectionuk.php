<?php

$servername="localhost";
$username="root";
$password="";
$dbname="uktourism";

$con=mysqli_connect($servername,$username,$password,$dbname);

if($con)
{
	//echo "coneection okk";

}
    else 

    die("connection faild because".mysqli_connect_error());



?>