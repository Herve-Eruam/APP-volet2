drop table if exists AppVolet_Groupe cascade;
drop table if exists AppVolet_Techno cascade;
drop table if exists AppVolet_Mesures cascade;
drop table if exists AppVolet_Sugest cascade;
drop table if exists AppVolet_Quizz cascade;


create table AppVolet_Groupe(id_membre integer auto_increment primary key,
		nom varchar(30),
		prenom varchar(30),
		genre varchar(1), /* H ou F */
		descriptions varchar(200),
		nom_photo varchar(20)
		);

create table AppVolet_Techno(id_techno integer auto_increment primary key,
		nom varchar(100),
		types varchar(30), /*capteur ou actionneur ou intelligence*/
		position varchar(50), /* interieur ou exterieur */
		unite varchar(5), /* degre,lux*/
		descript varchar(300) /*Justification*/
		);

create table AppVolet_Mesures(id_mesure integer auto_increment primary key,
		id_techno integer,
		nom varchar(100),
		instant timestamp,
		valeur numeric
		);


create table AppVolet_Quizz(id_membre integer auto_increment primary key,
		id_question integer,
		question varchar(100),
		reponse1 varchar(20),
		reponse2 varchar(20),
		reponse3 varchar(20),
		reponse4 varchar(20)
		);



alter table AppVolet_Mesures add constraint fk_capteur foreign key (id_techno) references AppVolet_Techno(id_techno);
/*
alter table candidat add constraint fk_membre_f foreign key (id_jury_f) references membre_jury(id_membre);
alter table candidat add constraint fk_membre_m foreign key (id_jury_m) references membre_jury(id_membre);
*/

