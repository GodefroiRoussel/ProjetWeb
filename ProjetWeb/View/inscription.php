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
				<?php include("menus.php"); ?>
			</div>
			
			<div id="connexion">
				<?php include("connexion.php"); ?>
			</div>
			
			<div id="inscription">
				<a href="inscription.php" class="btn btn-info">M'inscrire</a>
			</div>
		</header>
		
		<form method="post" action="../Controller/ControleFichier.php"  enctype="multipart/form-data">
			<label for="nom">Nom :<input type="text" class="form-control" name="nom"> </label>
			<label for="prenom">Prenom :<input type="text" class="form-control" name="prenom"> </label>
			<label for="dateNaissance">Date de naissance :<input type="date" class="form-control" name="dateNaissance"> </label>
			<label for="email">Email :<input type="email" class="form-control" name="email"> </label>
			<label for="numTel">Numéro de téléphone :<input type="tel" class="form-control" name="numTel"> </label>
			<label for="civilite">Civilité :
					<input type="radio" name="civilite" class="form-control" value="Monsieur" /> <label for="Monsieur">Monsieur</label> 
					<input type="radio" name="civilite" class="form-control" value="Madame" /> <label for="Madame">Madame</label>
			</label>
			<label for="ville">Ville :<input type="text" class="form-control" name="ville"> </label>
			<label for="rue">Rue :<input type="text" class="form-control" name="rue"> </label>
			<label for="numAd">Numéro :<input type="number" class="form-control" name="numAd"> </label>
			<label for="passwd">Mot de Passe :<input type="password" class="form-control" name="passwd"> </label>
			
			
			<label for="RIB">Votre rib au format PDF/ JPG/ JPEG/ PNG :</label>
			<input type="file" name="RIB" class="form-control" id="RIB" />
			<label for="CV">Votre CV au format PDF/ JPG/ JPEG/ PNG :</label>
			<input type="file" name="CV" class="form-control" id="CV" />
			<label for="IDCard">Photocopie recto verso de votre carte d'identité au format PDF/ JPG/ JPEG/ PNG :</label>
			<input type="file" name="IDCard" class="form-control" id="IDCard" />
			<input type="submit" value="Valider" >
		</form>
	</body>
	
</html>