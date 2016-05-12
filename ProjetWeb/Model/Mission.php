<?php
function getOffre($offset, $limit)
{
    global $pdo;
    $offset = (int) $offset;
    $limit = (int) $limit;
        
    $req = $pdo->prepare('SELECT refMission, lieu, dateDeb, dateFin, domaine, experience, diplome, salaire FROM Mission LIMIT :offset, :limit');
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->execute();
    $offres = $req->fetchAll();
    
    
    return $offres;
}