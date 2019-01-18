<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>

<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

<link rel='stylesheet' href='preturi.css'>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Amatic+SC'>
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("start.jpg");
    min-height: 90%;
}
</style>
<body>


<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="#" class="w3-bar-item w3-button">ACASă</a>
    <a href="#menu" class="w3-bar-item w3-button">MENIU</a>
    <a href="#about" class="w3-bar-item w3-button">DESPRE</a>
    <a href="#googleMap" class="w3-bar-item w3-button">CONTACT</a>
  </div>
</div>
  
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge">Deschis între 10am și 12pm</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-hide-small" style="font-size:100px">pizza<br> pe vatră</span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>pizza<br> pe vatră</b></span>
    <p><a href="#menu" class="w3-button w3-xxlarge w3-black">Arată meniul</a></p>
  </div>
</header>

<!-- Menu Container -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">MENIU</h1>
	
					
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Pizza</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Paste</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">De început</div>
      </a>
    </div>
	
	
	
	<form method="POST" name="contactform" action="formular.php"> 
	<!-- ID urile pentru pizza sunt px unde x e numarul -->
    <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Margherita</b> </h1>
	  <div  data-toggle="buttons">
			<label class="btn btn-default w3-right w3-tag w3-dark-grey w3-round" style="padding:4px 23px;border-radius:8px;">
			<input type="checkbox" name="mancare[]" value="Margherita"><span style="font-size:30px;" id="p1"> $12.50</span>
			</label>
		</div>
      <p class="w3-text-grey">Roșii proaspete, mozzarella proaspătă, <b>fresh basil</b></p>
      <hr>
   
  
   
   
   
   
   
      <h1><b>Formaggio</b></h1> 
		<div  data-toggle="buttons">
		<label class="btn btn-default w3-right w3-tag w3-dark-grey w3-round" style="padding:4px 23px;border-radius:8px;">
			<input type="checkbox" name="mancare[]" value="Formaggio"><span style="font-size:30px;" id="p2"> $15.50</span>
		</label>
		</div>
		<!-- DE EDITAT  -->
      <p class="w3-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p>
      <hr>
      
      <h1><b>Chicken</b> </h1> 
		<div  data-toggle="buttons">
		<label class="btn btn-default w3-right w3-tag w3-dark-grey w3-round" style="padding:4px 23px;border-radius:8px;">
			<input type="checkbox" name="mancare[]" value="Chicken"><span style="font-size:30px;" id="p3"> $17.00</span>
		</label>
		</div>
      <p class="w3-text-grey">Roșii proaspete, mozzarella, pui, ceapă</p>
      <hr>

      <h1><b>Pineapple'o'clock</b></h1> 
		<div  data-toggle="buttons">
		<label class="btn btn-default w3-right w3-tag w3-dark-grey w3-round" style="padding:4px 23px;border-radius:8px;">
			<input type="checkbox" name="mancare[]" value="Pineapple o clock"><span style="font-size:30px;" id="p4"> $18.50</span>
		</label>
		</div>
		<!-- DE EDITAT  -->
      <p class="w3-text-grey">Roșii proaspete, mozzarella, ananas proaspăt, bacon, fresh basil</p>
      <hr>

      <h1><b>Meat Town</b> </h1> 
		<div  data-toggle="buttons">
		<label class="btn btn-default w3-right w3-tag w3-dark-grey w3-round" style="padding:4px 23px;border-radius:8px;">
			<input type="checkbox" name="mancare[]" value="Meat Town"><span style="font-size:30px;" id="p5"> $20.00</span>
		</label>
		</div>
      <p class="w3-text-grey">Roșii proaspete, mozzarella, pepporoni fierbinte, carnat, vita, pui</p>
      <hr>

      <h1><b>Parma</b> </h1> 
		<div  data-toggle="buttons">
		<label class="btn btn-default w3-right w3-tag w3-dark-grey w3-round" style="padding:4px 23px;border-radius:8px;">
			<input type="checkbox" name="mancare[]" value="Parma"><span style="font-size:30px;" id="p6"> $17.00</span>
		</label>
		</div>
      <p class="w3-text-grey">Roșii proaspete, mozzarella, parma, bacon, rucola proaspătă</p>
    </div>
	
	
	<!-- ID urile pentru paste sunt ppx unde x e numarul -->
    <div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Lasagna</b><span class="w3-tag w3-grey w3-round" id="pp1">Popular</span> </h1> 
		<div  data-toggle="buttons">
		<label class="btn btn-default w3-right w3-tag w3-dark-grey w3-round" style="padding:4px 23px;border-radius:8px;">
			<input type="checkbox" name="mancare[]" value="Lasagna"><span style="font-size:30px;"> $20.00</span>
		</label>
		</div>
      <p class="w3-text-grey">Sos special, mozzarella, parmesan, vită</p>
      <hr>
   
      <h1><b>Ravioli</b> </h1> 
		<div  data-toggle="buttons">
		<label class="btn btn-default w3-right w3-tag w3-dark-grey w3-round" style="padding:4px 23px;border-radius:8px;">
			<input type="checkbox" name="mancare[]" value="Ravioli"><span style="font-size:30px;" id="pp2"> $20.00</span>
		</label>
		</div>
      <p class="w3-text-grey">Ravioli umplu cu brânză</p>
      <hr>
      
      <h1><b>Spaghetti Classica</b> </h1> 
		<div  data-toggle="buttons">
		<label class="btn btn-default w3-right w3-tag w3-dark-grey w3-round" style="padding:4px 23px;border-radius:8px;">
			<input type="checkbox" name="mancare[]" value="Spaghetti Classica"><span style="font-size:30px;" id="pp3"> $20.00</span>
		</label>
		</div>
      <p class="w3-text-grey">Roșii proaspete, ceapă, vită</p>
      <hr>

      <h1><b>Seafood pasta</b> </h1> 
		<div  data-toggle="buttons">
		<label class="btn btn-default w3-right w3-tag w3-dark-grey w3-round" style="padding:4px 23px;border-radius:8px;">
			<input type="checkbox" name="mancare[]" value="Seafood pasta"><span style="font-size:30px;" id="pp4"> $20.00</span>
		</label>
		</div>
      <p class="w3-text-grey">Somon, creveți, homari, usturoi</p>
    </div>

	<!-- ID urile pentru mancaruri usoare sunt ax unde x e numarul de la aperitive-->
    <div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Today's Soup</b> <span class="w3-tag w3-grey w3-round">Seasonal</span></h1> 
		<div  data-toggle="buttons">
		<label class="btn btn-default w3-right w3-tag w3-dark-grey w3-round" style="padding:4px 23px;border-radius:8px;">
			<input type="checkbox" name="mancare[]" value="Supa zilei"><span style="font-size:30px;" id="a1"> $20.00</span>
		</label>
		</div>
      <p class="w3-text-grey">Întrebați chelnerul</p>
      <hr>
   
      <h1><b>Bruschetta</b> </h1>
		<div data-toggle="buttons">
		<label class="btn btn-default w3-right w3-tag w3-dark-grey w3-round" style="padding:4px 23px;border-radius:8px;">
			<input type="checkbox" name="mancare[]" value="Bruschetta"><span style="font-size:30px;" id="a2"> $20.00</span>
		</label>
		</div>
      <p class="w3-text-grey">Pâine cu pesto, roșii, ceapă, usturoi</p>
      <hr>
      
      <h1><b>Garlic bread</b> </h1>
		<div data-toggle="buttons">
		<label class="btn btn-default w3-right w3-tag w3-dark-grey w3-round" style="padding:4px 23px;border-radius:8px;">
			<input type="checkbox" name="mancare[]" value="Garlic bread"><span style="font-size:30px;" id="a3"> $20.00</span>
		</label>
		</div>
      <p class="w3-text-grey">Grătar ciabatta, unt de usturoi, ceapa</p>
      <hr>
      
      <h1><b>Tomozzarella</b> </h1>
		<div data-toggle="buttons">
		<label class="btn btn-default w3-right w3-tag w3-dark-grey w3-round" style="padding:4px 23px;border-radius:8px;">
			<input type="checkbox" name="mancare[]" value="Tomozzarella"><span style="font-size:30px;" id="a4"> $20.00</span>
		</label>
		</div>
      <p class="w3-text-grey">Roșii și mozzarella</p>
    </div><br>
	
	<input class="w3-text-grey w3-col" type="button" value="Înainte" onClick="popForm()">
	<div style="position:fixed;top:10%;left:15%;right:15%;bottom:5%;background:rgba(0,0,0,0.8);overflow-y:scroll;z-index:99999;visibility:hidden;" id="Form">
	<input class="w3-button w3-xlarge w3-circle w3-red w3-card-4 w3-right" type="button" value="x" onClick="popOutForm()"
	style="position:fixed;right:4px;">
	
	<button class="w3-button w3-xlarge w3-circle w3-red w3-card-4" style="margin:10px;visibility:hidden;" onclick="javascript:void(0)">X</button>
	<br><center>
	<label for="name">Nume:</label><br>
	<input type="text" class="w3-text-grey" name="name" id="name" placeholder="Numele complet..."><br>
	<label for="mail">Mail:</label><br>
	<input type="text" class="w3-text-grey" name="email" id="mail" placeholder="Mailul..."><br>
	<label for="phone">Telefon:</label><br>
	<input type="tel" class="w3-text-grey" name="phone" id="phone" placeholder="Telefon..."><br>
	<label for="address">Adresă:</label><br>
	<input type="text" class="w3-text-grey" name="address" id="address" placeholder="Adresa..."><br>
	
	<label for="comments">Precizări:</label><br>
	<textarea name="comments" id="comments" rows=3 class="w3-text-grey" placeholder="Specificati servirea la restaurant sau alte precizari..."></textarea>
	<br><input type="radio" name="nr" id="nr1" value="una" checked><label for="nr1"> cate o pizza din felurile selectate</label>
	<br><input type="radio" name="nr" id="nr2" value="multiple"><label for="nr2"> mai multe </label>
	<br><input type="submit" class="w3-text-grey" value="trimite">
	</center>
	<br><br><br><br>
	
	</div>
	</form>
  </div>
