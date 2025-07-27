<?php

global $baza,$ime;

  if ( !isset($_GET['ime_proizvoda'] )|| empty( $_GET['ime_proizvoda'] ) )
  {
      die("Nepostoji trazeni proizvod!");
  }

require_once ("baza.php");


$ime = $_GET['ime_proizvoda'];

$rezultat = $baza->query(" SELECT * FROM proizvodi WHERE ime_proizvoda LIKE '%$ime%' OR opis LIKE '%$ime%' ");

if($rezultat->num_rows >= 1)
{
    echo "Uspesno smo pronasli ".$rezultat->num_rows." proizvoda";
}
else
{
    echo "Nismo pronasli nijedan proizvod";
}
