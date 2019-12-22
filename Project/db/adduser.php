   <?php
	require_once('db.php');
	if(isset($_POST['get']))
	{
		echo "Error";
	}
	else
	{
		$id= $_POST['id'];
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$dob = $_POST['dob'];
		$contactno=$_POST['cno'];
		$email=$_POST['email'];
		$house=$_POST['house'];
		$road=$_POST['road'];
		$city=$_POST['city'];
		$division=$_POST['division'];
		$address = $house.",".$road.",".$city.",".$division;
		$gender=$_POST['gender'];
		$type= $_POST['type'];
		$salary=$_POST['salary'];
		$con=getConnection();
		$sql="insert into user values('{$id}','{$name}','{$pass}','{$dob}','{$contactno}','{$email}','{$address}','{$gender}','{$type}','{$salary}');";
		if(mysqli_query($con, $sql))
		{	
		echo "Successful";
		}
		else
			echo "Error";
	}
?>