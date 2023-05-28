<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomy of a Division</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div id="anatomy" class="box"> <!-- First div -->
        <h1>Anatomy of a Division</h1>
        <form action="./index.php" method="get">
            <div class="data"> <!-- Dividend -->
                <label for="num1">Dividend</label> <br>
                <input type="number" name="dividend" id="num1" value="0" autofocus>
            </div> <!-- /end Dividend -->

            <div class="data"> <!-- Divider -->
                <label for="num2">Divider</label> <br>
                <input type="number" name="divider" id="num2" value="1">
            </div> <!-- /end Divider -->

            <button type="submit">Analyze</button>
        </form>
    </div> <!-- /end First div -->

    <div id="result" class="box"> <!-- Second div -->
        <h2>Division Structure</h2>
        <div id="numbers">
            <div id="first">
                <p>5</p>
                <p>1</p>
            </div>
            <div id="second">
                <p id="p-sec">0</p>
                <p>1</p>
            </div>
        </div>
    </div> <!-- /end Second div -->
</body>
</html>