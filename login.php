<!DOCTYPE html>
<html>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "zy7un!t$$$";

//Create connection
$conn = new mysqli($servername, $username, $password);

//Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
	echo "Connected successfully";
}

?>

<head>
<title>Login Page</title>
</head>
<body>
<fieldset>
	<legend>Login</legend>
<form method="POST" action="connectivity.php"> 
	User: </br>
	<input type="text" name="user" size="40"></br>
	Password: </br>
	<input type="password" name="pass" size="40"></br></br> 
	<input id="button" type="submit" name="submit" value="Submit"> 
</form>
</fieldset>

</body>
</html>