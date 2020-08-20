<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMS</title>
</head>
<body>
    <form action="form.php" method="get">
        Name:<br>
        <input type="text" name="name"><br>
        Age:
        <br>
        <input type="number" name="age">
        <br>
        <input type="submit">
    </form>
    <br>
    YOUR NAME IS  <?php echo $_GET["name"] ?>;
    <br>
    YOUR AGE IS  <?php echo $_GET["age"] ?>;
</body>
</html>