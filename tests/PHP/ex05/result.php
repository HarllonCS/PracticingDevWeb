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
                $num = $_GET["num"] ?? 'undefined';
                $num = number_format($num, 3, ',', '.');

                echo "<p>Analyzing number <strong>$num</strong>...</p>";
            ?>
        </div> <!-- /end PHP Code -->
        <!-- /end Titlte -->
        <a href="./index.html">Back</a>
    </main> <!-- /end Content box -->
</body>
</html>