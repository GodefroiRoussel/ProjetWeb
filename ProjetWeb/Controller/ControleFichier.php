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
//Connexion à la bdd 

	include_once('../Model/ConnexionBDD.php');
	
	if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
	}

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['numTel']) && isset($_POST['ville']) && isset($_POST['rue'])
	&& isset($_POST['passwd']) && isset($_POST['civilite']) && isset($_POST['dateNaissance'])
	&& isset($_POST['numAd'])) {*/
		//Echappement d'injection de code
	$_POST['nom']= htmlspecialchars($_POST['nom']);
	$_POST['prenom']= htmlspecialchars($_POST['prenom']);
	$_POST['numTel']= htmlspecialchars($_POST['numTel']);
	$_POST['ville']= htmlspecialchars($_POST['ville']);
	$_POST['rue']= htmlspecialchars($_POST['rue']);
	$_POST['passwd']= htmlspecialchars($_POST['passwd']);
	
	include_once('../Model/Interimaire.php');

	creerInterimaire($_POST['nom'],$_POST['prenom'], $_POST['dateNaissance'], $_POST['civilite'], $_POST['email'], $_POST['passwd'],  
	$_POST['numTel'], $_POST['ville'], $_POST['rue'], $_POST['numAd'], $_FILES['RIB'], $_FILES['CV'], $_FILES['IDCard']) ;

	include_once('../index.php');
	
	}
	
	
else 
{
	header('Location: ../View/inscription.php');   
	exit();
}
	
	





