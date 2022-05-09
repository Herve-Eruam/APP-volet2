﻿<?php
include 'php_functions/bdd_connect.php'
?>

<html> 

   <head>
   
	    <meta charset="UTF-8"> 
		<link rel="stylesheet" href="home.css">
		
   </head> 

   <body> 
		<div id = menu>

				<div id="espace">

			   </div>
		
					<a href="home.php" class ="bouttons_menu" id="boutton_menu">Menu</a>
                    <a href="technologie.php" class ="bouttons_menu" id="boutton_technologie">Technologies</a>
                    <a href="groupe.php" class ="bouttons_menu" id="boutton_groupe">Groupe</a>
					<a href="quizz.php" class ="bouttons_menu" id="boutton_quizz">Quizz</a>
                    <a href="mesures.php" class ="bouttons_menu" id="boutton_mesures">Mesures</a>

					<div id="pied">
						<span>Polytech Annecy-Chambéry promotion 2024</span>
						<?php
							printStatus("");
						?>
					</div>
		</div>

		<div id=main>

			<div id="titre">
				<h1 style="text-align:center;">APP volet batant automatrisé</h1>
			</div>

			<div id="video">
				<h1 style="text-align:center;"><iframe width="560" height="315" src="https://www.youtube.com/embed/DTw-P0dXNLE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></h1>
			</div>

			
		</div>

   </body>

</html>
>>>>>>> 1ae1d923876bc6c294c3cf959925fedb99fe1572:lespages/home.php
