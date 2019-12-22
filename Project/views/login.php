<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
</head>

<script>

function f1()
{
	  var id = document.getElementById('id').value;
 var pass= document.getElementById('pass').value;
 if( id=="" || pass=="")
{ document.getElementById('logindiv').innerHTML="null submission";}

else
{
var xhttp = new XMLHttpRequest();
				xhttp.open("POST", "login.php", true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('id='+id+'&pass='+pass);
			
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					if(this.responseText=="true")
					{window.location.href='farmerhome.php';}
					 	else
						{document.getElementById('logindiv').innerHTML = this.responseText;}					 
					}};
}}
</script>

<body background="photo.jpg">
<br><br><br><br><br><br><br><br>

	<form method="POST" action="logincheck.php">
		<table  align="center" border="0" width="20" height="200" bgcolor="yellow" >
			<tr>
				<td> User Id:</td>
				<td><input type="text"  id="id" placeholder="Enter your id" name="id"></td>
			</tr>
			
			<tr>
				<td>Password:</td>
				<td><input type="password"  id="pass" placeholder="Enter your password" name="pass"></td>
			</tr>
				<td>User Type</td>
                <td> <select name="type" id="type">
						<option value=""></option>
						<option value="Admin">Admin</option>
						<option value="Customer">Customer</option>
						<option value="Storeincharge">Store-in-charge</option>
						<option value="Deliveryboy">Deliveryboy</option>
						<option value="FieldExaminer">FieldExaminer</option>
						<option value="Farmer">Farmer</option>
						 </td>
</tr>
				<tr>
				
			<tr align="center">
				<td colspan="2"><input type="submit" name="submit" value="Log in"  onclick="f1()"></td>
				<td></td>
			</tr>
			
			<tr align="center">
			<td colspan="2"><a href="registration.html">Registration</a></td>
			</tr>
			
			<tr align="center">
			<td colspan="2"><a href="loginfornt.php">Back</a></td>
			</tr>
			
			<div id="logindiv"> </div> 
		</table>
	</form>
</body>
</html> 