<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "personalityHub";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $user = $_GET['username'];
    $pass = $_GET['password'];
    $name = $_GET['firstName'];

    $newUserSQL = "INSERT INTO users (username, password, firstName) 
    	VALUES ('$user', '$pass', '$name')";

    $conn->exec($newUserSQL);

    print "HELLO, <em>$name</em>";
}

catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>