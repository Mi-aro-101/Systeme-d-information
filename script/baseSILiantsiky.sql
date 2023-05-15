--16 May
--new table
    --parametre (amboarina)
create table parametre(
    idParametre SERIAL PRIMARY KEY,
    idCentre INT REFERENCES centre(idCentre),
    idProduit INT REFERENCES produit(idProduit),
    pourcentage DOUBLE PRECISION,
    Statut VARCHAR(2), --Fixe['F'] / Variable['V']
    uniteDoeuvre VARCHAR(30),
    coutDUnite DOUBLE PRECISION,
    quantite DOUBLE PRECISION,
    rubrique VARCHAR(40)
);

-- 10 May
--view 
    --join table journal et plancomptable
    create view v_tableau as 
    select c.code codeJournal,c.intitule intitule,j.dateEntree dateentree, j.numpiece numpiece, j.libelle libelle, j.debit debit, j.credit credit
        from journal j
        join plancomptable c on j.idPlanComptable=c.idPlanComptable
    -- maka compte
        --passif
        --101
        CREATE OR REPLACE VIEW v_get_101 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '101%';
        --106
        CREATE OR REPLACE VIEW v_get_106 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '106%';
        --11
        CREATE OR REPLACE VIEW v_get_11 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '11%';
        --128
        CREATE OR REPLACE VIEW v_get_128 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '128%';
        --161
        CREATE OR REPLACE VIEW v_get_161 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '161%';
        --165
        CREATE OR REPLACE VIEW v_get_165 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '165%';
        -- actif brut
        --20
        CREATE OR REPLACE VIEW v_get_20 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '20%';
        --21
        CREATE OR REPLACE VIEW v_get_21 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '21%';
        --22
        CREATE OR REPLACE VIEW v_get_22 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '22%';
        --23
        CREATE OR REPLACE VIEW v_get_23 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '23%';
        --25
        CREATE OR REPLACE VIEW v_get_25 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '25%';
        --13
        CREATE OR REPLACE VIEW v_get_13 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '13%';
        --3
        CREATE OR REPLACE VIEW v_get_3 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '3%' AND codejournal not like '39%';
        --4
        CREATE OR REPLACE VIEW v_get_4 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '4%' AND codejournal not like '41%' AND codejournal not like '49%';
        --41
        CREATE OR REPLACE VIEW v_get_41 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '41%';
        --5
        CREATE OR REPLACE VIEW v_get_5 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '5%';
        --actif net
        --280
        CREATE OR REPLACE VIEW v_get_280 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '280%';
        --281
        CREATE OR REPLACE VIEW v_get_281 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '281%';
        --282
        CREATE OR REPLACE VIEW v_get_282 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '282%';
        --283
        CREATE OR REPLACE VIEW v_get_283 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '283%';
        --285
        CREATE OR REPLACE VIEW v_get_285 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '285%';
        --39
        CREATE OR REPLACE VIEW v_get_39 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '39%';
        --49
        CREATE OR REPLACE VIEW v_get_49 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '49%'  ;
        --491
        CREATE OR REPLACE VIEW v_get_491 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '491%';

        
