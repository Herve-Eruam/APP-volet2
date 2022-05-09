<?php
include 'php_functions/bdd_connect.php'
?>

<html> 

   <head>
   
	    <meta charset="UTF-8"> 
		<link rel="stylesheet" href="home.css">
		
   </head> 

   <body> 
	   <div id=menu>

		   <div id="espace">

		   </div>

	   		<a href="home.php" class="bouttons_menu" id="boutton_menu">Menu</a>
	   		<a href="technologie.php" class="bouttons_menu" id="boutton_technologie">Technologies</a>
	   		<a href="groupe.php" class="bouttons_menu" id="boutton_groupe">Groupe</a>
	   		<a href="quizz.php" class="bouttons_menu" id="boutton_quizz">Quizz</a>
	   		<a href="mesures.php" class="bouttons_menu" id="boutton_mesures">Mesures</a>

	   		<div id="pied">
	   			<span>Polytech Annecy-Chambéry promotion 2024</span>
				<?php
					printStatus("");
				?>
	   		</div>

	   </div>
		
	   <div id=main>

	   		<div id="titre">
	   			<h1 style="text-align:center">Technologies</h1>
	   		</div>

	   



	   		<div id="capteur">
	   			<h1 style="text-align:center">Capteurs utilisés</h1>
			   	<div id="c1">
				   
				   <?php 
				   $sql= "SELECT DISTINCT (nom ,types, position, unite, descript) FROM AppVOLET_Techno  WHERE  types = 'Capteur' and  nom = 'Capteur de temperature'";

				   $result = BDD_request($sql);

				   $row = mysqli_fetch_array($result);

				   echo"<li>".$row["nom"]."</li>\n";
				   echo "\n";
				   echo "<li>"."Les capteurs de températures sont positionés".$row["position"]."</li>\n";
				   echo"<li>".$row["descript"]."</li>\n";
				   
				   ?>
			   </div>

			   <div id="c2">
			   <?php 
				   $sql= "SELECT DISTINCT (nom ,types, position, unite, descript) FROM AppVOLET_Techno  WHERE  types = capteur and  nom= Capteur de luminosite";

				   $result = BDD_request($sql);

				   $row = mysqli_fetch_array($result);

				   echo"<li>".$row["nom"]."</li>\n";
				   echo "\n";
				   echo "<li>"."Les capteurs de Luminosités sont positionés".$row["position"]."</li>\n";
				   echo"<li>".$row["descript"]."</li>\n";
				   
				   ?>
			   
			   </div>

			   <div id="c3">
			   <?php 
				   $sql= "SELECT DISTINCT (nom ,types, position, unite, descript) FROM AppVOLET_Techno  WHERE  types = capteur and  nom= position";

				   $result = BDD_request($sql);

				   $row = mysqli_fetch_array($result);

				   echo"<li>".$row["nom"]."</li>\n";
				   echo "\n";
				   echo "<li>"."Les capteurs de Positions sont positionés".$row["position"]."</li>\n";
				   echo"<li>".$row["descript"]."</li>\n";
				   
				   ?>

			   </div>

			   <div id="c4">
			   <?php 
				   $sql= "SELECT DISTINCT (nom ,types, position, unite, descript) FROM AppVOLET_Techno  WHERE  types = capteur and  nom= courant";

				   $result = BDD_request($sql);

				   $row = mysqli_fetch_array($result);

				   echo"<li>".$row["nom"]."</li>\n";
				   echo "\n";
				   echo "<li>"."Les capteurs de courants sont positionés".$row["position"]."</li>\n";
				   echo"<li>".$row["descript"]."</li>\n";
				   
				   ?>
			   </div>
			</div>

			<div id="actionneur">
	   			<h1 style="text-align:center">Actionneurs utilisés</h1>
			    <div id="a1">
				   
			   
			   </div>

			   <div id="a2">
			   </div>

			  

			</div>
		
			<div id="inteligence">
	   			<h1 style="text-align:center">Inteligence</h1>
			   <div id="i1">
			   </div>

			   
		</div>


	</body>
</html>