</div>
<script>
var form = document.getElementById("Form");
function popForm(){
	form.style.visibility = "visible" ;

}

function popOutForm(){
	form.style.visibility = "hidden" ;
}

</script>
<!-- About Container -->
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Despre</h1>
    <p>Pizza Iulia a fost fondat în Alba Iulia de către Alin . Ideea lui a fost să faciliteze locuitorii cât și turiștii cu un loc unde să găsească oricând o masă caldă și proaspătă.</p>
	<div class="w3-row">
	<div class="w3-display-container w3-col m6 l6 nopadding">
    <p><strong>The Chef?</strong> Domnul Alin însuși<img src="img/chef.jpg" style="width:150px" class="w3-circle w3-right" alt="Chef"></p>
    <p>Suntem mândrii de afacerea noastră.</p>
	</div>
	</div>
	<div class="w3-display-container w3-col m6 l6 nopadding">
    <img src="img/restaurant.jpg" style="width:100%" class="w3-margin-top w3-margin-bottom" alt="Restaurant">
	</div>
	
    
    <div class="w3-display-container w3-col m6 l6 nopadding">
	<center>
	<h1><b>Orele de deschidere</b></h1>
        <p>Luni & Marți Închis</p>
        <p>Miercuri 10.00 - 24.00</p>
        <p>Joi 10:00 - 24:00</p>
        <p>Vineri 10:00 - 12:00</p>
        <p>Sîmbătă 10:00 - 23:00</p>
        <p>Duminică Închis</p>
	</center>
    </div>
    
 </div>
