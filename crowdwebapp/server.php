<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectict602";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from Android app
$name = $_POST['name'];
$hazard_type = $_POST['hazard_type'];
$hazard_desc = $_POST['hazard_desc'];
$hazard_loc = $_POST['hazard_loc'];

// Insert data into database
$sql = "INSERT INTO reportinfo (name, hazard_type, hazard_desc, hazard_loc) VALUES ('$name', '$hazard_type', '$hazard_desc', '$hazard_loc')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>