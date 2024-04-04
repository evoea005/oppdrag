<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Success</title>
</head>

<body>
	<main>
		<h1>Henvendelsen din er mottatt!</h1>
		<h2>Ditt saksnummer: <code>
			<?php
			if (isset($_GET["id"])) {
				echo $_GET["id"];
			}
			?>
		</code>
	</h2>
	<a href="./">Tilbake til forsiden</a>
	</main>
</body>

</html>

<style>
	main {
		display: flex;
		flex-direction: column;
		align-items: center;
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		user-select: none;
	}

	h1, h2 {
		user-select: none;
	}

	code {
		background-color: #f0f0f0;
		padding: 6px;
		border-radius: 4px;
		user-select: text;
	}
</style>