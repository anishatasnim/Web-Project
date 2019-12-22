<?php
	//session_start();
	if(isset($_GET['msg'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! <?=$_GET['msg']?></h1> 
	<a href="logout.php">logout</a>
</body>	
</html>



<?php		
   }else{
	   header('location:../views/AdminHome.html');
	}

?>

