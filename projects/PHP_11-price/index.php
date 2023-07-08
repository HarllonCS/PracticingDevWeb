<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Price Readjuster</title>
	
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<?php
		$price = $_GET['price'] ?? 0;
		$readjust = $_GET['readjust'] ?? 20;
	?>
	<main role="main">
		<h1>Price readjuster</h1>
		
		<form action="<?=$_SERVE['PHP_SELF']?>" method="get">
			<div class="box">
				<label for="price">Product Price (R$)</label>
				<input type="number" id="price" name="price" min="1" value="<?=$price?>" autofocus>
			</div>
			
			<div class="box">
				<label for="readjust">Readjustment percentage</label>
				<input type="range" id="readjust" name="readjust" value="<?=$readjust?>">
			</div>
			
			<div id="btn">
				<button type="submit">Readjust</button>
			</div>
		</form>
	</main>
</body>
</html>