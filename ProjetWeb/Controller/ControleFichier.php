<?php
// Fonction permettant de vérifier si le fichier uploadée correspond bien à nos critères. Return true si oui, false sinon
function verifUpload($index)
{	
	$extensions = array( 'jpg' , 'jpeg' , 'pdf' , 'png' );
   //Test1: fichier correctement uploadé
    if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0) return FALSE;
   //Test2: extension
    $ext = substr(strrchr($_FILES[$index]['name'],'.'),1);
    if (!in_array($ext,$extensions)) return FALSE;
	else return TRUE;
}

if (!verifUpload('IDCard') || !verifUpload('RIB') || !verifUpload('CV')){     
	header('Location: ../View/inscription.php');   
	exit();
}
include_once('../Model/Interimaire.php');


include_once('../View/index.php');

