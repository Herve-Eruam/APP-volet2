<?php 
session_save_path("../sessionPhp");
session_start();

include 'php_functions/bdd_connect.php';

if(!empty($_GET['membre_select']) and !empty($_GET['mdp'])){
	$sql_request = "SELECT id_membre FROM AppVOLET_Groupe WHERE id_membre=".$_GET['membre_select'] ." AND pass = \"" .md5($_GET['mdp']) ."\"";
	$result = BDD_request($sql_request);
	$val = mysqli_fetch_array($result);
	if($val != null) {
		$_SESSION["adminMode"] = true;
		$_SESSION["id_membre_connected"] = $_GET['membre_select'];
		$_SESSION["mauvaisMdpCount"] = 0;
	}else{
		if(!isset($_SESSION["mauvaisMdpCount"])){
			$_SESSION["mauvaisMdpCount"] = 1;
		}else{
			$_SESSION["mauvaisMdpCount"] = $_SESSION["mauvaisMdpCount"] + 1;
		}
	}
	
	
}
if(!empty($_GET['boutton_deconnexion'])){
		$_SESSION["adminMode"] = false;
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
			include 'php_functions/menu.php';

		?>
		<div id=main>

			<div id=titre>
				<h1 style="text-align:center;">Acces au mode administrateur</h1>
			</div>	

			<div >
			<?php
			if(!isset($_SESSION["adminMode"]) or $_SESSION["adminMode"] == false)
			{
			?>
				<form method=get">
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
					<p>Mot de passe: <input type="password" name="mdp"  required />
					<?php
						if( isset($_SESSION["mauvaisMdpCount"]) and $_SESSION["mauvaisMdpCount"] > 0){
							echo $_SESSION["mauvaisMdpCount"] ." echecs";
						}
					?>
					</p>
					<p><button type="submit" name="button_connexion" value="ajout">Connexion</button></p>
				</form>
			</div>	
			<?php
			}else{
			?>
				<form method=get">
					<p><button type="submit" name="boutton_deconnexion" value="deco">Deconnexion</button></p>
				</form>
			<?php
			}
			?>
		</div>
	</body>
</html>