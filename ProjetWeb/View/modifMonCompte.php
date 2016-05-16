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
			
			
		</header>
		
		<form method="post" action="../Controller/controlApresModifMonCompte.php"  enctype="multipart/form-data">
			<label for="nom">Nom :<input type="text" class="form-control" name="nom" value ="<?php echo $myself['nom']?>"> </label>
			<label for="prenom">Prenom :<input type="text" class="form-control" name="prenom" value ="<?php echo $myself['prenom']?>"> </label>
			<label for="dateNaissance">Date de naissance :<input type="date" class="form-control" name="dateNaissance" value ="<?php echo $myself['dateNaiss']?>"> </label>
			<label for="email">Email :<input type="email" class="form-control" name="email" value ="<?php echo $myself['email']?>"> </label>
			<label for="numTel">Numéro de téléphone :<input type="tel" class="form-control" name="numTel" value ="<?php echo $myself['telephone']?>"> </label>
			<?php 
			if ($myself['civilité'] == 'Monsieur'){ ?>
			<label for="civilite">Civilité :
					<input type="radio" name="civilite" class="form-control" value="Monsieur" checked="checked" /> <label for="Monsieur">Monsieur</label> 
					<input type="radio" name="civilite" class="form-control" value="Madame" /> <label for="Madame">Madame</label>
			</label>
							
			<?php  } 
			else
			{ ?>
			<label for="civilite">Civilité :
					<input type="radio" name="civilite" class="form-control" value="Monsieur" /> <label for="Monsieur">Monsieur</label> 
					<input type="radio" name="civilite" class="form-control" value="Madame" checked="checked" /> <label for="Madame" >Madame</label>
			</label>
			<?php  } 
			 ?>
			<label for="ville">Ville :<input type="text" class="form-control" name="ville" value ="<?php echo $myself['ville']?>"> </label>
			<label for="rue">Rue :<input type="text" class="form-control" name="rue" value ="<?php echo $myself['rue']?>"> </label>
			<label for="numAd">Numéro :<input type="number" class="form-control" name="numAd" value ="<?php echo $myself['num']?>"> </label>
			<label for="passwd">Mot de Passe :<input type="password" class="form-control" name="passwd" value ="<?php echo $myself['passwd']?>"> </label>
			
			<input type="submit"  class="btn btn-info" value="Valider" >
		</form>
		
		<a href="../Controller/controlDeleteMonCompte.php" class="btn btn-danger" > Supprimer mon compte </a>
	</body>
	
</html>