<!DOCTYPE html>
<html> 
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>


<form method="POST" name="contactform" action="formular.php"> 
<p>
<input class="w3-button w3-xlarge w3-circle w3-red w3-card-4 w3-right" type="button" value="x" onClick="popOutForm()"
	style="position:fixed;right:4px;">
	
	<button class="w3-button w3-xlarge w3-circle w3-red w3-card-4" style="margin:10px;visibility:hidden;" onclick="javascript:void(0)">X</button>
	<br><center>
	<label for="name">Nume:</label><br>
	<input type="text" class="w3-text-grey" name="name" id="name" placeholder="Numele complet..."><br>
	<label for="email">Mail:</label><br>
	<input type="text" class="w3-text-grey" name="email" id="mail" placeholder="Mailul..."><br>
	<label for="phone">Telefon:</label><br>
	<input type="tel" class="w3-text-grey" name="phone" id="phone" placeholder="Telefon..."><br>
	<label for="address">Adresă:</label><br>
	<input type="text" class="w3-text-grey" name="address" id="address" placeholder="Adresa..."><br>
	<label for="comments">Precizări:</label><br>
	<textarea name="comments" id="comments" rows=3 class="w3-text-grey" placeholder="Dacă aveți ceva de precizat"></textarea>
	
</p>
<p>
<input type="checkbox" name="mancare[]" value="alba" />Drake Commons<br />
<input type="checkbox" name="mancare[]" value="E" />Elliot House
<input type="checkbox" name="newsletter[]" value="newsletter" checked>i want to sign up   for newsletter<br>
</p>
<input type="submit" value="Submit"><br>

<input type="button" onclick="php()"/>
</form>
	


</body>
</html>