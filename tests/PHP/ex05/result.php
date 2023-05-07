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
    <main role="main"> <!-- Content box -->
        <!-- Titlte -->
        <h1>Float Analyzer</h1>
        <div> <!-- PHP Code -->
            <?php 
                $num = $_GET["num"] ?? 0;
                // $num = number_format($num, 3, ',', '.');
                $integer = (int) $num;
                $float = $num - $integer;

                echo "<p>Analyzing number <strong>".number_format($num, 3, ',', '.')."</strong>...</p>";

                echo "<p>Integer: <strong>".number_format($integer, 0, '', '.')."</strong></p>";

                echo "<p>Float: <strong>".number_format($float, 3, ',', '')."</strong></p>"
            ?>
        </div> <!-- /end PHP Code -->
        <!-- /end Titlte -->
        <a href="./index.html">Back</a>
    </main> <!-- /end Content box -->
</body>
</html>