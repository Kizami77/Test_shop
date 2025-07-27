<?php



  $baza = mysqli_connect("localhost","root","","test_shop");


// Provera da li je konekcija uspela
if (mysqli_connect_errno()) {
    echo "Greška pri konekciji sa bazom: " . mysqli_connect_error();
    exit(); // Prekida dalje izvršavanje ako ima greške
} else {
    echo "Konekcija uspešna!";
}
