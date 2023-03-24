<?php
session_save_path("../sessionPhp");
session_start();

include 'php_functions/bdd_connect.php';

/*-----------------------------FONCTION GET NOTE------------------------------------*/ 
	function getNote(){
		$note=0;

		if($_POST['question1']=='reponse1'){
			$note=$note +1;
		}

		if($_POST['question2']=='reponse2' ){
			$note=$note+1;	}

		if($_POST['question3']=='reponse2' ){
			$note=$note+1;
		}

		if($_POST['question4']=='reponse2'){
			$note=$note+1;
		}

		if($_POST['question5']=='reponse3'){
			$note=$note+1;
		}

		if($_POST['question6']=='reponse1'){
			$note=$note+1;
		}

		if($_POST['question7']=='reponse4' ){
			$note=$note+1;
		}
	echo "Votre note pour ce test est : ".$note."/7";
	echo"<br>";
	echo"<br>";
	/*---------CORRECTION DES QUESTIONS-----------*/
if($_POST['question1']!='reponse1'){
	echo "La bonne reponse de la question 1 etait "."Moyen Age";
	echo"<br>";

}

if($_POST['question2']!='reponse2' ){
	echo "La bonne reponse de la question 2 etait "."En tissu";	
	echo"<br>";
}


if($_POST['question3']!='reponse2' ){
	echo "La bonne reponse de la question 3 etait "."18 eme siecle";
	echo"<br>";
}

if($_POST['question4']!='reponse2'){
	echo "La bonne reponse de la question 4 etait "."25%";
	echo"<br>";
}

if($_POST['question5']!='reponse3'){
	echo "La bonne reponse de la question 5 etait "."Le confort";	
	echo"<br>";

}

if($_POST['question6']!='reponse1'){
	echo "La bonne reponse de la question 6 etait "."Le bois";
	echo"<br>";
}

if($_POST['question7']!='reponse4' ){
	echo "La bonne reponse de la question 7 etait "."1300 euros";
	echo"<br>";

}


/*-----------------------------------------------------------------------------------*/		
		
	}

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
					<form action="quizz.php" method="post">
						<p name="question"> 
						
							<?php
								$result = BDD_request("SELECT * FROM AppVolet_Quizz");
								$note=0;

								while ($val = mysqli_fetch_assoc($result)) {
									//echo "<option" .$selected ." value=".$val['id_membre'].">".$result."</option>";
									//echo"<label><input type='radio' name='cheval' value='blanc' />"."blanc"."</label><br />";
									$it=$val['id_question'];
									
									echo "<li id='quest'>"."$it)".$val['question']."</li><br>";
									
									echo "<select name='question" .$it ."'>"."<br>";
									echo"<option type='radio'  value='reponse1' />".$val['reponse1']."</option><br />";
									echo"<option type='radio'  value='reponse2' />".$val['reponse2']."</option><br />";
									echo"<option type='radio'  value='reponse3' />".$val['reponse3']."</option><br />";
									echo"<option type='radio' value='reponse4'/>".$val['reponse4']."</option><br />";
									echo"</select>";
									echo"<br><br>";
	
								}	 

								
							?>
						
					<input type="submit" name="Valider" value="Valider">
					</form>


					<?php 
					 if(isset($_POST['question4']) == true){
						getNote();
					 }


					?>
					
				</div>
			
		
                            
			
		</div>

   </body>
</html>
