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
                $num = (float)$_GET['num'] ?? 'undefined';
                $dollar = 5.05;
                $real_convert = $num / $dollar;

                echo "<p>Real entered = R$$num</p>";
                echo "<p class=\"p-style\">Dollar price = R$$dollar</p>";
                echo "<p>Converted = US$$real_convert</p>";
            ?>
        </div>
        <a href="./index.html">Back</a>
    </main>
</body>
</html>