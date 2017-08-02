<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>user registration</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="container">
	<div class="header">
		<h2>Register</h2>

	</div>
	<form method="POST" action="register.php">
	<!--display validation errors here-->
	<?php include("errors.php");?>

	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username;?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email;?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">		
	</div>
	<div class="input-group">
	<button type="submit" name="register" class="btn">Register</button>
	</div>
	<p>Already a member? <a href="login.php">Sign In</a> 
	</p>

	</form>
	</div>
</body>
</html>