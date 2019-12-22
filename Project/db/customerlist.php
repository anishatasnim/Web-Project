<?php
	
	include('functions.php');
	$data = getAllCustomer();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer List</title>
	
  <style>
		body
		{
			background-image:url("../views/fruits.jpg");background-repeat:no-repeat;
                        background-size=100%;

		}
	
   </style>
</head>
<body>
<br><br><br><br><br><br>
<center>
	<h2>Customer List</h2>
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>

	<br>
	<br>

	<table border="1" bgcolor='yellow'>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Date of birth</th> 
			<th>Contact No</th> 
			<th>Email Address</th> 
			<th>Address</th> 
			<th>Gender</th> 
			<th>Type</th> 
			<th>Salary</th> 
			<th>Action</th> 
		</tr>

		
		<?php for($i=0; $i<count($data); $i++){ ?>
		<tr>
			<td><?= $data[$i]['id']; ?></td>
			<td><?= $data[$i]['name']; ?></td>
			<td><?= $data[$i]['dob']; ?></td>
			<td><?= $data[$i]['cno']; ?></td>
			<td><?= $data[$i]['email']; ?></td>
			<td><?= $data[$i]['address']; ?></td>
			<td><?= $data[$i]['gender']; ?></td>
			<td><?= $data[$i]['type']; ?></td>
			<td><?= $data[$i]['salary']; ?></td>
			<td>
				<a href="edit.php">Edit</a> | 
				<a href="delete.php?userid=<?=$data[$i]['userid']?>">Delete</a> 
			</td>
		</tr>
		<?php	}  ?>
	</table>
</body>
</html>