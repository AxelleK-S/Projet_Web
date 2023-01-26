set schema 'Portfolio';
/**
*PROCEDURES
*/

-- AJOUTER UN UTILISATEUR (automatisation id)

CREATE OR REPLACE PROCEDURE AjUser
(nom_ TEXT,prenom_ TEXT,courriel_ TEXT,motDePasse_ TEXT)

LANGUAGE plpgsql AS
$$
DECLARE i TEXT ;
DECLARE d TEXT;
DECLARE n TEXT;
DECLARE e INT;
DECLARE f INT;

BEGIN
IF NOT EXISTS (select * from Connexion)
THEN
i = '000' ;

ELSE
d = (select login_id from connexion
ORDER BY login_id DESC
LIMIT 1);
f =cast(d as int) + 1;
n = cast(f as TEXT);
e = length(n);
i= substring('000',1,3-e)||n;
END IF;
INSERT INTO Connexion(login_id,nom,prenom,Courriel,motDePasse) VALUES (i,nom_,prenom_,courriel_,motDePasse_);

END
$$;
-- AJOUTER DES PERFORMANCES (automatisation id)

CREATE OR REPLACE PROCEDURE AjPerform
(html5_ INTEGER,css3_ INTEGER,Javascript_ INTEGER,php_ INTEGER,Mysql_ INTEGER,login_id_ VARCHAR(3))

LANGUAGE plpgsql AS
$$
DECLARE i TEXT ;
DECLARE d TEXT;
DECLARE n TEXT;
DECLARE e int;
DECLARE f INT;

BEGIN
IF NOT EXISTS (select * from Performance)
THEN
i = '000' ;

ELSE
d = (select perform_id from performance
ORDER BY perform_id DESC
LIMIT 1);
f =cast(d as int) + 1;
n = cast(f as TEXT);
e = length(n);
i= substring('000',1,3-e)||n;
END IF;
INSERT INTO Performance(perform_id,html5,Css3,Javascript,Php,Mysql,login_id) VALUES (i,html5_,css3_,Javascript_,Php_,Mysql_,login_id_);

END
$$;
-- AJOUTER DES PROJETS (automatisation id)

CREATE OR REPLACE PROCEDURE AjProjet
(nom_ TEXT,Descriptif_ TEXT, login_id_ VARCHAR(3))

LANGUAGE plpgsql AS
$$
DECLARE i TEXT ;
DECLARE d TEXT;
DECLARE n TEXT;
DECLARE e int;
DECLARE f INT;

BEGIN
IF NOT EXISTS (select * from Projet)
THEN
i = '000' ;

ELSE
d = (select projet_id from Projet
ORDER BY projet_id DESC
LIMIT 1);
f =cast(d as int) + 1;
n = cast(f as TEXT);
e = length(n);
i= substring('000',1,3-e)||n;
END IF;
INSERT INTO Projet(projet_id_,nom,descriptif,login_id) VALUES (i,nom_,Descriptif_,login_id_);

END
$$

/**
*FONCTION
*/

-- CONNEXION (vérifier mot de passe correct et renvoyer true)
-- LANGAGE MYSQL

-- AJOUTER UN UTILISATEUR (automatisation id)
DELIMITER $$
CREATE PROCEDURE AjUser(nom_ TEXT,prenom_ TEXT,courriel_ TEXT,motDePasse_ TEXT)

BEGIN

DECLARE i TEXT ;
DECLARE d TEXT;
DECLARE n TEXT;
DECLARE e INTEGER;
DECLARE f INTEGER;

IF NOT EXISTS (select * from Connexion)
THEN
SET i ='000' ;
ELSE
SET d =select login_id from connexion ORDER BY login_id DESC LIMIT 1;
SET f =cast(d as int)+1;
SET n = cast(f as TEXT);
SET e = length(n);
SET i= CONCAT(substring('000',1,3-e),n);
END IF;
INSERT INTO Connexion(login_id,nom,prenom,Courriel,motDePasse) VALUES (i,nom_,prenom_,courriel_,motDePasse_);

END
$$
;

-- AJOUTER DES PERFORMANCES (automatisation id)
DELIMITER $$
CREATE PROCEDURE AjPerform(html5_ INTEGER,css3_ INTEGER,Javascript_ INTEGER,php_ INTEGER,Mysql_ INTEGER,login_id_ VARCHAR(3))

BEGIN

DECLARE i TEXT ;
DECLARE d TEXT;
DECLARE n TEXT;
DECLARE e INTEGER;
DECLARE f INTEGER;

IF NOT EXISTS (select * from Performance)
THEN
SET i = '000' ;

ELSE
SET d = (select perform_id from performance
ORDER BY perform_id DESC
LIMIT 1);
SET f =cast(d as int) + 1;
SET n = cast(f as TEXT);
SET e = length(n);
SET i= substring('000',1,3-e)||n;
END IF;
INSERT INTO Performance(perform_id,html5,Css3,Javascript,Php,Mysql,login_id) VALUES (i,html5_,css3_,Javascript_,Php_,Mysql_,login_id_);

END
$$;
-- AJOUTER DES PROJETS (automatisation id)

DELIMITER $$
CREATE PROCEDURE AjProjet(nom_ TEXT,Descriptif_ TEXT, login_id_ VARCHAR(3))

BEGIN
DECLARE i TEXT ;
DECLARE d TEXT;
DECLARE n TEXT;
DECLARE e INTEGER;
DECLARE f INTEGER;


IF NOT EXISTS (select * from Projet)
THEN
set i = '000' ;

ELSE
set d = (select projet_id from Projet
ORDER BY projet_id DESC
LIMIT 1);
set f =cast(d as int) + 1;
set n = cast(f as TEXT);
set e = length(n);
set i= substring('000',1,3-e)||n;
END IF;
INSERT INTO Projet(projet_id_,nom,descriptif,login_id) VALUES (i,nom_,Descriptif_,login_id_);

END
$$
;