<?php
	include_once('functions.php');
	if(isset($_GET['userid'])){
		$status = deleteUser($_GET['userid']);
		if($status){
			header('location:customerlist.php');
		}else{
			echo "Error: try again";
		}
	}else{
		echo "invalid request";
	}
?>