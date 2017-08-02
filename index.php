<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration system</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<div class="header">
	<h2>Home page</h2>
	<h4>Logged successfully</h4>
	</div>
	<div class="content">
	<?php if(isset($_SESSION['success'])):?>
		<div class="error success">
			<h3>
			<?php
				echo $_SESSION['success'];
				unset($_SESSION['success']);
				?>
			</h3>
		</div></div>
		<?php endif ?>
		<?php if(isset($_SESSION["username"])): ?>
			<p>welcome<strong><?php echo $_SESSION['username'];?></strong></p>
			<p><a href="" style="color:red:">Logout</a></p>
		<?php endif ?>
	</div>
</body>
</html>
















		</div>
			

	</div>
	</div>
		</div>
	</div>

	
</body>
</html>