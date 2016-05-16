<?php

if(isset($_COOKIE["user"])){
		//Connexion à la bdd 
		require("../Model/ConnexionBDD.php");
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
	}
	
	include_once('../View/nousChoisir.php');