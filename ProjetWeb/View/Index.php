<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>EmploiTech</title>
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
				<form method="post" action="index.php">
					<label for="pseudo">Pseudo</label> <input type="text" name="pseudo" > </label>
					<label for="password"> Mot de passe :<input type="password" name="passwd" > </label>
					<input type="submit" value="Connexion" ></code>
				</form>
			</div>
			
			<div id="inscription">
				<a href="../View/inscription.php" class="btn btn-info">M'inscrire</a>
			</div>
		</header>
	</body>
	
</html>