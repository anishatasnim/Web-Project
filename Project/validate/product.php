<?php
session_start();
error_reporting(0);

$myFile = fopen('product.txt', 'r');
$data = fgets($myFile);
$product = explode("|", $data);


?>


<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
</head>
<body background="fruit.jpg">
	<center>
		<table  border="1px" width="400px" cellspacing="0px" cellpadding="5px" bgcolor="yellow">
				<tr>
					<th colspan="5px" align="center" >products</th>
				</tr>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Quantity</th>
					<th>price</th>
					<th>Type</th>
				</tr>
				<?php

					for ($i=0; $i < count($product)-1; $i=$i+5) { ?>
							<tr>
								<td><?= $product[$i]?></td>
								<td><?= $product[$i+1]?></td>
								<td><?= $product[$i+2]?></td>
								<td><?= $product[$i+3]?></td>
								<td><?= $product[$i+4]?></td>
							</tr>
						<?php
							
						}
				?>
				<tr>
					<td colspan="5px" align="right"><a href="home.php">Go Home</a></td>
				</tr>
			</table>
	</center>

</body>
</html>