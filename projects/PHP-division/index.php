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
    <?php 
        $dividend = $_GET['v1'] ?? 0;
        $divider = $_GET['v2'] ?? 1;
    ?>

    <div id="anatomy" class="box"> <!-- First div -->
        <h1>Anatomy of a Division</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <div class="data"> <!-- Dividend -->
                <label for="num1">Dividend</label> <br>
                <input type="number" name="v1" id="num1" value="<?=$dividend?>" step=".05" autofocus>
            </div> <!-- /end Dividend -->

            <div class="data"> <!-- Divider -->
                <label for="num2">Divider</label> <br>
                <input type="number" name="v2" id="num2" value="<?=$divider?>" step=".05">
            </div> <!-- /end Divider -->

            <button type="submit">Analyze</button>
        </form>
    </div> <!-- /end First div -->

    <div id="result" class="box"> <!-- Second div -->
        <h2>Division Structure</h2>
        <div id="numbers">
            <?php
                $rest = $dividend % $divider;
                $result = $dividend / $divider;

                echo "<div id='col-first'>";
                echo "<p>$dividend</p><p>$rest</p></div>";
                echo "<div id='col-second'>";
                echo "<p class='divider'>$divider</p>";
                echo "<p>".number_format($result, 3)."</p></div>";
            ?>
        </div>
    </div> <!-- /end Second div -->
</body>
</html>