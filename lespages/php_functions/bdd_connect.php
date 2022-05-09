<?php   

function BDD_connect(){
        /*Connexion à la base de données sur le serveur tp-epua*/
		$conn = @mysqli_connect("tp-epua:3308", "meyerj", "8n9brckq");    
		
		if (mysqli_connect_errno()) {
            $msg = "erreur ". mysqli_connect_error();
        } else {  
            $msg = "connecté au serveur " . mysqli_get_host_info($conn);
            /*Sélection de la base de données*/
            mysqli_select_db($conn, "meyerj"); 
            /*mysqli_select_db($conn, "etu"); */ /*sélection de la base sous la VM info642*/
		
            /*Encodage UTF8 pour les échanges avecla BD*/
            mysqli_query($conn, "SET NAMES UTF8");
        }
        return $conn;
}

$conn = BDD_connect();
		
function BDD_request($sql_request){
    global $conn;
        $result =  mysqli_query($conn, $sql);
}

 function printStatus($class_css){
         global $conn;

        echo "<span ";
        echo $class_css;
        echo "> Statut de le connection a la base de donnees:";
        if($conn == false){
            echo   " INACTIF</span>";

        }else{
            echo   " ACTIF</span>";
        }
        
     


 }
?> 