<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Online</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <form action="hasil.php" method="POST">
        <h1>Kalkulator Online</h1>
        <input type="number" id="angka1" name="angka1" placeholder="Angka Pertama">
        <input type="number" id="angka2" name="angka2" placeholder="Angka Kedua">
        <button type="submit" name="operator" value="+">+</button>
        <button type="submit" name="operator" value="-">-</button>
        <button type="submit" name="operator" value="x">x</button>
        <button type="submit" name="operator" value="/">/</button>
    </form>
</body>
</html>