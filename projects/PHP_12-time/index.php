<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Time Calculator</title>
	
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<?php $sec = $_GET['sec'] ?? 0 ?>
	
	<main role="main">
		<h1>Time Calculator</h1>
		
		<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
			<div style="margin-bottom: 16px;">
			<label for="sec">Seconds</label>
			<input type="number" id="sec" name="sec" min="1" value="<?=$sec?>" autofocus>
			</div>
			
			<button type="submit">Calculate</button>
		</form>
	</main>
	
	<section>
		<h2>Results</h2>
		
		<div id="res">
			<?php
				echo "<p>Semanas = <span></span></p>";
				echo "<p>Dias = <span></span></p>";
				echo "<p>Horas = <span></span></p>";
				echo "<p>Minutos = <span></span></p>";
				echo "<p>Segundos = <span></span></p>";
			?>
		</div>
	</section>
</body>
</html>