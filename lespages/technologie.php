<?php
session_save_path("../sessionPhp");
session_start();
include 'php_functions/bdd_connect.php'
?>

<html> 

   <head>
   
	    <meta charset="UTF-8"> 
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/technologie.css">

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
	   			<h1 id =T1 style="text-align:center">Capteurs utilisés</h1>
			   	<div id="c1">
				   
				   <?php 
				   $sql= "SELECT  nom ,types, position, unite, descript FROM AppVOLET_Techno  WHERE  types = 'Capteur' and  nom = 'Capteur de temperature'";

				   $result = BDD_request($sql);

				   $row = mysqli_fetch_assoc($result);

				   echo"<li id =c11>".$row["nom"]."</li><br>";
				   
				   echo "<li id = c12>"."Les capteurs de températures sont positionés à l' ".$row["position"]."</li><br>";
				   echo"<li id = c13>".$row["descript"]."</li><br>";
				   echo "<br>";
				   ?>
			   </div>

			   <div id="c2">
			   <?php 
			   
				   $sql= "SELECT  nom ,types, position, unite, descript FROM AppVOLET_Techno  WHERE  types = 'Capteur 'and  nom= 'Capteur de luminosite' ";

				   $result = BDD_request($sql);

				   $row = mysqli_fetch_assoc($result);

				   echo"<li id = c21>".$row["nom"]."</li><br>";
				   
				   echo "<li id = c22>"."Les capteurs de Luminosités sont positionés".$row["position"]."</li><br>";
				   echo"<li id = c23>".$row["descript"]."</li><br>";
				   echo "<br>";
				   ?>
			   
			   </div>

			   <div id="c3">
			   <?php 
			   
				   $sql= "SELECT  nom ,types, position, unite, descript FROM AppVOLET_Techno  WHERE  types = 'Capteur' and  nom= 'Capteur de presence'";

				   $result = BDD_request($sql);

				   $row = mysqli_fetch_array($result);

				   echo"<li id = c31>".$row["nom"]."</li><br>";
				   
				   echo "<li id = c32>"."Les capteurs de Présence sont positionés".$row["position"]."</li><br>";
				   echo"<li id = c33>".$row["descript"]."</li>\<br>";
				   echo "<br>";
				   ?>

			   </div>

			   <div id="c4">
			   <?php 
			   
				   $sql= "SELECT  nom ,types, position, unite, descript FROM AppVOLET_Techno  WHERE  types = 'Capteur' and  nom= 'Capteur de courant'";

				   $result = BDD_request($sql);

				   $row = mysqli_fetch_array($result);

				   echo"<li id = c41>".$row["nom"]."</li><br>";
				   
				   echo "<li id = c42>"."Les capteurs de courants sont positionés".$row["position"]."</li><br>";
				   echo"<li id = c43>".$row["descript"]."</li><br>";
				   echo "<br>";
				   ?>
			   </div>
			</div>

			<div id="actionneur">
	   			<h1 id =T1 style="text-align:center">Actionneurs utilisés</h1>
			    <div id="a1">
				   <?php 
			   
				   $sql= "SELECT  nom ,types, position, unite, descript FROM AppVOLET_Techno  WHERE  types = 'Actionneur' and  nom= 'Moteur'";

				   $result = BDD_request($sql);

				   $row = mysqli_fetch_array($result);

				   echo"<li id = a11>".$row["nom"]."</li><br>";
				 
				   echo "<li id = a12>"."Les ".$row["nom"]." sont positionés au niveau des".$row["position"]."</li><br>";
				   echo"<li id = a13>".$row["descript"]."</li><br>";
				   echo "<br>";
				   ?>
			   
			   </div>

			   <div id="a2">
			   <?php 
			   
				   $sql= "SELECT  nom ,types, position, unite, descript FROM AppVOLET_Techno  WHERE  types = 'Actionneur' and  nom= 'Pont en H'";

				   $result = BDD_request($sql);

				   $row = mysqli_fetch_array($result);

				   echo"<li id = a21>".$row["nom"]."</li><br>";
				   echo "<li id = a22>"."Les ".$row["nom"]." sont positionés au niveau du".$row["position"]."</li><br>";
				   echo"<li id = a23>".$row["descript"]."</li><br>";
				   echo "<br>";
				   ?>

			   </div>

			  

			</div>
		
			<div id="inteligence">
	   			<h1 id =T1 style="text-align:center">Inteligence</h1>
			   <div id="i1">
			   <?php 
			   
				   $sql= "SELECT  nom ,types, position, unite, descript FROM AppVOLET_Techno  WHERE  types = 'Intelligence' and  nom= 'Raspberry'";

				   $result = BDD_request($sql);

				   $row = mysqli_fetch_array($result);

				   echo"<li id = i11>".$row["nom"]."</li><br>";
				   echo "<li id = i12>"."La ".$row["nom"]." est positionés au niveau du".$row["position"]."</li><br>";
				   echo"<li id = i13>".$row["descript"]."</li><br>";
				   echo "<br>";
				   ?>
			   </div>

			   
		</div>


	</body>
</html>
