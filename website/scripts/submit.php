<?php
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["issue"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$issue = $_POST["issue"];


	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database = "oppdrag";

	$conn = new mysqli($servername, $username, $password, $database);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$id = bin2hex(random_bytes(8));

	$sql = "INSERT INTO ticket (id, name, email, content, status) VALUES ('$id', '$name', '$email', '$issue', '0')";

	if ($conn->query($sql) === TRUE) {
		header("Location: ../success.php?id=$id");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}