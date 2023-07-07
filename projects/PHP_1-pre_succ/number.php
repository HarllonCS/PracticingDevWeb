<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main role="main"> <!-- Main content -->
        <div>
            <?php
                // Variable to store number input information
                $num = $_GET["number"] ?? 'undefined';

                // Print results
                echo "<p>Entered Number = ".$num."</p>";
                echo "<p class=\"p-style\">Predecessor = ".($num - 1)."</p>";
                echo "<p>Successor = ".($num + 1)."</p>";
            ?>
            <!-- Link to go back first page -->
            <a href="./index.html">Back</a>
        </div>
    </main> <!-- /end Main content -->
</body>
</html>