<?php
$host="localhost";
$user="root";
$password="";
$db="bookhub";

$link=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['email'])&&isset($_POST['password_1'])){
	$sql="SELECT * FROM users WHERE email='".$_POST['email']."'";
	$result=mysqli_query($link,$sql) or die(mysqli_error($link));

	$noOfRows = mysqli_num_rows($result);
	if($noOfRows){
		while($row = mysqli_fetch_assoc($result)){
			/*echo "<pre>";
			print_r($row);
			echo "</pre>";
			*/
			
			if($row['password']==md5($_POST['password_1'])){
				echo "Successful Login";
				header('Location: index.php');
			}else{
				echo "Incorrect password";
			}
		}
		
	}else{
		echo "You are not registered. Please Sign up.";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/auth.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>

</body>
</html>