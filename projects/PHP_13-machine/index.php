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
	<?php // Currency for number formats
		$currency = numfmt_create("en", NumberFormatter::CURRENCY);
		$money = $_GET['m'] ?? 0;
		// R$ 100.00 Notes
		$hundred = 100;
		$hundredDiv = intdiv($money, $hundred);
		$hundredRest = $money % $hundred;
		$hundredF = numfmt_format_currency($currency, $hundred, "BRL");
		// R$ 50.00 Notes
		$fifty = 50;
		$fiftyDiv = intdiv($hundredRest, $fifty);
		$fiftyRest = $hundredRest % $fifty;
		$fiftyF = numfmt_format_currency($currency, $fifty, "BRL");
		// R$ 10.00 Notes
		$ten = 10;
		$tenDiv = intdiv($fiftyRest, $ten);
		$tenRest = $fiftyRest % $ten;
		$tenF = numfmt_format_currency($currency, $ten, "BRL");
		// R$ 5.00 Notes
		$five = 5;
		$fiveDiv = intdiv($tenRest, $five);
		$fiveF = numfmt_format_currency($currency, $five, "BRL");
	?>
	<main role="main"> <!-- Main content -->
		<h1>Cash Machine</h1>
		
		<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
			<label for="m">Money (R$)*</label><!-- User money -->
			<input type="number" id="m" name="m" step="5" value="<?=$money?>" autofocus required><!-- User money /end -->
			
			<!-- Warning -->
			<small>*Available Notes: <strong><?=$hundredF?></strong>, <strong><?=$fiftyF?></strong>, <strong><?=$tenF?></strong> e <strong><?=$fiveF?></strong></small>
			
			<button type="submit">Withdraw money</button> <!-- Withdraw Button -->
		</form>
	</main> <!-- Main content /end -->
	
	<section> <!-- Second content -->
		<h2>Results</h2>
		
		<div id="res"> <!-- Results -->
			<p><strong><?=$hundredF?></strong> Note = <strong class="note"><?=$hundredDiv?></strong></p>

			<p><strong><?=$fiftyF?></strong> Note = <strong class="note"><?=$fiftyDiv?></strong></p>

			<p><strong><?=$tenF?></strong> Note = <strong class="note"><?=$tenDiv?></strong></p>

			<p><strong><?=$fiveF?></strong> Note = <strong class="note"><?=$fiveDiv?></strong></p>
		</div> <!-- Results /end -->
	</section> <!-- Second content /end -->
</body>
</html>