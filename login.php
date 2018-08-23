<?php 
session_start();
?>

<html>
	<head>
		<title>Admin Login</title>
		<link href="../css/main.css" rel="stylesheet">
		 <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
	</head>

<body>
		
	<div class="container">
	<form method="post" action="login.php">
	
		
			
			<h1>Admin Login </h1>
		
		
			
				
			<input type="text" name="user_name">
		
			

			
			<input type="password" name="user_pass">
	
			
	
				<td colspan="4" align="center"><input type="submit" name="login" value="Login"></td>
		
		
		
		</form>
		<a href="../index.php">&larr; Back</a>
		</div>
</body>		
</html>
<?php 
include("includes/connect.php");

if(isset($_POST['login'])){
	
	$user_name = mysql_real_escape_string($_POST['user_name']);
	$user_pass = mysql_real_escape_string($_POST['user_pass']);
	
	

	$admin_query = "select * from admin_login where user_name='$user_name' AND user_pass='$user_pass'";

	$run = mysql_query($admin_query); 
	
	if(mysql_num_rows($run)>0){
	
	$_SESSION['user_name']=$user_name;
	
	echo "<script>window.open('indexx.php.','_self')</script>";
	}
	else {
	
	echo "<script>alert('User name or password is incorrect')</script>";
	
	}
}


?>