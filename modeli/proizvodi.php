<?php
   global $baza;





if( !isset($_POST['ime_proizvoda']) || empty($_POST['ime_proizvoda']) )
{
    die("Niste prosledili ime proizvoda!");
}

if( !isset($_POST['opis']) || empty($_POST['opis']) )
{
    die("Niste prosledili opis proizvoda!");
}

if( !isset($_POST['cena']) || empty($_POST['cena']) )
{
    die("Niste prosledili cenu proizvoda!");
}

if( !isset($_POST['slika']) || empty($_POST['slika']) )
{
    die("Niste prosledili sliku proizvoda!");
}

if( !isset($_POST['kolicina']) || empty($_POST['kolicina']) )
{
    die("Niste prosledili kolicina proizvoda!");
}

require_once "baza.php";


   $ime_proizvoda = $_POST['ime_proizvoda'];
   $opis = $_POST['opis'];
   $cena = $_POST['cena'];
   $slika = $_POST['slika'];
   $kolicina = $_POST['kolicina'];


$q = "INSERT INTO proizvodi (ime_proizvoda, opis, cena, slika, kolicina) VALUES ('$ime_proizvoda', '$opis', $cena, '$slika', $kolicina) ";

$baza->query($q);


