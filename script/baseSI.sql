CREATE DATABASE si;

\c si liantsiky;

--Mamisoa
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
    numeroRegistre VARCHAR(80),
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

create table Devise(
    idDevise SERIAL PRIMARY KEY,
    Nom VARCHAR(20)
);

create table equivalence(
    idEquivalence SERIAL PRIMARY KEY,
    idDevise int,
    taux DOUBLE PRECISION,
    Dateequivalence DATE
);
    --VIEW
CREATE VIEW ListeDetails as SELECT e.idEntite,e.nomEntite,d.nomFondateur,d.numeroFiscale,d.siege,d.dateDeCreation,d.objet,d.numeroStatistique,d.numeroRegistre,d.deviseTenueDeCompte,d.deviseEquivalence
FROM entite as e JOIN details as d
    ON e.idEntite = d.idEntite;

--Miaro
create table plancomptable(
    idPlanComptable SERIAL PRIMARY KEY,
    identite INT,
    Code VARCHAR(5),
    Intitule VARCHAR(50),
    FOREIGN KEY (identite) REFERENCES entite(idEntite)
);

create table plantiers(
    idPlanTiers SERIAL PRIMARY KEY,
    identite INT,
    NumeroCompte VARCHAR(13),
    Intitule VARCHAR(50),
    FOREIGN KEY (identite) REFERENCES entite(idEntite)
);

--Liantsiky sefo
CREATE TABLE codeJournal (
    idCodeJournal serial primary key,
    identite INT,
    Code VARCHAR(5),
    Intitule VARCHAR(100),
    FOREIGN KEY (identite) REFERENCES entite(idEntite)
);

CREATE TABLE journal(
    idJournal SERIAL PRIMARY KEY,
    identite INT,
    DateEntree DATE,
    idCodeJournal INT,
    NumPiece VARCHAR(20),
    idPlanComptable INT,
    idPlanTiers INT default NULL,
    libelle VARCHAR(30),
    idDevise INT,
    debit DOUBLE PRECISION,
    credit DOUBLE PRECISION,
    FOREIGN KEY (identite) REFERENCES entite(idEntite),
    FOREIGN KEY (idCodeJournal) REFERENCES codeJournal(idCodeJournal),
    FOREIGN KEY (idPlanComptable) REFERENCES plancomptable(idPlanComptable),
    FOREIGN KEY (idPlanTiers) REFERENCES plantiers(idPlanTiers),
    FOREIGN KEY (idDevise) REFERENCES devise(idDevise)
);

    CREATE VIEW v_get_20 as
        SELECT SUM(j.debit) - SUM(j.credit) 
            FROM journal WHERE idplancomptable LIKE '20%';
    CREATE VIEW v_get_21 as
        SELECT SUM(j.debit) - SUM(j.credit) 
            FROM journal WHERE idplancomptable LIKE '21%';
    CREATE VIEW v_get_22 as
        SELECT SUM(j.debit) - SUM(j.credit) 
            FROM journal WHERE idplancomptable LIKE '22%';
    CREATE VIEW v_get_25 as
        SELECT SUM(j.debit) - SUM(j.credit) 
            FROM journal WHERE idplancomptable LIKE '25%';
    CREATE VIEW v_get_13 as
        SELECT SUM(j.debit) - SUM(j.credit) 
            FROM journal WHERE idplancomptable LIKE '13%';
            
    --function return grand livre of one plan comptable
    create function getGrandLivre(codeCompta VARCHAR(5))
    returns table(idJournal int,identite INT,DateEntree DATE,idCodeJournal INT,code VARCHAR(5),NumPiece VARCHAR(20),idPlanComptable INT,idPlanTiers INT,libelle VARCHAR(30),idDevise INT,debit DOUBLE PRECISION,credit DOUBLE PRECISION)
    language plpgsql
    as
    $$
    begin
        return query select
            tab.idJournal idjournal,
            tab.identite identite,
            tab.dateentree dateentree,
            tab.idcodeJournal idcodeJournal,
            compt.Code codeCompta,
            tab.numpiece numpiece,
            tab.idPlanComptable idPlanComptable,
            tab.idPlanTiers idPlantiers,
            tab.libelle libelle,
            tab.idDevise idDevise,
            tab.debit Debit,
            tab.credit Credit

        from journal as tab
        join plancomptable  compt on compt.idPlanComptable=tab.idPlanComptable
        where compt.code=codeCompta;
    end;
    $$;

    --view maka balance
select * from getBalance
    CREATE view getBalance as 
    select compta.code code,compta.Intitule intitule, sum(journal.debit) debit, sum(journal.credit) credit
    from journal
    join plancomptable compta on journal.idPlanComptable=compta.idPlanComptable
    group by compta.code,compta.intitule;

-- CREATE TABLE exercice(
--     idExercice SERIAL,
--     debutExercice DATE,
--     finExercice DATE
-- );



-- CREATE TABLE journalVente(
--     idJournal SERIAL,
--     dateEntree DATE,
--     M VARCHAR(120),
--     CompteGeneral VARCHAR(80),
--     CompteTiers VARCHAR(80),
--     Libelle VARCHAR(120),
--     Debit DOUBLE PRECISION DEFAULT 0,
--     Credit DOUBLE PRECISION DEFAULT 0
-- );
