CREATE DATABASE si;

\c si

CREATE TABLE entite(
    idEntite SERIAL PRIMARY KEY,
    nomEntite VARCHAR(80),
    passwd VARCHAR(30)
);

CREATE TABLE details(
    idEntite INT,
    nomFondateur VARCHAR(80),
    numeroFiscale VARCHAR(80),
    siege VARCHAR(80),
    dateDeCreation DATE,
    Objet VARCHAR(80),
    numeroStatistique VARCHAR(80),
    deviseTenueDeCompte VARCHAR(80),
    deviseEquivalence VARCHAR(20),
    FOREIGN KEY(idEntite) REFERENCES entite(idEntite)
);

CREATE TABLE exercice(
    idExercice SERIAL PRIMARY KEY,
    idEntite INT,
    debutExercice DATE,
    finExercice DATE,
    FOREIGN KEY(idEntite) REFERENCES entite(idEntite)
);


--Liantsiky sefo
CREATE TABLE journalAchat(
    idJournal SERIAL PRIMARY KEY,
    dateEntree DATE,
    M VARCHAR(120),
    CompteGeneral VARCHAR(80),
    CompteTiers VARCHAR(80),
    Libelle VARCHAR(120),
    Debit DOUBLE PRECISION DEFAULT 0,
    Credit DOUBLE PRECISION DEFAULT 0
);

CREATE TABLE journalVente(
    idJournal SERIAL,
    dateEntree DATE,
    M VARCHAR(120),
    CompteGeneral VARCHAR(80),
    CompteTiers VARCHAR(80),
    Libelle VARCHAR(120),
    Debit DOUBLE PRECISION DEFAULT 0,
    Credit DOUBLE PRECISION DEFAULT 0
);
