<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>EmploiTech</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
	
	</head>

    <body>
		<header> 
		<!-- Logo, nom de l'entreprise et une partie pour se connecter -->
			<figure>
				<img src="http://emploitech-distz.rhcloud.com/Img/logo.png" alt="Logo de l'entreprise" /> 
			</figure>

			<div id="menu" >
				<?php include("../View/menus.php"); ?>
			</div>
			
			<div id="connexion">
				<?php include("../View/connexion.php"); ?>
			</div>
			
			
		</header>
		
		<article id="présentation">
			<p> L'agence EmploiTech est une agence créée en 2016 par d'anciens élèves de l'école d'ingénieur Polytech Montpellier. Elle a 
			pour mission d'aider les intérimaires (et les personnes ayant ratées Polytech) à trouver un travail malgré des difficultés importantes en cette période.
			Pour cela, l'agence EmploiTech a misé sur la mise en place de recherches d'offres d'emplois en ligne et laissant la possibilité aux inscrits d'EmploiTech de 
			pouvoir postuler sur certaines missions. Et nous espérons vous aider à signer votre contrat de demain ! </p>
			</article>
			
			
		<footer>
		<div id="cookie" class="alert alert-warning" role="alert">
				<p> En utilisant EmploiTech, vous acceptez que nous appliquions des cookies afin de vous offrir une expérience optimale. </p>
				</div>
				<p> Ce site web a été réalisé dans le cadre d'un projet d'architecture Web par Godefroi Roussel, le contenu de la page "Pourquoi nous choisir" a 
				été pris du site www.randstad.fr/pourquoi-choisir-randstad/ .</p>
				<p>Tous droits réservés.</p>
			
		</footer>
	</body>
	
</html>