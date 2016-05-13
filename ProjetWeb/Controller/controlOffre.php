<?php
	
	//Connexion à la bdd 
	include_once('../Model/ConnexionBDD.php');
	
	if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
	}
	
	include_once('../Model/Mission.php');

	$offres = getAllOffre();
	
	include_once('../View/offresEmploi.php');
	

	





