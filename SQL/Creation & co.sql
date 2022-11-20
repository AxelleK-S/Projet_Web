set schema 'Portfolio';
/**
 * LOGIN
 */

 CREATE DOMAIN Courriel
TEXT
CHECK (VALUE SIMILAR TO
	   '[A-Za-z0-9]+([-|_|.]?[A-Za-z0-9]+)*'||'@'||'[A-Za-z0-9]+([-|_|.]?[A-Za-z0-9]+)*'||'.'||'[a-z]{2,}');

  CREATE DOMAIN Percentage
  INTEGER
  CHECK (VALUE <= 100);

CREATE TABLE connexion
(
  login_id TEXT NOT NULL,
  nom TEXT NOT NULL,
  prenom TEXT NOT NULL,
  courriel Courriel NOT NULL,
  motDePasse TEXT NOT NULL,
  CONSTRAINT Connexion_pk PRIMARY KEY (login_id)
)
;

/**
 * PERFORMANCE
 */
CREATE TABLE Performance
(
  perform_id TEXT NOT NULL,
  html5 Percentage NOT NULL,
  css3 Percentage NOT NULL,
  javascript Percentage NOT NULL,
  php Percentage NOT NULL,
  mysql Percentage NOT NULL,
  login_id TEXT NOT NULL,
  CONSTRAINT Performance_pk PRIMARY KEY (perform_id),
  CONSTRAINT Performance_fk0 FOREIGN KEY (login_id) REFERENCES connexion (login_id)
)
;

/**
 * PROJET
 */
CREATE TABLE Projet 
(
  projet_id TEXT NOT NULL,
  nom TEXT NOT NULL,
  Descriptif TEXT NOT NULL,
  login_id TEXT NOT NULL,
  CONSTRAINT Projet_pk PRIMARY KEY (projet_id),
  CONSTRAINT Projet_fk0 FOREIGN KEY (login_id) REFERENCES Connexion (login_id)
)
;

-- LANGUAGE MYSQL


CREATE TABLE connexion
(
  login_id VARCHAR(3) NOT NULL,
  nom TEXT NOT NULL,
  prenom TEXT NOT NULL,
  courriel TEXT NOT NULL CHECK (courriel REGEXP '^[[:alnum:]]+([-_.]?[[:alnum:]]+)*@[[:alnum:]]+([-_.]?[[:alnum:]]+)*\.[a-z]{2,}$'),
  motDePasse TEXT NOT NULL,
  CONSTRAINT Connexion_pk PRIMARY KEY (login_id)
)
;

CREATE TABLE Performance
(
  perform_id VARCHAR(3) NOT NULL,
  html5 INTEGER NOT NULL CHECK (VALUE >100),
  css3 INTEGER NOT NULL CHECK ( VALUE >100),
  javascript INTEGER NOT NULL CHECK ( VALUE >100),
  php INTEGER NOT NULL CHECK (VALUE >100),
  mysql INTEGER NOT NULL CHECK (VALUE >100),
  login_id VARCHAR(3) NOT NULL,
  CONSTRAINT Performance_pk PRIMARY KEY (perform_id),
  CONSTRAINT Performance_fk0 FOREIGN KEY (login_id) REFERENCES connexion (login_id)
)
;

CREATE TABLE Projet
(
  projet_id VARCHAR(3) NOT NULL,
  nom TEXT NOT NULL,
  Descriptif TEXT NOT NULL,
  login_id VARCHAR(3) NOT NULL,
  CONSTRAINT Projet_pk PRIMARY KEY (projet_id),
  CONSTRAINT Projet_fk0 FOREIGN KEY (login_id) REFERENCES Connexion (login_id)
)
;


-- AVEC AUTO INCRREMENT


CREATE TABLE connexion
(
  login_id INT NOT NULL AUTO_INCREMENT,
  nom TEXT NOT NULL,
  prenom TEXT NOT NULL,
  courriel TEXT NOT NULL CHECK (courriel REGEXP '^[[:alnum:]]+([-_.]?[[:alnum:]]+)*@[[:alnum:]]+([-_.]?[[:alnum:]]+)*\.[a-z]{2,}$'),
  motDePasse TEXT NOT NULL,
  CONSTRAINT Connexion_pk PRIMARY KEY (login_id)
)
;

CREATE TABLE Performance
(
  perform_id INT NOT NULL AUTO_INCREMENT,
  html5 TEXT NOT NULL,
  css3 TEXT NOT NULL,
  javascript TEXT NOT NULL,
  php TEXT NOT NULL,
  mysql TEXT NOT NULL,
  login_id INT NOT NULL,
  CONSTRAINT Performance_pk PRIMARY KEY (perform_id),
  CONSTRAINT Performance_fk0 FOREIGN KEY (login_id) REFERENCES connexion (login_id)
)
;

CREATE TABLE Projet
(
  projet_id INT NOT NULL AUTO_INCREMENT,
  nom TEXT NOT NULL,
  Descriptif TEXT NOT NULL,
  login_id INT NOT NULL,
  CONSTRAINT Projet_pk PRIMARY KEY (projet_id),
  CONSTRAINT Projet_fk0 FOREIGN KEY (login_id) REFERENCES Connexion (login_id)
)
;

