<?php

$arr=scandir(img);
foreach ($arr as  $v) {
	if ($v!="." && $v!=".." && $v!="thumbs.db") {

		echo "<img src='img/$v' height='200' width='400'>";

?>