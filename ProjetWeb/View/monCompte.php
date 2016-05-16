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
		
		<div id="interim">
			<table class="table">
				<tr>
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
						<tr>
							<td><?php echo $myself['nom'];?></td>
							<td><?php echo $myself['prenom'];?></td>
							<td><?php echo $myself['dateNaiss'];?></td>
							<td><?php echo $myself['civilité'];?></td>
							<td><?php echo $myself['email'];?></td>
							<td><?php echo $myself['telephone'];?></td>
							<td><?php echo $myself['ville'];?></td>
							<td><?php echo $myself['rue'];?></td>
							<td><?php echo $myself['num'];?></td>
						</tr> 
				</table>
				
				<a href="../Controller/controlModifMonCompte.php" class="btn btn-info" > Modifier mon compte </a>
			</div>
	</body>
	
</html>