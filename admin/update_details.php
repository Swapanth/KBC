<?php
include 'connect.php';

if (isset($_GET['pid'])) {
    $pid = $_GET['pid'];

    // Assuming $conn is your database connection

    // Update the 'users' table
    $query1 = "UPDATE users SET status = 1, points = 0, button1 = 0, button2 = 0, button3 = 0, stamp = 0 WHERE pid = '$pid'";

    // Delete from 'responses1' table
    $query2 = "DELETE FROM responses1 WHERE sid = '$pid'";

    // Delete from 'responses2' table
    $query3 = "DELETE FROM responses2 WHERE sid = '$pid'";

    // Delete from 'responses3' table
    $query4 = "DELETE FROM responses3 WHERE sid = '$pid'";

    // Execute each query separately
    if (mysqli_query($conn, $query1) && mysqli_query($conn, $query2) && mysqli_query($conn, $query3) && mysqli_query($conn, $query4)) {
        header("Location: registrations.php");
    } else {
        echo "Error updating details: " . mysqli_error($conn);
    }
}
?>
