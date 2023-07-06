<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roots</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
	<!-- variable $num to store standard value -->
    <?php $num = $_GET["number"] ?? 1; ?>

    <div id="content-box" class="box"> <!-- First box -->
        <h1>Enter a number</h1>
		
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get"> <!-- form -->
            <label for="n">Number</label>
            <input type="number" name="number" id="n" autofocus value="<?=$num?>">

            <button type="submit">Calculate</button>
        </form> <!-- form /end -->
    </div> <!-- First box /end -->

    <div id="content-box2" class="box"> <!-- Second box -->
        <h2>Final Result</h2>
		
		<div id="res">
			<?php
				$square = number_format($num**(1/2), 2);
				$cubic = number_format($num**(1/3), 2);
				
				echo "<p>Square Root = <span>$square</span></p>";
				echo "<p>Cubic Root = <span>$cubic</span></p>";
			?>
		</div>
    </div> <!-- Second box /end -->
</body>
</html>