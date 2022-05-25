<?php
session_save_path("../sessionPhp");
session_start();

include 'php_functions/bdd_connect.php';

if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['suggestion'])){
	$sql_request = "DELETE FROM `AppVOLET_Sugest` WHERE `id_sugest` = " .$_POST['delSugId'];
	$result = BDD_request($sql_request);

}

if(!empty($_POST['btn_ajout_sugg'])){
	$sql_request = "DELETE FROM `AppVOLET_Sugest` WHERE `id_sugest` = " .$_POST['delSugId'] ;
	$result = BDD_request($sql_request);

}
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
         
			<?php
				if(isset($_SESSION["adminMode"]) and $_SESSION["adminMode"] == true)
					{
			?>
					<h2 style="text-align:center;">Les suggestions recus</h2>
					<h3>(reservé admin)</h3>
					<div>
					</div>
					<?php
						$sql_request = "Select	* FROM AppVOLET_Sugest" ;
						$result = BDD_request($sql_request);
						$row = mysqli_fetch_array($result);
						while ($row != false) {
							echo"---------------------------------------------------------------------------------------------------";
							echo("<p id=nom_sug>Sugestion de: " .$row["nom"] ." " . $row["prenom"] ."</p>" );
							echo("<p id=sug>Sugestion:" .$row["descriptions"] ."</p>" );
							echo("<p id=date_sug>date:" .$row["instant"] ."</p>" );
							echo "<form method=\"post\">";
								echo("<input type=\"hidden\" name=\"delSugId\" value= " .$row["id_sugest"] ."  required /></p>");
								echo("<p><button type=\"submit\" name=\"btn_ajout_sugg\" value=\"ajout\">Supprimer la suggestion</button></p>");
							echo "</form>";
							
							$row = mysqli_fetch_array($result);
							
							
						}
					}
					?>			

		</div>

   </body>

</html>
