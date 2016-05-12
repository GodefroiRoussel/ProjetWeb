<?php
//Connexion à la bdd 

	include_once('../Model/ConnexionBDD.php');
	
	include_once('../Model/Mission.php');

	$offres = getOffre(0,10);
	
	include_once('../View/offresEmploi.php');
	

	





