<?php

	echo "succesfully registered";
/*session_start();
$id = "";
$name = "";
$pass = "";
$cpass = "";
$dob = "";
$type = "";

if (isset($_REQUEST['save'])) {
    
	$id=$_REQUEST['id'];
	$name = $_REQUEST['name'];
	$pass = $_REQUEST['pass'];
	$cpass = $_REQUEST['cpass'];
	$dob = $_REQUEST['dob'];
	$type = $_REQUEST['type'];

	if(empty($id) == true ||empty($name) == true || empty($pass) == true || empty($cpass) == true || empty($dob) == true || empty($type) == true)
	{
		header('location: addcustomer.php');
	}
	else
		{
			$_SESSION['sId'] = $id;
			$_SESSION['sName'] = $name;
			$_SESSION['sPass'] = $pass;
			$_SESSION['sCpass'] = $cpass;
			$_SESSION['sDob'] = $dob;
			$_SESSION['sType'] = $type;

                        if($pass!=$cpass){echo "Invalid Password"; header('location:AddCustomer.html');}
                       else{
                         
			$myFile = fopen('customerinfo.txt', 'a');
			fwrite($myFile,$id."|".$name."|".$pass."|".$cpass."|".$dob."|".$type."|");
			fclose($myFile);

			header('location: home.php');}

		}
	
}*/
?>