<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
        $currency = numfmt_create("en", NumberFormatter::CURRENCY);
        $minSal =  1320;
		$salary = $_GET['salary'] ?? $minSal;

        $amountSal = intdiv($salary, $minSal);
		$restSal = numfmt_format_currency($currency, $salary % $minSal, "BRL");
		$salaryF = numfmt_format_currency($currency, $salary, "BRL");
    ?>
    <div id="content-box" class="box">
        <h1>Report Your Salary</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salary (R$)</label>
			<input type="number" name="salary" id="sal" autofocus step=".01" value="<?=$salary?>">
            <p>Minimum Salary: <strong><?=numfmt_format_currency($currency, $minSal, "BRL")?></strong></p>
            <button type="submit">Calculate</button>
        </form>
    </div>

    <div id="content-box2" class="box">
        <h2>Final Result</h2>
        
		<div id="res">
			<p>User Salary = <span><?=$salaryF?></span></p>
			<p>Amount of Mininum Salary = <span><?=$amountSal?> + <?=$restSal?></span></p>
		</div>
    </div>
</body>
</html>