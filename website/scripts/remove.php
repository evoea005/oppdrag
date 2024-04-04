<?php

$id = $_GET["id"];

$servername = "localhost";
$username = "root";
$password = "root";
$database = "oppdrag";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM ticket WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
	header("Location: ../adminpanel.php");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}