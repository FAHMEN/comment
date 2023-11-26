<?php

// Include config file
include_once("config.php");

// Get all guestbook entries
$sql = "SELECT * FROM guestbook ORDER BY id DESC";
$result = $conn->query($sql);

// Check if the query was successful
if ($result === TRUE) {

    // Loop through the results
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<strong>" . $row["name"] . "</strong>";
        echo "<br>";
        echo $row["message"];
        echo "<br>";
        echo "<i>" . $row["date"] . "</i>";
        echo "</div>";
    }

} else {
    echo "An error occurred.";
}

?>
