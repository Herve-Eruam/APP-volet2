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

		<?php
			include 'php_functions/menu.php'
		?>


		<div id=main>

			<div id="titre">
				<h1 style="text-align:center;">Quizz sur les volets batants automatrisé</h1>
			</div>

            <div id=ShowQCM>
					<form action="" method="get">
						<p name="question"> 
							<?php
								$result = BDD_request("SELECT * FROM AppVOLET_Quizz");
								$note=0;


								while ($val = mysqli_fetch_assoc($result)) {
									//echo "<option" .$selected ." value=".$val['id_membre'].">".$result."</option>";
									//echo"<label><input type='radio' name='cheval' value='blanc' />"."blanc"."</label><br />";
									$it=$val['id_question'];

									echo "<p>"." "."$it)"."".$val['question']."</p>"."<br/>";
									echo"<input type='radio' name='question1' value='reponse1' />".$val['reponse1']."</label><br />";
									echo"<input type='radio' name='question1' value='reponse2' />".$val['reponse2']."</label><br />";
									echo"<input type='radio' name='question1' value='reponse3' />".$val['reponse3']."</label><br />";
									echo"<input type='radio' name='question1' value='reponse4'/>".$val['reponse4']."</label><br />";
									

									$note=$note + getAnswer($it);
								}	 
								
							?>
						
					<input type="submit" name="" value="Valider">
					<input type="submit" name="" value="Effacer">
					<?php 
					 //if(isset($GET_))
					?>
					</form>
				</div>
			
			<!-- GESTION DU QCM POUR RENVOYER LA NOTE -->
			<?php 
				function getAnswer($it){
					$note=0;

					if(isset($_GET['reponse1']) && $it==1){
						//echo "Question". "$it".": La bonne reponse etait".""
						$note=$note +(20/7);
					}

					if(isset($_GET['']) && $it==2){
						$note=$note+(20/7);	}

					if(isset($_GET['']) && $it==3){
						$note=$note+(20/7);
					}

					if(isset($_GET['']) && $it==4){
						$note=$note+(20/7);
					}

					if(isset($_GET['']) && $it==5){
						$note=$note+(20/7);
					}

					if(isset($_GET['']) && $it==6){
						$note=$note+(20/7);
					}

					if(isset($_GET['']) && $it==7){
						$note=$note+(20/7);
					}
					

					/*CORRECTION*/

					return $note;
				}
			?> 	
                            
			
		</div>

   </body>
</html>
