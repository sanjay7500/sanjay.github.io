<?php
$arr=array(20,40,70,10,101);
$max=$arr[0];
$sum=0;
for($i=1; $i<5; $i++)
{
	if($arr[$i]>$max)
		$max=$arr[$i];

$sum= $sum + $arr[$i];
}

echo"Sum of elements of array:".$sum;
echo "<br>";
echo"maximum number:".$max;



?>