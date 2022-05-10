<?php 
	echo "<link rel=\"stylesheet\" href=\"css/menu.css\">";
?>

<div id = menu>

	<div id="espace_menu">

	</div>
		
	<a href="home.php" class ="bouttons_menu" id="boutton_menu">Menu</a>
    <a href="technologie.php" class ="bouttons_menu" id="boutton_technologie">Technologies</a>
    <a href="groupe.php" class ="bouttons_menu" id="boutton_groupe">Groupe</a>
	<a href="quizz.php" class ="bouttons_menu" id="boutton_quizz">Quizz</a>
    <a href="mesures.php" class ="bouttons_menu" id="boutton_mesures">Mesures</a>
	<div id="pied">
		<span>Polytech Annecy-Chambery promotion 2024</span>
		<?php
			printStatus("");
		?>
	</div>
</div>