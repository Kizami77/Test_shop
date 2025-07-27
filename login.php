<?php

?>
<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uloguj se</title>
    <link rel="stylesheet" href="scss/style_registration.css">

</head>
<body>

<form  action="modeli/myLogin.php" method="post">
    <input type="email" name="email" placeholder="vas email" required>
    <input type="password" name="lozinka" placeholder="vasa lozinka" required>

    <button type="submit">Uloguj se</button>
</form>
</body>
</html>