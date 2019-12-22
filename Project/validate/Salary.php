<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>

  <style>
		body
		{
			background-image:url("fruits.jpg");background-repeat:no-repeat;
                        background-size=100%;

		}

   </style>
</head>
<body><br><br><br><br>
         <form method="POST" >
         <table align="Center" bgColor="Yellow">
         <tr>
					<td>Delivery Boy: </td>
					<td><input type="text" name="delib"></td>
				</tr>
				<tr>
					<td>Field Examiner:</td>
					<td><input type="text" name="fe" ></td>
				</tr>
				<tr>
				    <td>Store-In-Charge:</td>
                   <td><input type="text" name="sie"></td>
                </tr>
				<tr>
			       <td>Agent:</td>
                   <td><input type="text" name="agent"></td>
                </tr>	
				<tr>
             <td><a href="home.php">Back</a></td>
			 <td><input type="submit" name="submit" value="Submit"></td>
             <td><a href="Logout.php">Log Out</a></td>
			 
         </tr>
</table>
</body>	
</html>
<?php

session_start();
$delib = "";
$fe = "";
$sie = "";
$agent = "";

if (isset($_REQUEST['submit'])) {
    
	$delib=$_REQUEST['delib'];
	$fe = $_REQUEST['fe'];
	$sie = $_REQUEST['sie'];
	$agent = $_REQUEST['agent'];
	

	
			$_SESSION['sdelib'] = $delib;
			$_SESSION['sfe'] = $fe;
			$_SESSION['ssie'] = $sie;
			$_SESSION['sagent'] = $agent;
			
                         
			$mySal = fopen('salary.txt', 'a');
			fwrite($mySal,$delib."|".$fe."|".$sie."|".$agent."|");
			fclose($mySal);

			header('location: ShowSalary.php');}
            
           
	
	

?>

