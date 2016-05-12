<?php
function creerInterimaire($nom, $prenom, $dateNaiss, $civilite, $email, $passwd, $telephone, $ville, $rue, $numAd, $RIB, $CV, $IDCard)
{
    global $pdo;	
    //EFFECTUER UNE FONCTION DE HACHAGE POUR LE PASSWD
	//VALUES ('toto', 'coucou', 'rousl', 'godichou', 20, 'Monsieur', 'go@gmail.com', 0602101, 'Pau', 'rue de la république', 12, 1010, 1100, 0010);
	$req = $pdo->prepare('INSERT INTO INTERIMAIRE (nom, prenom, dateNaiss, civilité, email, passwd, telephone, ville, rue, num, RIB, CV, IDCard) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
	$req->execute(array($nom, $prenom, $dateNaiss, $civilite, $email, $passwd, $telephone, $ville, $rue, $numAd, $RIB, $CV, $IDCard));
    
}

function upload($file) {
global $PDO;
$stmt = $PDO->prepare("REPLACE INTO INTERIMAIRE (RIB, CV, IDCard) VALUES (?, ?, ?) where ");
$stmt->bindParam(3, fopen($file['tmp_name'], 'rb'), PDO::PARAM_LOB);
return $stmt->execute();
}