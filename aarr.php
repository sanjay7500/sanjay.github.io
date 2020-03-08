<?PHP

$arr= array(10, 324, 45, 324, 9808,90); 
$sec= 324;
$count=0;


for ($i=0; $i <5 ; $i++) { 
	if ($sec == $arr[$i]) {
		$count++;
		echo "postion:".$pos=$i;
		echo"<br>";
	}
}
echo "number of time value show in arry is:".$count;
?>
