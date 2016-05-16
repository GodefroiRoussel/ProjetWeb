/*Fichier pour créer la base de données */ 

CREATE TABLE interimaire
(
idInterimaire int NOT NULL AUTO_INCREMENT PRIMARY KEY,
nom varchar(255) NOT NULL,
prenom varchar(255) NOT NULL,
dateNaiss date NOT NULL,
civilité varchar(255) NOT NULL,
email varchar(255) NOT NULL UNIQUE,
passwd varchar(255) NOT NULL,
telephone int NOT NULL,
ville varchar(255) NOT NULL,
rue varchar(255) NOT NULL,
num int NOT NULL
);

CREATE TABLE administrateur
(
idAdmin int NOT NULL AUTO_INCREMENT PRIMARY KEY,
nom varchar(255) NOT NULL,
prenom varchar(255) NOT NULL,
age int NOT NULL,
civilité varchar(255) NOT NULL,
email varchar(255) NOT NULL UNIQUE,
passwd varchar(255) NOT NULL,
telephone int NOT NULL,
ville varchar(255) NOT NULL,
rue varchar(255) NOT NULL,
num int NOT NULL
);

CREATE TABLE mission
(
refMission int NOT NULL PRIMARY KEY,
lieu varchar(255) NOT NULL,
dateDeb DATE NOT NULL,
dateFin DATE NOT NULL,
domaine varchar(255),
experience int,
diplome varchar(255),
salaire int
);

CREATE TABLE postuler
(
idInterim int NOT NULL,
refMission int NOT NULL,
PRIMARY KEY (idInterim,refMission) 
);


CREATE TABLE contrat
(
idContrat int NOT NULL AUTO_INCREMENT PRIMARY KEY,
nomEntreprise varchar(255),
lieu varchar(255),
dateDeb DATE,
dateFin DATE,
idInterim int,
refMis int,
FOREIGN KEY (idInterim) REFERENCES INTERIMAIRE(idInterimaire),
FOREIGN KEY (refMis) REFERENCES MISSION(refMission)
);

/* INSERTION DE LIGNES */ 

INSERT INTO administrateur 
VALUES ('1','Roussel','Godefroi',1995-07-10,'Monsieur','admin','f71dbe52628a3f83a77ab494817525c6
',0102030405,'Montpellier','Place Eugène Bataillon', 31); /* Le mot de passe correspond à "toto" en crypté */

INSERT INTO `mission` (`refMission`, `lieu`, `dateDeb`, `dateFin`, `domaine`, `experience`, `diplome`, `salaire`) VALUES 

(1, 'Montpellier', '2016-05-15', '2016-05-25', 'Agroalimentaire', '2', 'Bac +3', '1320');

INSERT INTO `mission` (`refMission`, `lieu`, `dateDeb`, `dateFin`, `domaine`, `experience`, `diplome`, 

`salaire`) VALUES (2, 'Montpellier', '2016-05-17', '2016-05-28', 'Agroalimentaire', '2', 'Bac +3', '1200');

INSERT INTO `mission` (`refMission`, `lieu`, `dateDeb`, `dateFin`, `domaine`, `experience`, `diplome`, 

`salaire`) VALUES (3, 'Marseille', '2016-05-16', '2016-05-28', 'Agroalimentaire', '2', 'Bac +1', '1200');

INSERT INTO `mission` (`refMission`, `lieu`, `dateDeb`, `dateFin`, `domaine`, `experience`, `diplome`, 

`salaire`) VALUES (4, 'IBM Montpellier', '2016-05-20', '2016-06-12', 'Informatique', '3', 'Bac +5', '1700');


/* TRIGGER 1 : */

DELIMITER |
CREATE TRIGGER contratSigne
AFTER INSERT ON contrat
FOR EACH ROW 
BEGIN 

DELETE FROM postuler WHERE refMission IN (SELECT m.refMission FROM mission m 
WHERE (m.dateDeb>= NEW.dateDeb AND m.dateDeb <= NEW.dateFin)
OR (m.dateDeb<= NEW.dateDeb AND m.dateFin >= NEW.dateDeb) ) AND
idInterim = NEW.idInterim;

DELETE FROM postuler WHERE refMission = NEW.refMis;
END; |

delimiter ;


/* TRIGGER 2 : */

DELIMITER |
CREATE TRIGGER missionSupprimee
AFTER DELETE ON mission
FOR EACH ROW 
BEGIN 

DELETE FROM postuler WHERE refMission = OLD.refMission;

END; |

delimiter ;

/* TRIGGER 3 : */

DELIMITER |
CREATE TRIGGER interimaireSupprimee
AFTER DELETE ON interimaire
FOR EACH ROW 
BEGIN 

DELETE FROM postuler WHERE idInterim = OLD.idInterimaire;

END; |

delimiter ;


