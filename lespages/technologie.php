﻿<?php
include 'php_functions/bdd_connect.php'
?>

<html> 

   <head>
   
	    <meta charset="UTF-8"> 
		<link rel="stylesheet" href="home.css">
		
   </head> 

   <body> 
	   <div id=menu>

		   <div id="espace">

		   </div>

	   		<a href="home.php" class="bouttons_menu" id="boutton_menu">Menu</a>
	   		<a href="technologie.html" class="bouttons_menu" id="boutton_technologie">Technologies</a>
	   		<a href="groupe.html" class="bouttons_menu" id="boutton_groupe">Groupe</a>
	   		<a href="quizz.html" class="bouttons_menu" id="boutton_quizz">Quizz</a>
	   		<a href="mesures.html" class="bouttons_menu" id="boutton_mesures">Mesures</a>

	   		<div id="pied">
	   			<span>Polytech Annecy-Chambéry promotion 2024</span>
				<?php
					printStatus("");
				?>
	   		</div>

	   </div>
		
	   <div id=main>

	   		<div id="titre">
	   			<h1 style="text-align:center;">Technologies</h1>
	   		</div>

	   </div>

</body>
