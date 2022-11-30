ALTER TABLE `2024_VOLET_Mesures` DROP FOREIGN KEY fk_capteur; 

drop table if exists `2024_VOLET_Groupe` cascade;
drop table if exists `2024_VOLET_Techno` cascade;
drop table if exists `2024_VOLET_Mesures` cascade;
drop table if exists `2024_VOLET_Sugest` cascade;


create table `2024_VOLET_Groupe` (id_membre integer auto_increment primary key,
		nom varchar(30),
		prenom varchar(30),
		genre varchar(1), /* H ou F */
		descriptions varchar(200),
		nom_photo varchar(20)
		);

create table `2024_VOLET_Techno` (id_techno integer auto_increment primary key,
		nom varchar(30),
		types varchar(30), /*capteur ou actionneur ou intelligence*/
		position varchar(50), /* interieur ou exterieur */
		unite varchar(20), /* degre,lux*/
		descript varchar(800) /*Justification*/
		);

create table `2024_VOLET_Mesures` (id_mesure integer auto_increment primary key,
		id_techno integer,
		instant timestamp,
		valeur numeric
		);

 
alter table `2024_VOLET_Mesures` add constraint fk_capteur foreign key (id_techno) references `2024_VOLET_Techno`(id_techno);
/*
alter table candidat add constraint fk_membre_f foreign key (id_jury_f) references membre_jury(id_membre);
alter table candidat add constraint fk_membre_m foreign key (id_jury_m) references membre_jury(id_membre);
*/

