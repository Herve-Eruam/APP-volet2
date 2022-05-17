<?php
session_save_path("../sessionPhp");
session_start();

include 'php_functions/bdd_connect.php';
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
				<h1 style="text-align:center;">Quizz sur les volets batants automatrisé</h1>
			</div>

            <!--<div id=ShowQCM>
					<form action="" method="get">
						<select name="membre_select"> 
							<?php
								$result = BDD_request("SELECT question FROM AppVOLET_Quizz");
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
                            -->
                
			

			
		</div>

   </body>

</html>
