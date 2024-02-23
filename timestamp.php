<?php
include 'connect.php';

$elapsedTime = $_GET['elapsedTime'];
$sid = $_GET['id'];

// Escape values to prevent SQL injection
$elapsedTime = mysqli_real_escape_string($conn, $elapsedTime);
$sid = mysqli_real_escape_string($conn, $sid);

// Update the data in the database
$sql = "UPDATE users SET stamp = '$elapsedTime' WHERE pid = '$sid'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
