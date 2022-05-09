drop table if exists AppVolet_Groupe cascade;
drop table if exists AppVOLET_Techno cascade;
drop table if exists AppVOLET_Mesures cascade;


create table AppVolet_Groupe(id_membre integer auto_increment primary key,
		nom varchar(30),
		prenom varchar(30),
		genre varchar(1), /* H ou F */
		description varchar(200),
		nom_photo varchar(20)
		);

create table AppVOLET_Techno(id_techno integer auto_increment primary key,
		nom varchar(10),
		type_capteur varchar(30),
		unite varchar(5),
		);

create table AppVOLET_Mesures(id_mesure integer auto_increment primary key,
		id_capteur integer,
		instant timestamp,
		valeur numeric
		);



alter table APP_VOLET_Mesures add constraint fk_capteur foreign key (id_capteur) references APP_VOLET_Capteurs(id_capteur);


/*
alter table candidat add constraint fk_membre_f foreign key (id_jury_f) references membre_jury(id_membre);
alter table candidat add constraint fk_membre_m foreign key (id_jury_m) references membre_jury(id_membre);
*/

