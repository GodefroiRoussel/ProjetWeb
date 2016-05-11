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
//Echappement d'injection de code
$_POST['nom']= htmlspecialchars($_POST['nom']);
$_POST['prenom']= htmlspecialchars($_POST['prenom']);
$_POST['numTel']= htmlspecialchars($_POST['numTel']);
$_POST['ville']= htmlspecialchars($_POST['ville']);
$_POST['rue']= htmlspecialchars($_POST['rue']);
$_POST['pseudo']= htmlspecialchars($_POST['pseudo']);
$_POST['passwd']= htmlspecialchars($_POST['passwd']);

include_once('../Model/Interimaire.php');

creerInterimaire($_POST['nom'],$_POST['prenom'],$_POST['pseudo'],$_POST['passwd'], $_POST['age'], $_POST['civilite'], $_POST['email'], 
$_POST['numTel'], $_POST['ville'], $_POST['rue'], $_POST['numAd'], $_POST['RIB'], $_POST['IDCard'], $_POST['CV']) ;

include_once('../View/index.php');

