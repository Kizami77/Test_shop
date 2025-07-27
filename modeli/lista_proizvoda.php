<?php

global $baza, $id;
require_once "baza.php";

$rezultat = $baza->query("SELECT * FROM proizvodi");

$proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);



?>
  <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proizvodi</title>
   <link rel="stylesheet" href="../scss/style_lista.css">
</head>

<body>


<?php foreach ($proizvodi as $proizvod): ?>
    <div class="proizvod">
        <h1 class="proizvod__naslov"><?= $proizvod['ime_proizvoda'] ?></h1>
        <p class="proizvod__opis"><?= $proizvod['opis'] ?></p>
        <p class="proizvod__cena">Cena proizvoda: <?= $proizvod['cena'] ?>EUR</p>
        <p class="proizvod__kolicina">Na stanju: <?= $proizvod['kolicina'] ?></p>

        <?php if($proizvod['kolicina'] == 0): ?>
            <p class="proizvod__status proizvod__status--nema">Nema na stanju</p>
        <?php else: ?>
            <p class="proizvod__status proizvod__status--ima">Ima na stanju</p>
        <?php endif; ?>

        <?php if (!empty($proizvod['slika'])): ?>
            <img class="proizvod__slika" src="../img/<?= $proizvod['slika'] ?>" alt="Slika proizvoda" width="300">
        <?php else: ?>
            <p class="proizvod__slika-nedostupna">Slika nije dostupna.</p>


        <?php endif; ?>

        <a href="../proizvod.php?id=<?= $proizvod['id'] ?>">Pogledaj proizvod</a>
    </div>


<?php endforeach; ?>


</body>

</html>