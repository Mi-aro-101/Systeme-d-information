--This script is for the "Compta analytique"
-- 10 Mai 2023
create table produit(
    idProduit SERIAL PRIMARY KEY,
    nomProduit VARCHAR(30)
);

create table production(
    idProduction SERIAL PRIMARY KEY,
    idProduit INT REFERENCES produit(idProduit),
    dateProduction date,
    nombre INT
);

create table centre(
    idCentre SERIAL PRIMARY KEY,
    nomCentre VARCHAR(30),
    nature VARCHAR(2) --Structure['S'] / Operationnel['O']
);

create table parametre(
    idParametre SERIAL PRIMARY KEY,
    idJournal INT REFERENCES journal(idJournal),
    idCentre INT REFERENCES centre(idCentre),
    idProduit INT REFERENCES produit(idProduit),
    pourcentage DOUBLE PRECISION,
    Statut VARCHAR(2) --Fixe['F'] / Variable['V']
);

create or replace view v_charges as
select p.idparametre idparametre, j.idjournal idjournal, p.idCentre idCentre, p.idProduit idProduit, j.libelle rubrique, j.debit total, p.pourcentage pourcentage, p.Statut nature
    from journal j 
    join parametre p on j.idJournal=p.idJournal