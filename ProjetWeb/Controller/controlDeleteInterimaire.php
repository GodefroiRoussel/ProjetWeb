<?php
	
	//Connexion à la bdd 
	require("../Model/ConnexionBDD.php");
	
	if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
		include_once('../Model/Interimaire.php');
	$_GET['idInt'] = (int) $_GET['idInt'];
	if ($_GET['idInt'] != 0){
		deleteInterim2($_GET['idInt']);
	}
	
	
	include_once('../Controller/controlInterimaire.php');
	}
	
	
	

	





