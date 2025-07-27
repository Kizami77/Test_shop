<?php

?>

    <!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registracija</title>
    <link rel="stylesheet" href="scss/style.css"

</head>
<body>

    <div id="forma">
     <form action="modeli/potvrda_registracije.php" method="POST">
         <input type="text" name="ime" placeholder="ime"  required>
         <input type="email" name="email" placeholder="email" required>
         <input type="password" name="lozinka" placeholder="lozinka" required>

         <button type="submit">Registruj se</button>
     </form>

    </div>
</body>
</html>
