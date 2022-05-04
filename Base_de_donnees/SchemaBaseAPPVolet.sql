drop table if exists APP_VOLET_Membres cascade;
drop table if exists APP_VOLET_Capteurs cascade;
drop table if exists APP_VOLET_Mesures cascade;
drop table if exists APP_VOLET_Commentaires cascade;



create table APP_VOLET_Membres(id_membre integer auto_increment primary key,
		nom varchar(30),
		prenom varchar(30),
		genre varchar(1) /* H ou F */
		);

create table APP_VOLET_Capteurs(id_capteur integer auto_increment primary key,
		nom varchar(10),
		type_capteur varchar(30),
		unite varchar(5),
		valmin numeric,
		valmax numeric
		);

create table APP_VOLET_Mesures(id_mesure integer auto_increment primary key,
		id_capteur integer,
		instant timestamp,
		valeur numeric
		);

create table APP_VOLET_Commentaires(id_commmentaire integer auto_increment primary key,
		      texte varchar(300)
		      );

alter table APP_VOLET_Mesures add constraint fk_capteur foreign key (id_capteur) references APP_VOLET_Capteurs(id_capteur);


/*
alter table candidat add constraint fk_membre_f foreign key (id_jury_f) references membre_jury(id_membre);
alter table candidat add constraint fk_membre_m foreign key (id_jury_m) references membre_jury(id_membre);
*/

