<?php 
$user = 'root';
$pass = '';
$db = 'pizzaiulia';
$tabel1 = 'comenzi';
$con = new mysqli('localhost', $user, $pass, $db) or die("Unable");
echo "great work!!";

$sql ="INSERT INTO " . $tabel1 ."(pizza,numar_telefon,precizari) values ('formata',0258,'foarte buna!')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}


mysqli_close($con);
?>