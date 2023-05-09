--This script is for the "Compta analytique"
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
    idCentre INT REFERENCES centre(idCentre),
    idCompta INT REFERENCES plancomptable(idplancomptable),
    pourcentage DOUBLE PRECISION,
    Statut VARCHAR(2) --Fixe['F'] / Variable['V']
);
