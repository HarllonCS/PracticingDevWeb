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
	<?php
		$sec = $_GET['sec'] ?? 0;
		// Week
		$weekDiv = intdiv($sec, 604800);
		$weekRest = $sec % 604800;
		// Day
		$dayDiv = intdiv($weekRest, 86400);
		$dayRest = $weekRest % 86400;
		// Hours
		$hourDiv = intdiv($dayRest, 3600);
		$hourRest = $dayRest % 3600;
		// Minutes
		$minDiv = intdiv($hourRest, 60);
		$minRest = $hourRest % 60;
	?>
	
	<main role="main">
		<h1>Time Calculator</h1>
		
		<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
			<div style="margin-bottom: 16px;">
				<label for="sec">Seconds</label>
				<input type="number" id="sec" name="sec" min="1" value="<?=$sec?>" step="1" autofocus>
			</div>
			
			<button type="submit">Calculate</button>
		</form>
	</main>
	
	<section>
		<h2>Results</h2>
		
		<ul>
			<li>Weeks = <strong><?=$weekDiv?></strong></li>
			<li>Days = <strong><?=$dayDiv?></strong></li>
			<li>Hours = <strong><?=$hourDiv?></strong></li>
			<li>Minutes = <strong><?=$minDiv?></strong></li>
			<li>Seconds = <strong><?=$minRest?></strong></li>
		</ul>
	</section>
</body>
</html>