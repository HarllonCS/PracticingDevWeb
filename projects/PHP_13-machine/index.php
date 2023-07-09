<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cash Machine</title>
	
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<?php $money = $_GET['m'] ?? 0 ?>
	
	<main role="main">
		<h1>Cash Machine</h1>
		
		<form action="<?$_SERVER['PHP_SELF']?>" method="get">
			<label for="m">Money (R$)*</label>
			<input type="number" id="m" name="m" step="5" value="<?=$money?>" autofocus>
			
			<small>*Available Notes: R$100, R$50, R$10 e R$5</small>
			
			<button type="submit">Withdraw money</button>
		</form>
	</main>
	
	<section>
		<h2>Results</h2>
		
		<div id="res">
			<?php
				echo "<p>R$100 Note = <span>x</span></p>";
				echo "<p>R$50 Note = <span>x</span></p>";
				echo "<p>R$10 Note = <span>x</span></p>";
				echo "<p>R$5 Note = <span>x</span></p>";
			?>
		</div>
	</section>
</body>
</html>