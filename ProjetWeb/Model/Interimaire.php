<?php
function creerInterimaire($nom, $prenom, $dateNaiss, $civilite, $email, $passwd, $telephone, $ville, $rue, $numAd)
{
    global $pdo;	
    //Effectue un hachage pour le mot de passe
	$passwd = md5($passwd);
	$req = $pdo->prepare('INSERT INTO interimaire (nom, prenom, dateNaiss, civilité, email, passwd, telephone, ville, rue, num) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
	$req->execute(array($nom, $prenom, $dateNaiss, $civilite, $email, $passwd, $telephone, $ville, $rue, $numAd));
}


function getAllInterimaire(){
	global $pdo;
    
    $req = $pdo->prepare('SELECT idInterimaire, nom, prenom, dateNaiss, civilité, email, passwd, telephone, ville, rue, num FROM interimaire');
    $req->execute();
    $interimaires = $req->fetchAll();
    
    
    return $interimaires;
}

function getInterimaireId($email){
	global $pdo;
    
    $req = $pdo->prepare('SELECT idInterimaire FROM interimaire WHERE email = ?');
    $req->execute(array($email));
    $interimaire= $req->fetch();
    
    
    return $interimaire;
}

function getInterimaire($id){
	global $pdo;
    
    $req = $pdo->prepare('SELECT idInterimaire, nom, prenom, dateNaiss, civilité, email, passwd, telephone, ville, rue, num FROM interimaire WHERE idInterimaire = ?');
    $req->execute(array($id[0]));
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
	'idInt' => $id[0]
	));
    $interimaire= $req->fetch();
    
    
    return $interimaire;
}

function deleteInterim($id){
	global $pdo;
    
    $req = $pdo->prepare('DELETE FROM interimaire WHERE idInterimaire = ?');
    $req->execute(array($id[0]));
}

function deleteInterim2($id){
	global $pdo;
    
    $req = $pdo->prepare('DELETE FROM interimaire WHERE idInterimaire = ?');
    $req->execute(array($id));
}