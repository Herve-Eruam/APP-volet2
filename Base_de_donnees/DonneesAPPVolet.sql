            /*Insertion des MEMBRES DE L APP*/
insert into APP_VOLET_Membres(nom,prenom,genre) values (
    'ERUAM', 
    'Herve', 
    'M');

insert into APP_VOLET_Membres(nom,prenom,genre) values (
    'MEYER', 
    'Johan', 
    'M');

insert into APP_VOLET_Membres(nom,prenom,genre) values (
    'DESAGE', 
    'Hyppolite', 
    'M');

insert into APP_VOLET_Membres(nom,prenom,genre) values (
    'DALENC', 
    'Nathan', 
    'M');

insert into APP_VOLET_Membres(nom,prenom,genre) values (
    'YOVODEVI', 
    'Zaide', 
    'M');


            /*Insertion de Commentaires*/

            /*Insertion des Capteurs*/
INSERT INTO APP_VOLET_Capteurs (nom, type_capteur, unite, valmin, valmax) VALUES (
    'temp1', 
    'temperature', 
    'degre', 
     -40, 
     80) ;

INSERT INTO APP_VOLET_Capteurs (nom, type_capteur, unite, valmin, valmax) VALUES (
    'temp2', 
    'temperature', 
    'degre', 
     -40, 
     80) ;


INSERT INTO APP_VOLET_Capteurs (nom, type_capteur, unite, valmin, valmax) VALUES (
    'lum1', 
    'luminosite', 
    'klux', 
     0, 
     200) ;

INSERT INTO APP_VOLET_Capteurs (nom, type_capteur, unite, valmin, valmax) VALUES (
    'lum2', 
    'luminosite', 
    'klux', 
     0, 
     200) ;


INSERT INTO APP_VOLET_Capteurs (nom, type_capteur, unite, valmin, valmax) VALUES (
    'cour1', 
    'courant', 
    'Ampere', 
     -8, 
     8) ;

INSERT INTO APP_VOLET_Capteurs (nom, type_capteur, unite, valmin, valmax) VALUES (
    'cour2', 
    'courant', 
    'Ampere', 
     -8, 
     8) ;

INSERT INTO APP_VOLET_Capteurs (nom, type_capteur, unite, valmin, valmax) VALUES (
    'pres1', 
    'presence', 
    'portee(metre)', 
     3.2, 
     12) ;


                /*Insertion des Mesures*/


INSERT INTO APP_VOLET_Mesures (id_capteur,instant,valeur) VALUES (
    (select id_capteur from APP_VOLET_Capteurs where nom like 'temp1'),
    timestampadd(HOUR, 4, '2009-05-18'),
    16
    );

INSERT INTO APP_VOLET_Mesures (id_capteur,instant,valeur) VALUES (
    (select id_capteur from APP_VOLET_Capteurs where nom like 'temp2'),
    timestampadd(HOUR, 8, '2009-05-18'),
    20
    );

INSERT INTO APP_VOLET_Mesures (id_capteur,instant,valeur) VALUES (
    (select id_capteur from APP_VOLET_Capteurs where nom like 'lum1'),
    timestampadd(HOUR, 0, '2009-05-18'),
    97
    );

INSERT INTO APP_VOLET_Mesures (id_capteur,instant,valeur) VALUES (
    (select id_capteur from APP_VOLET_Capteurs where nom like 'lum2'),
    timestampadd(HOUR, 0, '2009-05-18'),
    120
    );

INSERT INTO APP_VOLET_Mesures (id_capteur,instant,valeur) VALUES (
    (select id_capteur from APP_VOLET_Capteurs where nom like 'cour1'),
    timestampadd(HOUR, 3, '2009-05-18'),
    5
    );

INSERT INTO APP_VOLET_Mesures (id_capteur,instant,valeur) VALUES (
    (select id_capteur from APP_VOLET_Capteurs where nom like 'cour2'),
    timestampadd(HOUR, 4, '2009-05-18'),
    7
    );
INSERT INTO APP_VOLET_Mesures (id_capteur,instant,valeur) VALUES (
    (select id_capteur from capteur where nom like 'pres1'),
    timestampadd(HOUR, 2, '2009-05-18'),
    7
    );



            /*Insertion de Commentaires */





