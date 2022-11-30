            /*Insertion des MEMBRES DE L APP*/
insert into `2024_VOLET_Groupe`(nom,prenom,genre,descriptions,nom_photo) values (
    'ERUAM', 
    'Herve', 
    'M',
    "Moi c est herve eruam" ,
    "herveruam.jpg"   );

insert into `2024_VOLET_Groupe`(nom,prenom,genre,descriptions,nom_photo) values (
    'BENITO', 
    'Enzo', 
    'M',
    "Moi c est benito enzo" ,
    "enzobenito.jpg"   );

insert into `2024_VOLET_Groupe`(nom,prenom,genre,descriptions,nom_photo) values (
    'MEYER', 
    'Johan', 
    'M',
    "Moi c est Johan Meyer" ,
    "johanmeyer.jpg"    );

insert into `2024_VOLET_Groupe`(nom,prenom,genre,descriptions,nom_photo) values (
    'DESAGE', 
    'Hippolyte', 
    'M',
    "Moi c est Hippolyte" ,
    "hippolytedesage.jpg"   );

insert into `2024_VOLET_Groupe`(nom,prenom,genre,descriptions,nom_photo) values (
    'DALENC', 
    'Nathan', 
    'M',
    "Moi c est Nathan Dalenc" ,
    "nathandalenc.jpg"   );

insert into `2024_VOLET_Groupe`(nom,prenom,genre,descriptions,nom_photo) values (
    'YOVODEVI', 
    'Zaide', 
    'M',
    "Moi c est Zaide Yovodevi" ,
    "zaide.jpg" );


            /*Insertion des Technologies*/

INSERT INTO `2024_VOLET_Techno`(nom,types,unite,position,descript)
VALUES( "Pont en H","Actionneur","NULL","Boitier de commande","Pour le contrôle des moteurs a courant continue déjà présent sur la maquette, nous avons opter pour un pont en H relativement simple. Notre projet ne nécessitant pas un contrôle précis des moteurs, un module plus complexe n’aurait pas apporter de plus-value suffisante pour justifier la complexification du système. Le pont en H doit supporter une tension de 25V et un ampérage allant jusqu’à 2A pour ne pas être surchargé et détruit lors des pics d’intensité dans le fonctionnement des moteurs.");
/*--------------------------------------------------------*/
INSERT INTO `2024_VOLET_Techno`(nom,types,unite,position,descript)
VALUES( "Moteur","Actionneur","NULL","Charnieres","Le moteur permet le bon fonctionnement du dispositif");

/*Modifiaction Charnieres : 
UPDATE `2024_VOLET_Techno`
SET position = 'Charnieres'
WHERE nom like 'Moteur'*/

/*--------------------------------------------------------*/
INSERT INTO `2024_VOLET_Techno`(nom,types,unite,position,descript)
VALUES("Raspberry","Intelligence","NULL","Boitier de commande","Pour notre projet,nous avons besoin d’un microcontrôleur capable de récupérer l’ensemble des mesures en provenance des différents capteurs équipant le volet, pouvant générer des signaux numériques cycliques pour contrôler le module de puissance (pont en H),disposant d’une connexion sans fil pour pouvoir rendre notre projet communiquant suffisamment puissant pour faire tourner les programmes contrôlant le volet, le serveur web, une base de données MySQL et éventuellement le serveur MQTT. Pour répondre à ces besoins, nous avons opté pour une carte Raspberry Pi 3 B+ qui possède 1 GB de ram et une connexion wifi (et Ethernet). Elle possède également l’avantage d’être très rependue dans le monde et possède donc une bonne documentation.");
/*---------------------------------------------------------*/
INSERT INTO `2024_VOLET_Techno`(nom,types,unite,position,descript)
VALUES("Capteur de presence","Capteur","NULL","Interieur","Nous voulons integrer un capteur de presence à notre volet pour qu'à partir d'une certaine heure, si il y a du mouvement dans la maison, les volets puissent s'ouvrir.");
/*--------------------------------------------------------*/
INSERT INTO `2024_VOLET_Techno`(nom,types,unite,position,descript)
VALUES("Capteur de luminosite","Capteur","NULL","Exterieur","Nous voulons integrer un capteur de luminosite à notre volet pour qu'à partir d'une certaine luminosite exterieure, les volets puissent s'ouvrir.");
/*--------------------------------------------------------*/
INSERT INTO `2024_VOLET_Techno`(nom,types,unite,position,descript)
VALUES("Capteur de temperature","Capteur","degre","Exterieur et Interieur","Toujours dans l’objectif de pouvoir gérer le volet de façons « intelligente » nous avons besoin de deux capteurs de température. Un de ces derniers devant être à l’extérieur, ils devront supporter des températures allant au minimum de -15°C à 40°C.Celui-ci doit également fournir un signal numérique, les signaux analogiques n’étant pas supportés par la Raspberry pi, il faudrait un convertisseur analogique à numérique séparé qui viendrait complexifier le système inutilement.Nous avons donc opté pour le modèle DHT22 qui propose une plage de mesure allant de -40°C à 80°C avec une précision de +- 0.5°C. Il propose également une mesure de l’humidité que nous ne prévoyons pas d’utiliser dans la gestion du volet qui permettra d’informer l’utilisateur.");
/*-------------------------------------------------------*/
INSERT INTO `2024_VOLET_Techno`(nom,types,unite,position,descript)
VALUES("Capteur de luminosite","Capteur","lux","Exterieur","Pour pouvoir gérer le volet de façons « intelligente » nous avons besoin de deux capteurs de luminosité. Un de ces derniers devant être à l’extérieur, ils devront supporter des températures allant au minimum de -15°C à 40°C. Celui-ci doit également fournir un signal numérique, les signaux analogiques n’étant pas supportés par la Raspberry pi, il faudrait un convertisseur analogique à numérique séparé qui viendrait complexifier le système inutilement.");
/*-------------------------------------------------------*/
INSERT INTO `2024_VOLET_Techno`(nom,types,unite,position,descript)
VALUES("Capteur de courant","Capteur","Ampere","Boitier de commande","Pour détecter les fins de courses sans avoir à placer des capteurs fins de courses peux esthétique nous avons décider d’utiliser deux multimètres numériques brancher sur les bornes des moteurs. Ceux-ci permettront également de détecter les blocages en course du volet. Pour cela, nous avons choisi les modèles SEN0291 de DFROBOT qui peut mesurer des courant jusque 5A pour une tension de 65V.");
/*------------------------------------------------------*/


            /*Insertion des Mesures*/
            /* NE FCT PAS !!*/
/*
INSERT INTO `2024_VOLET_Mesures` (id_techno,instant,valeur) VALUES (
    (select id_techno from `2024_VOLET_Techno` where nom like 'Capteur de temperature'),
    timestampadd(HOUR, 4, '2022-05-18'),
    16);
*/





