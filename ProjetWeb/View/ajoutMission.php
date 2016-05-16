<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>EmploiTech</title>
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
				<img src="../Img/logo.png" alt="Logo de l'entreprise" />
			</figure>
			
			<div id="menu">
				<?php include("../View/menus.php"); ?>
			</div>
			
			<div id="connexion">
				<?php include("../View/connexion.php"); ?>
			</div>

		</header>
		
		<form method="post" action="../Controller/controlApresAjoutMission.php"  enctype="multipart/form-data">
			<label for="lieu">Lieu :<input type="text" class="form-control" name="lieu" "> </label>
			<label for="dateDeb">Date de début de mission :<input type="date" class="form-control" name="dateDeb" "> </label>
			<label for="dateFin">Date de Fin de mission :<input type="date" class="form-control" name="dateFin" "> </label>
			<label for="domaine">Domaine :<input type="text" class="form-control" name="domaine" "> </label>
			<label for="experience">Expérience :<input type="text" class="form-control" name="experience" "> </label>
			<label for="diplome">Diplôme :<input type="text" class="form-control" name="diplome" "> </label>
			<label for="salaire">Salaire :<input type="int" class="form-control" name="salaire" "> </label>
			
			<input type="submit" class="btn btn-info" value="Valider" >
		</form>
		
	</body>
	
</html>