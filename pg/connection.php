<?php
// initializing variables

$servername = "localhost";
$username = "pradeep";
$password = "pradeep123";
$dbname = "login";

// Create connection
$dbCon = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($dbCon->connect_error) {
    die("Connection failed: " . $dbCon->connect_error);
}


?>