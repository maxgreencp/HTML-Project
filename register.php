<?php 

session_start();
require_once 'connect.php';

if(isset($_POST['registerbtn'])){

 	$username = strip_tags($_POST['username']);
 	$email = strip_tags($_POST['email']);
 	$password = strip_tags($_POST['password']);
 	$cpassword = strip_tags($_POST['cpassword']);

	$username = $connect->real_escape_string($username);
	$email = $connect->real_escape_string($email);
	$password = $connect->real_escape_string($password);
	$cpassword = $connect->real_escape_string($cpassword);

	if ($count==0) {
	if($password == $cpassword){
	$query = "INSERT INTO members(username,email,password) VALUES('$username','$email','$password')";
	}
	if($connect->query($query)){
	echo "User Registered";
	}else{
	echo "Unable to register user";
}
}
  $connect->close();
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
    <div class="container">
	<form method="post" action="register.php">
	<h1>Register</h1>
	<input type="text" placeholder="Username" name="username" required>
	<input type="text" placeholder="Email" name="email" required> 
	<input type="password" placeholder="Password" name="password" required>
	<input type="password" placeholder="Confirm Password" name="cpassword" required>
	<input type="submit" name="registerbtn" value="Register">
	<a href="login.php">Log In Here</a>
	</form>
	</div>
</body>
</html>