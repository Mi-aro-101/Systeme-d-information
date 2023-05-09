--view 
    --join table journal et plancomptable
    create view v_tableau as 
    select c.code codeJournal,c.intitule intitule,j.dateEntree dateentree, j.numpiece numpiece, j.libelle libelle, j.debit debit, j.credit credit
        from journal j
        join plancomptable c on j.idPlanComptable=c.idPlanComptable
    -- maka compte
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
        --13
        CREATE OR REPLACE VIEW v_get_13 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '13%';
        --3
        CREATE OR REPLACE VIEW v_get_3 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '3%' AND codejournal not like '39%';
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
        --39
        CREATE OR REPLACE VIEW v_get_39 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '39%';
        --49
        CREATE OR REPLACE VIEW v_get_49 as
            SELECT *
                FROM v_tableau j where codejournal LIKE '49%';

                