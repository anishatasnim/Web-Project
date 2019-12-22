<?php
session_start();
error_reporting(0);

$myFile = fopen('info.txt', 'r');
$data = fgets($myFile);
$user = explode("|", $data);

for ($i=0; $i < count($user); $i=$i+6) { 
	if ($_SESSION['NAME'] == $user[$i+1]) {
		$_SESSION['ID'] = $user[$i];
		$_SESSION['DOB'] = $user[$i+4];
		$_SESSION['PASSWORD'] = $user[$i+2];
		$_SESSION['TYPE'] = $user[$i+5];
		$temp = true;
	}


}

?>*/


<html>
<head>
	<title>Profile</title>
	<style>
		body
		{
			background-image:url("fruits.jpg");background-repeat:no-repeat;
                        background-size=100%;

		}

   </style>
</head>
<body>
<br><br><br><br><br><br><br><br><br><br>
	<center>
	
		<table  border="1px" bgColor="Yellow" cellspacing="0px" cellpadding="10px">
				<tr>
					<th colspan="2px" align="center" >Profile</th>
				</tr>
				<tr>
					<td>ID</td>
					<td><?= $_SESSION['ID']?></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><?= $_SESSION['NAME']?></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><?= $_SESSION['PASSWORD']?></td>
				</tr>
				<tr>
					<td>Dob</td>
					<td><?= $_SESSION['DOB']?></td>
				</tr>
				<tr>
					<td>User Type</td>
					<td><?= $_SESSION['TYPE']?></td>
				</tr>
				<tr>
					<td colspan="2px" align="right">
						<a href="home.php">Go Home</a></td>
					</td>
				</tr>
			</table>
	</center>

</body>
</html>