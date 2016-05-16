<?php
	
	//Connexion à la bdd 
	require("../Model/ConnexionBDD.php");
	
	if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
		include_once('../Model/Mission.php');
	include_once('../Model/Postuler.php');

	include_once('../Model/Interimaire.php');
	$id=getInterimaireId($_COOKIE["user"]);
	// On force la conversion en nombre entier
	$_GET['refMi'] = (int) $_GET['refMi'];
	if ($_GET['refMi'] != 0){
		deletePostuler($id[0], $_GET['refMi']);
	}
	$postuler = getPostuler($id[0]);
	$offres = getAllOffre();
	
	include_once('../View/offresEmploi.php');
	}
	
	
	

	





