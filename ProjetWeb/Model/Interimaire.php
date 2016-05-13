<?php
function creerInterimaire($nom, $prenom, $dateNaiss, $civilite, $email, $passwd, $telephone, $ville, $rue, $numAd, $RIB, $CV, $IDCard)
{
    global $pdo;	
    //EFFECTUER UNE FONCTION DE HACHAGE POUR LE PASSWD
	//VALUES ('toto', 'coucou', 'rousl', 'godichou', 20, 'Monsieur', 'go@gmail.com', 0602101, 'Pau', 'rue de la république', 12, 1010, 1100, 0010);
	$req = $pdo->prepare('INSERT INTO INTERIMAIRE (nom, prenom, dateNaiss, civilité, email, passwd, telephone, ville, rue, num, RIB, CV, IDCard) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
	$req->execute(array($nom, $prenom, $dateNaiss, $civilite, $email, $passwd, $telephone, $ville, $rue, $numAd, $RIB, $CV, $IDCard));
    
}

<<<<<<< HEAD

function getAllInterimaire(){
	global $pdo;
    
    $req = $pdo->prepare('SELECT idInterimaire, nom, prenom, dateNaiss, civilité, email, passwd, telephone, ville, rue, num FROM interimaire');
    $req->execute();
    $interimaires = $req->fetchAll();
    
    
    return $interimaires;
}

function getInterimaire($id){
	global $pdo;
    
    $req = $pdo->prepare('SELECT idInterimaire, nom, prenom, dateNaiss, civilité, email, passwd, telephone, ville, rue, num FROM interimaire WHERE idInterimaire = ?');
    $req->execute(array($id));
    $interimaire= $req->fetch();
    
    
    return $interimaire;
}

function update($id, $nom, $prenom, $dateNaiss, $civilite, $email, $passwd, $telephone, $ville, $rue, $numAd){
	global $pdo;
    
    $req = $pdo->prepare('UPDATE interimaire SET nom = :nvnom, prenom = :nvprenom, dateNaiss= :nvdateNaiss, civilité = :nvcivilite, email = :nvemail, passwd = :nvpasswd, telephone= :nvtelephone, ville = :nvville, rue = :nvrue, num = :nvnum WHERE idInterimaire = :idInt');
    $req->execute(array(
	'nvnom' => $nom,
	'nvprenom' => $prenom,
	'nvdateNaiss' => $dateNaiss,
	'nvcivilite' => $civilite,
	'nvemail' => $email,
	'nvpasswd' => $passwd,
	'nvtelephone' => $telephone,
	'nvville' => $ville,
	'nvrue' => $rue,
	'nvnum' => $numAd,
	'idInt' => $id
	));
    $interimaire= $req->fetch();
    
    
    return $interimaire;
=======
function upload($file) {
global $PDO;
$stmt = $PDO->prepare("REPLACE INTO INTERIMAIRE (RIB, CV, IDCard) VALUES (?, ?, ?) where ");
$stmt->bindParam(3, fopen($file['tmp_name'], 'rb'), PDO::PARAM_LOB);
return $stmt->execute();
>>>>>>> b37e1b39dd4295beca97663fff2bc7de3e14652a
}