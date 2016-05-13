<?php
function isAdmin($user)
{
    global $pdo;
    
    $req = $pdo->prepare('SELECT count(*) FROM administrateur where email= ?');
    $req->execute(array($user));
    $count = $req->fetch();
	if ($count[0] >0){
		$estAdmin=true;
	}
	else $estAdmin=false;
	
    return $estAdmin;
}