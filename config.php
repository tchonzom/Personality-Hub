<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "personalityHub";
 
/* Attempt to connect to MySQL database */
$conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>