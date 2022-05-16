<?php
session_save_path("../sessionPhp");
session_start();

include 'php_functions/bdd_connect.php';
?>

<html> 

   <head>
   
	    <meta charset="UTF-8"> 
		<link rel="stylesheet" href="css/main.css">

   </head> 

   <body> 

		﻿<?php
			include 'php_functions/menu.php'
		?>


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
