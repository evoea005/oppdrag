<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Henvendelse</title>
</head>

<body>
	<main>
		<div id="issue">
			<?php
			if (isset($_POST["email"]) && isset($_POST["id"])) {
				$email = $_POST["email"];
				$id = $_POST["id"];


				$servername = "localhost";
				$username = "root";
				$password = "root";
				$database = "oppdrag";

				$conn = new mysqli($servername, $username, $password, $database);

				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT * FROM ticket WHERE id='$id' AND email='$email'";

				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					$row = $result->fetch_assoc();

					echo "<h1>" . $row["name"] . "</h1>";
					echo "<p>" . $row["content"] . "</p>";

					echo "<p>Status: " . ($row["status"] ? "Løst" : "Ikke løst") . "</p>";
				} else {
					echo "No ticket found";
				}

			}
			?>
		</div>
	</main>
</body>

</html>

<style>
	* {
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	}

	main {
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	#issue {
		background-color: #f0f0f0;
		padding: 8px;
		width: 70%;
		overflow-wrap: break-word;
	}

	#issue h1 {
		background-color: white;
		padding: 8px;
	}
</style>