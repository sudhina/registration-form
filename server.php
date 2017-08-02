<?php
$username="";
$email="";

$password_1="";
$password_2="";
$errors=array();

//connect to database
$db=mysqli_connect("localhost","root",'',"registration");
//if the register button is pressed
if(isset($_POST['register']))//access button name
{

	$username=mysqli_real_escape_string($db,$_POST['username']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password_1=mysqli_real_escape_string($db,$_POST['password_1']);
	$password_2=mysqli_real_escape_string($db,$_POST['password_2']);
	if(empty($username))
	{
	array_push($errors,"username is empty");
	}
	if(empty($email))
	{
	array_push($errors,"email field is empty");
	}
	if(empty($password_1))
	{
	array_push($errors,"password field is empty");
	}
	if(empty($password_2))
	{
	array_push($errors,"confirm your password");
	}
	if($password_1!=$password_2)
	{
 	array_push($errors,"passwords are not matching" );
	}
	//if there are no errors,store data  to user database
	if(count($errors)==0)
	{
	
		$password=md5($password_1);
	////encrypt password before storing in database(security)
	$sql="INSERT INTO user(username,email,password)VALUES('$username','$email','$password')";
	mysqli_query($db,$sql);
	$_SESSION['username']=$username;
	$_SESSION['success']="you are now logged in";
	header('location:index.php');//redirect to home Page

	}

}



	//logout in home page remainig

//log user in from login page
if(isset($_POST['login']))
{


	$username=mysqli_real_escape_string($db,$_POST['username']);

	$password_1=mysqli_real_escape_string($db,$_POST['password_1']);

	//ensure that fields are not empty
	if(empty($username))
	{
	
		array_push($errors,"user name field is empty");
	}

 		if(empty($password_1))
 	{
		array_push($errors,"password field  is empty");
 	}
 	//checking valid username and password
if(count($errors==0))
 {
			$password=md5($password_1);
 			$query="SELECT * FROM user WHERE username='$username' AND password='$password' ";
 			$result=mysqli_query($db,$query);
 			//checking username and password
 						$que1="SELECT * FROM user WHERE username!='$username' AND password='$password' ";
 			   			$result1=mysqli_query($db,$que1);
 			   			$que2="SELECT * FROM user WHERE username='$username' AND password!='$password' ";
 			   			$result1=mysqli_query($db,$que2);
 			 if(mysqli_num_rows($result)==1)
 			 {
 			 	$_SESSION['username']=$username;
 			 	$_SESSION['success']='you are logged in';
 			 	header('location:index.php');
 			 }


 			if(mysqli_num_rows($result1)==1)
 			 {
 				array_push($errors,'wrong username or password combination');
 				//header('location:login.php');
 				}

			
 }
 }
 			


?>