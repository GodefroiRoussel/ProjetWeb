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
					<th>référence Mission</th>
					<th>Lieu</th>
					<th>Date Début</th>
					<th>Date Fin</th>
					<th>Domaine</th>
					<th>Expérience</th>
					<th>Diplôme</th>
					<th>Salaire</th>
				</tr>
				<?php
					foreach ($missions as $mission)
					{
						?>
						<tr>
							<td><?php echo $mission['refMission'];?></td>
							<td><?php echo $mission['lieu'];?></td>
							<td><?php echo $mission['dateDeb'];?></td>
							<td><?php echo $mission['dateFin'];?></td>
							<td><?php echo $mission['domaine'];?></td>
							<td><?php echo $mission['experience']; ?> an(s)</td>
							<td><?php echo $mission['diplome'];?></td>
							<td><?php echo $mission['salaire']; ?> € par mois</td>
							<td><a href="../Controller/controlModifMission.php?refMi=<?php echo $mission['refMission']?>" class="btn btn-info" > MODIFIER </a></td> 
						</tr> 
					<?php } ?>
				</table>
				<a href="../Controller/controlAjoutMission.php" class="btn btn-info"> Ajouter une mission </a>
			</div>
	</body>
	
</html>