<?php
 ob_start();
 session_start();

 if (isset($_POST['loginbtn']))
  {
   include 'connect.php';

   	$username = strip_tags($_POST['username']);
  	$password = strip_tags($_POST['password']);

 	if (!empty($username) && !empty($password)) 
 	{
 	$sql = "SELECT * FROM members where username = '$username' and password = '$password'";
 	$query=$connect->query($sql);
     if (mysqli_num_rows($query) > 0) {
     	setcookie('username',$username, time()+3600*24*7,'/');
     	setcookie('password',$password, time()+3600*24*7,'/');
     	header("Location: home.php");
     }
     else{
     	echo "Wrong username or password!";
     }

 		}	
 }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="login.css"/>
</head>
<body>
 <div class="container">
  <form method="post" action="login.php">
    <h1>Login</h1>
       <input type="text" placeholder="Username" name="username" required>
       <input type="password" placeholder="Password" name="password" required>
      <input type="submit" name="loginbtn" value="Login">
      <a href="register.php">Sign Up</a> 
  </form>
</div>
</body>
</html>