<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Feedback</title>
</head>
<body>
    <?php $txt = $_GET["text"] ?? 'undefined';?>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="t">Text:</label>
        <input type="text" name="text" id="t" value="<?=$txt?>">
        <button type="submit">Submit</button>
    </form>
</body>
</html>