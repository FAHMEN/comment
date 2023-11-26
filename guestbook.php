<?php

// Include config file
include_once("config.php");

// Get form data
$name = $_POST["name"];
$message = $_POST["message"];

// Validate form data
if (empty($name)) {
    echo "Please enter your name.";
} else if (empty($message)) {
    echo "Please enter your message.";
} else {

    // Insert data into database
    $sql = "INSERT INTO guestbook (name, message, date, time) VALUES ('$name', '$message', NOW(), NOW())";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result === TRUE) {
        echo "Your message has been added.";
    } else {
        echo "An error occurred.";
    }
}

?>
