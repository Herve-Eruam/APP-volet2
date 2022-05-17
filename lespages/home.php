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

            <div id = "soustitre1">
                <h2> Volets battants connectés </h2>
            </div>

            <div id = "intro">
                    <echo> Les volets battants motorisés sont la première étape pour rendre la vie à la maison plus confortable et plus pratique. En ajoutant une touche de connectivité, les volets battants augmentent la sécurité de votre maison, optimisent l’efficacité énergétique et facilitent votre vie quotidienne.
                        <br>
                        <br>
                    </echo>
            </div>

            <div id = "soustitre2">
                <h2> 3 bonnes raisons d'installer des volets battants automatisé chez vous:</h2>
            </div>

            <div id = "liste">
                <ul >
                    <li>Se Libérer des tâches répétitives en regroupant facilement vos commandes de volets avec une commande intelligente en un simple geste, avec votre smartphone ou avec un assistant vocal. Programmez l’ouverture et la fermeture automatiquement et améliorez votre confort.</li>
                    <br>
                    <li>Optimisez l'isolation de votre maison et votre confort énergétique quelle que soit la saison. En hiver, programmez l'ouverture et la fermeture de vos volets battants connectés pour conserver la chaleur à l’intérieur et réduire vos dépenses énergétiques. En été, programmez un seuil de température pour fermer automatiquement vos volets battants électriques. La fraîcheur reste à l'intérieur de votre maison.</li>
                    <br>
                    <li>Vos volets sont les premiers rempares de votre maison. Vous avez même la possibilité de fermer à distance vos volets battants connectés via  l’application.
                    <br>
                    </li>

                </ul>
            </div>

		</div>

   </body>

</html>
