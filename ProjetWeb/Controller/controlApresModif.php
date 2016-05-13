<?php
	
	//Connexion à la bdd 
	include_once('../Model/ConnexionBDD.php');
	
	if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
	}
	
	include_once('../Model/Interimaire.php');
	
	$_POST['nom']= htmlspecialchars($_POST['nom']);
	$_POST['prenom']= htmlspecialchars($_POST['prenom']);
	$_POST['numTel']= htmlspecialchars($_POST['numTel']);
	$_POST['ville']= htmlspecialchars($_POST['ville']);
	$_POST['rue']= htmlspecialchars($_POST['rue']);
	$_POST['passwd']= htmlspecialchars($_POST['passwd']);

	update($_GET['idInt'], $_POST['nom'], $_POST['prenom'], $_POST['dateNaissance'], $_POST['civilite'], $_POST['email'], $_POST['passwd'],  
	$_POST['numTel'], $_POST['ville'], $_POST['rue'], $_POST['numAd']);
	$interimaire = getInterimaire($_GET['idInt']);
	
	include_once('../View/modifInterimaire.php');
	

	





