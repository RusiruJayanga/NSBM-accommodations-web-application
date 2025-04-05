<?php
session_start();

// Checksubmitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id0 = $_POST['appitem_id'];

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
    $sql = "INSERT INTO advertisement_table2 (id, header, price, distance, mates, `key`, description, phonenumber, image, latitude, longitude, sellerid)
    SELECT id, header, price, distance, mates, `key`, description, phonenumber, image, latitude, longitude, sellerid
    FROM advertisement_table1
    WHERE id = '$id0'";
    
    // Execute the query
    if ($conn->query($sql) === TRUE) {
       
        if ($conn->affected_rows > 0) {
            // Delete row from advertisement_table1
            $delete_sql = "DELETE FROM advertisement_table1 WHERE id = '$id0'";
            if ($conn->query($delete_sql) === TRUE) {
                // Redirect
                header("Location: Warden_approve_advertisement.php");
                exit();
            } else {
                echo "Error deleting row: " . $conn->error;
            }
        } else {
            echo "No rows affected";
        }
    } else {
        // errors
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>