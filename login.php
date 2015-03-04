<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "login";

mysql_connect($host,$user,$pass);
mysql_select_db($db);

if(isset($_POST[''])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM 'user' WHERE  username='".$user."' AND password='".$pass."' LIMIT 1";
	$result = mysql_query($sql);
	if(mysql_num_rows($result) == 1){
	echo "you have logged in";
	exit();
	}else{
	echo "INVALID. Please return to the previous page.";
	}
}
?>

<!DOCTYPE HTML> 
<html> 
<head> 
<title>Sign-In</title> 
<link rel="stylesheet" type="text/css" href="style.css"> 
</head> 

<body id="body-color"> 
	<div id="Sign-In"> 
		<fieldset style="width:50%">
		<legend>LOG-IN HERE</legend> 
		<form method="POST" action="login.php"> 
			User <br> 
			<input type="text" name="username" size="40">
			<br> Password <br>
			<input type="password" name="password" size="40"><br> 
			<input id="button" type="submit" name="submit" value="Log-In"> 
		</form> 
		</fieldset> 
	</div> 
</body> 
</html> 

