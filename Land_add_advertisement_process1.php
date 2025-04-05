<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET" || isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    // Retrieve form data
    $name1 = $_POST['header'];
    $number0 = $_POST['price'];
    $number1 = $_POST['distance']; 
    $number2 = $_POST['mates'];
    $number3 = $_POST['keym'];
    $number4 = $_POST['pnum'];
    $name2 = $_POST['description'];
    $number5 = $_GET['lat'];
    $number6 = $_GET['lng'];
    $number7 = $_POST['sid'];
    //image data
    $name = $_FILES['image']['name'];
    $type = $_FILES['image']['type'];
    $data = file_get_contents($_FILES['image']['tmp_name']);



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

    $sql = "INSERT INTO advertisement_table1 (`header`, `price`, `distance`, `mates`, `key`, `description`, `phonenumber`, `image`, `latitude`, `longitude`, `sellerid`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssddi", $name1, $number0, $number1, $number2, $number3, $name2, $number4, $name, $number5,  $number6, $number7);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Advertisement added successfully.";
        header("Location: Land_add_advertisement.php");
        exit();
    } else {
        // errors
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Error: Form data is not submitted.";
}
?>
