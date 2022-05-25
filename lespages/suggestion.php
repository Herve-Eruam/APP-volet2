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
				<h1 style="text-align:center;">Suggestion</h1>
			</div>


            <div id = "soustitre1">
                <h2>Des idées d'amelioration? n'hestitez pas a nous les partager!</h2>
            </div>

			<form method="post">
						<p>Votre nom <input type="text" name="nom"  required /></p>
						<p>Votre prenom <input type="text" name="prenom" required /></p>
						<textarea name="suggestion" rows="8" cols="45" maxlength=2000>Votre suggestion</textarea>
						<p><button type="submit" name="btn_ajout_sugg" value="ajout">Envoyer la suggestion</button></p>
			</form>
         

		</div>

   </body>

</html>
