<?php

global $baza;
require_once "modeli/baza.php";

  if( !isset($_GET['id']) || empty($_GET['id']) )
  {
      die("Nedostaje id proizvoda");
  }

  $idProizvoda = $_GET['id'];

  $rezultat = $baza->query("SELECT * FROM proizvodi WHERE id='$idProizvoda'");

  if( $rezultat->num_rows > 0 )
  {
      echo"Ime proizvoda";
  }else
  {
      echo "Nema trazenog proizvoda!";
  }

$proizvod = $rezultat->fetch_assoc();
?>

  <!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proizvod</title>
</head>
<body>

<h1><?= $proizvod['ime_proizvoda'] ?></h1>
<p><?= $proizvod['opis'] ?></p>
<p>Cena proizvoda: <?= $proizvod['cena'] ?></p>

<?php if($proizvod['kolicina'] == 0): ?>
    <p>Nema na stanju</p>
<?php else: ?>
    <p>Ima na stanju</p>
<?php endif; ?>

</body>
</html>
