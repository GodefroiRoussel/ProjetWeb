<?php
	
	//Connexion à la bdd 
	require("../Model/ConnexionBDD.php");
	
	if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
		include_once('../Model/Interimaire.php');
	
	$_POST['nom']= htmlspecialchars($_POST['nom']);
	$_POST['prenom']= htmlspecialchars($_POST['prenom']);
	$_POST['numTel']= htmlspecialchars($_POST['numTel']);
	$_POST['ville']= htmlspecialchars($_POST['ville']);
	$_POST['rue']= htmlspecialchars($_POST['rue']);
	$_POST['passwd']= htmlspecialchars($_POST['passwd']);
	$passwd = md5($_POST['passwd']);

	update($_GET['idInt'], $_POST['nom'], $_POST['prenom'], $_POST['dateNaissance'], $_POST['civilite'], $_POST['email'], $passwd,  
	$_POST['numTel'], $_POST['ville'], $_POST['rue'], $_POST['numAd']);
	$interimaire = getInterimaire($_GET['idInt']);
	
	include_once('../View/modifInterimaire.php');
	
	}
	
	

	





