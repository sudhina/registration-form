<?php include('server.php'); ?>
	<?php include('errors.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>


	<div class="header">
		<h2>Login</h2>

	</div>
	<form method="POST" action=""> 
	
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username">
	</div>

	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<button type="submit" name="login" class="btn">login</button>
	<p>Not yet a member? <a href="register.php">Sign Up</a> 
	</p>

	</form>

</body>
</html>