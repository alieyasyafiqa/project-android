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

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$_SESSION['username'] = $username;
	header("location: admin_page.php");
} else {
	echo "Invalid username or password";
}

$conn->close();
?>