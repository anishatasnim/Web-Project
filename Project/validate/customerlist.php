<?php
session_start();
error_reporting(0);

$myFile = fopen('customerinfo.txt', 'r');
$data = fgets($myFile);
$user = explode("|", $data);


?>


<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body background="fruit.jpg">
	<center>
		<table  border=1 bgcolor="yellow">
				<tr>
					<th colspan="6px" align="center" >User</th>
				</tr>
				<tr>
					<th>ID</th>
					<th>Name</th>
					
					<th>Date of Birth</th>
					<th>User Type</th>
				</tr>
				<?php

					for ($i=0; $i < count($user)-1; $i=$i+5) { ?>
							<tr>
								<td><?= $user[$i]?></td>
								<td><?= $user[$i+1]?></td>
								
								<td><?= $user[$i+4]?></td>
								<td><?= $user[$i+5]?></td>
							</tr>
						<?php
							
						}
				?>
				<tr>
					<td colspan="6px" align="right"><a href="home.php">Go Home</a></td>
				</tr>
			</table>
	</center>

</body>
</html>