</div>

 <div class="w3-container w3-padding-64 w3-dark-grey w3-xlarge">
 <h1 class="w3-center w3-jumbo" style="margin-bottom:4px">Locatie
 <div id="googleMap" class="w3-grayscale-max" style="width:100%;height:400px;"></div>

</div>

<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Contact</h1>
    <p>Find us at some address at some place or call us at 05050515-122330</p>
    <p><span class="w3-tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
	<!--
    <p class="w3-xxlarge"><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How many people" required name="People"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-block" type="submit">SEND MESSAGE</button></p>
    -->
	</form>
  </div>
</div>


<!-- DE STERS 
<script>
function php(){
	var result="<?php insert();?>";
	alert(result);
	
	
}

</script>
<form>
<input type="button" onclick="php()"/>
</form>
	<?php
	function insert(){
	/*$sql ="INSERT INTO " . $tabel1 ."(pizza,numar_telefon,precizari) values ('formata',0258,'foarte buna!')";
	if (mysqli_query($con, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}


	mysqli_close($con);
	*/
	echo "henlow";
	}
	?>


-->


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>Realizat de <a href="#" title="AC" target="_blank" class="w3-hover-text-green">echipa mea</a></p>
</footer>

<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(46.082811, 23.581470);
  var mapOptions= {
    center:myCenter,
    zoom:14, scrollwheel: false, draggable: true,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
// ????????????????
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtVcrjf1CTVHpe1PijhARF4q7mncWfRYo&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
</body>
</html>

