<?php
function postuler($idInt, $refMi)
{
    global $pdo;
	$req = $pdo->prepare('INSERT INTO postuler (idInterim, refMission) VALUES (?, ?)');
	$req->execute(array($idInt, $refMi));
}

function getPostuler($idInt){
    global $pdo;

    $req = $pdo->prepare('SELECT refMission FROM postuler WHERE idInterim = ?');
    $req->execute(array($idInt));
    $postul = $req->fetchAll();

    return $postul;
}

function deletePostuler($idInt, $refMi){
	global $pdo;
    
    $req = $pdo->prepare('DELETE FROM postuler WHERE idInterim = ? AND refMission = ?');
    $req->execute(array($idInt, $refMi));
}