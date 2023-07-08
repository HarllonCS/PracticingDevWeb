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
		$actualYear = $_GET['year'] ?? date('Y');
	?>
	<main role="main"> <!-- Main content -->
		<h1>Calculating age</h1>
		
		<form method="get" action="<?=$_SERVER['PHP_SELF']?>">
			<div class="box"> <!-- User year of birth -->
				<label for="n1">Year of Birth</label>
				<input type="number" name="birth_year" id="n1" min="1800" value="<?=$birthYear?>">
			</div> <!-- User year of birth /end -->
			
			<div class="box">
				<label for="n2">Year (atual year: <?=$actualYear?>)</label>
				<input type="number" name="year" id="n2" value="<?=$actualYear?>">
			</div>
			
			<div id="btn"> <!-- Button -->
				<button type="submit">Calculate age</button>
			</div> <!-- Button /end -->
		</form>
	</main> <!-- Main content /end -->
	
	<section>
		<h2>Results</h2>
		
		<?php
			$age = $actualYear - $birthYear;
			
			echo "<p>Age = <span>$age</span></p>";
		?>
	</section>
</body>
</html>