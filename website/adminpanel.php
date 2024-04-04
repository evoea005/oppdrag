<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fjell Bedriftsløsninger</title>
</head>

<body>
	<nav>
		<a href="index.php">Hjem</a>
		<a href="submit.php">Send henvendelse</a>
		<a href="login.php">Admin login</a>
	</nav>

	<main>
		<div id="container">
			<h1>Adminpanel</h1>
			<div id="issues">
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "root";
				$database = "oppdrag";

				$conn = new mysqli($servername, $username, $password, $database);

				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT * FROM ticket";

				$result = $conn->query($sql);

				

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						echo "<div class='issue'>";
						echo "<div class='top'>";
						echo "<h2>" . $row["name"] . "</h2>";
						echo "<a href='./scripts/remove.php?id=" . $row["id"] . "'><button>Slett</button></a>";
						if (!$row["status"]) {
							echo "<a href='./scripts/solve.php?id=" . $row["id"] . "'><button>Marker som løst</button></a>";
						}
						echo "</div>";
						echo "<p>" . $row["content"] . "</p>";
						echo "<p class='status " . ($row["status"] ? "solved" : "unsolved") . "'>" . ($row["status"] ? "Løst" : "Ikke løst") . "</p>";
						echo "</div>";
					}
				} else {
					echo "Ingen henvendelser";
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

	.top {
		display: flex;
		flex-direction: row;
	}

	.top button {
		margin-left: auto;
		border: none;
		padding: 8px;
	}

	.top button:hover {
		cursor: pointer;
	}

	.issue {
		background-color: #f0f0f0;
		padding: 8px;
		margin: 8px;
	}

	.issue * {
		margin: 8px;
	}

	.issue h2 {
	}

	.issue p {
		background-color: white;
		padding: 8px;
	}

	.solved {
		color: green;
	}

	.unsolved {
		color: red;
	}
</style>