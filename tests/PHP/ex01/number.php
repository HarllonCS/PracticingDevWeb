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
    <main role="main">
        <div>
            <?php 
                $num = $_GET["number"] ?? 'undefined';

                echo "<p>Entered Number = ".$num."</p>";
                echo "<p class=\"p-style\">Predecessor = ".($num - 1)."</p>";
                echo "<p>Successor = ".($num + 1)."</p>";
            ?>
            <a href="./index.html">Voltar</a>
        </div>
    </main>
</body>
</html>