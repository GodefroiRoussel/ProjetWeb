<?php
	
	//Connexion à la bdd 
	require("../Model/ConnexionBDD.php");
	
	if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
		$email = $_COOKIE["user"];
		if ($estAdmin){
			include_once('../Model/Administrateur.php');
			$id=getAdminId($email);
			$myself= getAdmin($id);
		}
		else{
			include_once('../Model/Interimaire.php');
			$id=getInterimaireId($email);
			$myself= getInterimaire($id);
		}
		include_once('../View/monCompte.php');
	}
	
	
	

	





