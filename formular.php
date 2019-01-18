<?php 
$errors = '<center><b><font color=red size=7>';
$eroare = false;
$myemail = 'newcont3nt@gmail.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['phone'])   ||
   empty($_POST['address']) ||
   empty($_POST['nr']))
{
    $errors .= "Toate câmpurile sunt obligatorii<br><br>";
	$eroare = true;
}

$name = $_POST['name']; 
$email = $_POST['email']; 
$phone = $_POST['phone']; 
$address = $_POST['address']; 
$comments = $_POST['comments']; 

// adaugat pentru a diferentia la mai multe pizza de acelasi fel
$tip_pizza = $_POST['nr'];

	
{
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email))
{
    $errors .= "Adresă de mail invalidă<br><br>";
	$eroare = true;
}
 $pizza = $_POST['mancare'];
  if(empty($pizza)) 
  {
    $errors .= "Nu ați selectat nici un tip de mâncare.<br><br>";
	$eroare = true;
  } 
 
if( !$eroare ){  /// NU STIU DE CE INVERSU VALORII
	//Daca e doar una las asa
	if(strcmp($tip_pizza,"una")==0) 
{
	////////////////////////	baza de date	////////////////////////	
	$user = 'root';
	$pass = '';
	$db = 'pizzaiulia';
	$tabel1 = 'date';
	$tabel2 = 'mancare';
	$con = new mysqli('localhost', $user, $pass, $db) or die("Unable");
	
	
	
	
	
	
	
	$warning = "";
	$bon = "";
	$suma = 0;
	$val = 0;
	
    $N = count($pizza);
	$valori = "";
    $bon .= "<center><table style='border:1px solid black'><tr><th>Pizza</th><th>Pret</th></tr>";
	
    for($i=0; $i < $N; $i++)
    {
	$sql = "SELECT Pret FROM Mancare Where Denumire ='$pizza[$i]'";		//selecteaza pretul pt pizza respectiva
	$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) == 1)	// nu a gasit mai multe tipuri de mancare in baza de date cu acelasi nume
		while($row = mysqli_fetch_assoc($result)) {
		$suma += $row["Pret"];
		$val = $row["Pret"];//ia pretul
		$bon .= "<tr><td>" .$pizza[$i]. "</td><td> " .$val. "</td></tr>";
		$valori .= $pizza[$i] . "\n";
		}
	else {
    $bon .= "<tr><td colspan=2>Nu există $pizza[$i] </td></tr>";
		}	
	}
	
	////////////////////////	generat codu de 6 caractere	////////////////////////	
	
	$valid = true;
	$str = "";
	$cod = "";
	
	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < 6; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	
	$sql = "SELECT Nr FROM Date";
	$result = mysqli_query($con,$sql);
	$rows = mysqli_num_rows($result);
	while($row = mysqli_fetch_assoc($result)){
		echo $row["Nr"] ."\n";
		
	}
	
	while($valid)	////////////// verificat unicitatea codului /////////////////
	{				//////////// in tabelul cu datele vanzarilor ///////////////
	$valid = false;
	for($i=0; $i < $rows; $i++){			
		$sql = "SELECT Cod FROM Date Where Nr ='$i'";
		$result = mysqli_query($con, $sql);
		while($row = mysqli_fetch_assoc($result)) {
		$cod = $row["Cod"];
		if(strcmp($str,$cod)==0) {
								$str = "";
								for ($j = 0; $j < 6; $j++) {
									$rand = mt_rand(0, $max);
									$str .= $characters[$rand];
									}
				
								$valid = true;
								}
							
												  }
								}
	}
	
    echo("Ati selectat $N tipuri de mancare. $rows \n ");
	
	////////////////////////	escapes special characters in a string for use in an SQL statement	////////////////////////////////
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$phone = mysqli_real_escape_string($con,$_POST['phone']);
	$address = mysqli_real_escape_string($con,$_POST['address']); 
	$comments = mysqli_real_escape_string($con,$_POST['comments']);
	/////////////////////////	gasirea incrementarii potrivite
	//	incepe de la 1 pana la numarul de incrementari daca toate sunt luate pana acolo pune la nr+1
	$valid = true;
	$rand = 0;
	for($i=1;$i < $rows && $valid;$i++)
	{
		$sql = "SELECT Nr FROM Date Where Nr ='$i'";
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result)==0){ 
			$valid = false;
			$rand = $i;
			}
	}
	if ($valid) $rand = $rows;
	
	
	
	////////////////////////	inserare in baza de date	////////////////////////////////
	$sql ="INSERT INTO " . $tabel1 ."(nr,nume,mail,telefon,adresa,precizari,comanda,cod) values ('$rand','$name','$email','$phone','$address','$comments','$valori','$str')";
	if (mysqli_query($con, $sql)) {
		echo "Inserat cu succes in baza de date \n";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
	

	////////////////////////	transmitere prin mail	////////////////////////////////
    $to = array($myemail,$email);
	$email_to= implode(',',$to);
    $email_subject = "Comanda : $name";
    $email_body = "Bună ziua  $name . ! \n".
	"Comanda dumneavoastră a fost plasată. \n".
    "Detailiile comenzii:\nNume: $name \nEmail: $email \nTelefon: $phone\nAdresa: $address \n".
	"Număr elemente selectate: $N; \nValorile lor: $valori \nCod:$str";

    
	$headers = "From: $myemail\n"; 
	//$headers .= "Reply-To: $email_address";
	 mail($email_to,$email_subject,$email_body,$headers);

	//////////////////////////////////////////////////////////////////////////////////////////
	
	
	mysqli_close($con);
	
	
	$bon .= "<tr><td><b>TOTAL</b><td>$suma</td></tr>";
	$bon .= "</table></center>";
	echo $bon;
	
    //redirect to the 'main page' page
    //header('Location: pizza.php');
	

}
else if(strcmp($tip_pizza,"multiple")==0){
	/*
Altfel generez pagina html cu alea daca is mai multe alese si in dreptu la fiecare o caseta valorica cu buton radio ascuns ce are asta
La final un buton submit care retrimite la pagina asta
*/

echo "<!DOCTYPE HTML> 
<html>
<head>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Amatic+SC'>
<title>Co22</title>
</head>

<body>

<form method='POST' name='contactfor' action='formular.php'>
<div class='w3-container w3-dark-gray w3-padding-64 w3-xxlarge'>
<div class='w3-col m4 l4 menu w3-padding-32 w3-dark-gray'>

</div>

<div class='w3-col m4 l4 menu w3-padding-32 w3-white'>
<center>
<h1><b>
";

$N = count($pizza);
for($i=0; $i < $N; $i++)
    {
	echo "$pizza[$i]: <br><input type=number min=0 max=50 value=1><br><br>";
		
	
	
	
	
	
	}
/// un al treilea caz in care se ajunge dupa ce se selecteaza numarul de pizza din fiecare fel
echo "
<input type='radio' value='final' checked style='display:none'>
<br><input type='submit' value='Comanda'>
</b></h1></center>
</div>
</form>
</body>
</html>";

}

else {
	/// CAZUL IN CARE S-AU SELECTAT MAI MULTE PIZZA SI SE PROCESEAZA COMANDA
	
	//////////////////////////////////IN LUCRU
}
}
else {
	$errors .= '</font></b></center>';
echo "<!DOCTYPE HTML> 
<html>
<head>
    <title>C4on3</title>
</head>

<body>
<!-- This page is displayed only if there is any error -->
$errors

</body>
</html>
";

}
//------------------------------------------------------------

//$errors .= 'continut de format default';\
}

?>



