<?php
function creer_Interimaire($nom, $prenom, $pseudo, $passwd, $age, $civilite, $email, $telephone, $ville, $rue, $numAd, $RIB, $IDCard, $CV)
{
    global $bdd;
    $nom = (string) $nom;
    $prenom = (string) $prenom;
	$pseudo = (string) $pseudo;
	$passwd = (string) $passwd;
	$age = (int) $age;
	$civilite = (string) $civilite;
	$email = (string) $email;
	$telephone = (int) $telephone;
	$ville = (string) $ville;
	$rue = (string) $rue;
	$numAd = (int) $numAd;
	
    //EFFECTUER UNE FONCTION DE HACHAGE POUR LE PASSWD
    $req = $bdd->exec('INSERT INTO INTERIMAIRE VALUES (\'nom\', \'prenom\', \'pseudo\', \'passwd\', age, \'civilite\', \'email\', telephone, \'ville\', \'rue\', numAd);
    
}