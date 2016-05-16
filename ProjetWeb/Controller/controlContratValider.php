<?php
	
	//Connexion à la bdd 
	require("../Model/ConnexionBDD.php");
	
	if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
		include_once('../Model/Contrat.php');
	include_once('../Model/Mission.php');

	// On force la conversion en nombre entier
	$_GET['refMi'] = (int) $_GET['refMi'];
	$_GET['idInt'] = (int) $_GET['idInt'];
	if ($_GET['refMi'] != 0 && $_GET['idInt'] != 0){
		$offre=getOffre($_GET['refMi']);
		creerContrat($offre['lieu'], $offre['dateDeb'], $offre['dateFin'], $_GET['idInt'], $_GET['refMi']);
		$contrats = getAllContratAValider();
		include_once('../View/contratAValider.php');
	}
	else 
	{
		echo "Le contrat n'a pas pu être validé";
		$contrats = getAllContratAValider();
		include_once('../View/contratAValider.php');
	}
	}
	
	
	
	
	





