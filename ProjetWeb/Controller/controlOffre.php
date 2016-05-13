<?php
<<<<<<< HEAD
	
	//Connexion à la bdd 
	include_once('../Model/ConnexionBDD.php');
	
	if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
	}
	
	include_once('../Model/Mission.php');

	$offres = getAllOffre();
=======
//Connexion à la bdd 

	include_once('../Model/ConnexionBDD.php');
	
	include_once('../Model/Mission.php');

	$offres = getOffre(0,10);
>>>>>>> b37e1b39dd4295beca97663fff2bc7de3e14652a
	
	include_once('../View/offresEmploi.php');
	

	





