<?php

global $baza;
if( !isset($_POST['email']) || empty($_POST['email']) )
      {
        die("Niste uneli email/pogresan email");
      }
    if( !isset($_POST['lozinka']) || empty($_POST['lozinka']) )
      {
        die("Niste uneli lozinku/lozinka");
      }

  require_once "baza.php";

    $email = $_POST['email'];
    $lozinka = $_POST['lozinka'];

     $rezultat =  $baza->query("SELECT * FROM korisnici WHERE email = '$email'");

    if ($rezultat->num_rows >= 1)
    {
       $korisnik = $rezultat->fetch_assoc();
       $proveraSifre = password_verify($_POST['lozinka'], $korisnik['lozinka']);
    }

     if($proveraSifre == true)
     {
         echo "Dobrodosli";
     }
    else {
        echo "Korisnik nije pronadjen";
    }





