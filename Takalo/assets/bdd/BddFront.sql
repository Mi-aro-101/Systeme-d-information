
--create user 'judi'@'localhost' identified by 'mdpprom15';


--grant all privileges on * . * to 'judi'@'localhost';
create database takalo;
use takalo;
create table admin(
    ida int primary key auto_increment,
    nom varchar(200),
    prenom varchar(200),
    email varchar(200),
    mdp varchar(200)
);
insert into admin(nom,prenom,email,mdp) values ('Deba','Gasy','admin@gmail.com','admin');
create table Categorie(
    idCategorie int auto_increment primary key,
    nom varchar(200)
);
insert into Categorie(nom) values ('Akanjo');
create table Clients(
    idClient int auto_increment primary key,
    nom varchar(200),
    prenom varchar(200),
    numero varchar(30),
    identifiant varchar(30),
    motDePasse varchar(30)
); 
insert into Clients(nom,prenom,numero,identifiant,motDePasse) values 
('Rakotomanana','Alex','0344455566','46386759','alexrak'),
('Aniah','Fah','0326788569','554657819','fyandri');


/*tsizy ity */
create table affaires(
    dateAcceptation datetime
);
insert into affaires(dateAcceptation) values
(null),
('2023-05-07 18:05:06'),
('2023-07-27 14:45:46');