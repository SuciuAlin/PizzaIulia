<?php

$user = 'root';
$pass = '';
$db = 'pizzaiulia';
$tabel1 = 'date';
$tabel2 = 'mancare';
$con = new mysqli('localhost', $user, $pass, $db) or die("Unable");
$cautat='neagra alba';
$pret = 0;
$sql = "SELECT Pret FROM Mancare Where Denumire ='$cautat'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) == 1) { // nu a gasit mai multe tipuri de mancare in baza de date cu acelasi nume
    while($row = mysqli_fetch_assoc($result)) {
       $pret += $row["Pret"];
    }
} else {
    echo "Nu există tipul acesta de mâncare.";
}
echo $pret;
$cautat='e';
$sql = "SELECT Pret FROM Mancare Where Denumire ='$cautat'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) == 1) { // nu a gasit mai multe tipuri de mancare in baza de date cu acelasi nume
    while($row = mysqli_fetch_assoc($result)) {
       $pret += $row["Pret"];
    }
} else {
    echo "Nu există tipul de mâncare $cautat.";
}

echo $pret;

?>