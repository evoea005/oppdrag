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
		<div id="get">
			<h1>Sjekk status</h1>
			<form action="ticketview.php" method="post">
				<div id="info">
					<label for="email">E-post</label>
					<input type="email" name="email" id="email">
					<label for="id">Saksnummer</label>
					<input type="text" name="id" id="id">
					<button type="submit" id="submit">Sjekk</button>
				</div>
			</form>
		</div>
	</main>
</body>

</html>

<style>
	* {
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	}

	#get {
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

	label {
		user-select: none;
	}

	button {
		width: 100px;
	}
</style>