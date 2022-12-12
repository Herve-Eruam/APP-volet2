<?php
session_save_path("../sessionPhp");
session_start();
include 'php_functions/bdd_connect.php'
?>

<html> 

   <head>
   
	    <meta charset="UTF-8">
		<link rel="stylesheet" href="css/mesures.css">
		<link rel="stylesheet" href="css/main.css">
		
   </head> 

   <body>
		<?php
			include 'php_functions/menu.php'
		?>


		<div id=main>

			
	   		<div id="titre">
	   			<h1 style="text-align:center">Mesures</h1>
	   		</div>
			<h2> Vous trouverez ici les mesures des differents capteurs presents sur notre volet:</h2>
			<?php
			$sql = "SELECT * FROM AppVolet_Mesures";

			$result = BDD_request($sql);

			while ($row = mysqli_fetch_assoc($result)) {  
				echo "<p>\n";
				echo "<div class=\"mesure\">\n";
				echo "<p>\n";
				echo "<span>"."id mesure: ". $row["id_mesure"]. "</span>\n";
				echo "<br>";
				echo "<span>"."id technologie: ".$row["id_techno"]. "</span>\n";
				echo "<br>";
				echo "<span>"."date: ".$row["instant"]. "</span>\n";
				echo "<br>";
				echo "<span>"."valeur de la mesure: ".$row["valeur"]. "</span>\n";
				echo "</div>\n";
			}
			echo "</div>\n";


			?>
		</div>

	   	﻿
	   		
		   
		


	</body>
</html>
