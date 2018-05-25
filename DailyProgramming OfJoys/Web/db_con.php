<?php
$servername = "mysql.ilab.sit.kmutt.ac.th";
$username = "std60130500219";
$password = "DefR9300";
$dbname = "std60130500219";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connection OK";
}
?>
