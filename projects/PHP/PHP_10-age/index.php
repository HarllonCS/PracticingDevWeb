<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="wdith=device-width, initial-scale=1">
	<title>Calculate Age</title>
	
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<?php
		$birthYear = $_GET['birth_year'] ?? 2000;
		$actualYear = date("Y");
		$userYear = $_GET['year'] ?? $actualYear;
		$age = $userYear - $birthYear;
	?>
	<main role="main"> <!-- Main content -->
		<h1>Calculating age</h1>
		
		<form method="get" action="<?=$_SERVER['PHP_SELF']?>">
			<div style="margin-bottom: 16px;"> <!-- User year of birth -->
				<label for="n1">Year of Birth</label>
				<input type="number" name="birth_year" id="n1" min="1880" max="<?=$actualYear-1?>" value="<?=$birthYear?>" autofocus required>
			</div> <!-- User year of birth /end -->
			
			<div style="margin-bottom: 16px;">
				<label for="n2">Year (atual year: <?=$actualYear?>)</label>
				<input type="number" name="year" id="n2" value="<?=$userYear?>" required min="1880">
			</div>
			
			<div style="padding-bottom: 10px"> <!-- Button -->
				<button type="submit">Calculate age</button>
			</div> <!-- Button /end -->
		</form>
	</main> <!-- Main content /end -->
	
	<section>
		<h2>Results</h2>
		
		<p>Birth Year = <span><?=$birthYear?></span></p>
		<p>User Year Input = <span><?=$userYear?></span></p>
		<p>User Age = <span><?=$age?></span></p>
	</section>
</body>
</html>