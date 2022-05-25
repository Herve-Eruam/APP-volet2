drop table if exists AppVolet_Groupe cascade;
drop table if exists AppVOLET_Techno cascade;
drop table if exists AppVOLET_Mesures cascade;
drop table if exists AppVOLET_Sugest cascade;


create table AppVolet_Groupe(id_membre integer auto_increment primary key,
		nom varchar(30),
		prenom varchar(30),
		genre varchar(1), /* H ou F */
		descriptions varchar(200),
		nom_photo varchar(20)
		);

create table AppVOLET_Techno(id_techno integer auto_increment primary key,
		nom varchar(10),
		types varchar(30), /*capteur ou actionneur ou intelligence*/
		position varchar(50), /* interieur ou exterieur */
		unite varchar(5), /* degre,lux*/
		descript varchar(150) /*Justification*/
		);

create table AppVOLET_Mesures(id_mesure integer auto_increment primary key,
		id_techno integer,
		instant timestamp,
		valeur numeric
		);






alter table AppVOLET_Mesures add constraint fk_capteur foreign key (id_techno) references AppVOLET_Techno(id_techno);
/*
alter table candidat add constraint fk_membre_f foreign key (id_jury_f) references membre_jury(id_membre);
alter table candidat add constraint fk_membre_m foreign key (id_jury_m) references membre_jury(id_membre);
*/

