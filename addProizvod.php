<?php

?>

<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dodaj proizvod</title>
    <link rel="stylesheet" href="scss/style_proizvod.css">
</head>
<body>

<form id="proizvodi" action="modeli/proizvodi.php" method="POST">

    <input type="text" name="ime_proizvoda" placeholder="ime proizvoda" required>
    <input type="text" name="opis" placeholder="opis proizvoda" required>
    <input type="text" name="cena" placeholder="cena proizvoda" required>
    <input type="text" name="slika" placeholder="slika proizvoda" required>
    <input type="text" name="kolicina" placeholder="kolicina proizvoda" required>
    <input type="date" name="datum_dodavanja" placeholder="datum dodatog proizvoda" required>

    <button type="submit">Dodaj</button>
</form>
</body>
</html>
