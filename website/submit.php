<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Send henvendelse</title>
</head>

<body>
	<nav>
		<a href="index.php">Hjem</a>
		<a href="submit.php">Send henvendelse</a>
		<a href="login.php">Admin login</a>
	</nav>

	<div id="container">
		<form action="./scripts/submit.php" method="post">
			<div id="info">
				<label for="name">Navn</label>
				<input type="text" name="name" id="name">
				<label for="email">E-post</label>
				<input type="email" name="email" id="email">
			</div>
			<textarea name="issue" id="issue" placeholder="Beskriv problemet ditt"></textarea>
			<button type="submit" id="submit">Send</button>
		</form>
	</div>
</body>

</html>

<?php

?>

<style>
	* {
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	}

	form {
		background-color: #f0f0f0;
		padding: 20px;
		display: flex;
		flex-direction: column;
	}

	form * {
		margin: 4px;
	}

	#info input[type="text"] {
		margin-right: 10px;
	}

	#issue {
		height: 200px;
	}

	label {
		user-select: none;
	}

	button {
		width: 100px;
	}

	textarea {
		resize: none;
	}
</style>