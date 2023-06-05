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
    <?php $minSal = 1380;?>

    <div id="content-box" class="box">
        <h1>Report Your Salary</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <div class="data">
                <label for="sal">Salary(R$)</label>
                <input type="number" name="salary" id="sal">
            </div>

            <p>Minimum Salary: <strong>R$ <?=number_format($minSal, 2, ',', '.')?></strong></p>

            <button type="submit">Calculate</button>
        </form>
    </div>
</body>
</html>