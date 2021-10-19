<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="css/auth.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			 <button type="submit" name="register" class="btn">Register</button>
			 <?php header('location: index.html'); ?>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>

</body>
</html>