<?php

session_start();

if (isset($_REQUEST['submit'])) {

	$id = $_REQUEST['id'];
	$name = $_REQUEST['name'];
	$pass = $_REQUEST['pass'];
	$temp = "";

	if(empty($name) == true ||empty($id) == true || empty($pass) == true)
	{
		header('location: AdminLogin.html');
	}
	else
	{
			$myFile = fopen('info.txt', 'r');
			$data = fgets($myFile);
			$user = explode("|", $data);
			fclose($myFile);
			for ($i=0; $i < count($user) ; $i=$i+6) { 
				if ($id == $user[$i] && $pass == $user[$i+2]) {
					$temp = TRUE;
					$_SESSION['NAME'] = $user[$i+1];
					$_SESSION['TYPE'] = $user[$i+5];
					break;
				}
				else
					$temp = false;
				header('location: AdminLogin.html');}
			}

			if ($temp == TRUE) {

				if ($_SESSION['TYPE'] == "Admin") {
					header('location: home.php');
				}
				else{
				

			}
			
	}
}
?>