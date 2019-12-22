<?php
	//session_start();
	//if(isset($_COOKIE['name'])){
?>

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
            <td><h1>Welcome Home !<?/*=$_COOKIE['name']*/?></h1></td>
         </tr>
         <tr>
            <td><a href="viewownprofile.php">View own info</a><br><td>
         </tr> 
         <tr>
            <td><a href="farmerlist.php">View Farmer List</a><br></td>
         </tr>
         <tr>
             <td><a href="customerlist.php">View Customer List</a><br></td>
         </tr>
         <tr>
             <td><a href="fieldexaminer.html">Assign Field Examiner</a></td>
         </tr>
         <tr>
            <td><a href="AddCustomer.html">Add Customer</a></td>
         </tr>
         <tr>
            <td><a href="AddFarmer.html">Add Farmer</a><br><td>
         </tr> 
         <tr>
            <td><a href="farmerlist.php">Delete Customer</a><br></td>
         </tr>
         <tr>
             <td><a href="customerlist.html">Delete Farmer</a><br></td>
         </tr>
         <tr>
             <td><a href="product.php">View Product</a></td>
         </tr>
         <tr>
             <td><a href="Salary.php">Fix Salary</a></td>
         </tr>
         <tr>
             <td><a href="Payment.html">Give Payment to Farmer</a></td>
         </tr>
         <tr>
             <td><a href="Payment.html">Recieve Payment from Customer</a></td>
         </tr>
         <tr>
             <td><a href="Logout.php">Log Out</a></td>
         </tr>
</table>
</body>	
</html>



<?php		
	//}else{
		//header('location: AdminLogin.html');
	//}

?>

