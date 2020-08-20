<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASIC CALCULATOR</title>
</head>
<body>
    <form action="form.php" method="get">
        Name:<br>
        <input type="number" name="num1"><br>
        Age:
        <br>
        <input type="number" name="num2">
        <br>
        <input type="submit">
    </form>
    <br>
    ANSWER:  <?php echo $_GET["num1"] + $_GET[num2] ?>;
</body>
</html>