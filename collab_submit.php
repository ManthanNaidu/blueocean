<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "ocean_production");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$org = $_POST['organization'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert into database
$sql = "INSERT INTO collaborations (organization, contact_person, email, message)
        VALUES ('$org', '$contact', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you! Your collaboration request has been submitted.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
