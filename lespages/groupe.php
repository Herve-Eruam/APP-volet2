<?php 
session_save_path("../sessionPhp");
session_start();
include 'php_functions/bdd_connect.php';
if(!empty($_GET['membre_select']) and !empty($_GET['submitDesc'])){
	$sql_request = "UPDATE AppVolet_Groupe SET descriptions = \"" .$_GET['description'] ."\" WHERE id_membre = " .$_GET["membre_select"] ;
	$result = BDD_request($sql_request);

	}
$resAddMember = 0;//rien
if(!empty($_GET['btn_ajout_membre'])){
	if($_GET['mdp'] == $_GET['mdp_conf']){
		$sql_request = "INSERT INTO AppVolet_Groupe (nom, prenom, descriptions, pass) VALUES ('" .$_GET['nom'] ."', '" .$_GET['prenom']  ."', '" .$_GET['description']  ."', '" .md5($_GET['mdp'])  ."')";
		$res = BDD_request($sql_request);
		if($res != false){
			$resAddMember = 1; //membre ajouté
			$sql_request = "SELECT id_membre FROM AppVolet_Groupe WHERE nom = \"" .$_GET['nom'] ."\" and prenom = \"" .$_GET['prenom'] ."\"";$result = BDD_request("SELECT nom, prenom, id_membre FROM AppVOLET_Groupe");
			$result = BDD_request($sql_request);
			$val = mysqli_fetch_array($result);	
			$_GET['membre_select'] = $val["id_membre"];
		}else{
			$resAddMember = 3; // erreur inatendu

		}
	}else{
		$resAddMember = 2; // mdp ne correspondent pas
	}
							
	}
	
	if(!empty($_GET['deleteMember']) and $_GET['deleteMember'] and !empty($_GET['membre_selectForSuppr']) ){
	$sql_request = "DELETE FROM `AppVolet_Groupe` WHERE `id_membre` = " .$_GET['membre_selectForSuppr'] ;
	$result = BDD_request($sql_request);
	
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
								$result = BDD_request("SELECT nom, prenom, id_membre FROM AppVolet_Groupe");
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
						$sql_request = "SELECT nom_photo, descriptions FROM AppVolet_Groupe WHERE id_membre=".$_GET['membre_select'];
						$result = BDD_request($sql_request);
						$val = mysqli_fetch_array($result);
						echo "<img src=\"../documents/photos/" .$val["nom_photo"] ."\" height=\"300\">";
						echo "<p>" .$val["descriptions"] ." </p>" ;
						if(isset($_SESSION["adminMode"]) and $_SESSION["adminMode"] == true)
						{

					?>
							<h2 style="text-align:center;">ADMINISTRATION</h2>
							<h3>Modification description</h3>
							<div id=adminModif>
								<form action="groupe.php" method="get">
									<textarea name="description" rows="8" cols="45" maxlength=200>Nouvelle description...</textarea>
									<input type="hidden" name="membre_select" value=<?php echo($_GET["membre_select"]); ?> />

									<p><button type="submit" name="submitDesc" value = "true">modifier</button></p>
								</form>
									<form action="groupe.php" method="get">
										<input type="hidden" name="membre_selectForSuppr" value=<?php echo($_GET["membre_select"]); ?> />
										<p><button type="submit" name="deleteMember" value = "true">supprimer le membre (irreversible)</button></p>
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
					  &nbsp &nbsp &nbsp &nbsp Ajouter un membre au groupe (mode administrateur)
				</div>
				<div id=addMembre>
					<form method="get">
						<p>Nom du membre <input type="text" name="nom"  required /></p>
						<p>Prenom du membre <input type="text" name="prenom" required /></p>
						<p>Description <textarea name="description" required>description </textarea></p>
						<p>Mot de passe <input type="password" name="mdp" required /></p>
						<p>Confirmation mot de passe <input type="password" name="mdp_conf" required />  <?php if($resAddMember == 2){echo("Les deux mot de passes ne correspondent pas");}?></p>
						<p><button type="submit" name="btn_ajout_membre" value="ajout">Ajouter le membre</button> <?php if($resAddMember == 1){echo("Le membre a bien été ajouté");}elseif($resAddMember == 3){echo("Une erreur c'est produite...'");}?> </p>
					</form>
				</div>
			</div>
			<?php
				}
			?>	
		</div>

</body>

</html>
