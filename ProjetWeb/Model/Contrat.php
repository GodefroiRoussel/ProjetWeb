<?php
function creerContrat($lieu, $dateDeb, $dateFin, $idInterim, $refMis)
{
    global $pdo;	
	$req = $pdo->prepare('INSERT INTO contrat (lieu, dateDeb, dateFin, idInterim, refMis) VALUES (?, ?, ?, ?, ?)');
	$req->execute(array($lieu, $dateDeb, $dateFin, $idInterim, $refMis));
}

function getAllContrat()
{
    global $pdo;

        
    $req = $pdo->prepare('SELECT idContrat, lieu, dateDeb, dateFin, idInterim, refMis FROM contrat');
    $req->execute();
    $contrats = $req->fetchAll();

    return $contrats;
}

function getAllContratInterimaire($id)
{
    global $pdo;

        
    $req = $pdo->prepare('SELECT idContrat, lieu, dateDeb, dateFin, idInterim, refMis FROM contrat WHERE idInterim=?');
    $req->execute(array($id[0]));
    $contrats = $req->fetchAll();

    return $contrats;
}

function getAllContratAValider(){
	global $pdo;

    $req = $pdo->prepare('SELECT m.lieu, m.dateDeb, m.dateFin, m.refMission, p.idInterim FROM mission m, postuler p WHERE m.refMission = p.refMission ORDER BY m.refMission');
    $req->execute();
    $contrats = $req->fetchAll();
    
    
    return $contrats;
}

function getAllContratAValiderInterimaire($id){
	global $pdo;

    $req = $pdo->prepare('SELECT m.lieu, m.dateDeb, m.dateFin, m.refMission, p.idInterim FROM mission m, postuler p WHERE p.idInterim=? AND m.refMission = p.refMission ORDER BY m.refMission');
    $req->execute(array($id[0]));
    $contrats = $req->fetchAll();
    
    
    return $contrats;
}

function getAllContratEnCours(){
	global $pdo;
	
    $req = $pdo->prepare('SELECT idContrat, lieu, dateDeb, dateFin, refMis, idInterim FROM contrat WHERE (dateDeb<= CURRENT_DATE ) && ( CURRENT_DATE <=dateFin) ORDER BY refMis');
    $req->execute();
    $contrats = $req->fetchAll();
    
    
    return $contrats;
}

function getAllContratEnCoursInterimaire($id){
	global $pdo;
	
    $req = $pdo->prepare('SELECT idContrat, lieu, dateDeb, dateFin, refMis, idInterim FROM contrat WHERE (dateDeb<= CURRENT_DATE ) && ( CURRENT_DATE <=dateFin) && idInterim=? ORDER BY refMis');
    $req->execute(array($id[0]));
    $contrats = $req->fetchAll();
    
    
    return $contrats;
}

function getContrat($idContrat){
	global $pdo;
    
    $req = $pdo->prepare('SELECT idContrat, lieu, dateDeb, dateFin, idInterim, refMis FROM contrat WHERE idContrat = ?');
    $req->execute(array($idContrat));
    $contrat= $req->fetch();
    
    
    return $contrat;
}


function deleteContrat($idContrat){
	global $pdo;
    
    $req = $pdo->prepare('DELETE FROM contrat WHERE idContrat = ?');
    $req->execute(array($idContrat));
}