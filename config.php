<?php

// Database connection information
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "guestbook";

// Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character encoding
$conn->set_charset("utf8");

?>
