<?php
	
	//Connexion à la bdd 
	require("../Model/ConnexionBDD.php");
	
	if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
			
		if ($estAdmin){
			include_once('../Model/Contrat.php');

			$contrats = getAllContratEnCours();
	
			include_once('../View/contrat.php');
		}
		else
		{
			include_once('../Model/Contrat.php');
			include_once('../Model/Interimaire.php');

			$id = getInterimaireId($_COOKIE["user"]);

			$contrats = getAllContratEnCoursInterimaire($id);
	
			include_once('../View/contrat.php');
		}
	}
	

	

	





