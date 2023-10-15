<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Result</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main role="main">
        <h1>currency converter v1.0</h1> 
        <div>
            <?php
                $currency = numfmt_create("us", NumberFormatter::CURRENCY);
                $num = $_GET['num'] ?? 0;
                $dollar = 5.03;
                $real_convert = $num / $dollar;

                echo "<p>Dollar price = ".numfmt_format_currency($currency, $dollar, "USD")."</p>";

                echo "<p class=\"p-style\">Real entered = ".numfmt_format_currency($currency, $num, "BRL")."</p>";

                echo "<p>Converted = ".numfmt_format_currency($currency, $real_convert, "USD")."</p>";
            ?>
        </div>
        <a href="./index.html">Back</a>
    </main>
</body>
</html>