<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main role="main">
        <form action="./index.php">
            <p>Generate a random number between 0 and 100.</p>
            <div>
                <?php
                    echo "<p>".random_int(0, 100)."</p>";
                ?>
            </div>
            <button type="submit">Generate</button>
        </form>
    </main>
</body>
</html>