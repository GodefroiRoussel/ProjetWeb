<?php
function creerOffre($lieu, $dateDeb, $dateFin, $domaine, $experience, $diplome, $salaire)
{
    global $pdo;	
	$req = $pdo->prepare('INSERT INTO mission (lieu, dateDeb, dateFin, domaine, experience, diplome, salaire) VALUES (?, ?, ?, ?, ?, ?, ?)');
	$req->execute(array($lieu, $dateDeb, $dateFin, $domaine, $experience, $diplome, $salaire));
}


function getAllOffre()
{
    global $pdo;

        
    $req = $pdo->prepare('SELECT refMission, lieu, dateDeb, dateFin, domaine, experience, diplome, salaire FROM mission');
    $req->execute();
    $offres = $req->fetchAll();
    
    
    return $offres;
}

function getAllOffreDisponible()
{
    global $pdo;

        
    $req = $pdo->prepare('SELECT refMission, lieu, dateDeb, dateFin, domaine, experience, diplome, salaire FROM mission WHERE refMission NOT IN (SELECT refMis FROM contrat) AND (dateDeb>= CURRENT_DATE )');
    $req->execute();
    $offres = $req->fetchAll();
    
    
    return $offres;
}

function getOffre($ref){
	global $pdo;
    
    $req = $pdo->prepare('SELECT refMission, lieu, dateDeb, dateFin, domaine, experience, diplome, salaire FROM mission WHERE refMission = ?');
    $req->execute(array($ref));
    $offre= $req->fetch();
    
    
    return $offre;
}

function updateOffre($ref, $lieu, $dateDeb, $dateFin, $domaine, $experience, $diplome, $salaire){
	global $pdo;
    
    $req = $pdo->prepare('UPDATE mission SET lieu = :nvlieu, dateDeb = :nvdateDeb, dateFin= :nvdateFin, domaine = :nvdomaine, experience = :nvexperience, diplome = :nvdiplome, salaire= :nvsalaire WHERE refMission = :refM');
    $req->execute(array(
	'nvlieu' => $lieu,
	'nvdateDeb' => $dateDeb,
	'nvdateFin' => $dateFin,
	'nvdomaine' => $domaine,
	'nvexperience' => $experience,
	'nvdiplome' => $diplome,
	'nvsalaire' => $salaire,
	'refM' => $ref
	));
    $offre= $req->fetch();
    
    
    return $offre;
}

function deleteOffre($ref){
	global $pdo;
    
    $req = $pdo->prepare('DELETE FROM mission WHERE refMission = ?');
    $req->execute(array($ref));
}