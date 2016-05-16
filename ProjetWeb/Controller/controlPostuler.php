<?php
	
	//Connexion à la bdd 
	require("../Model/ConnexionBDD.php");
	
	if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
		include_once('../Model/Mission.php');
	$offres = getAllOffreDisponible();
	include_once('../Model/Postuler.php');

	include_once('../Model/Interimaire.php');
	$id=getInterimaireId($_COOKIE["user"]);
	// On force la conversion en nombre entier
	$_GET['refMi'] = (int) $_GET['refMi'];
	if ($_GET['refMi'] != 0){
		postuler($id[0], $_GET['refMi']);
	}
	$postuler = getPostuler($id[0]);
	
	include_once('../View/offresEmploi.php');
	}
	
	
	

	





