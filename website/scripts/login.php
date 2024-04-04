<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {
	$loginusername = $_POST["username"];
	$loginpassword = $_POST["password"];

	$loginpassword = hash("sha256", $loginpassword);


	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database = "oppdrag";

	$conn = new mysqli($servername, $username, $password, $database);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM user WHERE username='$loginusername' AND password='$loginpassword'";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();

		session_start();
		$_SESSION["username"] = $row["username"];

		header("Location: ../adminpanel.php");
	} else {
		header("Location: ../login.php?error=1");
	}

}