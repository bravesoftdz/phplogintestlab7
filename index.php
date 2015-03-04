<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "login";

mysql_connect($host,$user,$pass) or die($dberror);
mysql_select_db($db);

if(isset($_POST['username'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM user WHERE  user='".$username."' AND password='".$password."' LIMIT 1";
	$result = mysql_query($sql) or die($query."<br/><br/>".mysql_error());
	if(mysql_num_rows($result) == 1){
	echo "Whats up. You have logged in to your database";
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
		<form method="POST" action="index.php"> 
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

