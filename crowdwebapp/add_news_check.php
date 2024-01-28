<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectict602";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$newsTitle = $_POST['newsTitle'];
$newsDesc = $_POST['newsDesc'];
$newsDate = $_POST['newsDate'];

$sql = "INSERT INTO news (newsTitle, newsDesc, newsDate) VALUES ('$newsTitle', '$newsDesc', '$newsDate')";
$result = $conn->query($sql);

if ($result) {
    // Redirect to admin_page.php with success message
    header("Location: admin_page.php?success=1");
    exit();
} else {
    // Redirect to admin_page.php with error message and display the SQL error for debugging
    header("Location: admin_page.php?error=1&sql_error=" . urlencode($conn->error));
    exit();
}

$conn->close();
?>
