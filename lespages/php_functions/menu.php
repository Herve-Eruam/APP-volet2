<?php 
	echo "<link rel=\"stylesheet\" href=\"css/menu.css\">";
?>

<div id = menu>

	<div id="espace_menu">

	</div>

	<div id="titre_menu">
		<a >Menu</a>
	</div>
		
	<a href="APP_volet.php" class ="bouttons_menu" id="boutton_menu">Accueil</a>
    <a href="technologie.php" class ="bouttons_menu" id="boutton_technologie">Technologies</a>
    <a href="groupe.php" class ="bouttons_menu" id="boutton_groupe">Groupe</a>
	<a href="quizz.php" class ="bouttons_menu" id="boutton_quizz">Quizz</a>
    <a href="mesures.php" class ="bouttons_menu" id="boutton_mesures">Mesures</a>
	<!-- <a href="suggestion.php" class ="bouttons_menu" id="boutton_mesures">Suggestion</a> 
	!-->

	<?php
			if(isset($_SESSION["adminMode"]) and $_SESSION["adminMode"] == true)
			{
	?>
    <a href="admin.php" class ="bouttons_menu" id="boutton_admin">Administration (<?php
		$sql_request = "SELECT nom, prenom FROM AppVOLET_Groupe WHERE id_membre=".$_SESSION["id_membre_connected"];
		$result = BDD_request($sql_request);
		$val = mysqli_fetch_array($result);
		echo $val["nom"] ." " .$val["prenom"];
	?>)</a>
	<a href="connexion.php?boutton_deconnexion=deco" class ="bouttons_menu" id="boutton_connexion">Deconnexion</a>
	<?php
			}else{
	?>
	    <a href="connexion.php" class ="bouttons_menu" id="boutton_connexion">Connexion</a>
		<?php
			}
	?>
	<div id="pied">
		<span>Polytech Annecy-Chambery promotion 2024</span>
		<?php
			printStatus("");
		?>
	</div>
</div>