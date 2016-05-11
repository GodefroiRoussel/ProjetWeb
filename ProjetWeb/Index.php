<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>EmploiTech</title>
    </head>

    <body>
		<header> 
		<!-- Logo, nom de l'entreprise et une partie pour se connecter -->
			<?php echo "ET MAINTENANT CEST MIEUX!!!!?" ?>
			<figure>
				<img src="../Img/logo.png" alt="Logo de l'entreprise" />
			</figure>
			
			<div id="menu">
				<?php include("menus.php"); ?>
			</div>
			
			<div id="connexion">
				<?php include("View/connexion.php"); ?>
			</div>
			
			<div id="inscription">
				<a href="../View/inscription.php" class="btn btn-info">M'inscrire</a>
			</div>
		</header>
	</body>
	
</html>