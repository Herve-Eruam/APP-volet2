<?php 
session_save_path("../sessionPhp");
session_start();
include 'php_functions/bdd_connect.php';

if(isset($_SESSION["adminMode"]) and $_SESSION["adminMode"] == true){
	if(!empty($_GET['newmdp'])){
		$sql_request = "UPDATE AppVolet_Groupe SET pass = \"" .md5($_GET['newmdp']) ."\" WHERE id_membre = " .$_SESSION["id_membre_connected"] ;
		BDD_request($sql_request);
	}
}
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
				<h1 style="text-align:center;">Administration</h1>
			</div>

			<div >
			<form method=get">
				<p>Nouveau mot de passe: <input type="password" name="newmdp"  required /></p>
			</form> 

			</div>

			
		</div>

   </body>

</html>
