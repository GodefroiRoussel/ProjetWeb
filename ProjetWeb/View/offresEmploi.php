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
				<img src="Img/logo.png" alt="Logo de l'entreprise" />
			</figure>
			
			<div id="menu" >
				<?php include("/View/menus.php"); ?>
			</div>
			
			<div id="connexion">
				<?php include("View/connexion.php"); ?>
			</div>
			
			<div id="inscription">
				<a href="View/inscription.php" class="btn btn-info">M'inscrire</a>
			</div>
			
			<div id="connexion">
				<?php include("View/connexion.php"); ?>
			</div>
			
			<div id="offres">
				<table>
				<tr>
					<th>Ref Offre</th>
					<th>Date Début</th>
					<th>Date Fin</th>
					<th>Domaine</th>
					<th>Expérience</th>
					<th>Diplôme</th>
					<th>Salaire</th>
				</tr>
				<?php
					for ($nbLigne = 1; $nbLigne <= 10; $nbLigne++)
					{
						<tr>
							<td>$offres[$nbLigne]['refMission']</td>
							<td>$offres[$nbLigne]['dateDeb']</td>
							<td>$offres[$nbLigne]['dateFin']</td>
							<td>$offres[$nbLigne]['domaine']</td>
							<td>$offres[$nbLigne]['experience']</td>
							<td>$offres[$nbLigne]['diplome']</td>
							<td>$offres[$nbLigne]['salaire']</td>
						</tr>
					}
				</table>
				?>
			</div>
		</header>
	</body>
	
</html>