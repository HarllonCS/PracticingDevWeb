<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roots</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php // variable $num to store standard value
        $num = $_GET["number"] ?? 1;
    ?>
    <!-- First box -->
    <div id="content-box" class="box">
        <h1>Enter a number</h1>
        <!-- form -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="n">Number</label>
            <input type="number" name="number" id="n" autofocus value="<?=$num?>">

            <button type="submit">Calculate</button>
        </form> <!-- form /end -->
    </div> <!-- First box /end -->
    <!-- Second box -->
    <div id="content-box2" class="box">
        <h2>Final Result</h2>
        <?="<p>A raíz quadrada de <span>$num</span> é <span>".number_format(sqrt($num), 2)."</span></p>";?>
    </div> <!-- Second box /end -->
</body>
</html>