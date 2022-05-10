<?php
include 'php_functions/bdd_connect.php'
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
	   			<h1 style="text-align:center">Technologies</h1>
	   		</div>

	   



	   		<div id="capteur">
	   			<h1 style="text-align:center">Capteurs utilisés</h1>
			   	<div id="c1">
				   
				   <?php 
				   $sql= "SELECT DISTINCT nom ,types, position, unite, descript FROM AppVOLET_Techno  WHERE  types = 'Capteur' and  nom = 'Capteur de temperature'";

				   $result = BDD_request($sql);

				   $row = mysqli_fetch_array($result);

				   echo"<li>".$row["nom"]."</li><br>";
				   echo "<br>";
				   echo "<li>"."Les capteurs de températures sont positionés".$row["position"]."</li><br>";
				   echo"<li>".$row["descript"]."</li><br>";
				   
				   ?>
			   </div>

			   <div id="c2">
			   <?php 
			   /*
				   $sql= "SELECT DISTINCT nom ,types, position, unite, descript FROM AppVOLET_Techno  WHERE  types = capteur and  nom= Capteur de luminosite";

				   $result = BDD_request($sql);

				   $row = mysqli_fetch_array($result);

				   echo"<li>".$row["nom"]."</li><br>";
				   echo "<br>";
				   echo "<li>"."Les capteurs de Luminosités sont positionés".$row["position"]."</li><br>";
				   echo"<li>".$row["descript"]."</li><br>";
				   */
				   ?>
			   
			   </div>

			   <div id="c3">
			   <?php 
			   /*
				   $sql= "SELECT DISTINCT nom ,types, position, unite, descript FROM AppVOLET_Techno  WHERE  types = capteur and  nom= position";

				   $result = BDD_request($sql);

				   $row = mysqli_fetch_array($result);

				   echo"<li>".$row["nom"]."</li><br>";
				   echo "<br>";
				   echo "<li>"."Les capteurs de Positions sont positionés".$row["position"]."</li><br>";
				   echo"<li>".$row["descript"]."</li>\<br>";
				  */ 
				   ?>

			   </div>

			   <div id="c4">
			   <?php 
			   /*
				   $sql= "SELECT DISTINCT nom ,types, position, unite, descript FROM AppVOLET_Techno  WHERE  types = capteur and  nom= courant";

				   $result = BDD_request($sql);

				   $row = mysqli_fetch_array($result);

				   echo"<li>".$row["nom"]."</li><br>";
				   echo "<br>";
				   echo "<li>"."Les capteurs de courants sont positionés".$row["position"]."</li><br>";
				   echo"<li>".$row["descript"]."</li><br>";
				   */
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
