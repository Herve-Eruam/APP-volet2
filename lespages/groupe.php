<?php 
session_save_path("../sessionPhp");
session_start();
include 'php_functions/bdd_connect.php';
upload_tmp_dir("../sessionPhp");
?>
<?php
// Vérifier si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Vérifie si le fichier a été uploadé sans erreur.
    if(isset($_FILES["newPhoto"]) && $_FILES["newPhoto"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["newPhoto"]["name"];
        $filetype = $_FILES["newPhoto"]["type"];
        $filesize = $_FILES["newPhoto"]["size"];

        // Vérifie l'extension du fichier
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

        // Vérifie la taille du fichier - 5Mo maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");

        // Vérifie le type MIME du fichier
        if(in_array($filetype, $allowed)){
            // Vérifie si le fichier existe avant de le télécharger.
            if(file_exists("upload/" . $_FILES["newPhoto"]["name"])){
                echo $_FILES["newPhoto"]["name"] . " existe déjà.";
            } else{
                move_uploaded_file($_FILES["newPhoto"]["tmp_name"], "upload/" . $_FILES["newPhoto"]["name"]);
                echo "Votre fichier a été téléchargé avec succès.";
            } 
        } else{
            echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
        }
    } else{
        echo "Error: " . $_FILES["newPhoto"]["error"];
    }
}
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
				</div>

				<?php
				if(!empty($_GET['membre_select'])){
					$sql_request = "SELECT nom_photo, descriptions FROM AppVOLET_Groupe WHERE id_membre=".$_GET['membre_select'];
					$result = BDD_request($sql_request);
					$val = mysqli_fetch_array($result);
					echo "<img src=\"../photos/" .$val["nom_photo"] ."\" height=\"300\">";
					echo "<p>" .$val["descriptions"] ." </p>" ;
					
					if(isset($_SESSION["adminMode"]) or $_SESSION["adminMode"] == true)
					{
				?>
					<div id=adminModif>
						<form action="groupe.php" method="post" enctype="multipart/form-data">
							<input type="file" name="newPhoto" id="fileUpload">
							<p><button type="submit" name="submit" value="upload">upload</button></p>
						</form>
					</div>
				<?php
					}
				}
				?>
		
			</div>

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

	</body>

</html>