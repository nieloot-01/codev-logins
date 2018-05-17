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

echo "Connected successfully";


?>