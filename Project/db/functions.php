 <?php
	require_once('db.php');
	/*function validate($uname, $password){
		$conn = getConnection();
		$sql = "select * from users where username='{$uname}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return count($user);
	}*/
	function register($id,$name,$pass,$dob,$cno,$email,$address,$gender,$type,$salary){
		$conn = getConnection();
		$sql = "insert into user values('{$id}', '{$name}','{$pass}', '{$dob}','{$cno}','{$email}','{$address}','{$gender}','{$type}',{$salary}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function getAllCustomer(){
		$conn = getConnection();
		$sql = "select * from user where type='Customer'";
		$result = mysqli_query($conn, $sql);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
		return $data;
	}
	function getAllFarmer(){
		$conn = getConnection();
		$sql = "select * from user where type='Farmer'";
		$result = mysqli_query($conn, $sql);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
		return $data;
	}
	function getAllDeliveryBoy(){
		$conn = getConnection();
		$sql = "select * from user where type='Delivery Boy'";
		$result = mysqli_query($conn, $sql);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
		return $data;
	}
	function getAllFieldExaminer(){
		$conn = getConnection();
		$sql = "select * from user where type='Field Examiner'";
		$result = mysqli_query($conn, $sql);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
		return $data;
	}
	function getAllStoreincharge(){
		$conn = getConnection();
		$sql = "select * from user where type='Store-in-charge'";
		$result = mysqli_query($conn, $sql);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
		return $data;
	}
	function assignDeliveryboy($id){
		$conn = getConnection();
		$sql = "select * from user where id=".$id;
		$result = mysqli_query($conn, $sql);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
		return $data;
	}
	
	
	
	/*function changePass(){
	    $conn = getConnection();
		$sql = "update user set pass=".$pass where "id=".$id ;
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
		/*$result = mysqli_query($conn, $sql);
		$data = array();
		$pass=$_POST['pass'];
        $userid=$_POST['userid'];
        //$useremail=$_SESSION['login'];
        //$newpassword=$_POST['npass'];
        //$sql="SELECT pass FROM user where pass='$pass' && userid='$userid'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_fetch_array($conn,$sql);
 
        if($num>0)
         {
             $conn=mysqli_query($conn,"update user set pass='.$npass'");
             echo "Password Changed Successfully !!";
         }
         else
         {
             echo "Old Password not match !!";
         }
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
		return $data;
	} 	*/
	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from user where id=".$id;
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>