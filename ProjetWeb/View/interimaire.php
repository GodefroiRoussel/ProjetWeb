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
		
		<div id="interim">
			<table class="table">
				<tr>
					<th>id Interimaire</th>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Date de Naissance</th>
					<th>Civilité</th>
					<th>email</th>
					<th>telephone</th>
					<th>Ville</th>
					<th>Rue</th>
					<th>Numéro</th>
				</tr>
				<?php
					foreach ($interimaires as $interimaire)
					{
						?>
						<tr>
							<td><?php echo $interimaire['idInterimaire'];?></td>
							<td><?php echo $interimaire['nom'];?></td>
							<td><?php echo $interimaire['prenom'];?></td>
							<td><?php echo $interimaire['dateNaiss'];?></td>
							<td><?php echo $interimaire['civilité'];?></td>
							<td><?php echo $interimaire['email'];?></td>
							<td><?php echo $interimaire['telephone'];?></td>
							<td><?php echo $interimaire['ville'];?></td>
							<td><?php echo $interimaire['rue'];?></td>
							<td><?php echo $interimaire['num'];?></td>
							<td><a href="../Controller/controlModifInterimaire.php?idInt=<?php echo $interimaire['idInterimaire']?>" > MODIFIER </a></td> 
						</tr> 
					<?php } ?>
				</table>
			</div>
	</body>
	
</html>