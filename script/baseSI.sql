CREATE DATABASE si;

\c si

CREATE TABLE entite(
    idEntite INT,
    nomEntite VARCHAR(80),
    passwd VARCHAR(30)
);

CREATE TABLE details(
    idEntite SERIAL,
    nomFondateur VARCHAR(80),
    numeroFiscale VARCHAR(80),
    siege VARCHAR(80),
    dateDeCreation DATE,
    Objet VARCHAR(80),
    numeroStatistique VARCHAR(80),
    deviseTenueDeCompte VARCHAR(80),
    deviseEquivalence VARCHAR(20)
);

CREATE TABLE exercice(
    idExercice SERIAL,
    debutExercice DATE,
    finExercice DATE
);

CREATE TABLE journalAchat(
    idJournal SERIAL,
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
