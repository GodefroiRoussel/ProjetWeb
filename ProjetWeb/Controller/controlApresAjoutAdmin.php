<?php
//Connexion à la bdd 

	require("../Model/ConnexionBDD.php");
	
	if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
	}

if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['prenom']) && isset($_POST['numTel']) && isset($_POST['ville']) && isset($_POST['rue'])
	&& isset($_POST['passwd']) && isset($_POST['dateNaissance'])
	&& isset($_POST['numAd'])) {
		//Echappement d'injection de code
	$_POST['nom']= htmlspecialchars($_POST['nom']);
	$_POST['prenom']= htmlspecialchars($_POST['prenom']);
	$_POST['numTel']= htmlspecialchars($_POST['numTel']);
	$_POST['ville']= htmlspecialchars($_POST['ville']);
	$_POST['rue']= htmlspecialchars($_POST['rue']);
	$_POST['passwd']= htmlspecialchars($_POST['passwd']);
	$_POST['email']= htmlspecialchars($_POST['email']);
	
	include_once('../Model/Administrateur.php');
	creerAdmin($_POST['nom'],$_POST['prenom'], $_POST['dateNaissance'], $_POST['civilite'], $_POST['email'], $_POST['passwd'],  
	$_POST['numTel'], $_POST['ville'], $_POST['rue'], $_POST['numAd']) ;

	include_once('../View/Index.php');
	
	}
else 
{
	header('Location: ../View/ajoutAdmin.php');   
	exit();
}
	
	





