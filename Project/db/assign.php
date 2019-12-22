  <?php
	include_once('functions.php');
	if(isset($_GET['id'])){
		$status = assignDeliveryboy($_GET['id']);
		if($status){
			$msg=$_GET['id']."You are assigned";
			header('location:../db/home.php?msg='.$msg);
		}else{
			echo "Error: try again";
		}
	}else{
		echo "invalid request";
	}
?>