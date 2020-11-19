<?php
	include 'header.php';
	include 'sidebar.php';
	include 'footer.php';
?>

<html>
<head>
<style>
.imagegti{
	height:130px;
	width:140px;
	margin-left:100px;
	
}
.imagesahin{
	height:110px;
	width:140px;
	margin-left:100px;
}
.imagebrabus{
	height:130px;
	width:140px;
	margin-left:100px;
}
.sample{
	margin-left:50px;
	border-bottom: double;
}
.grid-container{
		display: grid;
		grid-template-columns: auto auto auto auto;
		
}

.afmetingen{
	border-style:solid;
	height: 400px;
	width: 350px;
	margin-left:15px
}
.titel{
	border-style:double;
	height:30px;
	width:200px;
	text-align:center;
	font-weight:bold;
	margin-left:650px;
}
.image{
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 50%;
}

.subtitel{
	text-align:center;
	
	
}
.textinbox{
	font-weight:= 12;
	text-align:center;
	
}
.button{
	font-style:bold;
	text-align:center;
	border-style:groove;
	background-color:#0e7784;
	width:300px;
	height:50px;
	margin-left:25px;
	padding:10px;
}

.textbox{
	text-align:center;
	border-style:groove;
	margin-left:50px;
	height:150px;
	width:1400px;
}
.openingsuren{
	border-style: dashed;
	margin-left: 30px;
	width:700px;
	text-align:center;
	height:250px;
}
.titelopening{
	border-style:ridge;
	width:350px;
	margin-left:150px;
}
.row{
	display: grid;
	grid-template-columns: auto auto auto auto;
}
.footertext{
	margin-left:20px;
}
</style>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22%3E">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="header.php">
<link rel="stylesheet" href="footer.php">
<link rel="stylesheet" href="sidebar.php">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Shop</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Meer
        </a>
		
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Sample page</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Cart</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Checkout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<h1 class=sample> Sample Page </h1> <br>

<h5 class = titel>De top 4 best sellers<h5> 

<div class=grid-container>
	<div class = afmetingen>
		<p class= subtitel>Mercedes A45 AMG</p>
			<img src="http://kaan.stedelijklyceumexpo.be/webshop/wp-content/uploads/2020/09/A45.jpg" class="image" alt="mercedes A45 AMG"> <br>
		<p class=textinbox> De Mercedes A45 AMG is maar liefst 63 keer verkocht deze maand. Deze wagen heeft een vermogen van 360 pk met 4 cilinder en heeft 450 Nm. De A45 AMG heeft een prijskaartje van €69.000.</p>
	<div class=button> In mijn winkelwagentje doen</div>
</div>

<div class = afmetingen>
<p class= subtitel>Golf 7 GTI TCR</p>
<img src="http://kaan.stedelijklyceumexpo.be/webshop/wp-content/uploads/2020/09/golfske.jpg" class="imagegti" alt="Volkswagen Golf 7 GTI TCR"><br>
<p class=textinbox> De Golf 7 GTI TCR is maar liefst 58 keer verkocht deze maand. Deze wagen heeft een vermogen van 350 pk en heeft 490 Nm. De Golf 7 GTI TCR heeft een prijskaartje van €95.000.</p>
<div class=button> In mijn winkelwagentje doen</div>
</div>

<div class = afmetingen>
<p class= subtitel>Tofas Sahin</p>
<img src="http://kaan.stedelijklyceumexpo.be/webshop/wp-content/uploads/2020/09/tofas.jpg" class="imagesahin" alt="Tofas Sahin"><br>
<p class=textinbox> De Tofas Sahin is maar liefst 45 keer verkocht deze maand. Deze wagen is een collectie wagen dat gemaakt is om te pimpen naar veel snellere en/of luxeuzere wagen. De Tofas Sahin heeft een prijskaartje van €22.000.</p>
<div class=button> In mijn winkelwagentje doen</div>
</div>

<div class = afmetingen>
<p class= subtitel>Mercedes G700 Brabus</p>
<img src="http://kaan.stedelijklyceumexpo.be/webshop/wp-content/uploads/2020/09/brabus.jpg" class="imagebrabus" alt="G700 Brabus"><br>
<p class=textinbox> De Mercedes G700 Brabus is maar liefst 43 keer verkocht deze maand. Deze wagen heeft een vermogen van 700 pk en 960 Nm. De Mercedes G700 Brabus heeft een prijskaartje van €240.000.</p>
<div class=button> In mijn winkelwagentje doen</div>
</div>

</div>
<br><br>
<div class = Row>
<div class=openingsuren>
<h5 class= titelopening> Openingsuren van onze filialen </h5>
Maandag en donderdag: 12:00 tot 17:00 (alleen op afspraak)<br><br>
Dinsdag, woensdag en donderdag: 09:00 tot 18:00<br><br>
Zaterdag: 09:00 tot 14:00<br><br>
zon- en feestdagen: gesloten
</div>


<div class = openingsuren>
<h5 class=titelopening> De locaties van onze filialen in België</h5>
Antwerpen: Antwerpsesteenweg 126, 2630 Aartselaar<br><br>
Brussel: Stalingradlaan 104, 1000 Brussel<br><br>
Gent: Sleepstraat 48, 9000 Gent<br><br>
Charleroi: Rue Jules Empain 5, 7170 Manage <br><br>
</div>
</div>

<br><br>
<div class=textbox><p><br>Welkom bij Quality Garage Kiel, Wij helpen u graag verder bij het vinden van de beste auto die bij u past. We hebben een ruime stock aan wagens waarvan u kan uitkiezen. Als u liever u eigen wagen kiest met uw eigen opties die u zelf kiest is het ook mogelijk bij ons. Als u uw eigen wagen personaliseert kunt u hem na 3 weken in ontvangst nemen en dit is het snelste procedure omdat wij uw wagen zo snel mogelijk willen leveren, hebben we een contract gesloten met de fabrikanten om de onze bestellingen als prioriteit stellen en het als eerste produceren.<p/></div>
<br><br>





 















