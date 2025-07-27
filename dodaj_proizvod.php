<?php

 // ime_proizvoda	opis	cena	slika	kolicina
?>

   <!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dodaj proizvod</title>
</head>
<body>
   <form action="modeli/proizvodi.php" method="POST">
       <input type="text" name="ime_proizvoda" placeholder="dodaj proizvod" required>
       <input type="text" name="opis" placeholder="opis proizvoda" required>
       <input type="text" name="cena" placeholder="cena proizvoda" required>
       <input type="text" name="slika" placeholder="slika proizvoda" required>
       <input type="text" name="kolicina" placeholder="kolicina proizvoda" required>

       <button type="submit">Dodaj proizvod</button>


   </form>
</body>
</html>