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
        $minSal = 1380;
		$minSalF = numfmt_format_currency($currency, $minSal, "BRL");
    ?>

    <div id="content-box" class="box">
        <h1>Report Your Salary</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salary (R$)</label>
			<input type="number" name="salary" id="sal" autofocus step=".01">
            <?="<p>Minimum Salary: <strong>$minSalF</strong></p>";?>
            <button type="submit">Calculate</button>
        </form>
    </div>

    <div id="content-box2" class="box">
        <h2>Final Result</h2>
        <?php
			$usrSalary = $_GET['salary'] ?? 0;
			$usrSalaryF = numfmt_format_currency($currency, $usrSalary, "BRL");
			$salary = $usrSalary / $minSal;
			
			echo "<p class='res'>Earned salary: <strong>$usrSalaryF</strong></p>";
			echo "<p class='res'>Salary: <strong>$salary</strong></p>";
		?>
    </div>
</body>
</html>