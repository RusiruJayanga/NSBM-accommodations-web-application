<?php
session_start();

// Checksubmitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id = $_POST['item_id'];

    // Connect to database
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "accommodations";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //  query to delete the row
    $sql = "DELETE FROM advertisement_table2 WHERE id = '$id'";
    if ($conn->query($sql) === TRUE) {
        // Check if row was affected
        if ($conn->affected_rows > 0) {
            // Redirect
            header("Location: Land_my_approveadvertisements.php");
            exit();
        } else {
            echo "No rows affected";
        }
    } else {
        // Handle errors
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>