<?php
session_start();

// Check submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['phone']; 
    $message = $_POST['message'];

    // Connect to database
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "accommodations";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // insert user data into the database
    $sql = "INSERT INTO studentrequest (`name`, `email`, `phonenumber`, `message`) VALUES ('$name', '$email', '$number', '$message')";
    if ($conn->query($sql) === TRUE) {
        
        $_SESSION['email'] = $email;
        // Redirect
        header("Location: Student_contact.php");
        exit();
    } else {
        // failed
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
