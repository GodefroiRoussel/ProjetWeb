<?php
	
	//Connexion à la bdd 
	require("../Model/ConnexionBDD.php");
	
	if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
		if ($estAdmin){
		include_once('../Model/Administrateur.php');
		deleteAdmin(getAdminId($_COOKIE["user"]));
	}
	else{
		include_once('../Model/Interimaire.php');
		deleteInterim(getInterimaireId($_COOKIE["user"]));
	}
	
	include_once('../Controller/controlDeconnexion.php');
	
	}
	
	

	





