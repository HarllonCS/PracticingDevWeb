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
	<?php
		$v1 = $_GET['value1'] ?? 0;
		$v2 = $_GET['value2'] ?? 0;
		$w1 = $_GET['weight1'] ?? 1;
		$w2 = $_GET['weight2'] ?? 1;
	?>
	<main role="main"> <!-- Main content box -->
		<!-- Title -->
		<h1>Arithmetic Avarage</h1>
		
		<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
			<div class="box"> <!-- 1° Value field -->
				<label for="v1"><span class="lb-n">1</span>° Value</label>
				<input type="number" id="v1" name="value1" value="<?=$v1?>" autofocus step=".01">
			</div> <!-- 1° Value field /end -->
			
			<div class="box"> <!-- 1° Weight field -->
				<label for="w1"><span class="lb-n">1</span>° Weight</label>
				<input type="number" name="weight1" id="w1" value="<?=$w1?>" step=".01">
			</div> <!-- 1° Weight field /end -->
			
			<div class="box"> <!-- 2° Value field -->
				<label for="v2"><span class="lb-n">2</span>° Value</label>
				<input type="number" name="value2" id="v2" value="<?=$v2?>" step=".01">
			</div> <!-- 2° Value field /end -->
			
			<div class="box"> <!-- 2° Weight field -->
				<label for="w2"><span class="lb-n">2</span>° Weight</label>
				<input type="number" name="weight2" id="w2" value="<?=$w2?>" step=".01">
			</div> <!-- 2° Weight field /end -->
			
			<div id="btn"> <!-- Calculate Button -->
				<button type="submit">Calculate Avarage</button>
			</div> <!-- Calculate Button /end -->
		</form>
	</main> <!-- Main content box /end -->
	
	<section> <!-- Results box -->
		<h2>Results</h2>
		
		<div id="res">
			<?php
				$simple = ($v1 + $v2) / 2;
				$weighted = (($v1* $w1) + ($v2 * $w2)) / ($w1 + $w2);
			
				echo "<p>Simple Arithmetic mean = ".number_format($simple, 2)."</p>";
				echo "<p>Weighted arithmetic mean = ".number_format($weighted, 2)."</p>";
			?>
		</div>
	</section> <!-- Results box /end -->
</body>
</html>