<!DOCTYPE html>
<html>
<head>
	<title>array table</title>
</head>
<body>
	<table align="center" border="1px">
		<tr>
		<th>S.no</th>
		<th>country</th>
		<th>capital</th>
		<th>currency</th>
	</tr>

				<?php
$arr = ['India'=>['capital'=>'Delhi','currency'=>'Ruppee'],
       'USA'=>['capital'=>'Washington','currency'=>'Dollar'],
       'Pakistan'=>['capital'=>'Islamabad','currency'=>'Ruppee']];
		
	
$sn = 1;
			foreach($arr as $i=>$v)
			{
				echo "<tr>";
					echo "<td>$sn</td>";
					echo "<td>$i</td>";
					foreach($v as $a=>$b)
					{
						echo "<td>$b</td>";
					}
				echo "</tr>";
				
				$sn++;
			}
			
		
			?>
		</table>

</body>
</html>