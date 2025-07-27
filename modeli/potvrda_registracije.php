<?php

global $baza;
require_once "baza.php";

   if( !isset($_POST['ime']) || empty($_POST['ime']) )
     {
       die("Niste uneli ime");
     }

     if( !isset($_POST['email']) || empty($_POST['email']) )
     {
       die("Niste uneli email");
     }

    if( !isset($_POST['lozinka']) || empty($_POST['lozinka']) )
     {
       die("Niste uneli lozinku");
     }

   $ime=$_POST['ime'];
   $email=$_POST['email'];
   $password= password_hash($_POST['lozinka'], PASSWORD_DEFAULT);

   $rezultat = $baza->query("SELECT * FROM korisnici WHERE  email='$email'");

   if($rezultat->num_rows >= 1)
   {
       echo "Uspesno ste se registrovali kao nas  korisnik";
   }else
   {
       $baza->query("INSERT INTO   korisnici(ime,email,lozinka) VALUES ('$ime','$email','$password')");
   }




