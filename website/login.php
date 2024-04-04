<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<nav>
		<a href="index.php">Hjem</a>
		<a href="submit.php">Send henvendelse</a>
		<a href="login.php">Admin login</a>
	</nav>

	<main>
		<form action="./scripts/login.php" method="post">
			<?php
				if (isset($_GET["error"])) {
					echo "<p>Feil brukernavn eller passord</p>";
				}
			?>
			<label for="username">Brukernavn</label>
			<input type="text" name="username" id="username">
			<label for="password">Passord</label>
			<input type="password" name="password" id="password">
			<button type="submit" id="login">Login</button>
		</form>
	</main>
</body>

</html>

<script>
	username = document.getElementById("username");
	password = document.getElementById("password");
	button = document.getElementById("login");

	function updateButton() {
		if (username.value.length < 3 || password.value.length < 3) {
			button.disabled = true;
		} else {
			button.disabled = false;
		}

		console.log(button.disabled)
	}

	username.addEventListener("input", updateButton);
	password.addEventListener("input", updateButton);

	updateButton();
</script>

<style>
	body {
		font-family: "Open Sans", sans-serif;
	}

	main {
		margin: 0 auto;
		max-width: 800px;
		padding: 20px;
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	form {
		display: flex;
		flex-direction: column;
		width: 200px;
		border: 1px solid black;
		padding: 10px;
	}

	form input {
		margin-bottom: 10px;
	}

	form label {
		margin-bottom: 4px;
	}

	form button {
		background-color: #4CAF50;
		color: white;
		border: none;
		padding: 10px 20px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
	}

	form button:hover {
		background-color: #45a049;
	}

	form button:active {
		background-color: #3e8e41;
	}

	form button[disabled] {
		background-color: #cccccc;
	}

	form button[disabled]:hover {
		cursor: not-allowed;
	}
</style>