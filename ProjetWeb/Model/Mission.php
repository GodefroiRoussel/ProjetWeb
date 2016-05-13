<?php
<<<<<<< HEAD
function getAllOffre()
{
    global $pdo;

        
    $req = $pdo->prepare('SELECT refMission, lieu, dateDeb, dateFin, domaine, experience, diplome, salaire FROM Mission');
=======
function getOffre($offset, $limit)
{
    global $pdo;
    $offset = (int) $offset;
    $limit = (int) $limit;
        
    $req = $pdo->prepare('SELECT refMission, lieu, dateDeb, dateFin, domaine, experience, diplome, salaire FROM Mission LIMIT :offset, :limit');
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
>>>>>>> b37e1b39dd4295beca97663fff2bc7de3e14652a
    $req->execute();
    $offres = $req->fetchAll();
    
    
    return $offres;
}