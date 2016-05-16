<?php
	
	//Connexion à la bdd 
	require("../Model/ConnexionBDD.php");
	
	if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
		include_once('../Model/Mission.php');
	
	$_POST['lieu']= htmlspecialchars($_POST['lieu']);
	$_POST['domaine']= htmlspecialchars($_POST['domaine']);
	$_POST['experience']= htmlspecialchars($_POST['experience']);
	$_POST['diplome']= htmlspecialchars($_POST['diplome']);
	$_POST['salaire']= htmlspecialchars($_POST['salaire']);
	
	creerOffre($_POST['lieu'], $_POST['dateDeb'], $_POST['dateFin'], $_POST['domaine'], $_POST['experience'], $_POST['diplome'], $_POST['salaire'] );
	
	$missions = getAllOffreDisponible();

	include_once('../View/mission.php');
	}
	
	
	

	





