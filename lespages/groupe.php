<?php 
session_save_path("../sessionPhp");
session_start();
include 'php_functions/bdd_connect.php';

?>
<html> 

   <head>
   
	    <meta charset="UTF-8"> 
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/groupe.css">

   </head> 

   <body>

	  	﻿<?php
			include 'php_functions/menu.php'
		?>
		
		<div id=main>

			<div id=titre>
				<h1 style="text-align:center;">Groupe</h1>
			</div>

			<div id=ShowMembreAll>

				<div id=ShowMemberTitre>
					  &nbsp &nbsp &nbsp &nbsp Choix du membre du groupe 
				</div>

				<div id=Showmembres>
					<form action="groupe.php" method="get">
						<select name="membre_select"> 
							<?php
								$result = BDD_request("SELECT nom, prenom, id_membre FROM AppVOLET_Groupe");
								echo "<option value=\"\">--Choix du membre du groupe--</option>";
								while ($val = mysqli_fetch_array($result)) {
									if(!empty($_GET['membre_select']) && $_GET['membre_select']==$val['id_membre']) $selected ='selected'; else $selected ='';
									echo "<option " .$selected ." value=".$val['id_membre'].">" . $val['nom'] . " " . $val1['prenom'] ."</option>";
								}
							?>
						</select>
						<input type="submit" name="" value="visualiser le membre">
					</form>
					<?php
					if(!empty($_GET['membre_select'])){
						$sql_request = "SELECT nom_photo, descriptions FROM AppVOLET_Groupe WHERE id_membre=".$_GET['membre_select'];
						$result = BDD_request($sql_request);
						$val = mysqli_fetch_array($result);
						echo "<img src=\"../photos/" .$val["nom_photo"] ."\" height=\"300\">";
						echo "<p>" .$val["descriptions"] ." </p>" ;
						if(isset($_SESSION["adminMode"]) and $_SESSION["adminMode"] == true)
						{

					?>
							<h2 style="text-align:center;">ADMINISTRATION</h2>
							<h3>Modification description</h3>
							<div id=adminModif>
								<form action="groupe.php" method="get">
									<textarea name="description" rows="8" cols="45" maxlength=200>
										Nouvelle description...
									</textarea>
									<intput type="hidden" name = "membre_select" value= <?php echo($_GET["membre_select"]); ?>>
									<p><button type="submit" name="submit">upload</button></p>
								</form>
							</div>
					<?php
							}
						}
					?>			
				</div>
			</div>
			<?php
			if(isset($_SESSION["adminMode"]) and $_SESSION["adminMode"] == true)
				{
			?>
			<div id=AddMembreAll>
				<div id=AddMemberTitre>
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
			<?php
				}
			?>	
		</div>

</body>

</html>
