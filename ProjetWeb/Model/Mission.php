<?php
function getAllOffre()
{
    global $pdo;

        
    $req = $pdo->prepare('SELECT refMission, lieu, dateDeb, dateFin, domaine, experience, diplome, salaire FROM Mission');
    $req->execute();
    $offres = $req->fetchAll();
    
    
    return $offres;
}