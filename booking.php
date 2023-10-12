<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fullname"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $department = $_POST["dpt"];
    $image = $_POST["image"];

    
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO Booking (name, gender, address, phone, department,passport) VALUES ('$name', '$gender', '$address', '$phone', '$department', '$image')";

    if ($conn->query($sql) === TRUE) {
        echo "Inforation has been inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
