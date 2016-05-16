<?php
function creerAdmin($nom, $prenom, $dateNaiss, $civilite, $email, $passwd, $telephone, $ville, $rue, $numAd)
{
    global $pdo;	
    //Effectue un hachage pour le mot de passe
	$passwd = md5($passwd);
	$req = $pdo->prepare('INSERT INTO administrateur (nom, prenom, dateNaiss, civilité, email, passwd, telephone, ville, rue, num) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
	$req->execute(array($nom, $prenom, $dateNaiss, $civilite, $email, $passwd, $telephone, $ville, $rue, $numAd));
}



function getAdminId($email){
	global $pdo;
    
    $req = $pdo->prepare('SELECT idAdmin FROM administrateur WHERE email = ?');
    $req->execute(array($email));
    $interimaire= $req->fetch();
    
    
    return $interimaire;
}

function getAdmin($id){
	global $pdo;
    
    $req = $pdo->prepare('SELECT idAdmin, nom, prenom, dateNaiss, civilité, email, passwd, telephone, ville, rue, num FROM administrateur WHERE idAdmin = ?');
    $req->execute(array($id[0]));
    $admin= $req->fetch();

    return $admin;
}

function getAdmin2($id){
	global $pdo;
    
    $req = $pdo->prepare('SELECT idAdmin, nom, prenom, dateNaiss, civilité, email, passwd, telephone, ville, rue, num FROM administrateur WHERE idAdmin = ?');
    $req->execute(array($id));
    $admin= $req->fetch();

    return $admin;
}

function updateAdmin($id, $nom, $prenom, $dateNaiss, $civilite, $email, $passwd, $telephone, $ville, $rue, $numAd){
	global $pdo;
    
    $req = $pdo->prepare('UPDATE administrateur SET nom = :nvnom, prenom = :nvprenom, dateNaiss= :nvdateNaiss, civilité = :nvcivilite, email = :nvemail, passwd = :nvpasswd, telephone= :nvtelephone, ville = :nvville, rue = :nvrue, num = :nvnum WHERE idAdmin = :idAd');
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
	'idAd' => $id[0]
	));
    $administrateur= $req->fetch();
    
    
    return $administrateur;
}

function deleteAdmin($id){
	global $pdo;
    
    $req = $pdo->prepare('DELETE FROM administrateur WHERE idAdmin = ?');
    $req->execute(array($id[0]));
}