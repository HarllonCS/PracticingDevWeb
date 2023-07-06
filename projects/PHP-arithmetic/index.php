<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edhe">
	<meta name="viewport" cotnent="width=device=width, initial-scale=1">
	<title>Arithmetic Avarage</title>
</head>
<body>
	<main role="main">
		<h1>Arithmetic Avarage</h1>
		
		<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
			<div class="box">
				<label for="v1">1° Value</label>
				<input type="number" id="v1" autofocus>
			</div>
			
			<div class="box">
				<label for="w1">1° Weight</label>
				<input type="number" id="v1">
			</div>
			
			<div class="box">
				<label for="v2">2° Value</label>
				<input type="number" id="v1">
			</div>
			
			<div class="box">
				<label for="w2">2° Weight</label>
				<input type="number" id="v1">
			</div>
			
			<button type="submit">Calculate Avarage</button>
		</form>
	</main>
	
	<section>
		<h2>Results</h2>
		
		<?php
			echo "<p>Simple Arithmetic mean = </p>"
			echo "<p>Weighted arithmetic mean = </p>"
		?>
	</section>
</body>
</html>