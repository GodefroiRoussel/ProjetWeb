<?php
	
	//Connexion à la bdd 
	require("../Model/ConnexionBDD.php");
	
	if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
		include_once('../Model/Interimaire.php');

	$interimaires = getAllInterimaire();
	
	include_once('../View/interimaire.php');
	}
	
	
	

	





