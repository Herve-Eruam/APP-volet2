<html> 

   <head>
   
	    <meta charset="UTF-8"> 
		<link rel="stylesheet" href="home.css">
		
   </head> 

   <body>

	   <div id=menu>

		   <div id=espace>

		   </div>

	   		<a href="home.php" class="bouttons_menu" id="boutton_menu">Menu</a>
	   		<a href="technologie.php" class="bouttons_menu" id="boutton_technologie">Technologies</a>
	   		<a href="groupe.php" class="bouttons_menu" id="boutton_groupe">Groupe</a>
	   		<a href="quizz.php" class="bouttons_menu" id="boutton_quizz">Quizz</a>
	   		<a href="mesures.php" class="bouttons_menu" id="boutton_mesures">Mesures</a>

	   		<div id=pied>
	   			<span>Polytech Annecy-Chambéry promotion 2024</span>
	   		</div>

	   </div>
		
		<div id=main>

			<div id=titre>
				<h1 style="text-align:center;">Groupe</h1>
			</div>

			<div id=ShowMembreAll>

				<div id=ShowMemberTitre>
					  &nbsp &nbsp &nbsp &nbsp Choix du membre du groupe 
				</div>

				<div id=Showmembres>
					<form action="" method="get">
					<select name="act"> 
						<?php
							echo "<option value=\"\">--Choix du membre du groupe--</option>";
							while ($val1 = mysqli_fetch_array($result1)) {
								echo "<option value=".$val1['id_actionneur'].">" . $val1['nom']. "</option>";
							}
						?>
					</form>
					</select>
				</div>

			</div>

			<div id= AddMemberTitre>
				  &nbsp &nbsp &nbsp &nbsp Ajouter un membre au groupe 
			</div>

			<div id=addMembre>
				<form method="get">
					<p>Nom du membre <input type="text" name="nom"  required /></p>
					<p>Prenom du membre <input type="text" name="prenom" required /></p>
					<p>Description <input type="text" name="description" required /></p>
					<p><button type="submit" name="button1" value="ajout">Ajouter le membre</button></p>
				</form>
			</div>

		</div>

</body>

</html>