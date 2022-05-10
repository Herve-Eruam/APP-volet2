<?php   

function BDD_connect(){
        /*Connexion � la base de donn�es sur le serveur tp-epua*/
		$conn = @mysqli_connect("tp-epua:3308", "meyerj", "8n9brckq");    
		
		if (mysqli_connect_errno()) {
            $msg = "erreur ". mysqli_connect_error();
        } else {  
            $msg = "connect� au serveur " . mysqli_get_host_info($conn);
            /*S�lection de la base de donn�es*/
            mysqli_select_db($conn, "meyerj"); 
            /*mysqli_select_db($conn, "etu"); */ /*s�lection de la base sous la VM info642*/
		
            /*Encodage UTF8 pour les �changes avecla BD*/
            mysqli_query($conn, "SET NAMES UTF8");
        }
        return $conn;
}

$conn = BDD_connect();
		
function BDD_request($sql_request){
    global $conn;
    $result =  mysqli_query($conn, $sql_request);
    if($result == false){
        echo "<span> Impossible d'effectuer la requete: ";
        echo $sql_request;
        echo   " </span>";

    }
    return $result;
}

 function printStatus($class_css){ // affiche le statu le la bdd, possibilité d'incorperer balise id ou class via le parametre '
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