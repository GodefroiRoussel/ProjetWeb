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
		
		<div id="Contrat">
		<?php if($estAdmin){
								?><a href="controlContrat.php" class="btn btn-info">Tous les contrats</a>
								<a href="controlContratAValider.php" class="btn btn-info">Les contrats à valider</a>
								<a href="controlContratEnCours.php" class="btn btn-info">Les contrats en cours</a>
		<?php }
		else{ ?>
			<a href="controlContrat.php" class="btn btn-info">Tous mes contrats</a>
			<a href="controlContratAValider.php" class="btn btn-info">Mes contrats en attente</a>
			<a href="controlContratEnCours.php" class="btn btn-info">Mes contrats en cours</a>
		<?php	}
								?>
		
			<table class="table">
				<tr>
					<th>id Contrat</th>
					<th>Lieu</th>
					<th>Date Début</th>
					<th>Date Fin</th>
					<th>id Intérimaire</th>
					<th>référence Mission</th>
				</tr>
				<?php
					foreach ($contrats as $contrat)
					{
						?>
						<tr>
							<td><?php echo $contrat['idContrat'];?></td>
							<td><?php echo $contrat['lieu'];?></td>
							<td><?php echo $contrat['dateDeb'];?></td>
							<td><?php echo $contrat['dateFin'];?></td>
							<td><?php echo $contrat['idInterim'];?></td>
							<td><?php echo $contrat['refMis'];?></td>
						</tr> 
					<?php } ?>
				</table>
			</div>
	</body>
	
</html>