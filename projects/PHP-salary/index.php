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
        $minSal = 1380;
        $currency = numfmt_create("en", NumberFormatter::CURRENCY);
    ?>

    <div id="content-box" class="box">
        <h1>Report Your Salary</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salary (R$)</label>
            <input type="number" name="salary" id="sal" value="<?=$minSal?>" autofocus>
            <?="<p>Minimum Salary: <strong>".numfmt_format_currency($currency, $minSal, "BRL")."</strong></p>";?>
            <button type="submit">Calculate</button>
        </form>
    </div>

    <div id="content-box2" class="box">
        <h2>Final Result</h2>
        <?php
            echo "<p class='res'>Earned salary: <strong>".numfmt_format_currency($currency, $minSal, "BRL")."</strong></p>";
        ?>
    </div>
</body>
</html>