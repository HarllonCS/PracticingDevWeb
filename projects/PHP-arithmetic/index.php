<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edhe">
	<meta name="viewport" cotnent="width=device=width, initial-scale=1">
	<title>Arithmetic Avarage</title>
	
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<main role="main"> <!-- Main content box -->
		<!-- Title -->
		<h1>Arithmetic Avarage</h1>
		
		<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
			<div class="box"> <!-- 1° Value field -->
				<label for="v1"><span class="lb-n">1</span>° Value</label>
				<input type="number" id="v1" autofocus>
			</div> <!-- 1° Value field /end -->
			
			<div class="box"> <!-- 1° Weight field -->
				<label for="w1"><span class="lb-n">1</span>° Weight</label>
				<input type="number" id="v1">
			</div> <!-- 1° Weight field /end -->
			
			<div class="box"> <!-- 2° Value field -->
				<label for="v2"><span class="lb-n">2</span>° Value</label>
				<input type="number" id="v1">
			</div> <!-- 2° Value field /end -->
			
			<div class="box"> <!-- 2° Weight field -->
				<label for="w2"><span class="lb-n">2</span>° Weight</label>
				<input type="number" id="v1">
			</div> <!-- 2° Weight field /end -->
		</form>
		
		<div id="btn"> <!-- Calculate Button -->
			<button type="submit">Calculate Avarage</button>
		</div> <!-- Calculate Button /end -->
	</main> <!-- Main content box /end -->
	
	<section> <!-- Results box -->
		<h2>Results</h2>
		
		<div id="res">
			<?php
				echo "<p>Simple Arithmetic mean = </p>";
				echo "<p>Weighted arithmetic mean = </p>";
			?>
		</div>
	</section> <!-- Results box /end -->
</body>
</html>