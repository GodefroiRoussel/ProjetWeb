<?php
	
	//Connexion à la bdd 
	require("../Model/ConnexionBDD.php");
	
	if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
		include_once('../Model/Mission.php');

	$missions = getAllOffreDisponible();
	
	include_once('../View/mission.php');
	
	}
	
	

	





